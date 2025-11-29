<?php include __DIR__ ."/flowers.php"; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>14 loại hoa tuyệt đẹp thích hợp trồng để khoe hương sắc dịp xuân hè</title>

    <style>
       body {
    font-family: Arial, sans-serif;
    background: #fafafa;
    margin: 0;
    padding: 0;
    color: #333;
}

/* Dashboard menu */
.top-menu {
    width: 100%;
    background: #ee4557;
    padding: 12px 0;
    display: flex;
    justify-content: center;
    gap: 40px;
    font-size: 15px;
    font-weight: bold;
    letter-spacing: 0.5px;
}

.top-menu a {
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
}

.top-menu a:hover {
    opacity: 0.85;
}

/* Tiêu đề */
h1 {
    font-size: 26px;
    font-weight: bold;
    text-align: center;
    margin: 25px 0 30px 0;
    color: #222;
}

/* Khung bài viết */
.article-container {
    width: 78%;
    margin: 0 auto 40px auto;
    background: #fff;
    padding: 25px 35px;
    border-radius: 6px;
    box-shadow: 0 3px 8px rgba(0,0,0,0.06);
    border-top: 3px solid #ee4557;
}

/* Mỗi mục hoa */
.flower-item {
    margin-bottom: 35px;
    padding-bottom: 25px;
    border-bottom: 1px solid #e0e0e0;
}

.flower-item:last-child {
    border-bottom: none;
}

.flower-item h2 {
    font-size: 20px;
    color: #222;
    margin: 0 0 15px 0;
}

.flower-item img {
    width: 100%;
    max-width: 600px;
    margin: 15px auto;
    display: block;
    border-radius: 6px;
}

.flower-item p {
    font-size: 15px;
    line-height: 1.6;
    color: #555;
    margin-top: 10px;
}

    </style>
</head>

<body>

<!-- DASHBOARD MENU -->
<div class="top-menu">
    <a href="#">Lifestyle</a>
    <a href="#">Xã hội</a>
    <a href="#">Đẹp</a>
    <a href="#">Mẹ & Bé</a>
</div>

<h1>Danh sách Hoa</h1>

<div class="article-container">

<?php foreach($flowers as $f): ?>
    <div class="flower-item">
        <h2><?= $f["name"] ?></h2>
        <img src="<?= $f['image'] ?>" width="300">
        <p><?= $f["description"] ?></p>
    </div>
<?php endforeach; ?>

</div>

</body>
</html>



