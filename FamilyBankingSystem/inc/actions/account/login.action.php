<?php
include_once "../../session/session.php";
include_once "../../db/connection.php";
$username = $db->__escape($_POST["username"]);
$password = $db->__escape($_POST["password"]);
$hashedPassword = md5($password);

$existSql = "select * from `users` where username = '$username' or mobileNumber = '$mobileNumber'";
echo $existSql;
$existResult = $db->__selectSingle($existSql);
if($existResult&&!empty($existResult)){
    if($existResult["password"]==$hashedPassword){
        $_SESSION["USER"] = $existResult;
        return header("Location: ../../../index.php");
    }
}
$_SESSION["ERROR"] = "Invalid credentials";
header("Location: ../../../login.php");