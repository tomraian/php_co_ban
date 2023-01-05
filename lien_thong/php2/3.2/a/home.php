<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<?php
$hoten = $_COOKIE['hoten'];
$email = $_COOKIE['email'];
$diachi = $_COOKIE['diachi'];
if (!isset($hoten) || !isset($email) || !isset($diachi)) {
    header('location: index.php');
}
if (isset($_POST['home'])) {
    setcookie('hoten', $_POST['hoten'], -1);
    setcookie('email', $_POST['email'], -1);
    setcookie('diachi', $_POST['diachi'], -1);
    header('location: index.php');
}
?>
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


<body>
    <div style="display: flex;align-items:center;justify-content:center">
        <div>
            <p>Xin chào khách hàng <?php echo "$hoten - $email - $diachi" ?>
            </p>
            <form action="" method="post">
                <button name="home">Trở về trang đăng nhập</button>
            </form>
        </div>
    </div>
</body>

</html>