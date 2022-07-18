<?php 
// 4. Median of Two Sorted Arrays
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $nums = array_merge($nums1, $nums2);
        sort($nums);
        $items = count($nums);
        
        if($items % 2 == 0){
            $median = ($nums[$items/2] + $nums[($items/2)-1])/2;
        }else{
            $median = $nums[(int) $items/2];
        }
        
        return $median;
    }
}
