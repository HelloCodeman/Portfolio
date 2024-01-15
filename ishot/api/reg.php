<?php
include_once "db.php";

if ($_POST['pw'] !== $_POST['pw2']) {
  echo "<script>
  alert('請確認兩次輸入的密碼為相同');window.location.href ='../front/reg.php';</script>";
  exit;
}

unset($_POST['pw2']);
$User->save($_POST);

to("../index.php");
