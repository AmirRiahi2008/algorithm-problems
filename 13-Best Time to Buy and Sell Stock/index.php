<?php
function maxProfit($prices)
{
    $minPrice = PHP_INT_MAX;
    $maxProfit = 0;

    foreach ($prices as $price) {
        if ($price < $minPrice) {
            $minPrice = $price;
        } elseif ($price - $minPrice > $maxProfit) {
            $maxProfit = $price - $minPrice;
        }
    }

    return $maxProfit;
}

$prices = [7,1,5,3,6,4];
echo maxProfit($prices);

// Question
// https://leetcode.com/problems/best-time-to-buy-and-sell-stock/