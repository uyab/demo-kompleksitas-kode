<?php

namespace App;

class Kalkulator
{
    public function run($x, $y) // 1
    {
        $result = 0;
        if ($x > 23 || $y < 42) { // 2, 3
            for ($i = $x; $i >= $x && $i <= $y; ++$i) { // 4
                $result += $i;
            }
        } else {
            switch ($x + $y) {
                case 1: // 5
                    $result = 10;
                    break;
                case 2: // 6
                    $result = 20;
                    break;
                default: // 7
                    $result = 99;
                    break;
            }
        }

        return $result;
    }
}
