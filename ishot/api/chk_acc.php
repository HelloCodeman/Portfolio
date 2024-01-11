<?php
include_once "db.php";

$acc = $_POST['acc'];
$res = $User->count(['acc' => $_POST['acc']]);

if ($res > 0) {
    $_SESSION['user'] = $acc;
    to('../index.php');
} else {
    to('../index.php?error');
}
