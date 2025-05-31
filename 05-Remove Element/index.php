<?php

class Solution
{
    public function removeElement(array &$nums, int $val): int
    {
        $k = 0;

        foreach ($nums as $value) {
            if ($value !== $val) {
                $nums[$k] = $value;
                $k++;
            }
        }
        return $k;
    }
}


$solution = new Solution();
$nums1 = [3, 2, 2, 3];
$k1 = $solution->removeElement($nums1, 3);
var_dump($k1);
var_dump(array_slice($nums1, 0, $k1));

$nums2 = [0, 1, 2, 2, 3, 0, 4, 2];
$k2 = $solution->removeElement($nums2, 2);
var_dump($k2);
var_dump(array_slice($nums2, 0, $k2));
// Question
// https://leetcode.com/problems/remove-element/submissions/1649537755/