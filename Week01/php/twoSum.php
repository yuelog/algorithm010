//两数之和

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $arr = [];
        foreach ($nums as $k => $v) {
            if (isset($arr[$target - $v])) {
                return [$arr[$target - $v], $k];
            }
            $arr[$v] = $k;
        }
    }
}
