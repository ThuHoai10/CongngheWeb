<?php
$conn = new mysqli('localhost', 'root', '', 'th1_new');
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
