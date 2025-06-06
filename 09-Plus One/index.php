<?php
class Solution
{

    public function plusOne($digits)
    {
        $count = count($digits);

        for ($i = $count - 1; $i >= 0; $i--) {
            if ($digits[$i] < 9) {
                $digits[$i]++;
                return $digits;
            }
            $digits[$i] = 0;
        }
        array_unshift($digits, 1);
        return $digits;
    }
}

$solutionModel = new Solution();
var_dump($solutionModel->plusOne([1, 2, 3])); // [1,2,4]
var_dump($solutionModel->plusOne([4, 3, 2, 1])); // [4,3,2,2]
var_dump($solutionModel->plusOne([9])); // [1,0]