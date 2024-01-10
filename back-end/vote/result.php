<?php include_once "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票結果</title>
    <link rel="stylesheet" href="./bootstrap.css">
</head>

<body>
    <header class="p-3">
        <h1 class="text-center">問卷投票</h1>
    </header>
    <main class='container'>
        <?php
        $subject = $Que->find($_GET['id']);
        ?>
        <h2 class="text-center"><?= $subject['text']; ?></h2>
        <br>
        <ul class="list-group col-6 mx-auto">
            <?php
            $opts = $Que->all(['subject_id' => $_GET['id']]);
            foreach ($opts as $idx => $opt) {
                $div = ($subject['count'] > 0) ? $subject['count'] : 1;
                $rate = round($opt['count'] / $div, 3);
            ?>
                <li class="list-group-item list-group-item-action d-flex">
                    <div class="col-6">
                        <?= $idx + 1; ?>.
                        <?= $opt['text']; ?>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="col-8 bg-secondary" style="width:<?= $rate * 0.667 * 100; ?>%"></div>
                        <div class="col-4">&nbsp;&nbsp; <?= $opt['count'] ?>票(<?=$rate*100;?>%)</div>
                    </div>
                </li>
            <?php
            }
            ?>
        </ul>
        <button class="btn btn-primary d-block mx-auto my-5" onclick="location.href='index.php'">返回</button>
    </main>
    <script src="./jquery.js"></script>
    <script src="./bootstrap.js"></script>
</body>

</html>