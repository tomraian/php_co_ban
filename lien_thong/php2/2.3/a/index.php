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
$display = "none";
$dong = null;
$cot = null;
$rong = null;
$day = null;
$khoangCachO = null;
$khoangCachDong = null;
$noiDung = null;
$noiDungDong = null;
$noiDungCot = null;
$mau = null;
if (isset($_POST['submit'])) {
    $display = "block";
    $dong = $xuLy->setdong($_POST['dong']);
    $cot = $xuLy->setcot($_POST['cot']);
    $rong = $xuLy->setrong($_POST['rong']);
    $day = $xuLy->setday($_POST['day']);
    $khoangCachO = $xuLy->setkhoangCachO($_POST['khoangCachO']);
    $khoangCachDong = $xuLy->setkhoangCachDong($_POST['khoangCachDong']);
    $noiDung = $xuLy->setnoiDung($_POST['noiDung']);
    $noiDungDong = $xuLy->setnoiDungDong($_POST['noiDungDong']);
    $noiDungCot = $xuLy->setnoiDungCot($_POST['noiDungCot']);
    $mau = $xuLy->setmau($_POST['mau']);
    // $xuLy->getdong($_POST['dong']);
    // $xuLy->getcot($_POST['cot']);
    // $xuLy->getrong($_POST['rong']);
    // $xuLy->getday($_POST['day']);
    // $xuLy->getkhoangCachO($_POST['khoangCachO']);
    // $xuLy->getkhoangCachDong($_POST['khoangCachDong']);
    // $xuLy->getnoiDung($_POST['noiDung']);
    // $xuLy->getnoiDungDong($_POST['noiDungDong']);
    // $xuLy->getnoiDungCot($_POST['noiDungCot']);
    // $xuLy->getmau($_POST['mau']);
}
?>

<body>
    <center>
        <form method="POST">
            <p>Vẽ bảng</p>
            <div class="form-group">
                <label for="">Số dòng
                    <input type="text" name="dong" id="" value="<?= $xuLy->getdong() ?>">
                </label>
                <label for="">Số cột
                    <input type="text" name="cot" id="" value="<?= $xuLy->getcot() ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="">Độ rộng
                    <input type="text" name="rong" value="<?= $xuLy->getrong() ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="">Độ dày đường viền
                    <input type="text" name="day" value="<?= $xuLy->getday() ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="">Khoảng cách ô
                    <input type="text" name="khoangCachO" value="<?= $xuLy->getkhoangCachO() ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="">Khoảng cách dòng
                    <input type="text" name="khoangCachDong" value="<?= $xuLy->getkhoangCachDong() ?>">
                </label>
            </div>
            <hr>
            <div class="form-group">
                <label for="">Nội dung
                    <input type="text" name="noiDung" value="<?= $xuLy->getnoiDung() ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="">Dòng
                    <input type="text" name="noiDungDong" value="<?= $xuLy->getnoiDungDong() ?>">
                </label>
                <label for="">Cột
                    <input type="text" name="noiDungCot" value="<?= $xuLy->getnoiDungCot() ?>">
                </label>
                <label for="">Màu nền
                    <select name="mau" id="">
                        <option value="">Vàng</option>
                        <option value="">Đỏ</option>
                    </select>
                </label>
            </div>
            <button name="submit">Tạo bảng</button>
        </form>
        <hr>
        <div class="result" style="display:<?php echo $display ?>">
            <table border="<?= $xuLy->getday($_POST['day']) ?>" height="<?= $xuLy->getrong($_POST['rong']) ?>" width="<?= $xuLy->getrong($_POST['rong']) ?>" cellspacing="<?= $xuLy->getkhoangCachDong($_POST['khoangCachDong']) ?>" cellpadding="<?= $xuLy->getkhoangCachO($_POST['khoangCachO']) ?>">
                <?php
                $content = $xuLy->getnoiDung($_POST['noiDung']);
                for ($i = 1; $i <=  $xuLy->getdong($_POST['dong']); $i++) {
                ?>
                    <tr>
                        <?php
                        for ($j = 1; $j <=  $xuLy->getcot($_POST['cot']); $j++) {
                        ?>
                            <td bgcolor="<?php
                                            if ($i == $xuLy->getnoiDungDong($_POST['noiDungDong']) && $j == $xuLy->getnoiDungCot($_POST['noiDungCot'])) {
                                                echo "red";
                                            }
                                            ?>">
                                <?php
                                if ($i == $xuLy->getnoiDungDong($_POST['noiDungDong']) && $j == $xuLy->getnoiDungCot($_POST['noiDungCot'])) {
                                    echo $content;
                                }
                                ?>
                            </td>
                        <?php
                        }
                        ?>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </center>
</body>

</html>