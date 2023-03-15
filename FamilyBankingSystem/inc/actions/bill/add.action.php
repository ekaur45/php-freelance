<?php 
include_once "../../session/sessioncheck.php";
include_once "../../db/connection.php";


$_billType = $db->__escape($_POST["billType"]);
$_month = $db->__escape($_POST["month"]);
$_year = $db->__escape($_POST["year"]);
$_amount = $db->__escape($_POST["amount"]);
$_status = $db->__escape($_POST["status"]);
$_amountPaid = $db->__escape($_POST["amountPaid"]);
$userId = $user["id"];
$sql = "INSERT INTO `bill`(`billType`,`month`,`amount`,`status`,`amountPaid`,`Year`,`userId`)
VALUES('$_billType','$_month','$_amount','$_status','$_amountPaid','$_year','$userId');";
$db->__execute($sql);
header("Location: ../../../bills.php");