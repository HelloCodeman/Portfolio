<?php
include_once "db.php";

$user = $User->find($user['acc']);

$pw = $_POST['pw'];
$email = $_POST['email'];

// 確認是否找到對應的會員
if ($user) {
  // 更新資料庫中的會員資料
  $user['pw'] = $pw;
  $user['email'] = $email;
}
// 假設您的 save 方法能夠正確地更新資料庫中的資料
$User->save($user);

  // 可以添加成功更新後的提示或重定向
  echo "<script>alert('會員資料已成功更新'); window.location.href = '../back/mem.php';</script>";
