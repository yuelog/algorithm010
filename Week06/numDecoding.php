//解码方法

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function numDecodings($s) {
        if ($s[0] == '0') {
            return 0;
        }
        $pre = 1;
        $curr = 1;
        for ($i = 1; $i < strlen($s); $i++) {
            $tmp = $curr;
            if ($s[$i] == '0') {
                if ($s[$i - 1] == '1' || $s[$i - 1] == '2') {
                    $curr = $pre;
                } else {
                    return 0;
                }
            } elseif ($s[$i - 1] == '1' || ($s[$i - 1] == '2' && $s[$i] >= '1' && $s[$i] <= '6')) {
                $curr = $curr + $pre;
            }
            $pre = $tmp;
        }
        return $curr;
    }
}
