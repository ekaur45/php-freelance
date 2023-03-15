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
                    <?=$row["year"]?>
                </td>
                <td>
                    <?=$row["amount"]?>
                </td>
                <td>
                    <?=$row["amountPaid"]?>
                </td>
                <td>
                    <?=$row["status"]?>
                </td>
                <td>
                    <div class="d-flex justify-content-center">
                        <a href="bills.php?id=<?=$rows["id"]?>" class="text-info">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a href="inc/actions/bill/delete.action.php?id=<?=$rows["id"]?>" class="ms-2 text-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>