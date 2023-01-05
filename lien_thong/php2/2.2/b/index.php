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
$xuLy = new xu_ly();
$duongDan = $xuLy->setDuongDan("");
$tieuDe = $xuLy->setTieuDe("");
$ghiChu = $xuLy->setghiChu("");
$chieuRong = $xuLy->setchieuRong("");
$chieuCao = $xuLy->setchieuCao("");
$duongVien = $xuLy->setduongVien("");
$canhLe = $xuLy->setcanhLe("");

if (isset($_POST['submit'])) {
    $display = "block";
    $duongDan = $xuLy->setDuongDan($_POST['duongDan']);
    $tieuDe = $xuLy->setTieuDe($_POST['tieuDe']);
    $ghiChu = $xuLy->setghiChu($_POST['ghiChu']);
    $chieuRong = $xuLy->setchieuRong($_POST['chieuRong']);
    $chieuCao = $xuLy->setchieuCao($_POST['chieuCao']);
    $duongVien = $xuLy->setduongVien($_POST['duongVien']);
    $canhLe = $xuLy->setcanhLe($_POST['canhLe']);
}
?>

<body>
    <center>
        <form method="POST">
            <p class="text-white bg-red">Hiển thị hình ảnh</p>
            <div>
                <label for="">
                    Tiêu đề
                    <input type="text" name="tieuDe" value="<?php echo $xuLy->getTieuDe()  ?>">
                </label>
            </div>
            <div>
                <label for="">
                    Đường dẫn hình
                    <input type="text" name="duongDan" id="tẽ" value="<?php echo $xuLy->getDuongDan()  ?>">
                </label>
            </div>
            <div>
                <label for="">
                    Dòng ghi chú
                    <input type="text" name="ghiChu" value="<?php echo $xuLy->getghiChu()  ?>">
                </label>
            </div>
            <div>
                <label for="">
                    Chiều rộng
                    <input type="text" name="chieuRong" value="<?php echo $xuLy->getchieuRong()  ?>">
                </label>
                <label for="">
                    Chiều cao
                    <input type="text" name="chieuCao" value="<?php echo $xuLy->getchieuCao()  ?>">
                </label>
            </div>
            <div>
                <label for="">
                    Đường viên
                    <input type="text" name="duongVien" value="<?php echo $xuLy->getduongVien()  ?>">
                </label>
                <label for="">
                    Canh lề
                    <select name="canhLe" id="">
                        <option value="">Trái</option>
                        <option value="">Phải</option>
                        <option value="">Giữa</option>
                    </select>
                </label>
            </div>
            <br>
            <button name="submit">Hiển thị</button>
            <br>
        </form>
        <div class="result" style="display:<?php echo $display ?>">
            <p><?php echo $xuLy->getTieuDe()  ?></p>
            <img src="./images/<?php echo $xuLy->getDuongDan()  ?>" title="<?php echo $xuLy->getTieuDe()  ?>" style="width:<?php echo $xuLy->getchieuRong()  ?>px;height:<?php echo $xuLy->getchieuCao()  ?>px;border:<?php echo $xuLy->getduongVien()  ?>px black solid">
        </div>
    </center>
</body>

</html>