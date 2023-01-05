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
$content = null;
$bg = null;
$color = null;
if (isset($_POST['submit'])) {
    $content = $_POST['content'];
    $bg = $_POST['bg'];
    $color = $_POST['color'];
}
?>

<body>
    <center>
        <form method="POST">
            <p>Định dạng màu chữ - màu nền</p>
            <div class="form-group">
                <label for="content"> Nội dung
                    <input type="text" id="content" name="content" value="<?php echo $content ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="bg"> Màu nền hoặc mã màu #
                    <input type="text" id="bg" name="bg" value="<?php echo $bg ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="color"> Màu chữ hoặc mã màu #
                    <input type="text" id="color" name="color" value="<?php echo $color ?>">
                </label>
            </div>
            <button name="submit">Xem kết quả</button>
        </form>
    </center>
    <?php
    if (isset($_POST['submit'])) {
        $result = "<center><p style='color:$color;background:$bg;font-size:30px;padding:10px'>$content</p></center>";
        echo $result;
    }
    ?>
</body>

</html>