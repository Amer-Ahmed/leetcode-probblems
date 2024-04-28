<?php
/**
 * problemUrl = https://leetcode.com/problems/concatenation-of-array/
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getConcatenation($nums) {
        $n = count($nums);
        for ($i = 0; $i < $n; $i++) {
            $nums[$i + $n] = $nums[$i];
        }
        return $nums;
    }
}