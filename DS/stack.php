<?php
class ReadingList
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 10) {
        // khoi tao mang
        $this->stack = array();
        // ngan xep chi co the chua limit
        $this->limit = $limit;
    }

    public function push($item) {    // them phan tu vao stack
        // tran ngan xep
        if (count($this->stack) < $this->limit) {
            // them muc vao dau mang
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Ngan xep da day!');
        }
    }

    public function pop() {         // xoa phan tu khoi stack
        if ($this->isEmpty()) {
            // tran ngan xep
            throw new RunTimeException('Ngăn xếp trống!');
        } else {
            // pop tu dau mang
            return array_shift($this->stack);
        }
    }

    public function top() {
        return current($this->stack);
    }

    public function isEmpty() { // kiem tra stack rong
        return empty($this->stack);
    }
}

$myBooks = new ReadingList();

$myBooks->push('A Dream of Spring');
$myBooks->push('The Winds of Winter');
$myBooks->push('A Dance with Dragons');
$myBooks->push('A Feast for Crows');
$myBooks->push('A Storm of Swords');
$myBooks->push('A Clash of Kings');
$myBooks->push('A Game of Thrones');

print_r($myBooks);


echo $myBooks->pop();
echo $myBooks->pop();
echo $myBooks->pop();

print_r($myBooks);
