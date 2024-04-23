<?php
/**
 * problemUrl = https://leetcode.com/problems/plus-one/
 */
class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $n = count($digits);
        for ($i = $n - 1; $i >= 0; $i--) {
            $digits[$i]++;
            if ($digits[$i] < 10) {
                return $digits;
            } else {
                $digits[$i] = 0;
            }
        }
        array_unshift($digits, 1); // Add 1 at the beginning of the array
        return $digits;
    }
}