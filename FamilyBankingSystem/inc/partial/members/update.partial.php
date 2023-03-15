<?php include_once "inc/actions/members/get.action.php"?>
<form class="card mt-3" action="inc/actions/members/update.action.php" method="post">
    <div class="card-header">
        <h3>Update member</h3>
    </div>
    <div class="card-body row">
        <input type="hidden" name="id" value="<?=$_GET["id"]?>">
        <div class="form-group col-md-4 mb-3">
            <input type="text" class="form-control" placeholder="First name" name="firstName"
            value="<?=$user["firstName"]?>"
            required>
        </div>
        <div class="form-group col-md-4 mb-3">
            <input type="text" class="form-control" placeholder="Last name" name="lastName"
            value="<?=$user["lastName"]?>"
            required>
        </div>
        <div class="form-group col-md-4 mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username"
            value="<?=$user["username"]?>"
            required>
        </div>
        <div class="form-group col-md-4 mb-3">
            <input type="date" class="form-control" placeholder="Date of birth" name="dataOfBirth"
            value="<?=substr($user["dataOfBirth"],0,10)?>"
            required>
        </div>
        <div class="form-group col-md-4 mb-3">
            <input type="tel" class="form-control" placeholder="Phone number" name="mobileNumber"
            value="<?=$user["mobileNumber"]?>"
            required>
        </div>
        <div class="form-group col-md-4 mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password"  required>
        </div>
        <div class="form-group col-md-4 mb-3">
            <select name="userType" class="form-select"
            required>
                <option <?=$user["userType"]=='Basic user'?"selected":""?>  value="Basic user">Basic user</option>
                <option <?=$user["userType"]=='Main user'?"selected":""?> value="Main user">Main user</option>
            </select>
        </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary">Submit</button>
    </div>
</form>