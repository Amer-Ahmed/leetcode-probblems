<?php
/**
 * problemUrl = https://leetcode.com/problems/remove-duplicates-from-sorted-array/
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $unique = [];
        for($i=0; $i < count($nums); $i++){
            if (!in_array($nums[$i], $unique)){
                $unique[$i]= $nums[$i];
            }
        }
        $nums = array_values($unique);
        return count($unique);
    }
}