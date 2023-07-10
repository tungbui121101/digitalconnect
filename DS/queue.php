<?php
class CreateQueue {
    public $front;
    public $rear;

    public $queue = array();

    function __construct() {
        $this->rear = 1; // cuoi
        $this->front = 1; // dau
    }

    // tạo một hàm để kiểm tra xem hàng đợi có rỗng hay không
    public function isEmpty() {           // kiem tra rong
        if($this->rear == $this->front) {
            echo "Hàng đợi trống. \n";
        } else {
            echo "Hàng đợi không trống. \n";
        }
    }

    // tạo một hàm để trả về kích thước của hàng đợi
    public function size() {
        return ($this->rear - $this->front);
    }

    // tạo một chức năng để thêm phần tử mới
    public function EnQueue($x) {
        $this->queue[++$this->rear] = $x;
        echo $x." được thêm vào hàng đợi. \n";
    }

    // tạo một chức năng để xóa phần tử phía trước
    public function DeQueue() {
        if($this->rear == $this->front){
            echo "Hàng đợi trống. \n";
        } else {
            $x = $this->queue[++$this->front];
            echo $x." bị xóa khỏi hàng đợi. \n";
        }
    }

    // tạo một hàm để lấy phần tử phía trước
    public function frontElement() {
        if($this->rear == $this->front) {
            echo "Hàng đợi trống. \n";
        } else {
            return $this->queue[$this->front+1];
        }
    }

    // tạo một hàm để lấy phần tử phía sau
    public function rearElement() {
        if($this->rear == $this->front) {
            echo "Hàng đợi trống. \n";
        } else {
            return $this->queue[$this->rear];
        }
    }
}

// in ra kiểm tra mã
$MyQueue = new CreateQueue();
$MyQueue->EnQueue(10);
$MyQueue->EnQueue(20);
$MyQueue->EnQueue(30);
$MyQueue->EnQueue(40);

$MyQueue->DeQueue();


$MyQueue->isEmpty();
?>