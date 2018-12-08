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
            ['id' => 'ecb05035-a198-4a6c-a082-32e59331f0f1', 'order' => 1, 'name' => 'Kategori 1', 'description' => 'Menentukan pencapaian target akademik'],
            ['id' => '2a0c84a2-439c-4bc7-9392-3cc9ab14bb18', 'order' => 2, 'name' => 'Kategori 2', 'description' => 'Menentukan tujuan akademik secara objektif'],
            ['id' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'order' => 3, 'name' => 'Kategori 3', 'description' => 'Menentukan metode / strategi pencapaian tujuan akademik'],
            ['id' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'order' => 4, 'name' => 'Kategori 4', 'description' => 'Mengelola waktu pelaksanaan akademik'],
            ['id' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'order' => 5, 'name' => 'Kategori 5', 'description' => 'Mencari sumber yang dibutuhkan untuk mendukung pencapaian tujuan akademik'],
            ['id' => '8bc74ee6-68cc-449a-98a9-cf888c4254f4', 'order' => 6, 'name' => 'Kategori 6', 'description' => 'Melaksanakan tanggung jawab akademik']
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
