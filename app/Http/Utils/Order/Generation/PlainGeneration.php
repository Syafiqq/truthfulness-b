<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 27 November 2018, 6:28 AM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Http\Utils\Order\Generation;


use App\Eloquent\Question;

trait PlainGeneration
{
    public function generateCourseOrder()
    {
        return Question::where('active', '=', true)->select('id', 'order')->get()->map(function ($item, $key) {
            return ['id' => $item->{'id'}, 'order' => $item->{'order'}];
        });
    }
}

?>
