<?php
$billTypes = ["Water", "Electricity", "Gas", "Internet"];
$months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$year = date("Y");
$month = date("F");
?>
<form action="inc/actions/bill/add.action.php" method="post">
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <select name="billType" class="form-select" required>
                    <?php foreach ($billTypes as  $value) { ?>
                        <option value="<?= $value ?>"><?= $value ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-md-4 mb-3 d-none">
            <div class="form-group">
                <select name="month" class="form-select">
                    <?php foreach ($months as  $value) { ?>
                        <option <?= ($month == $value) ? "selected" : "" ?> value="<?= $value ?>"><?= $value ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-md-4 mb-3 d-none">
            <div class="form-group">
                <input type="number" name="year" class="form-control" value="<?= $year ?>" placeholder="Year">
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <input type="number" name="amount" class="form-control" placeholder="Amount" required>
            </div>
        </div>
        <div class="col-md-4 mb-3 d-none">
            <div class="form-group">
                <select name="status" class="form-select">
                    <option selected value="Pending">Pending</option>
                    <option value="Partial paid">Partial paid</option>
                    <option value="Paid">Paid</option>
                </select>
            </div>
        </div>
        <div class="col-md-4 mb-3 d-none">
            <div class="form-group">
                <input type="number" name="amountPaid" class="form-control" value="0" placeholder="Amount paid">
            </div>
        </div>
        <div class="col-md-4">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>