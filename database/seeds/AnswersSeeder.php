<?php

use App\Eloquent\Answer;

/**
 * This <konseling-1> project created by :
 * Name         : syafiq
 * Date / Time  : 01 December 2018, 4:02 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
class AnswersSeeder extends RollbackAbleSeeder
{
    public function run()
    {
        $data = [
            ['id' => '9e5669fe-b0e7-4d8e-a9bf-436b6046c9fa', 'user' => '791713c2-7fcc-4073-b243-97a61bd12467', 'started_at' => '2018-11-30 07:00:00', 'finished_at' => '2018-11-30 08:00:00'],
            ['id' => '70ec998c-064d-4925-b46a-cf4f70fef087', 'user' => '791713c2-7fcc-4073-b243-97a61bd12467', 'started_at' => '2018-12-02 07:00:00'],
        ];

        /** @var \Illuminate\Database\Query\Builder $model */
        $model = new Answer();
        foreach ($data as $category)
        {
            if (!$model->where('started_at', '=', $category['started_at'])->where('user', '=', $category['user'])->first())
            {
                $model->insert($category);
            }
        }
    }

    public function roll()
    {
        Answer::whereNotNull('id')->delete();
    }
}

?>
