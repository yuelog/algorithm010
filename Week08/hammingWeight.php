//leetcode 191

class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
        for ($sum = 0; $n; $sum++) {
            $n &= $n - 1;
        }
        return $sum;
    }
}
