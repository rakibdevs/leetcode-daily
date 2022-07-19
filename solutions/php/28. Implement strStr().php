<?php

// 28. Implement strStr()

class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $position = strpos($haystack, $needle);
        
        return $position != "" ? $position : -1;
    }
}
