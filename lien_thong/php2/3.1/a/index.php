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

    table.calendar {
        width: 90%;
        margin-right: auto;
        margin-left: auto;
        position: relative;
        text-align: center;
    }

    table.calendar tr:first-child td {
        text-align: right;
        font-size: 14pt;
        margin: 0;
        width: 90%;
        position: relative;
        margin-left: auto;
        margin-right: auto;
    }

    table.calendar tr:nth-child(2) td {
        background: var(--maunen);
        color: var(--mauchu);
        font-weight: bold;
        text-align: center;
        width: calc(100% / 7);
        border: 1px solid #999;
        font-size: 12px;
    }

    table.calendar tr:nth-child(n+3) td[data-day='9'] {
        background: silver;
        color: #444;
        font-weight: bold;
        text-align: right;
        width: calc(100% / 7);
        border: 1px solid #999;
        padding-right: 15px;
        font-size: 11pt;
        pointer-events: none
    }

    table.calendar tr:nth-child(n+3) td[data-day='2'] {
        background: var(--softred);
        color: #444;
        font-weight: bold;
        text-align: right;
        width: calc(100% / 7);
        border: 1px solid #999;
        padding-right: 15px;
        font-size: 11pt;
    }

    table.calendar tr:nth-child(n+3) td[data-day='1'] {
        background: var(--softgreen);
        color: #444;
        font-weight: bold;
        text-align: right;
        width: calc(100% / 7);
        border: 1px solid #999;
        padding-right: 15px;
        font-size: 11pt;
        cursor: pointer;
    }

    table.calendar tr:nth-child(n+3) td[data-day='0'] {
        background: #eee;
        font-weight: bold;
        text-align: center;
        width: calc(100% / 7);
        border: 1px solid #999;
    }
</style>
<?php
require_once "./vendor/function.php";
require_once "./vendor/lib.php";
$xuLy = new xu_ly();
$display = "none";
session_start();
$_SESSION['hoten'] = null;
$_SESSION['email'] = null;
$_SESSION['username'] = null;
$_SESSION['password'] = null;
if (isset($_POST['submit'])) {
    $display = "block";
    $_SESSION['hoten'] = $_POST['hoten'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
}

?>

<body>
    <center>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for=""> Họ và tên
                    <input type="text" name="hoten" value="<?php echo $_SESSION['hoten'] ?>">
                </label>
            </div>
            <div class="form-group">
                <label for=""> Email
                    <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>">
                </label>
            </div>
            <div class="form-group">
                <label for=""> Tên đăng nhập
                    <input type="text" name="username" value="<?php echo $_SESSION['username'] ?>">
                </label>
            </div>
            <div class="form-group">
                <label for=""> Mật khẩu
                    <input type="password" name="password" value="<?php echo $_SESSION['password'] ?>">
                </label>
            </div>
            <button name="submit">Đăng nhập</button>
        </form>
        <div class="result" style="display:<?php echo $display ?>;background:#cf5f5f">
            <p>Xin chào <?php echo $_SESSION['hoten'] ?></p>
            <p>Email <?php echo $_SESSION['email'] ?></p>
            <p>Tên đăng nhập <b><?php echo $_SESSION['username'] ?> </b></p>
            <p>Mật khẩu <b><?php echo $_SESSION['password'] ?> </b></p>
            <a href="home.php">Click here</a>
        </div>
    </center>
</body>

</html>