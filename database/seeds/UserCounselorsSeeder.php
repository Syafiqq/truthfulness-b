<?php

use App\Eloquent\User;
use App\Eloquent\UserCounselors;

/**
 * This <konseling-1> project created by :
 * Name         : syafiq
 * Date / Time  : 19 November 2018, 6:48 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
class UserCounselorsSeeder extends RollbackAbleSeeder
{
    public function run()
    {
        $nip = '120111409964';
        /** @var \Illuminate\Database\Query\Builder $user */
        $user = new User();
        if (!$user->where('credential', '=', $nip)->first())
        {
            $user->{'id'}         = '528338a8-eefd-4eb7-a24b-c9f84c745621';
            $user->{'stamp'}      = 'cc9a1017-be44-4e5e-8e36-7f664d859c83';
            $user->{'credential'} = $nip;
            $user->{'email'}      = null;
            $user->{'name'}       = 'Husni Hanafi';
            $user->{'gender'}     = 'male';
            $user->{'role'}       = 'counselor';
            $user->{'avatar'}     = null;
            $user->{'password'}   = app('hash')->make('12345678', []);
            $user->save();

            $counselor                             = new UserCounselors();
            $counselor->{'id'}                     = '37a546f1-7f4a-4fb8-ba40-cc8ec760efa2';
            $counselor->{'user'}                   = '528338a8-eefd-4eb7-a24b-c9f84c745621';
            $counselor->{'school'}                 = 'SMA Negeri 0 Malang';
            $counselor->{'school_head'}            = 'Sutidjo} = S.Pd} = M.Pd';
            $counselor->{'school_head_credential'} = '19451708199008230002';

            $counselor->save();
        }
    }

    public function roll()
    {
        UserCounselors::whereNotNull('id')->delete();
    }
}

?>
