<!--
    The Rendars Dashboard [Navbar]
    -----------------------------
    This is the navbar of the entire dashboard
    -> This file is loaded as a fragment of the dashboard
 -->

<!-- Start: App Header -->
<header class="text-light"
	style="background: rgb(70, 78, 108); color: white; margin-bottom:0rem;">
	<!-- Start: Navbar -->
	<nav class="navbar navbar-dark navbar-expand-md"
		style="background-color: #464e6c; z-index:100">
		<div class="container-fluid" >
			<a class="navbar-brand" href="#">	<img
				src="<?=base_url();?>/clientAssets/assets/img/bitmoser_logo.png?h=dcfb26295dec07c0bc85de44c036119e"></a>
			<button class="navbar-toggler" data-toggle="collapse"
				data-target="#navcol-1">
				<span class="sr-only">Toggle navigation</span><span
					class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navcol-1">
				<!-- Start: Home and Notification navbar -->
				<ul class="nav navbar-nav mx-auto">
					<li class="nav-item" role="presentation"><a
						class="nav-link active bs-f-bold" href="<?= base_url()?>">Home</a></li>
					<li class="nav-item dropdown"><a
						class="dropdown-toggle nav-link bs-f-bold" data-toggle="dropdown"
						aria-expanded="false" href="#">&nbsp;<span
							class="badge badge-pill badge-primary bs-bg"><i
								class="fa fa-bell-o bs-fa-2"></i></span><small
							class="log-notification-number"><span
								class="badge badge-primary tada animated infinite"
								style="position: absolute; top: -1px; left: 48px; border-radius: 22rem; background-color: #bc3877; font-family:monospace; font-size:16px">0</span></small></a>
						<div class="dropdown-menu" role="menu"
							style="width: auto !important; position: absolute;">
							<h6 class="dropdown-header text-muted" role="presentation">
								<strong>Notifications</strong>
							</h6>
							<div class="dropdown-divider" role="presentation"></div>
							<a class="dropdown-item text-muted" role="presentation" href="<?= base_url('/dash/ng/rendar/notify/lsdlIdslSE12')?>">
								Test Notification
								<small class="text-muted" style="display: block; font-size:11px;">sent 2:50 pm</small>
							</a>
							<a class="dropdown-item text-muted" role="presentation"
								href="#">Second Item</a><a class="dropdown-item text-muted"
								role="presentation" href="#">Third Item</a>
							<div class="dropdown-divider" role="presentation"></div>
						</div></li>
				</ul>
				<!-- End: Home and Notification navbar -->
				<!-- Start: Wallet and User dropdown Navbar -->
				<ul class="nav navbar-nav ml-auto">
					<!-- Start: Navbar-Wallet -->
					<li
						class="nav-item border rounded border-dark shadow-sm mr-5 p-1 mb-2"
						role="presentation"><a class="nav-link"
						href="<?= base_url('/dash/ng/rendar/ewallet?view=balance');?>"><i class="fas fa-wallet bs-fa-2"
							style="color: #af7505;"></i><strong class="ml-2"
							style="color: #ffd700;">Balance&nbsp;</strong><strong
							class="ml-2" style="font-size: larger; color: #00cc66;">NGN</strong><strong
							class="text-monospace ml-1"
							style="font-size: larger; font-family: monospace; font-weight: 700;">25,700.00</strong></a>
					</li>
					<!-- End: Navbar-Wallet -->
					<!-- Start: User Account  Dropdown -->
					<li class="nav-item dropdown">
					<a
						class="dropdown-toggle nav-link border rounded-0 border-warning shadow bs-f-bold"
						data-toggle="dropdown" aria-expanded="false" href="#"><img
							class="rounded-circle bs_updateAvatarPreview"
							src="<?php
								$fp = '/frontendUploads/avatars/clients/';
								if(isset($avatar))
								{
									echo base_url().$fp.$avatar;
								}
								else
								{
									if($gender === 'male' || $gender === 'Male'){
										echo base_url().'/globalAssets/img/male.png';
									}
									elseif($gender === 'female' || $gender === 'Female')
									{
										echo base_url().'/globalAssets/img/female.png';
									}
								}
							?>"
							style="width: 45px;">&nbsp;<small class="text-info"><?= isset($firstLogin) && $firstLogin ? 'Welcome!' : 'Welcome back!';?></small> <strong class="text-light"><?=isset($profileName) ? $profileName : 'Obi, Pascal';?>,&nbsp;</strong><strong
							class="text-warning">ID: <?= isset($ID) ? $ID : '1342422342';?></strong></a>
						<div role="menu" class="dropdown-menu dropdown-menu-right dsh-user-dropdown">
							<h6 role="presentation" class="dropdown-header text-muted"
								style="font-size: x-small;">Last login <span class="bs_rendarLastLogin ml-1"><?= isset($lastLogin) ? $lastLogin : '';?></span> </h6>
							<div role="presentation" class="dropdown-divider"></div>
							<a role="presentation" href="<?= base_url('/dash/ng/rendar/account?view=account');?>"
								class="dropdown-item bs-color"><i class="far fa-user-circle"></i> Profile</a><a
								role="presentation" href="<?= base_url('/dash/ng/rendar/account?view=settings');?>"
								class="dropdown-item bs-color"><i class="fa fa-gears"></i><strong> Settings</strong></a>
							<a role="presentation" href="<?= base_url('/dash/ng/rendar/ewallet');?>" class="dropdown-item bs-color"><i
								class="fas fa-wallet"></i><strong> Wallet</strong></a>
							<div role="presentation" class="dropdown-divider"></div>
							<a role="presentation" href="<?= base_url('/dash/ng/rendar/board?logout=true');?>"
								class="dropdown-item text-danger bs-color"><i
								class="fas fa-user-lock"></i> Logout</a>
						</div>
						</li>
					<!-- End: User Account  Dropdown -->
				</ul>
				<!-- End: Wallet and User dropdown Navbar -->
			</div>
		</div>
	</nav>
	<!-- End: Navbar -->
</header>
<!-- End: App Header -->