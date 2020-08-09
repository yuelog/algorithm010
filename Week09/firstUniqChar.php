class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $n = strlen($s);
        if ($n == 0) return -1;
        $hash = [];
        for ($i = 0; $i < $n; ++$i) {
            $hash[$s[$i]][] = $i;
        }

        foreach ($hash as $v) {
            if (count($v) == 1) return reset($v);
        }

        return -1;
    }
}
