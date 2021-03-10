<?php

/**
 * function name is : getPriceWithDiscount
 * parameter : $price
 * operation : according to price value set the discount val
 * return : price after discount
 */

function getPriceWithDiscount($price) 
{
    if($price < 1000) {
        $discount = 0.05;

    } elseif ($price >= 1000) {
        $discount = 0.1;
    }
    $priceWithDiscount = $price - ($price * $discount) ;
    return $priceWithDiscount;
}   


?>