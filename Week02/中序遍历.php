//递归

class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root) {
        $res = [];
        $this->helper($root, $res);
        return $res;
    }

    function helper($root, &$res) {
        if ($root) {
            $this->helper($root->left, $res);
            $res[] = $root->val;
            $this->helper($root->right, $res);
        }
    }
}
