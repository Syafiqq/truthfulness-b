<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 27 November 2018, 6:31 AM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Http\Utils\Order\Generation;


use App\Eloquent\Question;

trait ShuffledGeneration
{
    public function generateCourseOrder()
    {
        $question = Question::where('active', '=', true)->select('id', 'order')->get()->mapWithKeys(function ($item, $key) {
            return [$item->{'order'} => ['id' => $item->{'id'}, 'order' => $item->{'order'}]];
        })->toArray();
        $this->shuffle_assoc($question);

        return $question;
    }

    function shuffle_assoc(&$array)
    {
        $keys = array_keys($array);

        shuffle($keys);

        $new = [];
        foreach ($keys as $key)
        {
            $new[$key] = $array[$key];
        }

        $array = $new;

        return true;
    }
}

?>
