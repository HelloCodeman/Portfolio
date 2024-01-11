<?php
include_once "db.php";

session_start();
unset($_SESSION['user']);
to("../index.php");
