<?php
class BFS {
    
    public function twoBFS($root) {
        $visited = [];
        $queue = new SplQueue();
        $queue->enqueue($root);
        $visited[] = $root;
        
        while (!$queue->isEmpty()) {
            $node = $queue->dequeue();
            $visited[] = $node;
            $node->left && $queue->enqueue($node->left);
            $node->right && $queue->enqueue($node->right);
        }
    }

    public function multiBFS() {
    
    }

}
