<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 19 September 2018, 4:49 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Generators;


trait CouponGenerator
{
    /**
     * @param int $value
     * @return string
     */
    public function generate($value = 6)
    {
        return strtoupper(bin2hex(openssl_random_pseudo_bytes($value)));
    }
}

?>
