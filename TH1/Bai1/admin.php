<?php include "flowers.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quản trị Hoa</title>

    <style>
      
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }


        h1 {
            text-align: center;
            color: #0056b3;
            margin-bottom: 30px;
        }

     
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        table th, table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #8cb8e8;
            color: white;
            text-transform: uppercase;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }


        table img {
            display: block;
            border-radius: 4px;
            max-width: 100px;
        }


        button {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 2px;
        }

        button:first-child {
            background-color: #ffc107;
            color: #333;
        }

        button:last-child {
            background-color: #dc3545;
            color: white;
        }
    </style>

</head>
<body>

<h1>Bảng Quản trị Hoa</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>Tên hoa</th>
        <th>Mô tả</th>
        <th>Ảnh</th>
        <th>Hành động</th>
    </tr>

    <?php foreach($flowers as $f): ?>
        <tr>
            <td><?= $f["name"] ?></td>
            <td><?= $f["description"] ?></td>
            <td><img src="<?= $f['image'] ?>" width="100"></td>
            <td>
                <button>Sửa</button>
                <button>Xóa</button>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
