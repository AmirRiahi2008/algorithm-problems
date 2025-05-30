<?php
class Solution
{
    public function addTwoNumber($list1,  $list2)
    {

        $result = null;
        $list1 = array_reverse($list1);
        $list2 = array_reverse($list2);
        $list1 = (int) join($list1);
        $list2 = (int) join($list2);

        $result = (string) $list1 + $list2;
        $result = str_split($result);
        return array_reverse($result);
    }
}

$model = new Solution();
var_dump($model->addTwoNumber([2,4,3], [5,6,4]));
// Question :
// https://leetcode.com/problems/add-two-numbers/description/
