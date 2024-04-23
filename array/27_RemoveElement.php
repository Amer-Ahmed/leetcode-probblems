<?php
/**
 * problemUrl = https://leetcode.com/problems/remove-element/
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        foreach ($nums as $key => $num){
            if ($num == $val){
                unset($nums[$key]);
            }
        }
        return count($nums);
    }
}