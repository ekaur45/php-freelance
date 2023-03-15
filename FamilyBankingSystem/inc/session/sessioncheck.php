<?php
require_once "session.php";
$user = null;
if(isset($_SESSION["USER"])&&!empty($_SESSION["USER"])){
    $user = $_SESSION["USER"];
}else{

    header("Location: login.php");
}
