<?php include "./read.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách người dùng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #e0f7fa;
        }
        tr:nth-child(even) {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<h1>Dữ liệu CSV</h1>

<table>
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Lastname</th>
        <th>Firstname</th>
        <th>City</th>
        <th>Email</th>
        <th>Course</th>
    </tr>

    <?php foreach($data as $r): ?>
    <tr>
        <?php foreach($r as $cell): ?>
            <td><?= $cell ?></td>
        <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
