<?php
include_once "db.php";

if(isset($_POST['id'])){
    $Student->del($_POST['id']);
}


?>