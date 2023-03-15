<?php 
include_once "inc/session/sessioncheck.php";
include_once "inc/db/connection.php";
$userId = $user["id"];
$sql = "SELECT *,(select concat(firstName,' ',lastName) from users where users.id=userId) as userName from transactions ";
if($user["userType"]=='Basic user'){
    $sql .=" WHERE userId = ".$user["id"];
}else{
    $sql .=" WHERE userId in(select id from users where users.belongsTo = $userId) or userId = $userId";
}
$sql.=" order by id desc ";
//echo $sql;
$transactions =$db->__select($sql);