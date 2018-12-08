<?php
/**
 * Created By IT Dev of PT. Jasuindo Tiga Perkasa TBK.
 * Copyright (c) 2018. All rights reserved.
 */

/**
 * This nepal-trace-1.com project created by :
 * Name         : IT DEV
 * Date / Time  : 02 Mei 2018, 8:54.
 * Email        : jasuindo.co.id
 */
if (!function_exists('ve'))
{
    function ve($data)
    {
        return var_export($data, true);
    }
}
if (!function_exists('vj'))
{
    function vj($data)
    {
        return var_export(json_decode($data, true), true);
    }
}

if (!function_exists('ld'))
{
    function ld($data)
    {
        \Illuminate\Support\Facades\Log::debug(var_export($data, true));
    }
}

?>
