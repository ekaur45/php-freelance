<?php
include_once "../../session/sessioncheck.php";
include_once "../../db/connection.php";
$userId = $user["id"];
$salary = $db->__escape($_POST["monthlySalary"]);
$sql = "UPDATE `users` set monthlySalary = '$salary' where id = $userId";

$db->__execute($sql);
$existResult = $db->__selectSingle("SELECT * FROM `users` where id=$userId");
$_SESSION["USER"] = $existResult;
//header("Location: ../../../profile.php");