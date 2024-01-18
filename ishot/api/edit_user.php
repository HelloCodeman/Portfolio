<?php
include_once "db.php";

$res = $User->save($_POST);

if ($res > 0) {
  $_SESSION['msg'] = "更新成功";
} else {
  $_SESSION["msg"] = "資料無異動";
}

to("../front/mem.php");
