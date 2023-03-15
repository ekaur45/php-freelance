<?php include_once "inc/actions/bill/list.action.php";?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                No
            </th>
            <th>
                Bill type
            </th>
            <th>
                Month
            </th>
            <th>
                Year
            </th>
            <th>
                Amount
            </th>
            <th>
                Amount paid
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
        <?php for($i=0;$i<sizeof($bills);$i++){
            $row = $bills[$i];
            ?>
            <tr>
                <td>
                    <?=$i+1?>
                </td>
                <td>
                    <?=$row["billType"];?>
                </td>
                <td>
                    <?=$row["month"]?>
                </td>
                <td>
                    <?=$row["Year"]?>
                </td>
                <td>
                    $ <?=$row["amount"]?>
                </td>
                <td>
                    $ <?=$row["amountPaid"]?>
                </td>
                <td>
                    <?=$row["status"]?>
                </td>
                <td>
                    <div class="d-flex justify-content-center">
                        <a href="inc/actions/bill/pay.action.php?id=<?=$row["id"]?>" class="text-success" title="Pay amount">
                            <i class="bi bi-currency-dollar"></i>
                        </a>
                        <a href="bills.php?id=<?=$row["id"]?>" class="ms-2 text-info">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a href="inc/actions/bill/delete.action.php?id=<?=$row["id"]?>" class="ms-2 text-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>