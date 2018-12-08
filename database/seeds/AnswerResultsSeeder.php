<?php

use App\Eloquent\Answer;
use App\Eloquent\AnswerResult;
use App\Model\AnswerResultCalculator;

/**
 * This <konseling-1> project created by :
 * Name         : syafiq
 * Date / Time  : 01 December 2018, 7:30 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
class AnswerResultsSeeder extends RollbackAbleSeeder
{
    use AnswerResultCalculator
    {
        calculate as private _calculate;
    }

    public function run()
    {
        $answers    = [
            '.1' => '9e5669fe-b0e7-4d8e-a9bf-436b6046c9fa',
            '.2' => '70ec998c-064d-4925-b46a-cf4f70fef087',
        ];
        $categories = [
            '.1' => 'ecb05035-a198-4a6c-a082-32e59331f0f1',
            '.2' => '2a0c84a2-439c-4bc7-9392-3cc9ab14bb18',
            '.3' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f',
            '.4' => 'b24f1373-f7d5-4307-bc3c-11c788962879',
            '.5' => '11a2c711-56aa-4738-b65e-20adafd3560c',
        ];
        $data       = [
            [
                ['id' => '6e851862-9870-4185-99ff-dc94e0ae74f4', 'answer_code' => 1, 'category' => 1, 'result' => 10.0],
                ['id' => '50b73699-6a92-4a15-abc0-2101332da221', 'answer_code' => 1, 'category' => 2, 'result' => 20.0],
                ['id' => '48cad2ee-470b-46d7-a7d8-7d5f2951d817', 'answer_code' => 1, 'category' => 3, 'result' => 30.0],
                ['id' => 'b9217f4e-3006-41d6-ac70-902b3347ab72', 'answer_code' => 1, 'category' => 4, 'result' => 40.0],
                ['id' => '4becffa3-f604-4512-a866-c090ebd0bc12', 'answer_code' => 1, 'category' => 5, 'result' => 50.0],
            ],
            [
                ['id' => '781995d4-98c6-4fd4-be72-2e57879db5df', 'answer_code' => 2, 'category' => 1, 'result' => 0.0],
                ['id' => 'ed90e280-478b-4e61-9a06-26bd6e4431f4', 'answer_code' => 2, 'category' => 2, 'result' => 0.0],
                ['id' => '37ce887e-801f-4da8-b3b9-0c932d0302d8', 'answer_code' => 2, 'category' => 3, 'result' => 0.0],
                ['id' => '476f32c6-aab0-40d1-a735-2d72a1ac7665', 'answer_code' => 2, 'category' => 4, 'result' => 0.0],
                ['id' => '114a4164-62d9-4dc4-be65-b6efc2b2f42c', 'answer_code' => 2, 'category' => 5, 'result' => 0.0],
            ],
        ];

        /** @var \Illuminate\Database\Query\Builder $model */
        $model = new AnswerResult();
        foreach ($data as $c1)
        {
            foreach ($c1 as $c2)
            {
                if (!$model->where('answer_code', '=', $c2['answer_code'])->where('category', '=', $c2['category'])->first())
                {
                    $c2['answer_code'] = $answers[".{$c2['answer_code']}"];
                    $c2['category']    = $categories[".{$c2['category']}"];
                    $model->insert($c2);
                }
            }
        }

        $this->calculate();
    }

    private function calculate()
    {
        $data = [1];

        foreach ($data as $answer_code)
        {
            /** @var Answer $answer */
            $answer = Answer::find($answer_code);
            if (!is_null($answer))
            {
                $this->_calculate($answer);
            }
        }
    }

    public function roll()
    {
        AnswerResult::whereNotNull('id')->delete();
    }
}

?>
