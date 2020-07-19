/**
* 1. 避免人肉递归
* 2. 找最近重复子问题
* 3. 数学归纳法（n=1成立,n=2成立,且当n成立时n+1也能成立）
/**

//PHP
public function recur($level, $param) {
    //终结条件
    if ($level > MAX_LEVEL) {
        return ;
    }
    //处理当前层逻辑
    
    //进入下一层
    $this->recur($level + 1, $newParam);

    //清理当前层(可选)
}

// Java
public void recur(int level, int param) { 
  // terminator 
  if (level > MAX_LEVEL) { 
    // process result 
    return; 
  }
  // process current logic 
  process(level, param); 
  // drill down 
  recur( level: level + 1, newParam); 
  // restore current status 
 
}


# Python
def recursion(level, param1, param2, ...):
    # recursion terminator
    if level > MAX_LEVEL:
	   process_result
	   return
    # process logic in current level
    process(level, data...)
    # drill down
    self.recursion(level + 1, p1, ...)
    # reverse the current level status if needed
