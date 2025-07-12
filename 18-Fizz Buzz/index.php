<?php

class Solution
{
    public function fizzBuzz($n)
    {
        $resultArr = [];
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0)
                array_push($resultArr, "FizzBuzz");
            else if ($i % 3 === 0)
                array_push($resultArr, "Fizz");
            else if ($i % 5 === 0)
                array_push($resultArr, "Buzz");
            else {
                array_push($resultArr, (string) $i);
            }



        }
        return $resultArr;
    }
}

$solutionModel = new Solution();
var_dump($solutionModel->fizzBuzz(3));
var_dump($solutionModel->fizzBuzz(5));

// Question
// https://leetcode.com/problems/fizz-buzz/description/