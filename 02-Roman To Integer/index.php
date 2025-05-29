<?php

class Solution
{
    public function romanToInt($s): int
    {
        $result = 0;
        $symbols = [
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000
        ];

        $length = strlen($s);
        for ($i = 0; $i < $length; $i++) {
            $current = $symbols[$s[$i]];
            $next = $i + 1 < $length ? $symbols[$s[$i + 1]] : 0;
            if ($next > $current)
                $result -= $current;
            else
                $result += $current;
        }
        return $result;
    }
}

$solutionModel = new Solution();
var_dump($solutionModel->romanToInt("III"));
var_dump($solutionModel->romanToInt("LVIII"));
var_dump($solutionModel->romanToInt("MCMXCIV"));