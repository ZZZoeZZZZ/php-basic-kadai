<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        // 変数
        $sum = 0;
        $student = 0;
        $average = 0;

        // 生徒の点数
        $scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
        // 合計点数
        $sum = array_sum($scores);
        // 生徒の人数
        $student = count($scores);

        // 平均点
        $average = $sum / $student;

        echo $average;

        ?>
    </p>
</body>
</html>