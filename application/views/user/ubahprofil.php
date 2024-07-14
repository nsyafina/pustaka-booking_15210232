<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-9">
			<?= form_open_multipart('user/ubahprofil'); ?>
			<div class="form-group row">
				<label for="email" class="col-sm-2 col-formlabel">Email</label>
				<div class="col-sm-10">
					<input style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" type="text" class="form-control"
					id="email" name="email" value="<?= $user['email']; ?>" readonly>
				</div>
			</div>
			<div class="form-group row">
				<label for="nama" class="col-sm-2 col-formlabel">Nama Lengkap</label>
				<div class="col-sm-10">
					<input style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" type="text" class="form-control"
					id="nama" name="nama" value="<?= $user['nama']; ?>">
					<?= form_error('nama', '<small class="textdanger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-2">Gambar</div>
				<div class="col-sm-10">
					<div class="row">
						<div class="col-sm-3">
							<img src="<?=
							base_url('assets/img/profile/') . $user['image']; ?>" alt="" style="width: 150px;">
						</div>
						<div class="col-sm-9">
							<div class="custom-file">
								<input type="file" class="customfile-input" id="image" name="image">
								<label style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 3px;" class="custom-file-label" for="image">Pilih file</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group row justify-content-end">
				<div class="col-sm-10">
					<button type="submit" class="btn" style="background-color: purple; color: white; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4); border-radius: 10px;">Ubah</button>
					<button class="btn" style="background-color: pink; color: purple; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4); border-radius: 10px;" onclick="window.history.go(-1)"> Kembali</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->