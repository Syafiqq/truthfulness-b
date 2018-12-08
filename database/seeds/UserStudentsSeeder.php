<?php

use App\Eloquent\User;
use App\Eloquent\UserStudents;

/**
 * This <konseling-1> project created by :
 * Name         : syafiq
 * Date / Time  : 25 November 2018, 11:30 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
class UserStudentsSeeder extends RollbackAbleSeeder
{
    /**
     *
     */
    public function run()
    {
        $data = [
            ['id' => '791713c2-7fcc-4073-b243-97a61bd12467', 'lost_password' => 'd4b6fc9e-00b9-4551-8854-e9ea6bebae5d', 'stamp' => '50cf11e0-6cdf-4f89-a1c9-05738096211c', 'credential' => '10000', 'email' => 'syafiq.rezpector@gmail.com', 'name' => 'Abdul Fatah', 'gender' => 'male', 'role' => 'student', 'avatar' => null, 'password' => app('hash')->make('12345678', []), 'student' => ['id' => 'b7983b8f-ef56-4853-b14d-1ca32ffe0b27', 'school' => 'UM', 'grade' => '10', 'active' => 1, 'user' => '791713c2-7fcc-4073-b243-97a61bd12467']],
            ['id' => 'ccb9ff42-8c39-451a-9a44-3075da6ea9f0', 'lost_password' => 'd1c2b272-871b-4778-aef6-45e1c0fdaba5', 'stamp' => '78801b98-b2db-47d0-be92-e95bed5d31be', 'credential' => '10001', 'email' => 'syafiq.rezpector@gmail.cou', 'name' => 'Abdul Fatah', 'gender' => 'male', 'role' => 'student', 'avatar' => null, 'password' => app('hash')->make('12345678', []), 'student' => ['id' => 'fbb850f7-da44-4dbd-8369-9c11a0bd4b95', 'school' => 'UM', 'grade' => '10', 'active' => 1, 'user' => 'ccb9ff42-8c39-451a-9a44-3075da6ea9f0']]
        ];

        /** @var \Illuminate\Database\Query\Builder $model */
        $model = new User();
        foreach ($data as $category)
        {
            if (!$model->where('credential', '=', $category['credential'])->first())
            {
                /** @var UserStudents $student */
                $student = new UserStudents();
                $student->setRawAttributes($category['student']);
                unset($category['student']);
                $model = new User($category);
                $model->save();
                $student->save();
            }
        }
    }

    public function roll()
    {
        UserStudents::whereNotNull('id')->delete();
    }
}

?>
