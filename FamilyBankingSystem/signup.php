<!DOCTYPE html>
<html lang="en">
<?php include_once "inc/partial/layout/head.php"; ?>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6 offset-3">
                <form class="card" action="inc/actions/account/signup.action.php" method="post">
                    <div class="card-header">
                        <h3>Signup</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="First name" name="firstName">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Last name" name="lastName">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                        <div class="form-group mb-3">
                            <input type="date" class="form-control" placeholder="Date of birth" name="dataOfBirth">
                        </div>
                        <div class="form-group mb-3">
                            <input type="tel" class="form-control" placeholder="Phone number" name="mobileNumber">
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include_once "inc/partial/layout/scripts.php"; ?>
</body>
</html>