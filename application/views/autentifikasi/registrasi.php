<div class="container">
	<div class="card o-hidden border-0 my-5 col-lg-7" style="border-radius: 15px; margin-left: 230px;">
		<div class="card-body p-0" style="box-shadow: inset -5px -5px rgba(0, 0, 0, 0.4); border-radius: 15px; width: 625px;">
			<!-- Nested Row within Card Body -->
			<div class="row">
				<div class="col-lg">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 mb4" style="font-size: 26px; color: purple; margin-bottom: 35px; font-weight: bold;">REGISTRASI MEMBER</h1>
						</div>
						<form class="user" method="post"
						action="<?= base_url('autentifikasi/registrasi'); ?>">
						<div class="form-group">
							<input type="text" class="formcontrol form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>" style="font-size: 16px; border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); width: 530px; height: 50px;"> <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<input type="text" class="formcontrol form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>" style="font-size: 16px; border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4);  width: 530px; height: 50px;"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group row">
							<div class="col-sm-6 mb-3 mb-sm0">
								<input type="password"
								class="form-control form-control-user" id="password1"
								name="password1" placeholder="Password" style="font-size: 16px; border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4);">
								<?= form_error('password1',
								'<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="col-sm-6">
								<input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password" style="font-size: 16px; border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4);">
								<?= form_error('password2',
								'<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
						<button type="submit" style="background-color: purple; color: white; font-size: 17px; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);" class="btn btn-user btn-block">Daftar</button>
					</form>
					<hr>
					<div class="text-center">
						<a class="small" href="<?=
						base_url('autentifikasi/lupaPassword'); ?>" style="color: purple; font-size: 15px;">Lupa Password?</a>
					</div>
					<div class="text-center">
						Sudah Menjadi Member?<a class="small"
						href="<?= base_url('autentifikasi'); ?>" style="color: purple; font-size: 15px;"> Login!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>