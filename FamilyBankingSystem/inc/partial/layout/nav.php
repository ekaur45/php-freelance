<?php
function isActive($page)
{
    return basename($_SERVER['PHP_SELF']) == $page;
}
$userType = $user["userType"];
$mainUser = 'Main user';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.php">Family Banking System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= isActive("index.php") ? "active" : "" ?>" aria-current="page" href="index.php">Home</a>
                </li>
                <?php if ($userType == $mainUser) : ?>
                    <li class="nav-item">
                        <a class="nav-link <?= isActive("members.php") ? "active" : "" ?>" href="members.php">Members</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link <?= isActive("bills.php") ? "active" : "" ?>" href="bills.php">Bills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive("debit.php") ? "active" : "" ?>" href="debit.php">Debits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive("gifts.php") ? "active" : "" ?>" href="gifts.php">Gifts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive("statements.php") ? "active" : "" ?>" href="statements.php">Statements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive("chatbot.php") ? "active" : "" ?>" href="chatbot.php">Chatbot</a>
                </li>

            </ul>
            <div class="d-flex justify-content-end">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <?=$user["firstName"]?> <?=$user["lastName"]?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#"><?=$user["userType"]?></a></li>
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout <i class="bi bi-box-arrow-right"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>