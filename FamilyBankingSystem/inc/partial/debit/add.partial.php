<form action="inc/actions/debits/add.action.php" method="post">
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <input type="text" name="title" class="form-control">
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <input type="number" name="amount" class="form-control" placeholder="Amount">
            </div>
        </div>        
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <input type="number" name="installment" class="form-control" value="0" placeholder="Monthly installment">
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <input type="date" name="dueDate" class="form-control" value="0" placeholder="Due date">
            </div>
        </div>
        <div class="col-md-4">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>