<?php
/**
 * problemUrl = https://leetcode.com/problems/container-with-most-water/description/
 */
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */

    function maxArea($height) {
        $maxArea = 0;
        $left = 0;
        $right = count($height) - 1;
        while ($left < $right) {
            $currentHeight = min($height[$left], $height[$right]);
            $currentWidth = $right - $left;
            $currentArea = $currentHeight * $currentWidth;
            $maxArea = max($maxArea, $currentArea);
            if ($height[$left] < $height[$right]) {
                $left++;
            } else {
                $right--;
            }
        }

        return $maxArea;
    }

    /**
     *** Another solution ***
    function maxArea($height) {
        $maxArea = 0;
        $n = count($height);

        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                $currentHeight = min($height[$i], $height[$j]);
                $currentWidth = $j - $i;
                $currentArea = $currentHeight * $currentWidth;
                $maxArea = max($maxArea, $currentArea);
            }
        }

        return $maxArea;
    }
     **/
}
$obj = new Solution();
$obj->maxArea([1,8,6,2,5,4,8,3,7]);  // output = 49