//二叉树的最近公共祖先

function lowestCommonAncestor($root, $p, $q) {
        if ($root == null) return null;
        if ($root->val == $p->val || $root->val == $q->val) return $root;
        $left = $this->lowestCommonAncestor($root->left, $p, $q);
        $right = $this->lowestCommonAncestor($root->right, $p, $q);
        if ($left !== null && $right !== null) return $root;
        if ($left === null) return $right;
        if ($right === null) return $left;
        return null;
    }
