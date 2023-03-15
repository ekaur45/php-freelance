<?php 
include_once "inc/session/sessioncheck.php";
include_once "inc/db/connection.php";
$userId = $_GET["id"];
$sql = "select * from users where id = '$userId'";
$user = $db->__selectSingle($sql);