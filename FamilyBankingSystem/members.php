<!DOCTYPE html>
<html lang="en">
<?php include_once "inc/partial/layout/head.php"; ?>

<?php require_once "inc/session/sessioncheck.php"; ?>

<body>
    <?php include_once "inc/partial/layout/nav.php"; ?>
    <div class="container">
        <?php if(isset($_GET["id"])&&!empty($_GET["id"])): ?>
            <?php include_once "inc/partial/members/update.partial.php";?>
        <?php else: ?>
            <?php include_once "inc/partial/members/add.partial.php";?>
        <?php endif; ?>
        <div class="row mt-3">
            <div class="col-md-12">
                <?php include_once "inc/partial/members/list.table.php"; ?>
            </div>
        </div>
    </div>
    <?php include_once "inc/partial/layout/scripts.php"; ?>
</body>

</html>