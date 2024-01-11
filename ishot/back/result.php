<?php
include_once "../api/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../js/bootstrap.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.js"></script>
  <title>投票結果</title>
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
            <div class="col-4">&nbsp;&nbsp; <?= $opt['count'] ?>票(<?= $rate * 100; ?>%)</div>
          </div>
        </li>
      <?php
      }
      ?>
    </ul>
    <button class="btn btn-primary d-block mx-auto my-5" onclick="location.href='../front/voteidx.php'">返回</button>
  </main>
</body>

</html>