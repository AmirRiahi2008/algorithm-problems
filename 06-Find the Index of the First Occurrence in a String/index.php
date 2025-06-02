<?php

class Solution
{
    public function strStr($haystack, $needle): int
    {
        if ($needle === "") return 0; 
        $pos = strpos($haystack, $needle);
        return $pos === false ? -1 : $pos;
    }
}


$solutionModel = new Solution();
var_dump($solutionModel->strStr("sadbutsad", "sad")); // 0 index
var_dump($solutionModel->strStr("leetcode", "leeto")); // -1 
// Question
// https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string/description/