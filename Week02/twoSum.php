//两数之和

//1.暴力法
    function twoSum($nums, $target) {
        $len = count($nums);
        for ($i = 0; $i < $len; $i++) {
            for ($j = $i + 1; $j < $len; $j++) {
                if ($nums[$i] + $nums[$j] == $target) {
                    return [$i, $j];
                }
            }
        }
    }

//2.两遍哈希表
    function twoSum($nums, $target) {
        $len = count($nums);
        $map = [];
        for ($i = 0; $i < $len; $i++) {
            $map[$nums[$i]] = $i;
        }

        for ($i = 0; $i < $len; $i++) {
            if (isset($map[$target - $nums[$i]]) && $map[$target - $nums[$i]] != $i) {
                return [$i, $map[$target - $nums[$i]]];
            }
        }
    }


//3.一遍哈希表
    function twoSum($nums, $target) {
        $len = count($nums);
        $map = [];
        for ($i = 0; $i < $len; $i++) {
            if (isset($map[$target - $nums[$i]]) && $map[$target - $nums[$i]] != $i) {
                return [$i, $map[$target - $nums[$i]]];
            }
            $map[$nums[$i]] = $i;
        }
    }
