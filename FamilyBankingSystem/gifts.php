<!DOCTYPE html>
<html lang="en">
<?php include_once "inc/partial/layout/head.php"; ?>
<?php require_once "inc/session/sessioncheck.php"; ?>

<body>

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add gift voucher</h4>
                    </div>
                    <div class="card-body">
                        <?php include_once "inc/partial/gift/add.partial.php"; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <?php include_once "inc/partial/gift/list.partial.php"; ?>
            </div>
        </div>
    </div>
    <?php include_once "inc/partial/layout/scripts.php"; ?>
</body>

</html>