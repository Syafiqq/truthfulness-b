<?php

use App\Eloquent\QuestionFavour;

/**
 * This <konseling-1> project created by :
 * Name         : syafiq
 * Date / Time  : 01 December 2018, 2:07 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
class QuestionFavoursSeeder extends RollbackAbleSeeder
{
    public function run()
    {
        $data = [
            ['id' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'name' => 'positive', 'description' => 'favourable'],
            ['id' => 'ed4794de-7b79-47b2-98aa-4e1f135bc726', 'name' => 'negative', 'description' => 'unfavourable'],
        ];

        /** @var \Illuminate\Database\Query\Builder $model */
        $model = new QuestionFavour();
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
        QuestionFavour::whereNotNull('id')->delete();
    }
}

?>
