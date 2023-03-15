<?php include_once "inc/actions/debits/list.action.php";?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                No
            </th>
            <th>
                Title
            </th>
            <th>
                Amount
            </th>
            <th>
                Monthly installment
            </th>
            <th>
                Due date
            </th>
            <th class="text-center">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        <?php for($i=0;$i<sizeof($debits);$i++){
            $row = $debits[$i];
            ?>
            <tr>
                <td>
                    <?=$i+1?>
                </td>
                <td>
                    <?=$row["title"];?>
                </td>
                <td>
                    $ <?=$row["amount"]?>
                </td>
                <td>
                    $ <?=$row["installment"]?>
                </td>
                <td>
                    <?=$row["dueDate"]?>
                </td>
                <td>
                    <div class="d-flex justify-content-center">
                        <a href="debits.php?id=<?=$row["id"]?>" class="ms-2 text-info">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a href="inc/actions/debits/delete.action.php?id=<?=$row["id"]?>" class="ms-2 text-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>