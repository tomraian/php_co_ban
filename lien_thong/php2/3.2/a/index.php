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

    :root {
        --maunen: #ffadad;
        --mauchu: #fff;
    }
</style>
<?php
require_once "./vendor/function.php";
require_once "./vendor/lib.php";
$xuLy = new xu_ly();
$display = "none";
if (isset($_POST['submit'])) {
    if (empty($_POST['hoten']) || empty($_POST['email']) || empty($_POST['diachi'])) {
        echo 'Phải điền đầy đủ thông tin';
    } else {
        $display = "block";
        setcookie('hoten', $_POST['hoten'], time() + 60 * 60 * 24);
        setcookie('email', $_POST['email'], time() + 60 * 60 * 24);
        setcookie('diachi', $_POST['diachi'], time() + 60 * 60 * 24);
    }
}
?>

<body>
    <center>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for=""> Họ và tên
                    <input type="text" name="hoten" value="<?php if(!isset($_COOKIE['hoten']))echo ""; else echo $_COOKIE['hoten']; ?>">
                </label>
            </div>
            <div class="form-group">
                <label for=""> Email
                    <input type="email" name="email" value="<?php if(!isset($_COOKIE['email']))echo ""; else echo $_COOKIE['email']; ?>">
                </label>
            </div>
            <div class="form-group">
                <label for=""> Địa chỉ
                    <input type="text" name="diachi" value="<?php if(!isset($_COOKIE['diachi']))echo ""; else echo $_COOKIE['diachi']; ?>">
                </label>
            </div>
            <button name="submit">Đăng nhập</button>
        </form>
        <div class="result" style="display:<?php echo $display ?>;background:#cf5f5f">
            <p>Thông tin khách hàng</p>
            <?php echo $_POST['hoten']." - ". $_POST['email']. " - ". $_POST['diachi'] ?>
            <br>
            <a href="home.php">Click here</a>
        </div>
    </center>
</body>

</html>