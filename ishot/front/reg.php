<?php
include_once "../api/db.php"
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
                    <li class="nav-item"><a class="nav-link" href="../back/voteadmin.php">iAdmin</a></li>
                </ul>
                <!-- <a class="btn btn-light" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">iLogin</a> -->
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
                    <td class="clo" style="text-align: left;">Step1: 登入帳號</td>
                    <td><input type="text" name="acc" id="acc"></td>
                </tr>
                <tr>
                    <td class="clo" style="text-align: left;">Step2: 登入密碼</td>
                    <td><input type="password" name="pw" id="pw"></td>
                </tr>
                <tr>
                    <td class="clo" style="text-align: left;">Step3: 再次確認密碼</td>
                    <td><input type="password" name="pw2" id="pw2"></td>
                </tr>
                <tr>
                    <td class="clo" style="text-align: left;">Step4: 信箱(忘記密碼時使用)&nbsp;</td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center">
                        <input type="submit" value="註冊">
                        <input type="reset" value="清除">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <!-- <script>
        function reg() {
            let user = {
                acc: $(
                    "#acc").val(),
                pw: $(
                    "#pw").val(),
                pw2: $(
                    "#pw2").val(),
                email: $(
                    "#email").val()
            }

            if (user.acc != '' && user.pw != '' && user.pw2 != '' && user.email != '') {
                if (user.pw == user.pw2) {
                    $.post("./api/chk_acc.php", {
                            acc: user.acc
                        }

                        , (res) => {

                            //console.log(res)
                            if (parseInt(res) == 1) {
                                alert('帳號重複')
                            } else {
                                $.post('./api/reg.php', user, (res) => {
                                    alert('註冊完成，歡迎加入')
                                })
                            }
                        })
                } else {
                    alert("密碼錯誤")
                }
            } else {
                alert('不可空白')
            }
        }
    </script> -->
</body>