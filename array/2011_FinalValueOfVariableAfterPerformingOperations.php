<?php
/**
 * problemUrl = https://leetcode.com/problems/final-value-of-variable-after-performing-operations/description/
 */
class Solution {

    /**
     * @param String[] $operations
     * @return Integer
     */
    function finalValueAfterOperations($operations) {
        $x = 0;
        foreach ($operations as $operation) {
            if (strpos($operation, "++") !== false) {
                $x++;
            } elseif(strpos($operation, "--")  !== false) {
                $x--;
            }
        }
        return $x;
    }
}
echo '<pre>';
$obj = new Solution();
$obj->finalValueAfterOperations(["--X","X++","X++"]);  // output = 1