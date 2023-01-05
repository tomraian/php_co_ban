<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
require_once "./vendor/lib.php";
$xuLy = new xu_ly();
$display = "none";
$file = null;
if (isset($_POST['submit'])) {
    $file = $xuLy->setfile($_FILES['file']);
    if ($xuLy->getfile()['name'] != "") {
        $display = "block";
    } else
        echo "Chưa chọn file";
}
?>

<body>
    <center>
        <form method="POST" enctype="multipart/form-data">
            <p>Thuộc tính của tệp tin</p>
            <div class="form-group">
                <label for="">Tệp tin
                    <input type="file" name="file" id="file">
                </label>
            </div>
            <button name="submit">Thuộc tính của tệp tin</button>
        </form>
        <hr>
        <div class="result" style="display:<?php echo $display ?>">
            <p>Tên file : <span><?php echo $xuLy->getfile()['name'] ?></span></p>
            <p>Loại file : <span><?php echo $xuLy->getfile()['type'] ?></span></p>
            <p>Size file : <span><?php echo round($xuLy->getfile()['size'] / 1024 / 1024, 2) . ' MB' ?></span></p>
        </div>
    </center>
</body>

</html>