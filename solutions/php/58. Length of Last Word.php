<?php

// 58. Length of Last Word
// Learning rtrim() method, https://www.w3schools.com/php/func_string_rtrim.asp

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        return strlen(end(explode(" ", rtrim($s))));
    }
}
