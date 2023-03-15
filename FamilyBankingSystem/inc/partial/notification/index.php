<?php
    include_once "../../session/session.php";
    /*function createNotification($msg, $type = "Success")
    {
        //$_SESSION["NOTIFICATION"] = (object)[];
        $_SESSION["NOTIFICATION"]["TYPE"] = $type;
        $_SESSION["NOTIFICATION"]["MSG"] = $msg;
    }
    function clearNotification()
    {
        //$_SESSION["NOTIFICATION"] = (object)[];
    }
    //createNotification("Hello world");
    if (isset($_SESSION["NOTIFICATION"]) && !empty($_SESSION["NOTIFICATION"])) {
        if (isset($_SESSION["NOTIFICATION"]["TYPE"]) && !empty($_SESSION["NOTIFICATION"]["TYPE"])) {
            $_type = $_SESSION["NOTIFICATION"]["TYPE"];
        }
        if (isset($_SESSION["NOTIFICATION"]["MSG"]) && !empty($_SESSION["NOTIFICATION"]["MSG"])) {
            $_type = $_SESSION["NOTIFICATION"]["MSG"];
        }
    }*/
    $_type = "";
    $_msg = "";

?>
<?php if ($_type && $_msg) : ?>
    <div class="position-fixed top-0 end-0 p-3" id="notification-container" style="z-index: 11">
        <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="" class="rounded me-2" alt="...">
                <strong class="me-auto"><?= $_type ?></strong>
                <small></small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?= $_msg ?>
            </div>
        </div>
    </div>
    <script>
        setTimeout(() => {
            $("#notification-container").remove();
        }, 3000);
    </script>
    <?php //clearNotification(); 
    ?>
<?php endif; ?>