<?php


class Solution
{
    public function climbStairs($n)
    {
        $num1 = 0;
        $num2 = 1;
        for ($i=0; $i <$n ; $i++) { 
        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;
        }
        return $num2;
    }
}
$solutionModel = new Solution();
var_dump($solutionModel->climbStairs(2)); // 2
var_dump($solutionModel->climbStairs(3));// 3

// Question
// https://leetcode.com/problems/climbing-stairs/