<?php
include_once "../api/db.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Member</title>
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
        <a class="btn btn-light" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">iLogin</a>
      </div>
    </div>
  </nav>

  <header class="p-3">
    <h1 class="text-center">會員中心</h1>
  </header>

  <div class="container align-center">
    <form method="post">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
          <label for="account" class="form-label fs-3">Account 帳號</label>
          <input type="text" class="form-control" id="acc">
        </div>
        <div class="col-3"></div>
      </div>
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
          <label for="password" class="form-label fs-3">Password 密碼</label>
          <input type="password" class="form-control" id="pw">
        </div>
        <div class="col-3"></div>
      </div>
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
          <label for="changepassword" class="form-label fs-3">Change Password 變更密碼</label>
          <input type="password" class="form-control" id="cpw">
        </div>
        <div class="col-3"></div>
      </div>
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
          <label for="email" class="form-label fs-3">Email 電子郵箱</label>
          <input type="text" class="form-control" id="email">
        </div>
        <div class="col-3"></div>
      </div>
      <div class="d-flex justify-content-center mt-2">
        <button type="submit" class="btn btn-primary">送出</button>
      </div>
    </form>
  </div>
</body>