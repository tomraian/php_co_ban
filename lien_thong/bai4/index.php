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
</style>
<?php
$ban_kinh = "";
$dien_tich = "";
$chu_vi = "";
if (isset($_POST['submit'])) {
    $ban_kinh = $_POST['ban_kinh'];
    define('_PI', 3.14);
    $dien_tich = _PI * pow($ban_kinh, 2);
    $chu_vi = 2 * _PI * $ban_kinh;
}
?>

<body>
    <center>
        <form method="POST">
            <p>Diện tích và chu vi hình tròn</p>
            <div class="form-group">
                <label for="ban_kinh"> Bán kính
                    <input type="text" id="ban_kinh" name="ban_kinh" value="<?php echo $ban_kinh ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="dien_tich"> Diện tích
                    <input type="text" id="dien_tich" name="dien_tich" value="<?php echo $dien_tich ?>" disabled>
                </label>
            </div>
            <div class="form-group">
                <label for="chu_vi"> Chu vi
                    <input type="text" id="chu_vi" name="chu_vi" value="<?php echo $chu_vi ?>" disabled>
                </label>
            </div>
            <button name="submit">Xem kết quả</button>
        </form>
    </center>
</body>

</html>