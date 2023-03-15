<?php 
include_once "../../session/sessioncheck.php";
include_once "../../db/connection.php";
$_voucherName = "";//$db->__escape($_POST["voucherName"]);
$_applicableAmount = $db->__escape($_POST["applicableAmount"]);
$_assignedTo = $db->__escape($_POST["assignedTo"]);
$_applicableDate = "";//$db->__escape($_POST["applicableDate"]);
$_voucherName = "Birthday";
$userSql = "select * from users where id = '$_assignedTo'";
$_user = $db->__selectSingle($userSql);

$_applicableDate = $_user["dataOfBirth"];

$sql = "INSERT INTO voucher(`voucherName`,`applicableAmount`,`assignedTo`,`applicableDate`,`userId`) 
VALUES ('$_voucherName','$_applicableAmount','$_assignedTo','$_applicableDate','".$user["id"]."')";
echo $sql;
$db->__execute($sql);
$transactionSql = "INSERT INTO `transactions`(`transactionType`,`userId`,`amount`,`transactionDetail`)
VALUES('Gift sent','".$_user["id"]."','".$_applicableAmount."',' Gift has been sent to member".($_user["firstName"]." ".$_user["lastName"]).".');";
$db->__execute($transactionSql);

echo $transactionSql;
header("Location: ../../../gifts.php");