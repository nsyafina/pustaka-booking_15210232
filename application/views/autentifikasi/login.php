<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5" style="border-radius: 15px;">
                <div class="card-body p-0" style="box-shadow: inset -5px -5px rgba(0, 0, 0, 0.4); border-radius: 15px;">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 mb4"style="font-size: 30px; color: purple; margin-bottom: 35px;"><strong>LOGIN</strong></h1>
                                </div>
                                <?= $this->session->flashdata('pesan'); ?>
                                <form class="user" method="post" action="<?= base_url('autentifikasi'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" placeholder="Masukkan Alamat Email" name="email" style="font-size: 16px; border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4);">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password" style="font-size: 16px; border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4);">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-user btn-block" style="background-color: purple; color: white; font-size: 17px; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);">Masuk</button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" style="color: purple; font-size: 15px;" href="<?= base_url('autentifikasi/lupaPassword'); ?>">Lupa Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" style="color: purple; font-size: 15px;" href="<?= base_url('autentifikasi/registrasi'); ?>">Daftar Member!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
