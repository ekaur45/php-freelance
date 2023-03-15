<?php include_once "inc/actions/chatbot/get.action.php"; ?>

<ul class="list-group">
    <li class="d-flex justify-content-between list-group-item">
        <span style="font-weight: 600;">
            Balance in bank
        </span>
        <span class="text-black-50">
            <?= $_user["balanceInBank"] ?> $
        </span>
    </li>
    <li class="d-flex justify-content-between list-group-item">
        <span style="font-weight: 600;">
            Monthly salary
        </span>
        <span class="text-black-50">
            <?= $_user["monthlySalary"] ?> $
        </span>
    </li>
    <?php
    foreach ($bills as $row) {
    ?>
        <li class="d-flex justify-content-between list-group-item">
            <span style="font-weight: 600;">
                <?= $row["billType"] ?> bill</span>
            <span class="text-black-50">
                <?= $row["amount"] ?> $
            </span>
        </li>
    <?php
    }
    ?>
    <li class="d-flex justify-content-between list-group-item">
        <span style="font-weight: 600;">Other expense / month</span>
        <span class="text-black-50">
            <?= $otherExpense ?> $
        </span>
    </li>
    <hr>
    <li class="d-flex justify-content-between list-group-item">
    <span style="font-weight: 600;">Amount safe to spend</span>
        <span class="text-black-50">
            <?= $_user["balanceInBank"] - $totalExpense ?> $
        </span>
    </li>
</ul>