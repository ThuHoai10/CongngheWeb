<!DOCTYPE html>
<html>
<body>

<h2>Upload file Quiz (.txt)</h2>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="upload">Upload</button>
</form>

</body>
</html>

<?php
include '../connect.php';

if (isset($_POST["upload"])) {
    $file = $_FILES["file"]["tmp_name"];
 $content = file_get_contents($file);
$content = str_replace("\r\n", "\n", $content);

    // chia câu hỏi
    $blocks = preg_split("/\n\s*\n/", trim($content));

    foreach ($blocks as $b) {
        $l = explode("\n", trim($b));

    $answerLine = '';
        $dataLines = [];

        foreach ($l as $line) {
            $line = trim($line);
            if (strpos($line, 'ANSWER:') === 0) {
                // Nếu tìm thấy dòng đáp án
                $answerLine = $line;
            } else {
                // Nếu không phải dòng đáp án, thêm vào mảng dữ liệu
                $dataLines[] = $line;
            }
        }
        
        $q = $conn->real_escape_string($dataLines[0] ?? '');
        $A = $conn->real_escape_string($dataLines[1] ?? '');
        $B = $conn->real_escape_string($dataLines[2] ?? '');
        $C = $conn->real_escape_string($dataLines[3] ?? '');
        $D = $conn->real_escape_string($dataLines[4] ?? '');

        $ans = str_replace("ANSWER:", "", $answerLine);
        $ans = trim($ans);
        
        if (empty($q) || empty($ans)) {
            continue; 
        }

        $sql = "INSERT INTO quiz(question,A,B,C,D,answer)
                VALUES('$q','$A','$B','$C','$D','$ans')";
        $conn->query($sql);
    }

    echo "<h3>Upload & lưu dữ liệu thành công!</h3>";
}
?>
