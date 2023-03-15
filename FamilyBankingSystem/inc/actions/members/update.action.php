<?php
include_once "../../session/sessioncheck.php";
include_once "../../db/connection.php";


$id = $db->__escape($_POST["id"]);
$firstName = $db->__escape($_POST["firstName"]);
$lastName = $db->__escape($_POST["lastName"]);
$username = $db->__escape($_POST["username"]);
$dataOfBirth = $db->__escape($_POST["dataOfBirth"]);
$mobileNumber = $db->__escape($_POST["mobileNumber"]);
$password = $db->__escape($_POST["password"]);
$userType = $db->__escape($_POST["userType"]);
$hashedPassword = md5($password);

$belongsTo = $user["id"];

$existSql = "select * from `users` where username = '$username' or mobileNumber = '$mobileNumber'";
$existResult = $db->__selectSingle($existSql);
$sql = "UPDATE `users` SET 
    `firstName`='$firstName',
    `lastName`='$lastName',
    `username`='$username',
    `dataOfBirth`='$dataOfBirth',
    `mobileNumber`='$mobileNumber',
    " . ($password ? "`password`='$hashedPassword'," : "") . "
    `userType`='$userType',
    `belongsTo`='$belongsTo'
    WHERE id = $id;
    ";


$result = $db->__execute($sql);
echo $sql;
header("Location: ../../../members.php");
