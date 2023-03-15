<?php 
include_once "inc/session/sessioncheck.php";
include_once "inc/db/connection.php";
$userId = $user["id"];
$sql = "select * from users where belongsTo = '$userId'";
$users = $db->__select($sql);