<?php

// 66. Plus One
// Learned about bcadd() method, https://www.php.net/manual/en/function.bcadd.php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        return str_split(bcadd(1,implode($digits)));
    }
}
