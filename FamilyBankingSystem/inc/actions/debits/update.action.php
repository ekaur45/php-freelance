<?php 
include_once "../../session/sessioncheck.php";
include_once "../../db/connection.php";
$id = $db->__escape($_POST["id"]);
$_title = $db->__escape($_POST["title"]);
$_amount = $db->__escape($_POST["amount"]);
$_installment = $db->__escape($_POST["installment"]);
$_dueDate = $db->__escape($_POST["dueDate"]);

$sql = "UPDATE `debits` SET 
`title`='$_title',
`amount`='$_amount',
`installment`='$_installment',
`dueDate`='$_dueDate' where id = $id;";

$db->__execute($sql);
echo $sql;
header("Location: ../../../debit.php");