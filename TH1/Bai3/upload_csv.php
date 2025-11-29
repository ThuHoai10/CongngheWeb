<!DOCTYPE html>
<html>
<body>

<h2>Upload CSV sinh viên</h2>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="csv">
    <button name="upload">Upload</button>
</form>

</body>
</html>

<?php
include "../connect.php";

if (isset($_POST["upload"])) {
    $file = $_FILES["csv"]["tmp_name"];

    if (($handle = fopen($file, "r")) !== FALSE) {

        $isHeader = true; // bỏ dòng tiêu đề

        while (($row = fgetcsv($handle, 2000, ",")) !== FALSE) {
            if ($isHeader) { 
                $isHeader = false; 
                continue; 
            }

            $u = $row[0];
            $p = $row[1];
            $ln = $row[2];
            $fn = $row[3];
            $city = $row[4];
            $email = $row[5];
            $course = $row[6];

            $sql = "INSERT INTO students(username,password,lastname,firstname,city,email,course)
                    VALUES('$u','$p','$ln','$fn','$city','$email','$course')";
            $conn->query($sql);
        }

        fclose($handle);
    }

    echo "<h3>Upload CSV & lưu vào DB thành công!</h3>";
}
?>
