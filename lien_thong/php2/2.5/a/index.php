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
$SoKhach = $xuLy->setSoKhach("");
$Ngay = $xuLy->setNgay("");
$LoaiTiec = $xuLy->setLoaiTiec("");
$DiaDiem = $xuLy->setDiaDiem("");
$Ten = $xuLy->setTen("");
$DiaChi = $xuLy->setDiaChi("");
$GioiTinh = $xuLy->setGioiTinh("");
$Tuoi = $xuLy->setTuoi("");
$thongTin = $xuLy->setthongTin("");
$yeuCau = $xuLy->setyeuCau("");
if (isset($_POST['submit'])) {
    $display = "block";
    $SoKhach = $xuLy->setSoKhach($_POST['soKhach']);
    $Ngay = $xuLy->setNgay($_POST['ngay']);
    $LoaiTiec = $xuLy->setLoaiTiec($_POST['loaiTiec']);
    $DiaDiem = $xuLy->setDiaDiem($_POST['diaDiem']);
    $Ten = $xuLy->setTen($_POST['ten']);
    $DiaChi = $xuLy->setDiaChi($_POST['diaChi']);
    $GioiTinh = $xuLy->setGioiTinh($_POST['gioiTinh']);
    $Tuoi = $xuLy->setTuoi($_POST['tuoi']);
    $thongTin = $xuLy->setthongTin($_POST['thongTin']);
    $yeuCau = $xuLy->setyeuCau($_POST['yeuCau']);
    // $chitietngay = $xuLy->setchitietngay($_POST['chitietngay']);
}
?>

<body>
    <center>
        <form method="POST" enctype="multipart/form-data">
            <p>Thông tin đặt chỗ</p>
            <div class="form-group">
                <label for="">Số khách tham dự
                    <input type="number" name="soKhach" id="" value="<?php echo $xuLy->getSoKhach() ?>">
                </label>
                <label for="">Ngày
                    <input type="date" name="ngay" id="" value="<?php echo $xuLy->getNgay() ?>">

                    <!-- <input type="hidden" name="chitietngay" value=""> -->
                </label>
            </div>
            <div class="form-group">
                <span>Loại tiệc: </span>
                <label for="">Tiệc sáng
                    <input type="checkbox" name="loaiTiec[]" id="" value="Tiệc sáng" checked>
                </label>
                <label for="">Tiệc trưa
                    <input type="checkbox" name="loaiTiec[]" id="" value="Tiệc trưa">
                </label>
                <label for="">Tiệc chiều
                    <input type="checkbox" name="loaiTiec[]" id="" value="Tiệc chiều">
                </label>
            </div>
            <div class="form-group">
                <span>Địa điểm: </span>
                <label for="">Trong nhà
                    <input type="radio" name="diaDiem" id="" value="0" <?php if ($xuLy->getDiaDiem() == 0) echo 'checked' ?>>
                </label>
                <label for="">Ngoài trời
                    <input type="radio" name="diaDiem" id="" value="1" <?php if ($xuLy->getDiaDiem() == 1) echo 'checked' ?>>
                </label>
            </div>
            <div class="form-group">
                <label for="">Tên quý khách
                    <input type="text" name="ten" id="" value="<?php echo $xuLy->getTen() ?>">
                </label>
                <label for="">Địa chỉ
                    <input type="text" name="diaChi" id="" value="<?php echo $xuLy->getDiaChi() ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="">Độ tuổi
                    <select name="tuoi" id="">
                        <option value="19-34">Từ 19 đến 34 tuổi</option>
                        <option value="35-60">Từ 35 đến 60 tuổi</option>
                        <option value="60-70">Từ 60 đến 70 tuổi</option>
                    </select>
                </label>
                <span>Giới tính:</span>
                <label for="">
                    Nam
                    <input type="radio" name="gioiTinh" id="" value="0" <?php if ($xuLy->getGioiTinh() == 0) echo 'checked' ?>>
                </label>
                <label for="">
                    Nữ
                    <input type="radio" name="gioiTinh" id="" value="1" <?php if ($xuLy->getGioiTinh() == 1) echo 'checked' ?>>
                </label>
            </div>
            <div class="form-group">
                <label for="">Quý khách biết cửa hàng qua
                    <select name="thongTin" id="">
                        <option value="Báo đài">Báo đài</option>
                        <option value="Tivi">Tivi</option>
                        <option value="Facebook">Facebook</option>
                    </select>
                </label>
            </div>
            <div class="form-group">
                <label for="">Yêu cầu thêm:
                    <br>
                    <textarea name="yeuCau" id="" cols="60" rows="5">
                    <?php echo $xuLy->getYeuCau() ?>
                    </textarea>
                </label>
            </div>
            <button name="submit">Đặt chỗ</button>
        </form>
        <hr>
        <div class="result" style="display:<?php echo $display ?>">
            <b>Thông tin khách hàng</b>
            <div>
                <span>Họ tên: <?php echo $xuLy->getTen() ?></span> - <span>Độ tuổi: <?php echo $xuLy->getTuoi() ?></span> - <span>Giới tính: <?php echo ($xuLy->getGioiTinh() == 0) ? "Nam" : "Nữ" ?></span>
                - <span>Địa chỉ: <?php echo $xuLy->getDiaChi() ?></span>
            </div>
            <b>Thông tin đặt chỗ</b>
            <div>
                <span>Số khách tham gia bữa tiệc: <?php echo $xuLy->getSoKhach() ?> </span> - <span>Ngày đặt tiệc: <?php echo date("d/m/Y", strtotime($xuLy->getNgay())); ?> </span>
                <span>Loại tiệc:
                    <?php $loaiTiec = $xuLy->getLoaiTiec();
                    foreach ($loaiTiec as $tiec) {
                        echo $tiec . " ";
                    }
                    ?>
                </span> - <span>Địa điểm: <?php echo ($xuLy->getDiaDiem() == 0) ? "Trong nhà" : "Ngoài trời"; ?></span>
            </div>
            <b>Các yêu cầu kèm theo:</b>
            <?= nl2br($xuLy->getYeuCau()) ?>
            <br>
            <b>Quý khách biết chúng tôi qua</b>
            <?php echo $xuLy->getThongTin() ?>
            <p>Chúng tôi đã nhận thông tin đặt chỗ của quý khách vào <?php date_default_timezone_set('Asia/Ho_Chi_Minh');
                                                                        echo date("d/m/Y h:m:s") ?></p>
        </div>
    </center>
</body>

</html>