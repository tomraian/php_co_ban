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
$chuoiMangA = "";
$chuoiMangB = "";
$chuoiMangC = "";
$chuoiMangCTangDan = "";
$chuoiMangCGiamDan = "";
$doDaiMangA = "";
$doDaiMangB = "";
$mangA = [];
$mangB = [];
$mangC = [];
// if (isset($_POST['submit'])) {
//     $chuoiMangA = $_POST['mangA'];
//     $chuoiMangB = $_POST['mangB'];
//     $mangA = explode(",", $chuoiMangA);
//     $mangB = explode(",", $chuoiMangB);
//     ($chuoiMangA == "") ? $doDaiMangA = 0 :  $doDaiMangA = count($mangA);
//     ($chuoiMangB == "") ? $doDaiMangB = 0 :  $doDaiMangB = count($mangB);
//     $mangC = array_merge($mangA, $mangB);
//     print_r($mangC);
//     $chuoiMangC = implode(",", $mangC);
//     $chuoiMangCTangDan = sort($mangC);
//     $chuoiMangCGiamDan = rsort($mangC);
// }
$m = array([0] => 1, [1] => 2, [2] => 4, [3] => 6, [4] => 87, [5] => 0, [6] => 14, [7] => 66, [8] => 2);
// print_r(sort($m));

?>

<body>
    <center>
        <form method="POST">
            <p>Đếm phần tử, ghép mảng và sắp xếp</p>
            <div class="form-group">
                <label for="mangA"> Mảng A
                    <input type="text" id="mangA" name="mangA" value="<?php echo $chuoiMangA ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="mangB"> Mảng B
                    <input type="text" id="mangB" name="mangB" value="<?php echo $chuoiMangB ?>">
                </label>
            </div>
            <button name="submit">Thực hiện</button>
        </form>
        <div>
            <div class="form-group">
                <label for="mangA"> Số phần tử mảng A
                    <input type="text" value="<?php echo $doDaiMangA ?>" disabled>
                </label>
            </div>
            <div class="form-group">
                <label for="mangA"> Số phần tử mảng B
                    <input type="text" value="<?php echo $doDaiMangB ?>" disabled>
                </label>
            </div>
            <div class="form-group">
                <label for="mangA"> Mảng C
                    <input type="text" value="<?php echo $chuoiMangC ?>" disabled>
                </label>
            </div>
            <div class="form-group">
                <label for="mangA"> Mảng C tăng dần
                    <input type="text" value="<?php echo $chuoiMangCTangDan ?>" disabled>
                </label>
            </div>
            <div class="form-group">
                <label for="mangA"> Mảng C giảm dần
                    <input type="text" value="<?php echo $chuoiMangCGiamDan ?>" disabled>
                </label>
            </div>
        </div>
    </center>
</body>

</html>