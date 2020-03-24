<?php

/**
 * [BS MAIN CI]
 * This the site Navigation bar
 */
?>

<body style="background-color: #e3e3e3;">
    <!-- Start: BS Client Interface (CI) -->
    <main>
        <!-- Start: CI Header -->
        <header>
            <nav class="navbar navbar-dark navbar-expand-md sticky-top" style="background-color: rgb(70, 74, 108);">
                <div class="container-fluid"><a class="navbar-brand w-25" href="<?= base_url(); ?>"><img class="img-fluid" src="<?= base_url(); ?>/assets/img/logo/bs-logo-s.png?h=411f77988f1af39c5af4e6badf5e2176"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse text-capitalize text-white " id="navcol-1" style="width: 1000px;margin-left: 20px;">
                        <ul class="nav navbar-nav mx-auto bs-nav-tabs">
                            <li class="nav-item" role="presentation"><a class="nav-link <?= isset($active) && $active === 'h' ? 'active bs-active-tab' : ''; ?>" href="<?= base_url(); ?>?a=h" style="font-size: 20px;">Home</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link <?= isset($active) && $active === 's' ? 'active bs-active-tab' : ''; ?>" href="<?= base_url() ?>/services/list" style="font-size: 20px;">&nbsp;services&nbsp;</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link <?= isset($active) && $active === 'rs' ? 'active bs-active-tab' : ''; ?>" href="<?= base_url(); ?>/auth/start/account/sub" style="font-size: 20px;">Render &nbsp;service</a>
                            </li>
                            <li class="nav-item" role="presentation"><a class="nav-link <?= isset($active) && $active === 'lm' ? 'active bs-active-tab' : ''; ?>" href="#" style="font-size: 20px;color: rgba(255,255,255,0.5);">Learn More</a></li>
                        </ul>
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active border rounded border-warning shadow" href="<?= base_url(); ?>/auth/user/login" style="color: #eac70e;"><i class="fas fa-user-lock"></i>&nbsp;Login</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active border rounded border-success shadow" href="<?= base_url(); ?>/auth/user/signup" style="color: #9bdbc1;"><i class="fa fa-user-circle-o"></i>&nbsp; Sign Up</a></li>
                            <?php if (isset($client_active) && $client_active) : ?>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link border rounded-0 border-warning shadow" data-toggle="dropdown" aria-expanded="false" href="#"><img class="rounded-circle img-fluid" src="<?= base_url(); ?>/assets/img/gravater/user.png?h=25a56d70d87dad0ef06160523bd08873" style="width: 25px;height: 25px;"></a>
                                    <div class="dropdown-menu dropdown-menu-right bs-drop-auth-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Profile</a><a class="dropdown-item" role="presentation" href="#">Settings</a><a class="dropdown-item" role="presentation" href="#">Wallet</a></div>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End: CI Header -->