<?php
$filename = "./65HTTT_Danh_sach_diem_danh.csv";
$data = [];

// mở file
if (($handle = fopen($filename, "r")) !== FALSE) {

    $header = fgetcsv($handle);
    // đọc từng dòng dạng CSV
    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $data[] = $row;
    }

    fclose($handle);
}
?>



