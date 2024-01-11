<?php
include_once "../api/db.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票後台</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/js.js"></script>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <style>
        body {
            font-family: fantasy;
            font-style: italic;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" id="top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fa-solid fa-camera-retro"></i>
                &nbsp;iShot
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="../index.php">iHome</a></li>
                    <li class="nav-item"><a class="nav-link" href="../front/mem.php">iMember</a></li>
                    <li class="nav-item"><a class="nav-link" href="../front/voteidx.php">iVote</a></li>
                    <li class="nav-item"><a class="nav-link" href="../back/admin.php">iAdmin</a></li>
                </ul>
                <!-- <a class="btn btn-light" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">iLogin</a> -->
            </div>
        </div>
    </nav>

    <header class="p-3">
        <h1 class="text-center">投票主題管理</h1>
    </header>

    <main class="container">
        <fieldset>
            <legend style="text-align: center;">
                新增問卷
            </legend>
            <form action="./api/add_que.php" method="post">
                <div class="d-flex">
                    <div class="mx-auto">
                        <!-- 主題 -->
                        <div class="col bg-light p-2">
                            <label for="subject">主題名稱&nbsp;</label>
                            <input type="text" name="subject" id="">
                        </div>
                        <!-- 選項 -->
                        <div class="col bg-light p-2">
                            <label for="">主題選項&nbsp;</label>
                            <input type="text" name="opt[]">
                            <input type="button" value="更多" onclick="more()">
                        </div>
                        <input type="submit" value="新增">
                        <input type="reset" value="清空">
                    </div>
                </div>
            </form>
        <!-- </fieldset>
        <fieldset> -->
            <hr>
            <legend style="text-align: center;">正在進行的投票</legend>
            <div class="col-8 mx-auto">
                <table class="table">
                    <tr>
                        <td>編號</td>
                        <td>主題內容</td>
                        <td>操作</td>
                    </tr>
                    <?php
                    $ques = $Que->all(['subject_id' => 0]);
                    foreach ($ques as $idx => $que) {
                    ?>
                        <tr>
                            <td><?= $idx + 1; ?></td>
                            <td><?= $que['text']; ?></td>
                            <td>
                                <a href="./api/show.php?id=<?= $que['id']; ?>" class="btn <?= ($que['display'] == 1) ? 'btn-info' : 'btn-secondary'; ?>">
                                    <?= ($que['display'] == 1) ? '顯示' : '隱藏'; ?>
                                </a>
                                <button class="btn btn-success">編輯</button>
                                <a href="./api/del.php?id=<?= $que['id']; ?>">
                                    <button class="btn btn-danger">刪除</button>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </fieldset>
    </main>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>

</html>
<script>
    function more() {
        let opt = `<div class="p-2">
                        <label for="">選項</label>
                        <input type="text" name="opt[]">
                    </div>`
        $("#option").before(opt)
    }
</script>