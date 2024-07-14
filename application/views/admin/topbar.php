<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content -->
	<div id="content">
		<!-- Topbar -->
		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
			<!-- Page Heading -->
			<h1 class="h3 mb-2" style="color: rgba(129, 2, 129, 1);"><?= $judul; ?></h1>
			<!-- Topbar Navbar -->
			<ul class="navbar-nav ml-auto">
				<div class="topbar-divider d-none d-sm-block"></div>
				<!-- Nav Item - User Information -->
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" ariahaspopup="true" aria-expanded="false">
						<span class="mr-2 d-none d-lg-inline small" style="font-size: 16px; color: rgba(129, 2, 129, 0.6);"><?= $user['nama']; ?> </span>
						<img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
					</a>
					<!-- Dropdown - User Information -->
					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
						<a class="dropdown-item" href="<?=base_url('user'); ?>">
							<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
							Profile Saya
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?=base_url('autentifikasi/logout'); ?>" data-toggle="modal" datatarget="#logoutModal">
							<i class="fas fa-sign-out-alt fa-sm fafw mr-2 text-gray-400"></i>Logout</a>
						</div>
					</li>
				</ul>
			</nav>
			<!-- End of Topbar -->
