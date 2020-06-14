//删除排序数组中的重复项

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $len = count($nums);
        $i = 0;
        for ($j = 1; $j < $len; $j++) {
            if ($nums[$i] != $nums[$j]) {
                $i++;
                $nums[$i] = $nums[$j];
            }
        }
        return $i + 1;
    }
}
