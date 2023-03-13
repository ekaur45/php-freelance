<?php
include_once "../inc/db/connection.php";
$result = $db->select("select 'working'");
foreach ($result as $value) {
    echo $value."<br/>";
}

?>

<form action="./inc/actions/file-upload.action.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload">
    <br>
    <button>Submit</button>
</form>
