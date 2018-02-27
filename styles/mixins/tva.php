<?php
/**
 * Created by PhpStorm.
 * User: mash6
 * Date: 31/01/18
 * Time: 09:33
 */


/**
 * Returns price with value added tax
 * @param int $tniPrice Price without the tax
 * @param int $vat Value added tax
 * @return int Price with value added tax
 */
function htToTtc(int $tniPrice, int $vat) : int
{
    if ($vat <= 0) {

        return $tniPrice;
    }
    $vatPrice = $tniPrice * $vat / 100 + $tniPrice;

    return $vatPrice;
}