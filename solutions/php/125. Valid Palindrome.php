<?php

// 125. Valid Palindrome

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $s));
        
        return $s == strrev($s);
    }
}
