<?php
include_once "db.php";
//dd($_POST);
foreach ($_POST['id'] as $key => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $Title->del($id);
    } else {
        $row = $Title->find($id);
        $row['text'] = $_POST['text'][$key];
        $row['display'] = ($id == $_POST['display']) ? 1 : 0;
        $Title->save($row);
    }
}

header("location:index.php");
