<?php
require_once "../shared/file/index.php";
$fileName =  basename($_FILES["fileToUpload"]["name"]);

$file = $_FILES["fileToUpload"]["tmp_name"];
echo $uploader->Upload($file,$fileName);