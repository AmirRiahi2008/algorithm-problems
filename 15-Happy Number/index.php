<?php
class Solution
{
    public function isHappy($n)
    {
        $seen = [];
        while ($n !== 1) {
            if (isset($seen[$n]))
                return false;
            $seen[$n] = true;
            $digits = str_split((string) $n);
            $sum = 0;
            foreach ($digits as $digit) {
                $sum += $digit ** 2;
            }
            $n = $sum;
        }
        return true;
    }
}

$solutionModel = new Solution();
var_dump($solutionModel->isHappy(19)); // true
var_dump($solutionModel->isHappy(2));  // false

// Question
// https://leetcode.com/problems/happy-number/
