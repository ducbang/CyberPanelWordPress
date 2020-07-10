<?php include("header.php"); ?>

<div class="container-fluid WPCPContainer">
    <div class="card-header">
        <h4 class="my-0 font-weight-normal">Connect</h4>
    </div>
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="invoice" class="sr-only">Invoice</label>
                <input type="text" id="invoice" class="form-control" placeholder="invoice" required>
                <small class="form-text text-muted">Enter number of days before invoice is generated for servers. Default (14)</small>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="sr-only">Auto Suspend</label>
                <input type="text" id="autoSuspend" class="form-control" placeholder="autoSuspend" required>
                <small class="form-text text-muted">Enter number of days to suspend service after due date, if invoice is not paid (Default is 3). Enter 0 to disable auto-suspend.</small>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="sr-only">Auto Terminate</label>
                <input type="text" id="autoTerminate" class="form-control" placeholder="Auto Terminate" required>
                <small class="form-text text-muted">Enter number of days to terminate service after due date, if invoice is not paid (Default is 10). Enter 0 to disable auto-termination.</small>
            </div>
            <button id="connectServer" type="button" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>

<?php include("footer.php"); ?>