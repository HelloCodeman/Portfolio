<?php
include_once "db.php";

if (isset($_GET['id'])) {
  $Que->del($_GET['id']);
  $Que->del(['subject_id' => $_GET['id']]);
}


to("../back/voteadmin.php");
