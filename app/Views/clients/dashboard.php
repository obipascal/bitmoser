<!-- Start:Dashboard content -->
<div class="col">
    <ol class="breadcrumb border rounded-0">
        <li class="breadcrumb-item show-dsh-sidebar"><a><span style="cursor: pointer;"><i
                        class="fa fa-th-large"></i><strong>&nbsp;Menue</strong></span></a></li>
    </ol>
    <div class="bs-user-dsh-main-menu">
        <header></header>
        <div class="container-fluid">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-xl-3">
                            <div class="card text-light border-info shadow-lg mb-4">
                                <div class="card-header bs-bg">
                                    <h2 class="mb-0 bs-color text-center" style="color: white;">Request<span class="badge badge-primary bg-warning" style="position: absolute;border-radius: 27px;top: 3px;font-size: small;">0</span></h2>
                                </div>
                                <div class="card-body text-center"><span><a href="<?= base_url('/dash/ng/rendar/request');?>" style="text-decoration: none;"><i class="fa fa-users" style="font-size: 8rem;color: #00b5d6;"></i><small class="mt-2" style="display: block;">View, confirm, Busy Request</small></a></span></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-3">
                            <div class="card text-light border-info shadow-lg mb-4">
                                <div class="card-header bs-bg">
                                    <h2 class="mb-0 bs-color text-center" style="color: white;">Services<span class="badge badge-primary bg-warning" style="position: absolute;border-radius: 27px;top: 3px;font-size: small;">0</span></h2>
                                </div>
                                <div class="card-body text-center"><span><a href="<?= base_url('/dash/ng/rendar/services');?>" style="text-decoration: none;"><i class="fa fa-briefcase" style="font-size: 8rem;color: #4c280f;"></i><small class="mt-2" style="display: block;">Create, View, Delete services.</small></a></span></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-3">
                            <div class="card text-light border-info shadow-lg mb-4">
                                <div class="card-header bs-bg">
                                    <h2 class="mb-0 bs-color text-center" style="color: white;">Wallet<span class="badge badge-primary bg-warning" style="position: absolute;border-radius: 27px;top: 1px;font-size: small;left: 1px;"><strong class="mr-1 text-success">NGN</strong><strong class="text-muted amount_w_wadge" style="font-family: monospace;">0.00</strong></span></h2>
                                </div>
                                <div class="card-body text-center"><span><a href="<?= base_url('/dash/ng/rendar/ewallet');?>" style="text-decoration: none;"><i class="fas fa-wallet" style="font-size: 8rem;color: #cc7a02;"></i><small class="mt-2" style="display: block;">Balance, Desposit , Bank Info</small></a></span></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-3">
                            <div class="card text-light border-info shadow-lg mb-4">
                                <div class="card-header bs-bg">
                                    <h2 class="mb-0 bs-color text-center" style="color: white;">Account</h2>
                                </div>
                                <div class="card-body text-center"><span><a href="<?= base_url('/dash/ng/rendar/account');?>" style="text-decoration: none;"><i class="far fa-user-circle" style="font-size: 8rem;color: #8c60c1;"></i><small class="mt-2" style="display: block;">Upgrade, Settings, Profile</small></a></span></div>
                            </div>
                        </div>
                    </div>
                    <!-- <div><small class="bs-ajax-loader"><i class="fa fa-spinner bs-router"></i></small></div> -->
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <header class="py-2 p-1">
                        <h2 class="bs-color">News</h2>
                        <hr />
                    </header>
                    <div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1"><strong>News</strong></a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active pt-3" role="tabpanel" id="tab-1">
                                <div class="card bg-light border-light shadow-sm mb-2" style="border-bottom: 1px solid gray !important;">
                                    <div class="card-body">
                                        <h4 class="card-title">Title</h4>
                                        <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#"><em>Read More</em></a>
                                        <a
                                            class="card-link" href="#"><em>Remove</em></a>
                                    </div>
                                </div>
                                <div class="card bg-light border-light shadow-sm mb-2" style="border-bottom: 1px solid gray !important;">
                                    <div class="card-body">
                                        <h4 class="card-title">Title</h4>
                                        <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link"
                                            href="#">Link</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- End: Dashboard Content -->