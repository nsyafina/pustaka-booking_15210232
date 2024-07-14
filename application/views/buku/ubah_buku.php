<!-- Begin Page Content -->
<div class="container-fluid">
  <?= $this->session->flashdata('pesan'); ?>
  <div class="row">
    <div class="col-lg-6">
      <?php if (validation_errors()) { ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
      <?php } ?>
      <?= $this->session->flashdata('pesan'); ?>


      <!-- KOnten -->
      <?php foreach ($buku as $b) { ?>
        <form action="<?= base_url('buku/ubahBuku'); ?>" method="post" enctype="multipart/form-data">
          <div class='row'>
            <div class="col-sm-3">
              <img src="<?= base_url('assets/img_pustaka/') . $b['image']; ?>" style="width: 200px;" class="img-thumbnail" alt="">
            </div>
            <div class='col-sm-9'>
              <div class="modal-body">
                <div class="form-group">
                  <input type="hidden" name="id" id="id" value="<?php echo $b['id']; ?>">
                  <input style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;"x type="text" class="form-control form-control-user" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku" value="<?= $b['judul_buku']; ?>">
                </div>
                <div class="form-group">
                  <select  style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" name="id_kategori" class="form-control form-control-user">
                    <option xvalue="<?= $b['id']; ?>">Pilih data buku...</option>
                    <?php foreach ($kategori as $k) { ?>
                      <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <input style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" type="text" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Masukkan nama pengarang" value='<?= $b['pengarang']; ?>'>
                </div>
                <div class="form-group">
                  <input style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukkan nama penerbit" value='<?= $b['penerbit']; ?>'>
                </div>
                <div class="form-group">
                  <select style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" name="tahun" class="form-control form-control-user">
                    <option value="<?= $b['tahun_terbit']; ?>">Pilih Tahun terbit...</option>
                    <?php for ($i = date('Y'); $i > 1000; $i--) { ?>
                      <option value="<?= $i; ?>"><?= $i; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <input style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukkan ISBN" value='<?= $b['isbn']; ?>'>
                </div>
                <div class="form-group">
                  <input style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominal stok" value='<?= $b['stok']; ?>'>
                </div>
                <div class="form-group">
                  <?php
                  if (isset($b['image'])) { ?>

                    <input type="hidden" name="old_pict" id="old_pict" value="<?= $b['image']; ?>">

                    <picture>
                      <source srcset="" type="image/svg+xml">
                        <img src="<?= base_url('assets/img_pustaka/') . $b['image']; ?>" class="rounded mx-auto mb-3 d-blok" alt="..." width="70">
                      </picture>

                    <?php } ?>
                    <input style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" type="file" class="form-control form-control-user" id="image" name="image">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn" style="background-color: pink; color: purple; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4); border-radius: 10px;" onclick="window.history.back(-1)">Batal</button>
                  <button type="submit" class="btn" style="background-color: purple; color: white; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4); border-radius: 10px;">Ubah</button>
                </div>
              </div>
            </div>

          </form>
        <?php } ?>

      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->