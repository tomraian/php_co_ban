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

    :root {
        --maunen: #ffadad;
        --mauchu: #fff;
    }

    table.calendar {
        width: 90%;
        margin-right: auto;
        margin-left: auto;
        position: relative;
        text-align: center;
    }

    table.calendar tr:first-child td {
        text-align: right;
        font-size: 14pt;
        margin: 0;
        width: 90%;
        position: relative;
        margin-left: auto;
        margin-right: auto;
    }

    table.calendar tr:nth-child(2) td {
        background: var(--maunen);
        color: var(--mauchu);
        font-weight: bold;
        text-align: center;
        width: calc(100% / 7);
        border: 1px solid #999;
        font-size: 12px;
    }

    table.calendar tr:nth-child(n+3) td[data-day='9'] {
        background: silver;
        color: #444;
        font-weight: bold;
        text-align: right;
        width: calc(100% / 7);
        border: 1px solid #999;
        padding-right: 15px;
        font-size: 11pt;
        pointer-events: none
    }

    table.calendar tr:nth-child(n+3) td[data-day='2'] {
        background: var(--softred);
        color: #444;
        font-weight: bold;
        text-align: right;
        width: calc(100% / 7);
        border: 1px solid #999;
        padding-right: 15px;
        font-size: 11pt;
    }

    table.calendar tr:nth-child(n+3) td[data-day='1'] {
        background: var(--softgreen);
        color: #444;
        font-weight: bold;
        text-align: right;
        width: calc(100% / 7);
        border: 1px solid #999;
        padding-right: 15px;
        font-size: 11pt;
        cursor: pointer;
    }

    table.calendar tr:nth-child(n+3) td[data-day='0'] {
        background: #eee;
        font-weight: bold;
        text-align: center;
        width: calc(100% / 7);
        border: 1px solid #999;
    }
</style>
<?php
require_once "./vendor/function.php";
require_once "./vendor/lib.php";
$xuLy = new xu_ly();
$display = "none";
function draw_calendar($month, $year, $Monthname)
{

    $wd = date('w', mktime(0, 0, 0, $month, 1, $year)); // $wd = weekdaynumber [0|1|...|6] = Sun,Mon,...,Sat
    $dim = date('t', mktime(0, 0, 0, $month, 1, $year)); // $dim = days in month 28,29,30 or 31
    $calmonth = array_fill(0, 42, "<td data-day=0></td>"); // fill array with 42 defaults, a month can run over 6 weeks max

    $day = 1;
    for ($i = $wd; $i < $dim + $wd; $i++) {
        $calmonth[$i] = "<td>$day</td>";
        // or $calmonth[$i] = userfunction($day, $month, $year);
        $day++;
    }

    // build calendar, row1 = Monthname year; row2 = Sun,Mon,...,Sat
    $calendar = "<table class=calendar border='1'><tr><td colspan=7>$Monthname/$year</td></tr>";
    $calendar .= "<tr><td>" . implode("</td><td>", array('CN', 'T2 ', 'T3', 'T4', 'T5', 'T6', 'T7')) . "</td></tr>";

    for ($i = 0; $i < count($calmonth); $i = $i + 7) // build calendar week by week, optional skip last empty row(s)
    {
        $week = implode('', array_slice($calmonth, $i, 7));
        if ($week != str_repeat('<td data-day=0></td>', 7)) {
            $calendar .= "<tr>$week</tr>";
        }
    }
    $calendar .= "</table>";
    return $calendar;
}
$year = null;
$month = null;
if (isset($_POST['submit'])) {
    $display = "block";
    $year = $_POST["year"];
    $month = $_POST["month"];
}

?>

<body>
    <center>
        <form method="POST" enctype="multipart/form-data">
            <p>In lịch</p>
            <div id="calendar">
                <label>Tháng: </label>
                <select name="month">
                    <?php for ($i = 1; $i <= 12; $i++) : ?>
                        <option <?php if ($month == $i) echo 'selected' ?>><?= $i ?></option>
                    <?php endfor ?>
                </select>
                <label>Năm: </label>
                <select name="year">
                    <?php for ($i = 2000; $i <=  date("Y") + 10; $i++) : ?>
                        <option <?php if ($year == $i) echo 'selected' ?>><?= $i ?></option>
                    <?php endfor ?>

                </select>
            </div>
            <br>
            <button name="submit">In lịch</button>
        </form>
        <hr>
        <div class="result" style="display:<?php echo $display ?>">
            <?php
            echo draw_calendar($month, $year, 'Tháng ' . $month);
            ?>
        </div>
    </center>
</body>

</html>