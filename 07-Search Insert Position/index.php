<?php

class Solution
{
    public function searchInsert(array $nums, int $target)
    {

        $low = 0;
        $high = count($nums) - 1;
        while ($low <= $high) {
            $mid = floor(($high + $low) / 2);
            $guess = $nums[$mid];
            if ($guess == $target)
                return $mid;
            if ($guess > $target) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        }
        return $low;
    }
}
$solutionModel = new Solution();
var_dump($solutionModel->searchInsert([1, 3, 5, 6], 5)); // 2
var_dump($solutionModel->searchInsert([1, 3, 5, 6], 2)); // 1
var_dump($solutionModel->searchInsert([1, 3, 5, 6], 7)); // 4
// Question
// https://leetcode.com/problems/search-insert-position/description/