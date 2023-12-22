<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        @media (max-width: 768px) {
            /* 小型螢幕的樣式 */
        }

        @media (min-width: 769px) and (max-width: 1024px) {
            /* 中型螢幕的樣式 */
        }

        @media (min-width: 1025px) {
            /* 大型螢幕的樣式 */
        }

        body {
            background-image: url('January.jpg');
            background-size: auto;
        }

        .navbar {
            background-color: #333;
            /* 背景顏色 */
            color: #fff;
            /* 文字顏色 */
            padding: 10px;
            /* 內邊距 */
            display: flex;
            justify-content: space-around;
            /* 將連結放在Navbar兩側 */
            align-items: center;
            /* 垂直置中 */
        }

        .navbar2 {
            background-color: #333;
            /* 背景顏色 */
            color: #fff;
            /* 文字顏色 */
            padding: 10px;
            /* 內邊距 */
            display: flex;
            justify-content: space-around;
            /* 將連結放在Navbar兩側 */
            align-items: center;
            /* 垂直置中 */
            width: 20vw;
            margin: auto;
        }

        .navbar a {
            text-decoration: none;
            /* 去掉連結底線 */
            color: #fff;
            /* 連結顏色 */
            margin: 0 10px;
            /* 連結之間的間距 */
        }

        .navbar2 a {
            text-decoration: none;
            /* 去掉連結底線 */
            color: #fff;
            /* 連結顏色 */
            margin: 0 10px;
            /* 連結之間的間距 */
        }

        .navbar a:hover {
            text-decoration: none;
            /* background-color: lemonchiffon; */
            color: rgb(285, 155, 155);
            transform: scale(1.5);
        }

        .navbar2 a:hover {
            text-decoration: none;
            /* background-color: lemonchiffon; */
            color: rgb(285, 155, 155);
            /* transform: scale(1.5); */
        }

        table {
            border-collapse: collapse;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 1px;
        }

        .week {
            background-color: lightgoldenrodyellow;
            border: 2px solid #999;
            padding: 28px;
            text-align: center;
            font-weight: bolder;
            font-size: 25px;
            font-family: '標楷體', sans-serif;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
        }

        td {
            border: 1px solid #999;
            padding: 30px;
            text-align: center;
            font-size: 28px;
            border-radius: 10px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
        }

        td:hover {
            text-align: center;
            transform: scale(1.1);
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['month']) && isset($_GET['year'])) {
        $month = $_GET['month'];
        $year = $_GET['year'];
    } else {
        $month = date('m');
        $year = date("Y");
    }

    $thisFirstDay = date("{$year}-{$month}-1");
    $thisFirstDate = date('w', strtotime($thisFirstDay));
    $thisMonthDays = date("t");
    $thisLastDay = date("{$year}-{$month}-$thisMonthDays");
    $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
    $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
    ?>
    <div class="navbar">
        <?php
        $nextYear = $year;
        $prevYear = $year;
        if (($month + 1) > 12) {
            $next = 1;
            $nextYear = $year + 1;
        } else {
            $next = $month + 1;
        }

        if (($month - 1) < 1) {
            $prev = 12;
            $prevYear = $year - 1;
        } else {
            $prev = $month - 1;
        }

        ?>
        <a href="?year=<?= $prevYear; ?>&month=<?= $prev; ?>">&nbsp;&nbsp;&nbsp;&nbsp;上一個月<br>Previous Month</a>
        <?php
        echo "<h1 style='text-align:center'>";
        echo date("西元{$year}年{$month}月");
        echo "</h1>";
        ?>
        <a href="?year=<?= $nextYear; ?>&month=<?= $next; ?>">&nbsp;&nbsp;下一個月<br>Next Month</a>
    </div>
    <br>
    <table>
        <tr>
            <td class="week">日<br>Sun.</td>
            <td class="week">一<br>Mon.</td>
            <td class="week">二<br>Tue.</td>
            <td class="week">三<br>Wed.</td>
            <td class="week">四<br>Thu.</td>
            <td class="week">五<br>Fri.</td>
            <td class="week">六<br>Sat.</td>
        </tr>
        <?php
        for ($i = 0; $i < $weeks; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 7; $j++) {
                $addDays = 7 * $i + $j;
                $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
                if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                    echo "<td style='background:pink'>";
                } else {
                    echo "<td>";
                }
                if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
                    echo date("j", $thisCellDate);
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>

        <?php
        $monthImages = array(
            "January.jpg",
            "February.jpg",
            "March.jpg",
            "April.jpg",
            "May.jpg",
            "June.jpg",
            "July.jpg",
            "August.jpg",
            "September.jpg",
            "October.jpg",
            "November.jpg",
            "December.jpg"
        );

        $backgroundImage = $monthImages[$month - 1];
        // 根據月份選擇背景圖片
        
        echo "<style>";
        echo "body { background-image: url('$backgroundImage'); background-size: cover; }";
        echo "</style>";
        ?>
    </table>
    <br>
    <div class="navbar2">
        <form method="get">
            <label for="year">年：</label>
            <select id="year" name="year">
                <?php
                $currentYear = date("Y");
                for ($i = $currentYear - 2023; $i <= $currentYear + 7977; $i++) {
                    $selected = ($i == $year) ? "selected" : "";
                    echo "<option value='$i' $selected>$i</option>";
                }
                ?>
            </select>
            <label for="month">月：</label>
            <select id="month" name="month">
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    $selected = ($i == $month) ? "selected" : "";
                    echo "<option value='$i' $selected>$i</option>";
                }
                ?>
            </select>
            <input type="submit" value="顯示該月">
            <a href="./index.php">&nbsp;回到今天</a>
        </form>
    </div>

</body>

</html>