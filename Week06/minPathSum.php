//最小路径和
class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function minPathSum($grid) {
        $len = count($grid);
        for ($i = $len - 1; $i>=0; $i--) {
            for ($j = count($grid[0]) - 1; $j >= 0; $j--) {
                if ($i == $len - 1 && $j != count($grid[0]) - 1) {
                    $grid[$i][$j] = $grid[$i][$j] + $grid[$i][$j + 1];
                } elseif ($j == count($grid[0]) - 1 && $i != $len - 1) {
                    $grid[$i][$j] = $grid[$i][$j] + $grid[$i + 1][$j];
                } elseif ($j != count($grid[0]) - 1 && $i != $len - 1) {
                    $grid[$i][$j] = $grid[$i][$j] + min($grid[$i + 1][$j], $grid[$i][$j + 1]);
                }
            }
        }
        return $grid[0][0];
    }
}
