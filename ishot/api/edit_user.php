<?php
include_once "db.php";

if (isset($_POST['del'])) {
  //使用迴圈來刪除指定id的帳號資料
  foreach ($_POST['del'] as $id) {
    $User->del($id);
  }
}

// 可以添加成功更新後的提示或重定向
echo "<script>alert('會員資料已成功更新'); window.location.href = '../back/admin.php';</script>";
