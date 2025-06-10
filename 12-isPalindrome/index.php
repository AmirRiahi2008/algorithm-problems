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
<<<<<<< HEAD
var_dump($solutionModel->isPalindrome(123)); // [1,2]
var_dump($solutionModel->isPalindrome(10)); // [1,2,3]
=======
var_dump($solutionModel->isPalindrome(123)); // false
var_dump($solutionModel->isPalindrome(121)); // true
// Question
// https://leetcode.com/problems/palindrome-number/
>>>>>>> 7cb6597ce95dbf5420da6f7b9582f66b54b8f6f7
