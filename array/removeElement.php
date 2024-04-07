<?php
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
echo '<pre>';
$numbers = [0,1,2,2,3,0,4,1,3,2,2];
$removedElementsCount = removeElement($numbers,2);
echo "Output: $removedElementsCount, nums = [".implode(", ", $numbers)."]\n\n";