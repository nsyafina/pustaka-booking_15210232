<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 justify-content-x">
			<?= $this->session->flashdata('pesan'); ?>
		</div>
	</div>
	<div class="card mb-3" style="max-width: 540px;">
		<div class="row no-gutters">
			<div class="col-md-4">
				<img src="<?= base_url('assets/img/profile/') .
				$user['image']; ?>" class="card-img" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body" style="background-image: linear-gradient(purple, #FFD8E6);">
					<h5 class="card-title" style="color: white"><?= $user['nama'];
					?></h5>
					<p class="card-text" style="color: white"><?= $user['email']; ?></p>
					<p class="card-text" style="color: white"><small class="textmuted">Jadi member sejak: <br><b><?= date('d F Y',
					$user['tanggal_input']); ?></b></small></p>
					<a href="<?= base_url('user/ubahprofil'); ?>" class=" btn" style="background-color: purple; color: white; margin-top: 10px;"><i class="fas fa-user-edit"></i> Ganti Profil</a>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->