//移动零

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $len = count($nums);
        for ($i = $j = 0; $i < $len; $i++) {
            if ($nums[$i] != 0) {
                $temp = $nums[$i];
                $nums[$i] = $nums[$j];
                $nums[$j++] = $temp;
            }
        }
    }
}
