<?php
/**
 * problemUrl = https://leetcode.com/problems/widest-vertical-area-between-two-points-containing-no-points/description/
 */
class Solution {

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function maxWidthOfVerticalArea($points) {
        $x_values = array_column($points, 0);
        array_multisort($x_values, $points);
        $result = [];
        for ($i = 1; $i < count($points); $i++) {
            $result[] = $points[$i][0] - $points[$i-1][0];
        }
        return max($result);
    }
}