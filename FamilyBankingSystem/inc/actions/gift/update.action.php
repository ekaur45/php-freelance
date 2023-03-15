<?php 
include_once "../../session/sessioncheck.php";
include_once "../../db/connection.php";
$id = $db->__escape($_POST["id"]);
$_voucherName = $db->__escape($_POST["voucherName"]);
$_applicableAmount = $db->__escape($_POST["applicableAmount"]);
$_assignedTo = $db->__escape($_POST["assignedTo"]);
$_applicableDate = $db->__escape($_POST["applicableDate"]);
$_voucherName = "Birthday";
$userSql = "select * from users where id = '$_assignedTo'";
$_user = $db->__selectSingle($userSql);

$_applicableDate = $_user["dataOfBirth"];

$sql = "UPDATE voucher SET
`applicableAmount`,
`assignedTo`
where id = $id";
echo $sql;
$db->__execute($sql);
header("Location: ../../../gifts.php");