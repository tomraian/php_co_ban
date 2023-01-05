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
$ten_chu_ho = "";
$chi_so_cu = "";
$chi_so_moi = "";
$don_gia = "";
$so_tien = "";

if (isset($_POST['submit'])) {
    $ten_chu_ho = $_POST['ten_chu_ho'];
    $chi_so_cu = $_POST['chi_so_cu'];
    $chi_so_moi = $_POST['chi_so_moi'];
    $don_gia = $_POST['don_gia'];
    if (!empty($chi_so_cu) || !empty($chi_so_moi)) {
        $so_tien = ($chi_so_moi - $chi_so_cu) * $don_gia;
    }
}
?>

<body>
    <center>
        <form method="POST">
            <p>Thanh toán tiền điện</p>
            <div class="form-group">
                <label for="ten_chu_ho"> Tên chủ hộ
                    <input type="text" id="ten_chu_ho" name="ten_chu_ho" value="<?php echo $ten_chu_ho ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="chi_so_cu"> Chỉ số cũ
                    <input type="number" id="chi_so_cu" name="chi_so_cu" value="<?php echo $chi_so_cu ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="chi_so_moi"> Chỉ số mới
                    <input type="number" id="chi_so_moi" name="chi_so_moi" value="<?php echo $chi_so_moi ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="don_gia"> Đơn giá
                    <input type="number" id="don_gia" name="don_gia" value="<?php echo $don_gia ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="so_tien"> Số tiền thanh toán
                    <input type="number" id="so_tien" name="so_tien" value="<?php echo $so_tien ?>" disabled>
                </label>
            </div>
            <button name="submit">Xem kết quả</button>
        </form>
    </center>
</body>

</html>