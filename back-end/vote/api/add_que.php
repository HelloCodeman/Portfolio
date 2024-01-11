<?php
include_once "../db.php";

dd($_POST);
// 練習測試用
$data = [];
$data['text'] = $_POST['subject'];
$data['subject_id'] = 0;
$data['count'] = 0;
$data['display'] = 1;

$Que->save($data);

foreach ($_POST['opt'] as $opt) {
    $data = [];
    $subject_id = $Que->find(['text' => $_POST['subject']])['id'];
    $data['text'] = $opt;
    $data['subject_id'] = $subject_id;
    $data['count'] = 0;
    $data['display'] = 1;
    $Que->save($data);
};

header("location:../admin.php");
