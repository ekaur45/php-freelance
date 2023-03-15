<?php 
include_once "inc/session/sessioncheck.php";
include_once "inc/db/connection.php";
$userId = $user["id"];
$sql = "select * from debits where userId = '$userId'";
$debits =$db->__select($sql);