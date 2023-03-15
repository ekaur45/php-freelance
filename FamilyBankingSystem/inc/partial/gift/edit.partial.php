<?php include_once "inc/actions/debits/get.action.php"
?>
<?php
include_once "inc/actions/members/list.action.php";
?>

<form action="inc/actions/gift/update.action.php" method="post">
    <div class="row">
    <input type="hidden" name="id" value="<?=$_GET["id"]?>">
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <select name="assignedTo" class="form-select">
                    <?php foreach ($users as $value) { ?>
                        <option <?=$obj["id"]==$value["id"]?"selected":""?> value="<?=$value["id"]?>"><?=$value["firstName"]?> <?=$value["lastName"]?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <input type="number" name="applicableAmount" class="form-control"
                
                >
            </div>
        </div>
        <div class="col-md-12">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>