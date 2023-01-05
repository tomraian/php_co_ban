<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input {
        padding: 5px;
        margin: 2px;
    }

    .text-white {
        color: white;
    }

    .bg-red {
        background: red;
    }
</style>
<?php
require_once "./vendor/function.php";
$display = "none";
$news_select = "#";
if (isset($_POST['submit'])) {
    $news_select = $_POST['news'];
    $display = "block";
}
?>

<body>
    <center>
        <form method="POST">
            <p class="text-white bg-red">Đọc báo trên mạng</p>
            <select name="news" id="">
                <option value="https://tuoitre.vn/">Báo tuổi trẻ</option>
                <option value="https://thanhnien.vn/">Báo thanh niên</option>
                <option value="https://vnexpress.net/">VietNam Express</option>
            </select>
            <br>
            <button name="submit">Đến báo muốn đọc</button>
            <br>
        </form>
        <div class="result" style="display:<?php echo $display ?>">
            <a href="<?= $news_select ?>" target="_blank">Nhấn đây để đến báo <?= $news_select ?></a>
        </div>
    </center>
</body>

</html>