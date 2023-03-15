<?php
include_once "../../session/sessioncheck.php";
include_once "../../db/connection.php";
$giftId = $_GET["id"];
$userId = $user["id"];

$billSql = "select * from voucher where id = '$giftId'";
$bill = $db->__selectSingle($billSql);
$transactionSql = "INSERT INTO `transactions`(`transactionType`,`userId`,`amount`,`transactionDetail`)
VALUES('Gift redeem','$userId','".$bill["applicableAmount"]."',' Gift has been redeemed.');";
$db->__execute($transactionSql);

$billUpdateSql = "UPDATE voucher set `isConsumed` = true where id = $giftId";
$db->__execute($billUpdateSql);
$sql = "UPDATE users set `balanceInBank` = ifnull(`balanceInBank`,0)+".$bill["applicableAmount"]." where id = $userId";
$db->__execute($sql);
echo $sql;
header("Location: ../../../gifts.php");