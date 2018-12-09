<?php

use App\Eloquent\QuestionCategory;

/**
 * This <konseling-1> project created by :
 * Name         : syafiq
 * Date / Time  : 01 December 2018, 1:35 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
class QuestionCategoriesSeeder extends RollbackAbleSeeder
{
    public function run()
    {
        $data = [
            ['id' => 'ecb05035-a198-4a6c-a082-32e59331f0f1', 'order' => 1, 'name' => 'Indikator 1', 'description' => 'Nilai Kejujuran'],
            ['id' => '2a0c84a2-439c-4bc7-9392-3cc9ab14bb18', 'order' => 2, 'name' => 'Indikator 2', 'description' => 'Nilai ikhlas'],
            ['id' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'order' => 3, 'name' => 'Indikator 3', 'description' => 'Nilai ketulusan'],
            ['id' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'order' => 4, 'name' => 'Indikator 4', 'description' => 'Keyakinan'],
            ['id' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'order' => 5, 'name' => 'Indikator 5', 'description' => 'Pengamalan'],
        ];

        /** @var \Illuminate\Database\Query\Builder $model */
        $model = new QuestionCategory();
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
        QuestionCategory::whereNotNull('id')->delete();
    }

}

?>
