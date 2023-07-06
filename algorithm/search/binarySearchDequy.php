<?php


$timeStart = microtime(true);

// Nội dung đoạn code bạn viết

function binarySearch($arr, $l, $r, $x)
{
    if ($r >= $l)
    {
        $mid = ceil($l + ($r - $l) / 2);

        // If the element is present
        // at the middle itself
        if ($arr[$mid] == $x)
            return floor($mid);

        if ($arr[$mid] > $x)
            return binarySearch($arr, $l, $mid - 1, $x);

       if($arr[$mid]<$x)
        return binarySearch($arr, $mid + 1, $r, $x);
    }

// We reach here when element
// is not present in array
    return -1;
}


$arr = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37,
    41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];

//$arr = range(1, 1000000);
$n = count($arr);
$x = 31;
$result = binarySearch($arr, 0, $n - 1, $x);
if(($result == -1))
    echo "Element is not present in array \n";
else
    echo "Element is present at index $result \n";


$diff = microtime(true) - $timeStart;
$sec = intval($diff);
$micro = $diff - $sec;

echo 'Jobs hoàn thành trong: ' . round($micro * 1000, 4) . ' ms';











