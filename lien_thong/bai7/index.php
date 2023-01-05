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
$so_a = "";
$so_b = "";

if (isset($_POST['submit'])) {
    $so_a = $_POST['so_a'];
    $so_b = $_POST['so_b'];
    $so_lon_nhat = $so_a;
    if ($so_b > $so_a) {
        $so_lon_nhat = $so_b;
    }
}
?>

<body>
    <center>
        <form method="POST">
            <p>So sánh 2 số</p>
            <div class="form-group">
                <label for="so_a"> Số A:
                    <input type="text" id="so_a" name="so_a" value="<?php echo $so_a ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="so_b"> Số b:
                    <input type="number" id="so_b" name="so_b" value="<?php echo $so_b ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="so_lon_nhat"> Số lớn nhất:
                    <input type="number" value="<?php echo $so_lon_nhat ?>" disabled>
                </label>
            </div>
            <button name="submit">Xem kết quả</button>
        </form>
    </center>
</body>

</html>