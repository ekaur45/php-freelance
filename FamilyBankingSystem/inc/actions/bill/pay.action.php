<?php
include_once "../../session/sessioncheck.php";
include_once "../../db/connection.php";
$billId = $_GET["id"];
$userId = $user["id"];

$billSql = "select * from bill where id = '$billId'";
$bill = $db->__selectSingle($billSql);
$transactionSql = "INSERT INTO `transactions`(`transactionType`,`userId`,`amount`,`transactionDetail`)
VALUES('Bill payment','$userId','".$bill["amount"]."','".$bill["billType"]." bill has been paid.');";
$db->__execute($transactionSql);

$billUpdateSql = "UPDATE bill set `status` ='Paid',`amountPaid`=".$bill["amount"]." where id = $billId";
$db->__execute($billUpdateSql);

header("Location: ../../../bills.php");