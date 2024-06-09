<?php
/**
 * problemUrl = https://leetcode.com/problems/combination-sum/description/
 */
class Solution {

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target) {
        $result = [];
        sort($candidates);
        $this->findCombinations($candidates, $target, 0, [], $result);
        return $result;
    }

    function findCombinations($candidates, $target, $start, $path, &$result) {
        if ($target == 0) {
            $result[] = $path;
            return;
        }
        for ($i = $start; $i < count($candidates); $i++) {
            if ($candidates[$i] > $target) break;
            $this->findCombinations($candidates, $target - $candidates[$i], $i, array_merge($path, [$candidates[$i]]), $result);
        }
    }
}