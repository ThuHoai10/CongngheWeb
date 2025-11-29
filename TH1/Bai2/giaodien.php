<?php include "quiz.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quiz Android</title>
</head>
<body>

<h1>Bài trắc nghiệm</h1>

<form method="post">
<?php foreach($questions as $i => $q): ?>
    <div style="margin-bottom:20px;">
        <p><b><?= $q["question"] ?></b></p>

        <label><input type="radio" name="q<?= $i ?>" value="A"> <?= $q["A"] ?></label><br>
        <label><input type="radio" name="q<?= $i ?>" value="B"> <?= $q["B"] ?></label><br>
        <label><input type="radio" name="q<?= $i ?>" value="C"> <?= $q["C"] ?></label><br>
        <label><input type="radio" name="q<?= $i ?>" value="D"> <?= $q["D"] ?></label><br>
    </div>
<?php endforeach; ?>

<input type="submit" value="Nộp bài">
</form>

</body>
</html>
