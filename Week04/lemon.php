//柠檬水找零

function lemonadeChange($bills) {
        $five = 0;
        $ten = 0;
        foreach ($bills as $bill) {
            if ($bill == 5) {
                $five++;
            } elseif ($bill == 10) {
                if ($five == 0) {
                    return false;
                }
                $five--;
                $ten++;
            } else {
                if ($five > 0 && $ten > 0) {
                    $five--;
                    $ten--;
                } elseif ($five >= 3) {
                    $five -= 3;
                } else {
                    return false;
                }
            }
        }

        return true;
    }
