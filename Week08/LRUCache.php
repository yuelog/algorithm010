class LRUCache {
    private $capacity;
    private $size;
    private $head;
    private $tail;
    private $map;

    /**
     * @param Integer $capacity
     */
    function __construct($capacity) {
        $this->capacity = $capacity;
        $this->size = 0;
        $this->head = new DataNode();
        $this->tail = new DataNode();
        $this->head->next = $this->tail;
        $this->tail->prev = $this->head;
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        if (!isset($this->map[$key])) {
            return -1;
        }
        $this->moveToHead($this->map[$key]);
        return $this->map[$key]->value;
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        if (isset($this->map[$key])) {
            $this->map[$key]->value = $value;
            $this->moveToHead($this->map[$key]);
            return;
        }
        $newNode = new DataNode($key, $value);
        $this->map[$key] = $newNode;
        $this->setToHead($newNode);
        $this->size++;
        if ($this->size > $this->capacity) {
            $tail = $this->removeTail();
            unset($this->map[$tail->key]);
            $this->size--;
        }
    }

    function setToHead($node) {
        $node->next = $this->head->next;
        $node->prev = $this->head;
        $this->head->next->prev = $node;
        $this->head->next = $node;
    }

    function removeNode($node) {
        $node->prev->next = $node->next;
        $node->next->prev = $node->prev;
    }
    
    function moveToHead($node) {
        $this->removeNode($node);
        $this->setToHead($node);
    }

    function removeTail() {
        $tailNode = $this->tail->prev;
        $this->removeNode($tailNode);
        return $tailNode;
    }
}

class DataNode {
    public $prev;
    public $next;
    public $key;
    public $value;

    public function __construct($key = 0, $val = 0) {
        $this->key = $key;
        $this->value = $val;
    }
}

/**
 * Your LRUCache object will be instantiated and called as such:
 * $obj = LRUCache($capacity);
 * $ret_1 = $obj->get($key);
 * $obj->put($key, $value);
 */
