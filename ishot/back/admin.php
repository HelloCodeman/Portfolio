<?php
include_once "../api/db.php";

if (!isset($_SESSION['user'])) {
    // 如果未登入，將用戶重新導向到index.php
    echo "<script>alert('請先登入'); window.location.href = '../index.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../js/bootstrap.css">
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
                &nbsp;iAdmin
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="../index.php">iHome</a></li>
                    <li class="nav-item"><a class="nav-link" href="../back/mem.php">iMember</a></li>
                    <li class="nav-item"><a class="nav-link" href="../back/voteidx.php">iVote</a></li>
                    <li class="nav-item"><a class="nav-link" href="../back/admin.php">iAdmin</a></li>
                </ul>
                <!-- <a class="btn btn-light" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">iLogin</a> -->
            </div>
        </div>
    </nav>

    <header class="container p-3">
        <h1 class="text-center">帳號管理</h1>
    </header>
    <fieldset style="text-align: center;">
        <form action="./api/edit_user.php" method="post">
            <table style="width:55%;margin:auto;text-align:center">
                <tr>
                    <td>帳號</td>
                    <td>密碼</td>
                    <td>刪除</td>
                </tr>
                <?php
                $rows = $User->all();
                foreach ($rows as $row) {
                    if ($row['acc'] != 'admin') {
                ?>
                        <tr>
                            <td><?= $row['acc']; ?></td>
                            <!-- <td><?= $row['pw'] ?></td> -->
                            <td><?= str_repeat("*", mb_strlen($row['pw'])); ?></td>
                            <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </table>
            <div>
                <input type="submit" value="確定刪除">
                <input type="reset" value="清空選取">
            </div>
        </form>
        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/bootstrap.js"></script>
</body>

</html>