//买卖股票的最佳时机 II

function maxProfit($prices) {
        $maxProfit = 0;
        $len = count($prices);
        for ($i = 1; $i < $len; $i++) {
            if ($prices[$i] > $prices[$i - 1]) {
                $maxProfit += $prices[$i] - $prices[$i - 1];
            }
        }
        return $maxProfit;
    }
