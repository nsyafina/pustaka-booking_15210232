<!-- Begin Page Content -->
<div class="container-fluid">
  <?= $this->session->flashdata('pesan'); ?>
  <div class="row">
    <div class="col-lg-4">
      <?php if (validation_errors()) { ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
      <?php } ?>
      <?= $this->session->flashdata('pesan'); ?>
      <a href="" class="btn mb-3" style="background-color: purple; color: white; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);" data-toggle="modal" data-target="#kategoriBaruModal"><i class="fas fa-plus"></i> Tambah Kategori Buku</a>
      <table class="table table-hover" style="border: 1px solid purple;">
        <thead>
          <tr>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">No.</th>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Kategori Buku</th>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $a = 1;
          foreach ($kategori as $k) { ?>
            <tr>
              <th style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);" scope="row"><?= $a++; ?></th>
              <td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $k['nama_kategori']; ?></td>
              <td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);">
                <a href="<?= base_url('buku/ubahkategori/') . $k['id_kategori']; ?>" style="font-size: 15px; margin-left: 3px; border: 1px solid rgba(0,0,0,0.4); background-color: purple; color: white; padding: 7px; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);" class="badge badge-info"><i class="fas fa-edit"></i></a>
                <a href="<?= base_url('buku/hapuskategori/') . $k['id_kategori']; ?>" style="font-size: 15px; margin-left: 3px; border: 1px solid rgba(0,0,0,0.4); background-color: pink; color: purple; padding: 7px; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);" onclick="return confirm('Kamu yakin akan menghapus <?= $k['nama_kategori']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->


<!-- Modal Tambah kategori baru-->
<div class="modal fade" id="kategoriBaruModal" tabindex="-1" role="dialog" aria-labelledby="kategoriBaruModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="kategoriBaruModalLabel" style="color: purple;">Tambah Kategori Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: purple;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('buku/kategori'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" class="form-control form-control-user" name="nama_kategori" placeholder="Masukkan Kategori Buku">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn" style="background-color: pink; color: black; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4); border-radius: 10px;" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn" style="background-color: purple; color: white; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4); border-radius: 10px;">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End of Modal Tambah Mneu -->