<?php

class Solution
{
    public function mySqrt($x)
    {
        if ($x < 2)
            return $x;

        $left = 1;
        $right = $x;

        while ($left <= $right) {
            $mid = intval(($left + $right) / 2);
            $midSquared = $mid * $mid;

            if ($midSquared == $x) {
                return $mid;
            } elseif ($midSquared < $x) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }

        return $right;
    }
}
$solutionModel = new Solution();
var_dump($solutionModel->mySqrt(4));// 2
var_dump($solutionModel->mySqrt(8));// 2.891238 => 2
// Question
// https://leetcode.com/problems/sqrtx/