<?php
class Solution
{

    public function removeDuplicates(array &$nums): int
    {
        $n = count($nums);
        if ($n == 0)
            return 0;
        $k = 1;
        for ($i = 1; $i < $n; $i++) {
            if ($nums[$i] !== $nums[$k - 1]) {
                $nums[$k] = $nums[$i];
                $k++;
            }
        }
        return $k;
        // return array_slice($nums, 0, $k);
    }
}
$nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
$solutionModel = new Solution();
var_dump($solutionModel->removeDuplicates($nums));// [1 , 2 , _]
// var_dump($solutionModel->removeDuplicates([0, 0, 1, 1, 1, 2, 2, 3, 3, 4]));
