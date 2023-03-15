<?php 
include_once "../../session/sessioncheck.php";
include_once "../../db/connection.php";
$_title = $db->__escape($_POST["title"]);
$_amount = $db->__escape($_POST["amount"]);
$_installment = $db->__escape($_POST["installment"]);
$_dueDate = $db->__escape($_POST["dueDate"]);

$sql = "INSERT INTO `debits`(`title`,`amount`,`installment`,`dueDate`,`userId`)
VALUES ('$_title','$_amount','$_installment','$_dueDate','".$user["id"]."');";

$db->__execute($sql);
header("Location: ../../../debit.php");