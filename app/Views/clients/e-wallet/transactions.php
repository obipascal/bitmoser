<!--Start: Transactions -->
<div class="col">
    <!-- Start: Mobile sidebar toggler -->
    <ol class="breadcrumb border rounded-0">
        <li class="breadcrumb-item show-dsh-sidebar"><a><span style="cursor: pointer;"><i class="fa fa-th-large"></i><strong>&nbsp;Menue</strong></span></a></li>
    </ol>
    <!-- End: Mobile sidebar toggler -->
    <!-- Start: Main content -->
    <div class="bs-user-dsh-main-menu">
        <header></header>
        <div class="container-fluid">
            <!-- Start: Withdrawal Card -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3">
                            <!-- Start: Items -->
                            <div class="bs-xl-bank-menu mb-2">
                                <ul class="nav nav-pills flex-column mt-2">
                                    <!-- Start: Balance -->
                                    <li class="nav-item mb-1"><a class="nav-link active" href="?view=balance"><i class="fas fa-wallet" style="color: #c2c0c2;"></i><strong>&nbsp;Balance</strong></a></li>
                                    <!-- End: Balance -->
                                    <!-- Start: Top-Up Wallet -->
                                    <li class="nav-item"><a class="nav-link active mb-1 show-topUp" href="#to-up" data-target="#bstopUpMd"><i class="fa fa-bank" style="color: #ededed;"></i><strong>&nbsp;Top-Up Wallet</strong></a></li>
                                    <!-- End: Top-Up Wallet -->
                                    <!-- Start: Withdrawal -->
                                    <li class="nav-item mb-1"><a class="nav-link active" href="?view=withdraw"><i class="fa fa-money" style="color: #ededed;"></i><strong>&nbsp;Withdrawal</strong></a></li>
                                    <!-- End: Withdrawal -->
                                    
                                </ul>
                            </div>
                            <!-- End: Items -->
                            <!-- Start: Mobile Items -->
                            <div>
                                <div class="bs-sm-bank-menu mb-4"><a class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" role="button" href="#collapse-1"><i class="fa fa-th-list"></i>&nbsp;Menu</a>
                                    <div class="collapse" id="collapse-1">
                                        <ul class="nav nav-pills flex-column mt-2">
                                            <!-- Start: Balance -->
                                            <li class="nav-item mb-1"><a class="nav-link active" href="?view=balance"><i class="fas fa-wallet" style="color: #c2c0c2;"></i><strong>&nbsp;Balance</strong></a></li>
                                            <!-- End: Balance -->
                                            <!-- Start: Top-Up Wallet -->
                                            <li class="nav-item"><a class="nav-link active mb-1 show-topUp" href="#to-up" data-target="#bstopUpMd"><i class="fa fa-bank" style="color: #ededed;"></i><strong>&nbsp;Top-Up Wallet</strong></a></li>
                                            <!-- End: Top-Up Wallet -->
                                            <!-- Start: Withdrawal -->
                                            <li class="nav-item mb-1"><a class="nav-link active" href="?view=withdraw"><i class="fa fa-money" style="color: #ededed;"></i><strong>&nbsp;Withdrawal</strong></a></li>
                                            <!-- End: Withdrawal -->
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Mobile Items -->
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header bs-bg" style="color: #f5f5f5;">
                                    <h5 class="mb-0">Transaction History</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Start: Wallet Balance -->
                                    <p class="lead border rounded shadow-lg card-text py-4 p-3 mb-4" style="color: #ffffff;background-color: #464e6c;"><strong class="text-warning" style="display: block;border-bottom: 1px solid #fff;font-weight: 700;">Avaliable Balance</strong><strong class="text-success" style="font-size: xx-large;font-weight: 800;">NGN</strong>
                                        <strong
                                            class="text-monospace ml-2" style="font-size: larger;font-weight: 700;font-family: monospace;">25,700.00</strong>
                                    </p>
                                    <!-- End: Wallet Balance -->
                                    <!-- Start: Transaction History -->
                                    <div class="search-table-col">
                                        <header>
                                            <h3 class="bs-color">Transaction History Table</h3>
                                            <hr>
                                        </header>
                                        <div class="form-group pull-right col-lg-4"><input type="text" placeholder="Search by typing here.." class="search form-control"></div><span class="counter pull-right"></span>
                                        <div class="table-responsive table-bordered table table-hover table-bordered results">
                                            <table class="table table-bordered table-hover">
                                                <thead class="bill-header cs">
                                                    <tr style="background-color: #464e6c;">
                                                        <th id="trs-hd" class="col-lg-1">Transaction ID</th>
                                                        <th id="trs-hd" class="col-lg-2">Description</th>
                                                        <th id="trs-hd" class="col-lg-3">Status</th>
                                                        <th id="trs-hd" class="col-lg-2">Date/Time</th>
                                                        <th id="trs-hd" class="col-lg-2">Amount</th>
                                                        <th id="trs-hd" class="col-lg-2">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="warning no-result">
                                                        <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                                                    </tr>
                                                    <tr>
                                                        <td>01</td>
                                                        <td>India</td>
                                                        <td>Souvik Kundu</td>
                                                        <td>Bootstrap Stuido</td>
                                                        <td>2014</td>
                                                        <td><button class="btn btn-danger" type="submit" style="margin-left: 5px;"><i class="fa fa-trash" style="font-size: 15px;"></i></button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- End: Transaction History -->
                                </div>
                            </div>
                            <!-- Start: Top-Up Wallet -->
                            <div>
                                <div class="modal" role="dialog" tabindex="-1" id="bstopUpMd" style="background-color: rgba(0,0,0,0.4);">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border rounded-0" style="background-color: #464e6c;color: #ffffff;">
                                                <h4 class="modal-title">Amount&nbsp;</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                            <div class="modal-body">
                                                <form id="topUp-amount-form">
                                                    <div class="form-group"><input class="border rounded-0 border-warning form-control" type="number" name="deposit_topup_amount" required="" placeholder="Amount" min="1" step="2"></div>
                                                </form>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-light cancel" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary submit" type="button" data-target="#topUp-amount-form">Top up</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Top-Up Wallet -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: Withdrawal Card -->
        </div>
    </div>
    <!-- End: Main content -->
</div>
<!--End: Transactions -->