<!--
    The Rendars Dashboard [Navbar]
    -----------------------------
    This is the navbar of the entire dashboard
    -> This file is loaded as a fragment of the dashboard
 -->

<!-- Start: App Header -->
<header class="text-light"
	style="background: rgb(70, 78, 108); color: white;">
	<!-- Start: Navbar -->
	<nav class="navbar navbar-dark navbar-expand-md fixed-top"
		style="background-color: #464e6c;">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img
				src="<?=base_url();?>/assets/img/bitmoser_logo.png?h=dcfb26295dec07c0bc85de44c036119e"></a>
			<button class="navbar-toggler" data-toggle="collapse"
				data-target="#navcol-1">
				<span class="sr-only">Toggle navigation</span><span
					class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navcol-1">
				<!-- Start: Home and Notification navbar -->
				<ul class="nav navbar-nav mx-auto">
					<li class="nav-item" role="presentation"><a
						class="nav-link active bs-f-bold" href="#">Home</a></li>
					<li class="nav-item dropdown"><a
						class="dropdown-toggle nav-link bs-f-bold" data-toggle="dropdown"
						aria-expanded="false" href="#">&nbsp;<span
							class="badge badge-pill badge-primary bs-bg"><i
								class="fa fa-envelope-o bs-fa-2"></i></span><small
							class="log-notification-number"><span
								class="badge badge-primary tada animated infinite"
								style="position: absolute; top: -1px; left: 48px; border-radius: 22rem; background-color: #bc3877;">0</span></small></a>
						<div class="dropdown-menu" role="menu"
							style="width: auto !important; position: absolute;">
							<h6 class="dropdown-header text-muted" role="presentation">
								<strong>Notifications</strong>
							</h6>
							<div class="dropdown-divider" role="presentation"></div>
							<a class="dropdown-item text-muted" role="presentation" href="#">First
								item</a><a class="dropdown-item text-muted" role="presentation"
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
						href="e-wallet/wallet.html"><i class="fas fa-wallet bs-fa-2"
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
							class="rounded-circle"
							src="<?=base_url();?>/assets/img/fb-id.jpg?h=15e214ee10342db66a416e821fbed12a"
							style="width: 45px;">&nbsp;Welcome <strong><?=isset($profileName) ? $profileName : 'Obi, Pascal';?>,&nbsp;</strong><strong
							class="text-warning">ID: <?=isset($ID) ? $ID : '1342422342';?></strong></a>
						<div role="menu" class="dropdown-menu dropdown-menu-right dsh-user-dropdown">
							<h6 role="presentation" class="dropdown-header text-muted"
								style="font-size: x-small;">Last login </h6>
							<div role="presentation" class="dropdown-divider"></div>
							<a role="presentation" href="account/view.html"
								class="dropdown-item bs-color"><i class="far fa-user-circle"></i> Profile</a><a
								role="presentation" href="account/settings.html"
								class="dropdown-item bs-color"><i class="fa fa-gears"></i><strong> Settings</strong></a>
							<a role="presentation" href="#" class="dropdown-item bs-color"><i
								class="fas fa-wallet"></i><strong> Wallet</strong></a>
							<div role="presentation" class="dropdown-divider"></div>
							<a role="presentation" href="#"
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