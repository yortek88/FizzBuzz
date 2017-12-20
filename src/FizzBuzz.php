<?php

namespace src;

class FizzBuzz
{
    private $resultString;

    public function checkFizzBuzz(int $startRangeValue, int $endRangeValue): array
    {
        $resultArray = [];

        if (!$this->checkInRange($startRangeValue) || !$this->checkInRange($endRangeValue)) {
            throw new \RangeException('Parameters are not in expected range');
        }

        $this->sortRangeValues($startRangeValue, $endRangeValue);

        for ($i = $startRangeValue; $i <= $endRangeValue; $i++) {
            // 1. Add to print each integer
            $this->resultString = (string)$i;
            // 2. Add to print “fizz” If the integer is divisible by 3
            if ($i % 3 == 0) {
                $this->resultString .= "fizz";
            }
            // 2. Add to print “buzz” If the integer is divisible by 5
            if ($i % 5 == 0) {
                $this->resultString .= "buzz";
            }

            array_push($resultArray, $this->resultString);
            print $this->resultString."\n";
        }

        return $resultArray;
    }

    private function checkInRange(int $value): bool
    {
        if ($value >= 1 && $value <= 100) {
            return true;
        }

        return false;
    }

    private function sortRangeValues(int &$param1, int &$param2)
    {
        if ($param1 > $param2) {
            $param1 = $param2 + $param1 - ($param2 = $param1);
        }
    }
}