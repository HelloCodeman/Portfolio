<?php

include_once "../db.php";

$que = $Que->find($_GET['id']);
// print_r($que);
// exit();

if ($que['display'] == 0) {
    $que['display'] == 1;
} else {
    $que['display'] == 0;
}

$Que->save($que);
print_r ($Que->save($que));

header("location:../admin.php");
