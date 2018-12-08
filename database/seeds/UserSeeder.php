<?php

use App\Eloquent\User;

/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 23 November 2018, 11:04 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
class UserSeeder extends RollbackAbleSeeder
{

    public function roll()
    {
        User::whereNotNull('id')->delete();
    }
}

?>
