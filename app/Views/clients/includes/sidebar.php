<!--
    The Rendars Dashboard [Sidebar]
    ------------------------------
    -> This is the rendars dashboard sidebar.
    -> The sidebar only does not constitute the dashboard it is just a page fragment that
    require other fragment to constitute the dasbhoard
 -->

<!-- Start: App Mian Content -->
<section style="margin-top: 5rem !important;">
	<div class="row no-gutters">
		<!-- Start: Sidebar -->
		<div class="col-md-2 col-lg-2 col-xl-2">
			<div class="shadow bs-bg bs-dsh-sidebar bs-sidebar-left">
				<button class="close text-light close-dsh-sidebar">
					<span aria-hidden="true">×</span>
				</button>
				<ul class="nav nav-tabs flex-column bs-dsh-sidebar-nav">
					<li class="nav-item text-center bs-dsh-sidebar-item"><a
						class="nav-link bs-dsh-sidebar-links bs-f-bold <?= isset($active) && $active === 'board' ? 'current-tab' : '';?>"
						href="<?= base_url('/dash/ng/rendar/board');?>"><i
							class="fa fa-dashboard bs-fa-2 bs-fa-mutted"
							style="color: #ffd700;"></i>&nbsp;Dashboard</a></li>
					<li class="nav-item text-center bs-dsh-sidebar-item"><a
						class="nav-link bs-f-bold bs-dsh-sidebar-links <?= isset($active) && $active === 'request' ? 'current-tab' : '';?>"
						href="<?= base_url('/dash/ng/rendar/request');?>"><i
							class="fa fa-users bs-fa-2 bs-fa-mutted" style="color: #00b5d6;"></i>&nbsp;Request</a></li>
					<li class="nav-item text-center bs-dsh-sidebar-item"><a
						class="nav-link bs-f-bold bs-dsh-sidebar-links <?= isset($active) && $active === 'wallet' ? 'current-tab' : '';?>"
						href="<?= base_url('/dash/ng/rendar/ewallet');?>"><i
							class="fas fa-wallet bs-fa-2 bs-fa-mutted"
							style="color: #cc7a02;"></i>&nbsp;E-Wallet</a></li>
							
					<li class="nav-item text-center bs-dsh-sidebar-item"><a
						class="nav-link bs-f-bold bs-dsh-sidebar-links <?= isset($active) && $active  === 'services' ? 'current-tab' : '';?>"
						href="<?= base_url('/dash/ng/rendar/services');?>"><i
							class="fa fa-briefcase bs-fa-2 bs-fa-mutted"
							style="color: #4c280f;"></i>&nbsp;Services</a></li>
					<li class="nav-item text-center bs-dsh-sidebar-item"><a
						class="nav-link bs-f-bold bs-dsh-sidebar-links <?= isset($active) && $active === 'account' ? 'current-tab' : '';?>"
						href="<?= base_url('/dash/ng/rendar/account')?>"><i
							class="far fa-user-circle bs-fa-2 bs-fa-mutted"
							style="color: #8c60c1;"></i>&nbsp;Account</a></li>
				</ul>
			</div>
		</div>
		<!-- End: Sidebar -->