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
$tenSV = "";
$tenGV = "";
$lop = "";
$ngay = "";
$phanCong = "";
$hinhThuc = "";
$display = "none";
?>

<body>
    <center>
        <form method="POST">
            <p>Theo dõi học tập</p>
            <div class="form-group">
                <label for="tenSV"> Tên sv
                    <input type="text" id="tenSV" name="tenSV" value="<?php echo $tenSV ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="gvPhuTrach"> GV phụ trách
                    <input type="text" id="tenGV" name="tenGV" value="<?php echo $tenGV ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="lop"> Lớp
                    <input type="text" id="lop" name="lop" value="<?php echo $lop ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="ngay"> Ngày
                    <input type="date" id="ngay" name="ngay" value="<?php echo $ngay ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="phanCong"> Những việc phân công chưa làm
                    <br>
                    <textarea name="phanCong" id="phanCong" cols="20" rows="3"></textarea>
                </label>
            </div>
            <div class="form-group">
                <label>Chọn hình thức hoàn thành
                    <br>
                    <input type="radio" name="hinhThuc" value=" Những việc chưa làm sẽ hoàn thành ở Lớp" checked> Những việc chưa làm sẽ hoàn thành ở Lớp
                    <br>
                    <input type="radio" name="hinhThuc" value="Sẽ hoàn thành ở nhà">Sẽ hoàn thành ở nhà
                </label>
            </div>
            <button name="submit">Ghi nhận</button>
            <br>
            <?php
            if (isset($_POST['submit'])) {
                $display = "block";
                $tenSV = $_POST['tenSV'];
                $tenGV = $_POST['tenGV'];
                $lop = $_POST['lop'];
                $ngay = $_POST['ngay'];
                $phanCong = $_POST['phanCong'];
                $hinhThuc = $_POST['hinhThuc'];
            }
            ?>
            <div style="display: <?php echo $display ?>;">
                <p>thông tin phiếu theo dõi</p>
                <p>Tên sinh viên: <?php echo $tenSV ?></p> <span>Lớp <?php echo $lop ?></span>
                <p>Ngày đăng ký: <?php echo $ngay ?></p> <span>GV phụ trách <?php echo $tenGV ?></span>
                <p>Việc chưa làm: <?php echo $phanCong ?></p>
                <p>Hình thức hoàn thành: <br> <?php echo $hinhThuc ?></p>
            </div>
        </form>
    </center>
</body>

</html>