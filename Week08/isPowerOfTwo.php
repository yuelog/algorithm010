//leetcode 231
//判断是否2的幂次
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        return $n > 0 && ($n & ($n - 1)) == 0;
    }
}
