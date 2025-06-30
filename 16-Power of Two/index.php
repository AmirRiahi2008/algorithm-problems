<?php

class Solution
{
    public function isPowerOfTwo($n)
    {

        if ($n <= 0) {
            return false;
        }

        while ($n % 2 == 0) {
            $n = $n / 2;
        }

        return $n == 1;
    }
}
$solutionModel = new Solution();
var_dump($solutionModel->isPowerOfTwo(1));
var_dump($solutionModel->isPowerOfTwo(16));
var_dump($solutionModel->isPowerOfTwo(3));
// Question
// https://leetcode.com/problems/power-of-two/