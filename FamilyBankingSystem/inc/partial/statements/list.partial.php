<?php include_once "inc/actions/statements/list.action.php";?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                No
            </th>
            <th>
                Transaction 
            </th>
            <th>
                Name
            </th>
            <th>
                Amount
            </th>
            <th>
            Description
            </th>
            <th>
                Occured at
            </th>
            <th class="text-center">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        <?php for($i=0;$i<sizeof($transactions);$i++){
            $row = $transactions[$i];
            ?>
            <tr>
                <td>
                    <?=$i+1?>
                </td>
                <td>
                    <?=$row["transactionType"];?>
                </td>
                <td>
                    <?=$row["userName"];?>
                </td>
                <td>
                    $ <?=$row["amount"]?>
                </td>
                <td>
                    <?=$row["transactionDetail"]?>
                </td>
                <td>
                    <?=$row["cretedAt"]?>
                </td>
                <td class="text-center">
                    N/A
                </td>
                <!-- <td>
                    <div class="d-flex justify-content-center">
                        <a href="members.php?id=<?=$row["id"]?>" class="text-info">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a href="inc/actions/members/delete.action.php?id=<?=$row["id"]?>" class="ms-2 text-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>
                </td> -->
            </tr>
        <?php } ?>
    </tbody>
</table>