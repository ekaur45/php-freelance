<?php
include_once "../inc/db/connection.php";
$result = $db->select("select 'working'");
foreach ($result as $value) {
    echo $value."<br/>";
}