<?php
/**
 * problemUrl = https://leetcode.com/problems/find-words-containing-character/
 */
class Solution {

    /**
     * @param String[] $words
     * @param String $x
     * @return Integer[]
     */
    function findWordsContaining($words, $x) {
        $matched = [];
        foreach ($words as $index => $word) {
            if (strpos($word, $x) !== false) {
                $matched[] = $index;
            }
        }
        return $matched;
    }

    /**
     *** Another solution ***
    function findWordsContaining($words, $x) {
        return array_keys(array_filter($words, function($word) use ($x) {
            return strpos($word, $x) !== false;
        }));
    }
    * **/
}