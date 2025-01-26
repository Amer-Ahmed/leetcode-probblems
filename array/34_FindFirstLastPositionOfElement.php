<?php
/**
 * problemUrl = https://leetcode.com/problems/find-first-and-last-position-of-element-in-sorted-array/description/?envType=problem-list-v2&envId=array
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        // Initialize the result array
        $result = [-1, -1];

        // Find the first position of the target
        $left = 0;
        $right = count($nums) - 1;
        while ($left <= $right) {
            $mid = $left + intval(($right - $left) / 2);
            if ($nums[$mid] == $target) {
                $result[0] = $mid; // Update first position
                $right = $mid - 1; // Continue searching in the left half
            } elseif ($nums[$mid] < $target) {
                $left = $mid + 1; // Search in the right half
            } else {
                $right = $mid - 1; // Search in the left half
            }
        }

        // Find the last position of the target
        $left = 0;
        $right = count($nums) - 1;
        while ($left <= $right) {
            $mid = $left + intval(($right - $left) / 2);
            if ($nums[$mid] == $target) {
                $result[1] = $mid; // Update last position
                $left = $mid + 1; // Continue searching in the right half
            } elseif ($nums[$mid] < $target) {
                $left = $mid + 1; // Search in the right half
            } else {
                $right = $mid - 1; // Search in the left half
            }
        }

        return $result;
    }
}