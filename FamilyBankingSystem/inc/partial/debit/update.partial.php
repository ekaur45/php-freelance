<?php include_once "inc/actions/debits/get.action.php"?>
<form action="inc/actions/debits/update.action.php" method="post">
    <div class="row">
        <input type="hidden" name="id" value="<?=$_GET["id"]?>">
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <input type="text" name="title" class="form-control"
                value="<?=$obj["title"]?>"
                >
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <input type="number" name="amount" class="form-control" placeholder="Amount"
                value="<?=$obj["amount"]?>"
                >
            </div>
        </div>        
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <input type="number" name="installment" class="form-control"  placeholder="Monthly installment"
                value="<?=$obj["installment"]?>"
                >
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <input type="date" name="dueDate" class="form-control"  placeholder="Due date"
                value="<?=substr($obj["dueDate"],0,10)?>"
                >
            </div>
        </div>
        <div class="col-md-4">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>