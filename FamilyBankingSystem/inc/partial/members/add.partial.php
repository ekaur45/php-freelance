<form class="card mt-3" action="inc/actions/members/add.action.php" method="post">
    <div class="card-header">
        <h3>Add member</h3>
    </div>
    <div class="card-body row">
        <div class="form-group col-md-4 mb-3">
            <input type="text" class="form-control" placeholder="First name" name="firstName">
        </div>
        <div class="form-group col-md-4 mb-3">
            <input type="text" class="form-control" placeholder="Last name" name="lastName">
        </div>
        <div class="form-group col-md-4 mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username">
        </div>
        <div class="form-group col-md-4 mb-3">
            <input type="date" class="form-control" placeholder="Date of birth" name="dataOfBirth">
        </div>
        <div class="form-group col-md-4 mb-3">
            <input type="tel" class="form-control" placeholder="Phone number" name="mobileNumber">
        </div>
        <div class="form-group col-md-4 mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="form-group col-md-4 mb-3">
            <select name="userType" class="form-select">
                <option value="Basic user">Basic user</option>
                <option value="Main user">Main user</option>
            </select>
        </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary">Submit</button>
    </div>
</form>