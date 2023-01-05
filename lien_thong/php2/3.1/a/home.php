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
session_start();
if ($_SESSION['hoten'] == null || $_SESSION['username'] == null) {
    header('location: index.php');
}
if (isset($_POST['home'])) {
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
    <div style="display: flex;align-items:center;justify-content:space-between">
        <img src="https://media.lttc.edu.vn/Media/2_SVLYTC/Images/csv-cd-lytc5b88e4d7-a-e.png" alt="">
        <div>
            <p>Xin chào <?php echo $_SESSION['hoten'] ?></p>
            <p>Tên đăng nhập <?php echo $_SESSION['username'] ?></p>
            <form action="" method="post">
                <button name="home">Trở về trang đăng nhập</button>
            </form>
        </div>
    </div>
</body>

</html>