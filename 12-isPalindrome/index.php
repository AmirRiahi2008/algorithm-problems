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
var_dump($solutionModel->isPalindrome(123)); // false
var_dump($solutionModel->isPalindrome(121)); // true
// Question
// https://leetcode.com/problems/palindrome-number/
