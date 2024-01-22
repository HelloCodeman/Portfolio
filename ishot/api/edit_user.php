<?php
include_once "db.php";

// find post 過來的值以確認是哪個會員進而去修改底下的參數
$user = $User->find($_POST['acc']);

$user['pw'] = $_POST['pw'];
$user['email'] = $_POST['email'];

// 更新資料庫中的會員資料
$User->save($user);

// 可以添加成功更新後的提示或重定向
echo "<script>alert('會員資料已成功更新'); window.location.href = '../back/mem.php';</script>";
