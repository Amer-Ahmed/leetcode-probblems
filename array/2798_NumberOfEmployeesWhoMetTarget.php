<?php
/**
 * problemUrl = https://leetcode.com/problems/number-of-employees-who-met-the-target/
 */
class Solution {

    /**
     * @param Integer[] $hours
     * @param Integer $target
     * @return Integer
     */
    function numberOfEmployeesWhoMetTarget($hours, $target) {
        $employees = 0;
        foreach ($hours as $hour){
            if ($target >= $hour){
                $employees++;
            }
        }
        return $employees;
    }
}