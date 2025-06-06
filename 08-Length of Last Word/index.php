<?php

class Solution
{
    public function lengthOfLastWord($str)
    {
        $str = trim($str);
        $convertStrToArray = explode(" " , $str);
        return strlen(end($convertStrToArray));
    }
}
$solutionModel = new Solution();
var_dump($solutionModel->lengthOfLastWord("Hello World")); // 5
var_dump($solutionModel->lengthOfLastWord("   fly me   to   the moon  ")); // 4
var_dump($solutionModel->lengthOfLastWord("luffy is still joyboy")); // 6
// Question
// https://leetcode.com/problems/length-of-last-word/