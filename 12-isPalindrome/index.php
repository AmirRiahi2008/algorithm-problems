<?php
class Solution
{
   public function isPalindrome($num) {
    $str = strval($num);
    $arr = str_split($str);
    $reversed = implode('', array_reverse($arr));
    return $str === $reversed;
}

}

$solutionModel = new Solution();
var_dump($solutionModel->isPalindrome(123)); // [1,2]
var_dump($solutionModel->isPalindrome(121)); // [1,2,3]
// Question
// https://leetcode.com/problems/palindrome-number/
