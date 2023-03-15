<?php 
include_once "../../session/sessioncheck.php";
include_once "../../db/connection.php";



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
if($existResult&&!empty($existResult)){
    $_SESSION["ERROR"] = "User already exists";
    header("Location: ../../../add-member.php");
}else{

    
    $sql = "INSERT INTO `users`(`firstName`,`lastName`,`username`,`dataOfBirth`,`mobileNumber`,`password`,`userType`,`belongsTo`)
            VALUES ('$firstName','$lastName','$username','$dataOfBirth','$mobileNumber','$hashedPassword','$userType','$belongsTo');";
    $result = $db->__execute($sql);
   
    header("Location: ../../../members.php");
}