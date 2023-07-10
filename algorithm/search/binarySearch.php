<?php
// y tuong chia mang lam doi duyet mang neu phan tu o giua in ra, phan tu<mid: phan tu o ben trai in ra giua - 1, phan tu>mid</mid:> phan tu o ben phai giua + 1.
// neu khong co in ra la phan tu khong co trong mang
// thuong la mang chua duoc sap xep
// $timeStart = microtime(true);

function binarySearch(Array $arr, $x){
    if(count($arr) === 0) return false;

    $left = 0;
    $right = count($arr) - 1 ;

    while ($left<=$right){
        $mid = floor(($right+$left)/2);

        if($arr[$mid]==$x) {
            echo "vi tri trong mang la ".$mid."\n";
            return true;
        }
        else if ($arr[$mid]<$x){
            $left = $mid +1;
        }
        else{
            $right = $mid -1 ;
        }
    }
    return false;
}
//
//$arr = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37,
//    41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];

$arr= range(1,1000000);
$value = 31;
if (binarySearch($arr,$value)==true){
    echo $value. "tim thay\n";
}
else{
    echo $value. "khong tim thay\n";
}

// $diff = microtime(true) - $timeStart;
// $sec = intval($diff);
// $micro = $diff - $sec;

// echo 'Jobs hoàn thành trong: ' . round($micro * 1000, 4) . ' ms';











