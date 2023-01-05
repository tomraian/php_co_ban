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
$canhA = "";
$canhB = "";

if (isset($_POST['submit'])) {
    $canhA = $_POST['canhA'];
    $canhB = $_POST['canhB'];
    $canhHuyen = round(sqrt(pow($canhA, 2) + pow($canhB, 2)), 0);
}
?>

<body>
    <center>
        <form method="POST">
            <p>Cạnh huyền tam giác vuông</p>
            <div class="form-group">
                <label for="canhA"> Cạnh A:
                    <input type="text" id="canhA" name="canhA" value="<?php echo $canhA ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="canhB"> Cạnh b:
                    <input type="number" id="canhB" name="canhB" value="<?php echo $canhB ?>">
                </label>
            </div>
            <div class="form-group">
                <label for="so_tien"> Cạnh Huyền:
                    <input type="number" value="<?php echo $canhHuyen ?>" disabled>
                </label>
            </div>
            <button name="submit">Xem kết quả</button>
        </form>
    </center>
</body>

</html>