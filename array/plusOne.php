<?php
/**
 * @param Integer[] $digits
 * @return Integer[]
 */
function plusOne($digits) {
    if (count($digits) > 0){
        if (count($digits) > 0){
            $concatenated = implode('', $digits);
            $concatenated = (int)$concatenated + 1;
            return str_split($concatenated);
        }
    }
}
$digits = [1,2,3];
$digitsPlusOne = plusOne($digits);