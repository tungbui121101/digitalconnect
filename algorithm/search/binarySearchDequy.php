<?php


// $timeStart = microtime(true);
// y tuong chia mang lam doi duyet mang neu co phan tu can tim thi in ra man hinh
// neu khong co in ra la phan tu khong co trong mang
// Nội dung đoạn code bạn viết

function binarySearch($arr, $l, $r, $x)
{
    if ($r >= $l)
    {
        $mid = ceil($l + ($r - $l) / 2);


        // neu phan tu co mat o giua mang
        if ($arr[$mid] == $x)
            return floor($mid);

        if ($arr[$mid] > $x)
            return binarySearch($arr, $l, $mid - 1, $x);

       if($arr[$mid]<$x)
        return binarySearch($arr, $mid + 1, $r, $x);
    }

// ket thuc khi phan tu khong co trong mang
    return -1;
}

// mang da duoc sap xep tu be den lon
$arr = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37,
    41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];

//$arr = range(1, 1000000);
$n = count($arr);
$x = 31;
$result = binarySearch($arr, 0, $n - 1, $x);
if(($result == -1))
    echo "Phan tu khong có trong mang \n";
else
    echo "Phan tu co vi tri tai $result \n";


// $diff = microtime(true) - $timeStart;
// $sec = intval($diff);
// $micro = $diff - $sec;

// echo 'Jobs hoàn thành trong: ' . round($micro * 1000, 4) . ' ms';











