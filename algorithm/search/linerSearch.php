<?php
// y tuong: duyet tung phan tu cua mang den vi tri phan tu can tim thi in ra. khong co thi in ra khong tim thay
// $timeStart = microtime(true);

function linearSearch($arr, $x) {
    for ($i = 0; $i < count($arr); $i++) {
        if($arr[$i] == $x) {
            // echo "vi tri trong mang la ".$i."\n";
            return $i + 1;
        }
    }
    return 0;
}
//
//$arr = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37,
//    41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];

$arr= range(1,1000000);

shuffle($arr); // xao tron mang array
$value = 31;
if ($position = linearSearch($arr,$value)){
    echo $value. "tim thay\n";
    echo "tim thay tai vi tri la: " . $position;
}
else{
    echo $value. "khong tim thay\n";
}

// $diff = microtime(true) - $timeStart;
// $sec = intval($diff);
// $micro = $diff - $sec;



// echo 'Jobs hoàn thành trong: ' . round($micro * 1000, 4) . ' ms'."\n";

