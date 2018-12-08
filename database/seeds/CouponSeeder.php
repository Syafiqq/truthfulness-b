<?php

use App\Eloquent\CounselorAccount;
use App\Eloquent\Coupon;
use App\Eloquent\User;
use App\Generators\CouponGenerator;

/**
 * This <konseling-1> project created by :
 * Name         : syafiq
 * Date / Time  : 19 November 2018, 5:21 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
class CouponSeeder extends RollbackAbleSeeder
{
    use CouponGenerator;

    public function run()
    {
        $nip = '120111409964';
        /** @var \Illuminate\Database\Query\Builder $model */
        $model = new User;
        /** @var User $admin */
        if ($admin = $model->where('credential', '=', $nip)->first())
        {
            Coupon::insert([
                ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'assignee' => '528338a8-eefd-4eb7-a24b-c9f84c745621', 'coupon' => 'AAAAAAAAAAAA', 'usage' => 'counselor'],
                ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'assignee' => '528338a8-eefd-4eb7-a24b-c9f84c745621', 'coupon' => 'AAAAAAAAAAAB', 'usage' => 'counselor'],
                ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'assignee' => '528338a8-eefd-4eb7-a24b-c9f84c745621', 'coupon' => 'BBBBBBBBBBBB', 'usage' => 'counselor'],
                ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'assignee' => '528338a8-eefd-4eb7-a24b-c9f84c745621', 'coupon' => 'BBBBBBBBBBBC', 'usage' => 'counselor'],
            ]);

            $role  = ['student', 'counselor'];
            $count = 11;
            while (--$count)
            {
                while (1)
                {
                    try
                    {
                        $coupon = new Coupon(['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'assignee' => '528338a8-eefd-4eb7-a24b-c9f84c745621', 'coupon' => $this->generate(), 'usage' => $role[1]]);
                        $coupon->save();
                        break;
                    }
                    catch (Illuminate\Database\QueryException $ignored)
                    {
                        echo($ignored->getMessage() . "\n");
                        die(1);
                    }
                }
            }
        }
    }

    public function roll()
    {
        Coupon::whereNotNull('id')->delete();
    }
}

?>
