class Trie {
    private $root;

    /**
     * Initialize your data structure here.
     */
    function __construct() {
        $this->root = new TrieNode();
    }

    /**
     * Inserts a word into the trie.
     * @param String $word
     * @return NULL
     */
    function insert($word) {
        if (!$word) {
            return;
        }
        $len = strlen($word);
        $cur = $this->root;
        for ($i = 0; $i < $len; $i++) {
            if (!isset($cur->next[$word[$i]])) {
                $cur->next[$word[$i]] = new TrieNode();
            }
            $cur = $cur->next[$word[$i]];
        }

        $cur->isWord || $cur->isWord = true;
    }

    /**
     * Returns if the word is in the trie.
     * @param String $word
     * @return Boolean
     */
    function search($word) {
        $cur = $this->root;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++) {
            if (!isset($cur->next[$word[$i]])) {
                return false;
            }
            $cur = $cur->next[$word[$i]];
        }
        return $cur->isWord;
    }

    /**
     * Returns if there is any word in the trie that starts with the given prefix.
     * @param String $prefix
     * @return Boolean
     */
    function startsWith($prefix) {
        $cur = $this->root;
        $len = strlen($prefix);
        for ($i = 0; $i < $len; $i++) {
            if (!isset($cur->next[$prefix[$i]])) {
                return false;
            }
            $cur = $cur->next[$prefix[$i]];
        }
        return true;
    }
}

class TrieNode {
    public $isWord;
    public $next;

    function __construct($isWord = false) {
        $this->isWord = $isWord;
        $this->next = null;
    }
}

/**
 * Your Trie object will be instantiated and called as such:
 * $obj = Trie();
 * $obj->insert($word);
 * $ret_2 = $obj->search($word);
 * $ret_3 = $obj->startsWith($prefix);
 */
