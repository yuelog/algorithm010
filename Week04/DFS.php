<?php
//深度优先代码模板
class DFS {
    private $visited;

/********* 递归写法 *****************/
    //二叉树的DFS
    public function twoDFS($root) {
        if ($root === null) {
            return;
        }
        if (in_array($root, $this->visited)) {
            return;
        }
        $this->visited[] = $root;
        $this->twoDFS($root->left, $this->visited);
        $this->twoDFS($root->right, $this->visited);
    }

    //多叉树的DFS
    public function multiDFS($root) {
        if ($root === null) {
            return;
        }
        if (in_array($root, $this->visited)) {
            return;
        }
        $this->visited[] = $root;
        foreach ($root->children as $child) {
            //这个判断据说是为了更严谨,其实个人觉得可有可无,有的话可能可以减少栈空间（未确定）
            if (!in_array($child, $this->visited)) {
                $this->multiDFS($child);
            }
        } 
    }

/************* 递归写法结束 *********************/


/************* 非递归写法 **********************/
//未修正,stack写法可能会有问题
    public function twoDFS($root) {
        if ($root === null) {
            return [];
        } 
        $visited = [];
        $stack = [$root];
        while ($stack) {
            $node = array_pop($stack);
            $visited[] = $node;
            $node->left && stack[] = $node->left;
            $node->right && stack[] = $node->right;
        }
    }

    public function multiDFS($root) {
    
    }

/************* 非递归写法结束 **********************/


}
