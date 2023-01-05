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
require_once "./vendor/function.php";
$xu_ly = new xu_ly();
$soThuNhat = $xu_ly->ganGiaTriA("");
$soThuHai = $xu_ly->ganGiaTriB("");
$kq = "";
if (isset($_POST['submit'])) {
    $soThuNhat = $xu_ly->ganGiaTriA($_POST['soThuNhat']);
    $soThuHai = $xu_ly->ganGiaTriB($_POST['soThuHai']);
    switch ($_POST['act']) {
        case 'cong':
            $kq = $xu_ly->tinhTong($soThuNhat, $soThuHai);
            break;
        case 'tru':
            $kq = $xu_ly->tinhHieu($soThuNhat, $soThuHai);
            break;
        case 'nhan':
            $kq = $xu_ly->tinhTich($soThuNhat, $soThuHai);
            break;
        case 'chia':
            $kq = $xu_ly->tinhThuong($soThuNhat, $soThuHai);
            break;
        default:
            $kq = "";
            break;
    }
}
?>

<body>
    <center>
        <form method="POST">
            <p>Phép tính</p>
            <div class="form-group">
                <label for="soThuNhat"> Số thứ nhất
                    <input type="text" id="soThuNhat" name="soThuNhat" value="<?php echo $soThuNhat ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="soThuHai"> Số thứ hai
                    <input type="text" id="soThuHai" name="soThuHai" value="<?php echo $soThuHai ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="cong"> Cộng
                    <input type="radio" id="cong" name="act" value="cong" checked>
                </label>
                <label for="tru"> Trừ
                    <input type="radio" id="tru" name="act" value="tru">
                </label>
                <label for="nhan"> Nhân
                    <input type="radio" id="nhan" name="act" value="nhan">
                </label>
                <label for="chia"> Chia
                    <input type="radio" id="chia" name="act" value="chia">
                </label>
            </div>
            <button name="submit">Tính</button>
            <br>
            <input type="number" value="<?php echo $kq ?>" disabled>
        </form>
    </center>
</body>

</html>