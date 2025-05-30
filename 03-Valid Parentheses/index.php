<?php
class Solution
{
    function isValid(string $s): bool
    {
        $sLength = strlen($s);
        if ($sLength % 2 !== 0)
            return false;
        $bracketSet = ['(' => ')', '[' => ']', '{' => '}'];

        $bracketStack = [];

        for ($i = 0; $i < $sLength; $i++) {
            if (array_key_exists($s[$i], $bracketSet)) {
                $bracketStack[] = $bracketSet[$s[$i]];
            } elseif (array_pop($bracketStack) !== $s[$i]) {
                return false;
            }
        }
        return count($bracketStack) === 0;
    }
}

$model = new Solution();
var_dump($model->isValid("[]")); // true
var_dump($model->isValid("()[]{}")); // true
var_dump($model->isValid("(]")); // false
// Question :
// https://leetcode.com/problems/valid-parentheses/
