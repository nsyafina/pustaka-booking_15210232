<!-- Begin Page Content -->
<div class="container-fluid">
  <?= $this->session->flashdata('pesan'); ?>
  <div class="row">
    <div class="col-lg-6">
      <?php if (validation_errors()) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Nama Kategori tidak boleh Kosong</div>');
        redirect('buku/ubahkategori/' . $k['id_kategori']);
      } ?>
      <?php foreach ($kategori as $k) { ?>
        <form action="<?= base_url('buku/ubahKategori'); ?>" method="post">
          <div class="form-group">
            <input type="hidden" name="id_kategori" id="id_kategori" value="<?= $k['id_kategori']; ?>">
            <input type="text" class="form-control form-control-user" id="nama_kategori" name="nama_kategori" placeholder="Masukkan Kategori Buku" value="<?= $k['nama_kategori']; ?>" style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;">
            <input type="submit" class="form-control form-control-user btn col-lg-3 mt-3" style="background-color: purple; color: white; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);" value="Ubah">
            <input type="button" class="form-control form-control-user btn col-lg-3 mt-3" style="background-color: pink; color: black; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);" value="Batal" onclick="window.history.go(-1)">
          </div>
          <div class="form-group">

          </div>
        </form>
      <?php } ?>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->