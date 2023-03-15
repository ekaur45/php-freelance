<?php 
include_once "inc/session/sessioncheck.php";
include_once "inc/db/connection.php";
$userId = $_GET["id"];
$sql = "select * from bill where id = '$userId'";
$bill = $db->__selectSingle($sql);