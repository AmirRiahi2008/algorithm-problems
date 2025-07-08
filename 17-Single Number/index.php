<?php
class Solution
{

    public function singleNumber($nums)
    {
        $result = 0;
        foreach ($nums as $num) {
            $result ^= $num;
        }
        return $result;
    }
}
$solutionModel = new Solution();
var_dump($solutionModel->singleNumber([2, 2, 1]));
var_dump($solutionModel->singleNumber([4, 1, 2, 1, 2]));
var_dump($solutionModel->singleNumber([1]));

// Question
// https://leetcode.com/problems/single-number/submissions/1690341279/