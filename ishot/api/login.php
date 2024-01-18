<?php
include_once "db.php";

$acc = $_POST['acc'];
$pw = $_POST['pw'];

$res = $User->count(['acc' => $acc, 'pw' => $pw]);

if ($res>0) {
  $_SESSION['user'] = $acc;
  to("../index.php");
} else {
  echo "<script>alert('帳號密碼錯誤');window.location.href ='../index.php'</script>";
}
