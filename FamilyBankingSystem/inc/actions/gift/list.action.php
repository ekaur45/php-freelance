<?php 
include_once "inc/session/sessioncheck.php";
include_once "inc/db/connection.php";
$userId = $user["id"];
$sql = "select * from voucher where userId = '$userId'";
$gifts =$db->__select($sql);