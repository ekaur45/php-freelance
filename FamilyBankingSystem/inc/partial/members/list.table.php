<?php include_once "inc/actions/members/list.action.php";?>
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
                Phone
            </th>
            <th>
                DOB
            </th>
            <th>
                Username
            </th>
            <th>
                User type
            </th>
            <th class="text-center">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        <?php for($i=0;$i<sizeof($users);$i++){
            $row = $users[$i];
            ?>
            <tr>
                <td>
                    <?=$i+1?>
                </td>
                <td>
                    <?=$row["firstName"];?> <?=$row["lastName"];?>
                </td>
                <td>
                    <?=$row["mobileNumber"]?>
                </td>
                <td>
                    <?=$row["dataOfBirth"]?>
                </td>
                <td>
                    <?=$row["username"]?>
                </td>
                <td>
                    <?=$row["userType"]?>
                </td>
                <td>
                    <div class="d-flex justify-content-center">
                        <a href="members.php?id=<?=$row["id"]?>" class="text-info">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a href="inc/actions/members/delete.action.php?id=<?=$row["id"]?>" class="ms-2 text-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>