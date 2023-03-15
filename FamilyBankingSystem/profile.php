<!DOCTYPE html>
<html lang="en">
<?php include_once "inc/partial/layout/head.php"; ?>
<?php require_once "inc/session/sessioncheck.php"; ?>

<body>
    <?php include_once "inc/partial/layout/nav.php"; ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>My Profile</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>First name</th>
                                <td>
                                    <?= $user["firstName"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Last name</th>
                                <td>
                                    <?= $user["lastName"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>
                                    <?= $user["username"] ?>
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <th>DOB</th>
                                <td>
                                    <?= $user["dataOfBirth"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Mobile number</th>
                                <td>
                                    <?= $user["mobileNumber"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Monthly salary</th>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <span>
                                            $ <?= $user["monthlySalary"] ?? "0" ?>
                                        </span>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#updateMonthlySalaryModal">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Balance in bank</th>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <span>
                                            $ <?= $user["balanceInBank"] ?? "0" ?>
                                        </span>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#updateBankBalanceModal">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="updateMonthlySalaryModal" tabindex="-1" aria-labelledby="updateMonthlySalaryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" action="inc/actions/account/update-salary.action.php" method="post">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateMonthlySalaryModalLabel">Update monthly salary</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" name="monthlySalary" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="updateBankBalanceModal" tabindex="-1" aria-labelledby="updateBankBalanceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" action="inc/actions/account/update-balance.action.php" method="post">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateBankBalanceModalLabel">Update bank balance</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" name="bankBalance" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
    <?php include_once "inc/partial/layout/scripts.php"; ?>
</body>

</html>