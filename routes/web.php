<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** @var \Illuminate\Routing\Router $router */
$router->get('/', ['middleware' => 'guest', 'as' => 'root', 'uses' => 'WelcomeController@index']);
$router->group(['namespace' => 'Counselor', 'prefix' => '/counselor'], function () use ($router) {
    $router->group(['prefix' => '/auth'], function () use ($router) {
        $router->group(['middleware' => 'guest'], function () use ($router) {
            $router->get('/register', ['uses' => 'Auth@registerCreate', 'as' => 'counselor.auth.register.create']);
            $router->post('/register', ['middleware' => 'auth.role', 'uses' => 'Auth@registerStore', 'as' => 'counselor.auth.register.store']);
            $router->get('/login', ['uses' => 'Auth@getLogin', 'as' => 'counselor.auth.login.get']);
            $router->post('/login', ['middleware' => 'auth.role', 'uses' => 'Auth@postLogin', 'as' => 'counselor.auth.login.post']);
            $router->get('/lost', ['uses' => 'Auth@getLost', 'as' => 'counselor.auth.lost.get']);
            $router->post('/lost', ['middleware' => 'auth.role', 'uses' => 'Auth@postLost', 'as' => 'counselor.auth.lost.post']);
            $router->get('/recover', ['middleware' => ['auth.role'], 'uses' => 'Auth@getRecover', 'as' => 'counselor.auth.recover.get']);
            $router->patch('/recover', ['middleware' => ['auth.role', 'valid.auth.recovery'], 'uses' => 'Auth@patchRecover', 'as' => 'counselor.auth.recover.patch']);
        });
    });
    $router->group(['middleware' => 'authenticated.source'], function () use ($router) {
        $router->get('/auth/logout', ['uses' => 'Auth@getLogout', 'as' => 'counselor.auth.logout']);
        $router->get('/dashboard', ['uses' => 'Home@index', 'as' => 'counselor.home.dashboard']);
        $router->get('/dashboard/template', ['uses' => 'Home@downloadTemplate', 'as' => 'counselor.home.dashboard.download']);
        $router->post('/dashboard/upload', ['uses' => 'Home@uploadStudent', 'as' => 'counselor.home.dashboard.upload']);
        $router->get('/profile', ['uses' => 'Profile@edit', 'as' => 'counselor.profile.edit']);
        $router->patch('/profile', ['uses' => 'Profile@update', 'as' => 'counselor.profile.update']);
        $router->get('/coupon/generate/{usage}', ['uses' => 'Home@couponGenerator', 'as' => 'counselor.coupon.generator'])->where('usage', 'counselor|student');
        $router->group(['prefix' => '/report', 'middleware' => 'valid.counselor.profile'], function () use ($router) {
            $router->get('', ['uses' => 'Report@index', 'as' => 'counselor.report.list']);
            $router->group(['prefix' => '/student', 'middleware' => ['valid.student']], function () use ($router) {
                $router->patch('/{id}/activate', ['uses' => 'Report@activation', 'as' => 'counselor.student.activation']);
                $router->get('/{id}/detail', ['middleware' => 'valid.student.report.detail', 'uses' => 'Report@detail', 'as' => 'counselor.student.detail']);
                $router->get('/{id}/{answer}/publish', ['middleware' => 'valid.student.report.publish', 'uses' => 'Report@publish', 'as' => 'counselor.student.publish']);
            });
        });
    });
});
