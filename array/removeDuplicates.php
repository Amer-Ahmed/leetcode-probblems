<?php
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
echo '<pre>';
$numbers = [0,0,1,1,1,2,3,2,4,5,0,10,2];
$uniqueCount = removeDuplicates($numbers);
echo "Output: $uniqueCount, nums = [".implode(", ", $numbers)."]\n\n";