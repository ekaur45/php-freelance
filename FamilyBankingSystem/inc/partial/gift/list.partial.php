<?php include_once "inc/actions/gift/list.action.php"; ?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                No
            </th>
            <th>
                Member
            </th>
            <th>
                Event
            </th>
            <th>
                Amount
            </th>
            <th>
                Status
            </th>
            <th class="text-center">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < sizeof($gifts); $i++) {
            $row = $gifts[$i];
        ?>
            <tr>
                <td>
                    <?= $i + 1 ?>
                </td>
                <td>
                    <?= $row["userName"] ?>
                </td>
                <td>
                    <?= $row["voucherName"]; ?>
                </td>
                <td>
                    $ <?= $row["applicableAmount"] ?>
                </td>
                <td>
                    <?php if ($row["isConsumed"] == true) : ?>
                        <span class="badge bg-success">
                            Redeemed
                        </span>
                    <?php else : ?>
                        <span class="badge bg-danger">
                            Pending
                        </span>
                    <?php endif ?>

                </td>
                <td>

                    <div class="d-flex justify-content-center">
                        <?php if ($user["userType"] == 'Main user') : ?>

                            <?php if ($row["isConsumed"] == true) : ?>
                               -
                            <?php else : ?>
                                <a href="gifts.php?id=<?= $row["id"] ?>" class="text-info">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="inc/actions/gift/delete.action.php?id=<?= $row["id"] ?>" class="ms-2 text-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                            <?php endif; ?>
                         
                        <?php else : ?>
                            <?php if ($row["isConsumed"] == true) : ?>
                                -
                            <?php else : ?>
                                <a href="inc/actions/gift/redeem.action.php?id=<?= $row["id"] ?>" class="ms-2 text-success">
                                    <i class="bi bi-gift"></i>
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>