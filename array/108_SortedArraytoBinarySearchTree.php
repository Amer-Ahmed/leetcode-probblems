<?php
/**
 * problemUrl = https://leetcode.com/problems/convert-sorted-array-to-binary-search-tree/
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {
    /**
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums) {
        if (empty($nums))
            return null;
        $countOfElements = count($nums);
        $middleIndex = floor($countOfElements / 2);
        $rootNode = new TreeNode($nums[$middleIndex]);
        $rootNode->left = $this->sortedArrayToBST(array_slice($nums, 0, $middleIndex));
        $rootNode->right = $this->sortedArrayToBST(array_slice($nums, $middleIndex + 1));
        return $rootNode;
    }
}