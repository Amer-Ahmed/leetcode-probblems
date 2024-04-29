<?php
/**
 * problemUrl = https://leetcode.com/problems/build-array-from-permutation/
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function buildArray($nums) {
        $n = count($nums);
        $result = [];
        for ($i = 0; $i < $n; $i++) {
            $result[] = $nums[$nums[$i]];
        }
        return $result;
    }
}
echo '<pre>';
$obj = new Solution();
$obj->buildArray([0,2,1,5,3,4]);  // out put = [0,1,2,4,5,3]