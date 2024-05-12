<?php
/**
 * problemUrl = https://leetcode.com/problems/richest-customer-wealth/
 */
class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        $result = array_fill(0, count($accounts), 0);
        foreach ($accounts as $customerAccount) {
            $result[] = array_sum($customerAccount);
        }
        return max($result);
    }
}