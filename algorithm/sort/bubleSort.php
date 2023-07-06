<?php
function bubleSort($mang)
{
    $sophantu = count($mang);
    // Sắp xếp mảng
    for ($i = 0; $i < ($sophantu - 1); $i++)
    {
        for ($j = $i + 1; $j < $sophantu; $j++)
        {
            if ($mang[$i] > $mang[$j])
            {
                // hoán vị
                $tmp = $mang[$j];
                $mang[$j] = $mang[$i];
                $mang[$i] = $tmp;
            }
        }
    }
    return $mang;
}

// Hàm xuất ra màn hình
function xuat_mang_ra_man_hinh($mang)
{
    $sophantu = count($mang);
    for ($i = 0; $i < $sophantu; $i++){
        echo $mang[$i] . ",";
    }
}

//--------------------------------------------------
// Chương trình chính
$mang = array(1, 5, 9, 2, 4, 9); // mảng theo đề bài

// sắp xếp
$mang = bubleSort($mang);

// xuất ra màn hình
xuat_mang_ra_man_hinh($mang);