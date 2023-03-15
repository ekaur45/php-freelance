<?php include_once "inc/actions/gift/list.action.php";?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                No
            </th>
            <th>
                Name
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
        <?php for($i=0;$i<sizeof($gifts);$i++){
            $row = $gifts[$i];
            ?>
            <tr>
                <td>
                    <?=$i+1?>
                </td>
                <td>
                    <?=$row["voucherName"];?>
                </td>
                <td>
                    <?=$row["applicableAmount"]?>
                </td>                
                <td>
                    <?=$row["isConsumed"]==true?"Consumed":"Pending"?>
                </td>
                <td>
                    <div class="d-flex justify-content-center">
                        <a href="gifts.php?id=<?=$rows["id"]?>" class="text-info">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a href="inc/actions/gift/delete.action.php?id=<?=$rows["id"]?>" class="ms-2 text-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>