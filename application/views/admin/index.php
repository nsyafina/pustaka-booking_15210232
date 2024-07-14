<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- row ux-->
	<div class="row">
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card shadow h-100 py-2 " style="background-image: linear-gradient(rgba(129, 2, 129, 0.5), rgba(255, 216, 230, 0.5)); border-left: 2px solid purple; border-right: 2px solid purple;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-md font-weight-bold text-uppercase mb-1" style="color: purple">Jumlah Anggota</div>
							<div class="h1 mb-0 font-weight-bold" style="color: purple"><?=$this->modeluser->getUserWhere(['role_id' => 1])->num_rows();?></div>
						</div>
						<div class="col-auto">
							<a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-users fa-3x" style="color: purple"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card shadow h-100 py-2" style="background-image: linear-gradient(rgba(129, 2, 129, 0.5), rgba(255, 216, 230, 0.5)); border-left: 2px solid purple; border-right: 2px solid purple;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-md font-weight-bold text-uppercase mb-1" style="color: purple">Stok Buku Terdaftar</div>
							<div class="h1 mb-0 font-weight-bold" style="color: purple">
								<?php
								$where = ['stok != 0'];
								$totalstok = $this->modelbuku->total('stok', $where);
								echo $totalstok;
								?>
							</div>
						</div>
						<div class="col-auto">
							<a href="<?= base_url('buku'); ?>"><i class="fas fa-book fa-3x" style="color: purple"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card shadow h-100 py-2" style="background-image: linear-gradient(rgba(129, 2, 129, 0.5), rgba(255, 216, 230, 0.5)); border-left: 2px solid purple; border-right: 2px solid purple;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-md font-weight-bold text-uppercase mb-1" style="color: purple">Buku yang dipinjam</div>
							<div class="h1 mb-0 font-weight-bold" style="color: purple">
								<?php
								$where = ['dipinjam != 0'];
								$totaldipinjam = $this->modelbuku->total('dipinjam',$where);
								echo $totaldipinjam;
								?>
							</div>
						</div>
						<div class="col-auto">
							<a href="<?= base_url('user'); ?>"><i class="fas fa-user-tag fa-3x" style="color: purple"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card shadow h-100 py-2" style="background-image: linear-gradient(rgba(129, 2, 129, 0.5), rgba(255, 216, 230, 0.5)); border-left: 2px solid purple; border-right: 2px solid purple;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-md font-weight-bold text-uppercase mb-1" style="color: purple">Buku yang dibooking</div>
							<div class="h1 mb-0 font-weight-bold" style="color: purple">
								<?php
								$where = ['dibooking !=0'];
								$totaldibooking = $this->modelbuku->total('dibooking', $where);
								echo $totaldibooking;
								?>
							</div>
						</div>
						<div class="col-auto">
							<a href="<?= base_url('user'); ?>"><i class="fas fa-shopping-cart fa-3x" style="color: purple"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end row ux-->
	<!-- Divider -->
	
	<!-- row table-->
	<div class="row">
		<div class="table-responsive col-lg-12 ml-auto mr-auto mt-2" style="border: 1px solid rgba(129, 2, 129, 0.4); box-shadow: inset -3px -3px rgba(129, 2, 129, 0.4); border-radius: 10px; padding: 10px;" >
			<div class="page-header">
				<span style="color: purple; font-size: 19px; padding-top: 20px; margin-left: 5px; font-weight: bold;"> Data User</span>				<a href="<?php echo base_url('user/data_user'); ?>"><i style="color: purple; margin-right: 5px;" class="fas fa-search mt-2 float-right"></i></a>

			</div>
			<table class="table mt-1" style="border: 1px solid purple;">
				<thead>
					<tr>
						<th style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">No.</th>
						<th style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Nama Anggota</th>
						<th style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Email</th>
						<th style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Role ID</th>
						<th style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Aktif</th>
						<th style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Member Sejak</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					foreach ($anggota as $a) { ?>
						<tr>
							<td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $i++; ?></td>
							<td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $a['nama']; ?></td>
							<td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $a['email']; ?></td>
							<td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $a['role_id']; ?></td>
							<td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $a['is_active']; ?></td>
							<td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= date('Y', $a['tanggal_input']); ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="table-responsive col-lg-12 ml-auto mr-auto mt-2" style="border: 1px solid rgba(129, 2, 129, 0.4); box-shadow: inset -3px -3px rgba(129, 2, 129, 0.4); border-radius: 10px; padding: 10px;">
			<div class="page-header">
				<span style="color: purple; font-size: 19px; padding-top: 20px; margin-left: 5px; font-weight: bold;"> Data Buku</span>
				<a href="<?= base_url('buku'); ?>"><i style="color: purple; margin-right: 5px;" class="fas fa-search mt-2 float-right"></i></a>
			</div>
			<div class="table-responsive">
				<table class="table mt-1" id="table-datatable" style="border: 1px solid purple;">
					<thead>
						<tr>
							<th style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">No.</th>
							<th style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Judul Buku</th>
							<th style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Pengarang</th>
							<th style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Penerbit</th>
							<th style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Tahun Terbit</th>
							<th style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">ISBN</th>
							<th style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Stok</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($buku as $b) { ?>
							<tr>
								<td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $i++; ?></td>
								<td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $b['judul_buku']; ?></td>
								<td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $b['pengarang']; ?></td>
								<td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $b['penerbit']; ?></td>
								<td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $b['tahun_terbit']; ?></td>
								<td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $b['isbn']; ?></td>
								<td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $b['stok']; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- end of row table-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->