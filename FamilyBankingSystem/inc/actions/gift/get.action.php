<?php 
include_once "inc/session/sessioncheck.php";
include_once "inc/db/connection.php";
$userId = $_GET["id"];
$sql = "select * from voucher where id = '$userId'";
$obj = $db->__selectSingle($sql);