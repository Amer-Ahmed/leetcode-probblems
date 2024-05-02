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
        $itemsCount = count($nums);
        $result = array_fill(0, $itemsCount, 0);
        foreach ($nums as $i => $num) {
            $result[$i] = $nums[$num];
        }
        return $result;
    }
}
echo '<pre>';
$obj = new Solution();
$obj->buildArray([0,2,1,5,3,4]);  // output = [0,1,2,4,5,3]