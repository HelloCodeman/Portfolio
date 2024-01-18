<?php
include_once "db.php";

$opt = $Que->find($_POST['opt']);
// $opt['count'] = $opt['count'] + 1;
$opt['count']++;


$sub = $Que->find($opt['subject_id']);
// $sub['count'] = $sub['count'] + 1;
$sub['count']++;

$Que->save($opt);
$Que->save($sub);

to("../back/result.php?id={$sub['id']}");