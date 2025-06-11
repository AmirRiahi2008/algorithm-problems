<?php
class Solution
{
    public function merge(&$nums1, $m, $nums2, $n)
    {
        $i = $m - 1;        
        $j = $n - 1;       
        $k = $m + $n - 1;    
        while ($j >= 0) {
            if ($i >= 0 && $nums1[$i] > $nums2[$j]) {
                $nums1[$k] = $nums1[$i];
                $i--;
            } else {
                $nums1[$k] = $nums2[$j];
                $j--;
            }
            $k--;
        }
    }

}
$solutionModel = new Solution();
$nums1 = [1, 2, 3, 0, 0, 0];
$m = 3;
$nums2 = [2, 5, 6];
$n = 3;

$solutionModel->merge($nums1, $m, $nums2, $n);
print_r($nums1); 
// Question
// https://leetcode.com/problems/merge-sorted-array/
