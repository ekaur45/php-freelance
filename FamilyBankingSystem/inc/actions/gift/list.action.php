<?php 
include_once "inc/session/sessioncheck.php";
include_once "inc/db/connection.php";
$userId = $user["id"];
$sql = "select *,(select concat(firstName,' ',lastName) from users where users.id=assignedTo) as userName from voucher ";

if($user["userType"]=='Basic user'){
    $sql .=" WHERE assignedTo = ".$user["id"];
}else{
    $sql.=" where userId = '$userId'";
}
$gifts =$db->__select($sql);