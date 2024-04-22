<?php
/**
 * @param Integer[] $nums1
 * @param Integer $m
 * @param Integer[] $nums2
 * @param Integer $n
 * @return NULL
 */
function mergeSortedArray(&$nums1, $m, $nums2, $n) {
    $nums1 = array_slice($nums1, 0, $m);
    $nums2 = array_slice($nums2, 0, $n);
    $nums1 = array_merge($nums1, $nums2);
    sort($nums1);
}

echo '<pre>';
$nums1 = [1,2,3,0,0,0];
$m = 3;
$nums2 = [2,5,6];
$n = 3;
$nums1 = mergeSortedArray($nums1, $m, $nums2, $n);