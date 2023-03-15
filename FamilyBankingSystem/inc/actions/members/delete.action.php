<?php 
include_once "../../session/sessioncheck.php";
include_once "../../db/connection.php";

$id = $db->__escape($_GET["id"]);

$sql = "DELETE FROM users where id = $id";
$db->__execute($sql);
header("Location: ../../../members.php");