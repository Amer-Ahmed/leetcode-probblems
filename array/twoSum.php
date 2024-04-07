<?php
/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target) {
    for($i=0;$i<=count($nums);$i++){
        $sum = $nums[$i] + $nums[$i+1];
        if($sum == $target){
            return [$i,$i+1];
        }
    }
}