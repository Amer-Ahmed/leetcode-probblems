<?php
/**
 * problemUrl = https://leetcode.com/problems/number-of-good-pairs/description/
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $existArray = [];
        $result = 0;
        foreach ($nums as $num) {
            if (array_key_exists($num, $existArray)) {
                $result += $existArray[$num];
            }
            $existArray[$num]++;
        }
        return $result;
    }
    /**
     *** Another solution ***
        function numIdenticalPairs($nums) {
            $result = 0;
            $n = count($nums);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = $i + 1; $j < $n; $j++) {
                    if ($nums[$i] == $nums[$j]) {
                        $result += 1;
                    }
                }
            }
            return $result;
        }
     * **/
}
echo '<pre>';
$obj = new Solution();
$obj->numIdenticalPairs([1,2,3,1,1,3]);