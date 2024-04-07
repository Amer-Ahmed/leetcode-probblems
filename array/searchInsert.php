<?php
/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
function searchInsert($nums, $target) {
    $index = array_search($target, $nums);
    if ($index !== false) {
        return $index;
    }
    $count = count($nums);
    if ($count === 1) {
        if ($target <= $nums[0]) {
            return 0;
        } else {
            return 1;
        }
    }
    if ($target > $nums[$count - 1]) {
        return $count;
    }
    for ($i = 0; $i < $count - 1; $i++) {
        if($target <= $nums[$i]){
            return 0;
        }
        if ($target > $nums[$i] && $target < $nums[$i + 1]) {
            return $i + 1;
        }
    }
}

// Example usage:
$numbers = [1];
$target = 0;
$index = searchInsert($numbers, $target);
echo "Inserted $target at index $index: " . implode(', ', $numbers);