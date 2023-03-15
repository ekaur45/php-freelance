<?php 
include_once "../../session/sessioncheck.php";
include_once "../../db/connection.php";


$_billType = $db->__escape($_POST["billType"]);
$_amount = $db->__escape($_POST["amount"]);
$id = $_POST["id"];
$sql = "UPDATE `bill` SET `billType` = '$_billType',`amount` = '$_amount' where id = $id;";
$db->__execute($sql);
//echo $sql;
header("Location: ../../../bills.php");