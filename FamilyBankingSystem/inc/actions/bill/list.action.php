<?php 
include_once "inc/session/sessioncheck.php";
include_once "inc/db/connection.php";
$userId = $user["id"];
$sql = "select * from bill where userId = '$userId'";
$bills =$db->__select($sql);