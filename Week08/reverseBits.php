//leetcode 190
//颠倒二进制位


class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function reverseBits($n) {
        for ($ret = 0, $power = 31; $n; $power--) {
            $ret += ($n & 1)<<$power;
            $n = $n>>1;
        }
        return $ret;
    }
}
