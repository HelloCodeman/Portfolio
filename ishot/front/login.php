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
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5>會員登入</h5>
  </div>
  <div class="offcanvas-body">
    <div class="container text-center">
      <form action="./api/login.php" method="post">
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