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
$gio = "";
$chao = "";
if (isset($_POST['submit'])) {
    $gio = $_POST['gio'];
    switch ($gio) {
        case ($gio > 0 && $gio <= 13):
            $chao = "Chào buổi sáng";
            break;
        case ($gio > 13 && $gio <= 18):
            $chao = "Chào buổi trưa";
            break;
        case ($gio > 19 && $gio <= 23):
            $chao = "Chào buổi tối";
            break;
        default:
            $chao = "Làm đ gì có hơn 24h";
    }
}
?>

<body>
    <center>
        <form method="POST">
            <p>Chào theo giờ</p>
            <div class="form-group">
                <label for="gio"> Nhập giờ
                    <input type="text" id="gio" name="gio" value="<?php echo $gio ?>">
                </label>
            </div>
            <div class="form-group">
                <input type="text" value="<?php echo $chao ?>">
            </div>
            <button name="submit">Chào</button>
        </form>
    </center>
</body>

</html>