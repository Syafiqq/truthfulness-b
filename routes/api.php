<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/** @var \Illuminate\Routing\Router $router */
$router->group(['namespace' => 'Student', 'prefix' => '/student'], function () use ($router) {
    $router->group(['middleware' => 'registered.role', 'prefix' => '/auth'], function () use ($router) {
        $router->post('/refresh', ['middleware' => ['c.jwt.refresh'], 'uses' => 'Auth@postRefresh', 'as' => 'student.auth.refresh.post']);
        $router->group(['middleware' => 'guest'], function () use ($router) {
            $router->post('/login', ['uses' => 'Auth@postLogin', 'as' => 'student.auth.login.post']);
            $router->post('/lost', ['uses' => 'Auth@postLost', 'as' => 'student.auth.lost.post']);
            $router->patch('/recover', ['middleware' => ['valid.auth.recovery'], 'uses' => 'Auth@patchRecover', 'as' => 'student.auth.recover.patch']);
        });
    });
    $router->group(['middleware' => 'c.jwt.auth.student'], function () use ($router) {
        $router->get('/dashboard', ['uses' => 'Dashboard@index', 'as' => 'student.dashboard.get']);
        $router->post('/auth/logout', ['uses' => 'Auth@postLogout', 'as' => 'student.auth.logout.post']);
        $router->post('/auth/ping', ['uses' => 'Auth@ping', 'as' => 'student.auth.ping.post']);
        $router->get('/profile', ['uses' => 'Profile@getUpdate', 'as' => 'student.profile.get']);
        $router->patch('/profile', ['uses' => 'Profile@update', 'as' => 'student.profile.update.patch']);
        $router->group(['middleware' => 'valid.student.profile'], function () use ($router) {
            $router->post('/course/create', ['middleware' => 'course.open.unavailable', 'uses' => 'Course@create', 'as' => 'student.course.create.post']);
            $router->get('/course/start/{question}', ['middleware' => ['course.open.available', 'valid.question'], 'uses' => 'Course@startEdit', 'as' => 'student.course.start.get'])->where('question', '^[1-9][0-9]*');;
            $router->get('/course/navigation/{question}', ['middleware' => ['course.open.available', 'valid.question'], 'uses' => 'Course@navigation', 'as' => 'student.course.navigation.get'])->where('question', '^[1-9][0-9]*');;
            $router->patch('/course/start/{question}', ['middleware' => ['course.open.available', 'valid.question', 'valid.answer'], 'uses' => 'Course@startUpdate', 'as' => 'student.course.start.patch'])->where('question', '^[1-9][0-9]*');;
            $router->post('/course/submit', ['middleware' => ['course.open.available', 'course.open.finished'], 'uses' => 'Course@submit', 'as' => 'student.course.finish.post']);
            $router->get('/course/result', ['middleware' => 'valid.self.report.detail', 'uses' => 'Course@result', 'as' => 'student.course.result.get']);
            $router->get('/course/{answer}/detail', ['middleware' => 'valid.self.report.publish', 'uses' => 'Course@detail', 'as' => 'student.course.detail']);
        });
    });
});
