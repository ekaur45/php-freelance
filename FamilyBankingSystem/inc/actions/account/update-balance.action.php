<?php
include_once "../../session/sessioncheck.php";
include_once "../../db/connection.php";
$userId = $user["id"];
$balance = $db->__escape($_POST["bankBalance"]);

$sql = "UPDATE `users` set balanceInBank = '$balance' where id = $userId";

$db->__execute($sql);
$existResult = $db->__selectSingle("SELECT * FROM `users` where id=$userId");
$_SESSION["USER"] = $existResult;
header("Location: ../../../profile.php");