<?php

use App\Eloquent\QuestionOption;

/**
 * This <konseling-1> project created by :
 * Name         : syafiq
 * Date / Time  : 01 December 2018, 2:15 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
class QuestionOptionsSeeder extends RollbackAbleSeeder
{
    public function run()
    {
        $data = [
            ['id' => 'a4601425-a340-4bde-b0e9-ca423becce07', 'order' => 4, 'name' => 'ts', 'description' => 'Tidak Sesuai'],
            ['id' => '2c7d23d1-744d-4c2b-9756-f0a0a135e48c', 'order' => 3, 'name' => 'ks', 'description' => 'Kurang Sesuai'],
            ['id' => 'c9c18fb0-ab08-4715-a29d-5664fcbad88b', 'order' => 2, 'name' => 's', 'description' => 'Sesuai'],
            ['id' => 'd559a8e7-a93d-4903-a893-99a0f06f7ea2', 'order' => 1, 'name' => 'ss', 'description' => 'Sangat Sesuai'],
        ];

        /** @var \Illuminate\Database\Query\Builder $model */
        $model = new QuestionOption();
        foreach ($data as $category)
        {
            if (!$model->where('name', '=', $category['name'])->first())
            {
                $model->insert($category);
            }
        }
    }

    public function roll()
    {
        QuestionOption::whereNotNull('id')->delete();
    }
}

?>
