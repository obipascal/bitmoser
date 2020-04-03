<!--Start: Services -->
<div class="col">
    <ol class="breadcrumb border rounded-0">
        <li class="breadcrumb-item show-dsh-sidebar"><a><span style="cursor: pointer;"><i
                        class="fa fa-th-large"></i><strong>&nbsp;Menue</strong></span></a></li>
    </ol>
    <div class="bs-user-dsh-main-menu">
        <header></header>
        <div class="container-fluid">
            <div class="card border-light border rounded shadow workspace">
                <div class="card-body">
                    <div>
                        <ul class="nav nav-tabs bg-light border rounded shadow-sm">
                            <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab"
                                    href="#tab-1"><i class="fa fa-briefcase bs-fa-mutted"></i><strong>&nbsp;CREATE
                                        NEW SERVICE</strong></a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" role="tabpanel" id="tab-1">
                                <p class="text-center mt-4 bs-color">Create new services by "clicking"
                                    the "Add Service" button to add more services.</p>
                                <div class="card shadow-sm" style="margin: 2rem;">
                                    <div class="card-header border rounded-0"
                                        style="background-color: #464a6c;color: #f5f5f5;">
                                        <h2 class="mb-0">Your Services</h2><small class="text-warning"
                                            style="color: #eac70e;"><strong>Note: </strong>The service
                                            created here are restricked to your subscription plan.
                                            Currently your have created {$no} of {$no} left per your
                                            subscription. <a href="#">Upgrade </a>to a greater sub plan
                                            to add more services.</small>
                                        <hr>
                                    </div>
                                    <div class="card-body">
                                        <div
                                            class="table-responsive table-borderless bg-light border rounded-0 service-item-table">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Service Listing Item(s)</th>
                                                        <th>Price Tag</th>
                                                        <th>Service Type</th>
                                                        <th>Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bs-service-item-bdy"></tbody>
                                            </table>
                                        </div>
                                        <div class="align-btn" align="right"><button
                                                class="btn btn-primary border rounded-0 create-service-item"
                                                type="button"
                                                style="background-color: #eac70e;display: block;color: #464a6c;">Add
                                                Service</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Ends: Services -->