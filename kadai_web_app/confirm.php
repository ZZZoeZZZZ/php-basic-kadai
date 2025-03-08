<!-- 確認画面 -->
<?php
// 値を取得
$employee_name = isset($_POST['employee_name']) ? $_POST['employee_name'] : '';
$employee_age = isset($_POST['employee_age']) ? $_POST['employee_age'] : '';
$department = isset($_POST['department']) ? $_POST['department'] : '';

// 入力内容チェック
$errors = [];
if (empty($employee_name)) {
    $errors[] = '社員名を入力してください';
}
if (empty($employee_age)) {
    $errors[] = '年齢を入力してください';
} elseif (!is_numeric($employee_age)) {
    $errors[] = '年齢は数値を入力してください';
}
if (!in_array($department, ['開発部', '営業部', '人事部'])) {
    $errors[] = '選択肢から選んでください';
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
</head>
<body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください</p>
    <table>
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>社員名</td>
            <td><?php echo $employee_name; ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo $employee_age; ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo $department ?></td>
        </tr>
    </table>
    <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
    <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    <?php
    if(!empty($errors)) {
        foreach ($errors as $error) {
            echo '<p>' . $error . '</p><br>';
        }
        echo '<script> document.getElementById("confirm-btn").disabled=true; </script>'; 
    }
    ?>
</body>
</html>