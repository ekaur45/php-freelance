<?php 
include_once "../../session/sessioncheck.php";
include_once "../../db/connection.php";
$id = $db->__escape($_POST["id"]);
$_applicableAmount = $db->__escape($_POST["applicableAmount"]);
$_assignedTo = $db->__escape($_POST["assignedTo"]);

$sql = "UPDATE voucher SET
`applicableAmount` = $_applicableAmount,
`assignedTo` = $_assignedTo
where id = $id";
echo $sql;
$db->__execute($sql);
header("Location: ../../../gifts.php");