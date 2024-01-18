<?php
include_once "../api/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            <a class="navbar-brand" href="../index.php">
                <i class="fa-solid fa-camera-retro"></i>
                &nbsp;iShot
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="../index.php">iHome</a></li>
                    <li class="nav-item"><a class="nav-link" href="../back/mem.php">iMember</a></li>
                    <li class="nav-item"><a class="nav-link" href="../back/voteidx.php">iVote</a></li>
                    <li class="nav-item"><a class="nav-link" href="../back/admin.php">iAdmin</a></li>
                </ul>
                <a class="btn btn-light" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">iLogin</a>
            </div>
        </div>
    </nav>

    <header class="p-3">
        <h1 class="text-center">註冊</h1>
    </header>
    <fieldset style="margin: auto;text-align: center">
        <form action="../api/reg.php" method="post">
            <table style="margin: auto;text-align: center;">
                <p style="color: red;">*請設定您要註冊的帳號及密碼 (最長12個字元) </p>
                <tr>
                    <td class="" style="text-align: left;">Step1: 登入帳號</td>
                    <td><input type="text" name="acc" id="acc"></td>
                </tr>
                <tr>
                    <td class="" style="text-align: left;">Step2: 登入密碼</td>
                    <td><input type="password" name="pw" id="pw"></td>
                </tr>
                <tr>
                    <td class="" style="text-align: left;">Step3: 再次確認密碼</td>
                    <td><input type="password" name="pw2" id="pw2"></td>
                </tr>
                <tr>
                    <td class="" style="text-align: left;">Step4: 信箱(忘記密碼時使用)&nbsp;</td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center">
                        <input type="submit" value="註冊" class="mt-2">
                        <input type="reset" value="清除" class="mt-2">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5>會員登入</h5>
        </div>
        <div class="offcanvas-body">
            <div class="container text-center">
                <form action="../api/login.php" method="post">
                    <div class="form-outline">
                        <?php
                        if (isset($_SESSION['user'])) {
                            echo "歡迎光臨 " . $_SESSION['user'];
                            echo "&nbsp;";
                            echo "<br>";
                            echo "<a href='../api/logout.php' class='btn btn-dark' style='font-size:15px'>登出</a>";
                        ?>
                        <?php
                        } else {
                        ?>
                            <label for="account" class="form-label">帳號 Account</label>
                            <input type="text" name="acc" id="acc" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">密碼 Password</label>
                        <input type="password" name="pw" id="pw" class="form-control">
                    </div>
                    <div class="btn-custom">
                        <button type="submit" class="btn btn-primary" value="登入">登入</button>
                        <button type="button" class="btn btn-danger" value="離開">離開</button>
                    </div>
                </form>

                <div class="mt-1">
                    <a href="../front/forget.php">忘記密碼?</a>
                </div>
            <?php
                        };
            ?>
            </div>
        </div>
    </div>
    </div>

</body>