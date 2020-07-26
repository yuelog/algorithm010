class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        $dp = [];
        if (!$n) {
            return $dp;
        }
        $dp0 = [];
        $dp0[] = "";
        $dp[] = $dp0;

        for ($i = 1; $i <= $n; $i++) {
            $cur = [];
            for ($j = 0; $j < $i; $j++) {
                $str1 = $dp[$j];
                $str2 = $dp[$i - 1 - $j];
                foreach ($str1 as $s1) {
                    foreach ($str2 as $s2) {
                        $cur[] = "(".$s1.")".$s2;
                    }
                }
            }
            $dp[] = $cur;
        }
        return $dp[$n];
    }
}
