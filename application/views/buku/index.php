<!-- Begin Page Content -->
<div class="container-fluid">
  <?= $this->session->flashdata('pesan'); ?>
  <div class="row">
    <div class="col-lg-12">
      <?php if (validation_errors()) { ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
      <?php } ?>
      <a href="" class="btn btn-primary mb-3" style="background-color: purple; color: white; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);" data-toggle="modal" data-target="#bukuBaruModal"><i class="fas fa-plus"></i> Tambah Buku Baru</a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">No.</th>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Judul</th>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Pengarang</th>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Penerbit</th>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Tahun Terbit</th>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">ISBN</th>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Stok</th>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Dipinjam</th>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Dibooking</th>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Gambar</th>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $a = 1;
          foreach ($buku as $b) { ?>
            <tr>
              <th style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);" scope="row"><?= $a++; ?></th>
              <td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $b['judul_buku']; ?></td>
              <td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $b['pengarang']; ?></td>
              <td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $b['penerbit']; ?></td>
              <td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $b['tahun_terbit']; ?></td>
              <td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $b['isbn']; ?></td>
              <td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $b['stok']; ?></td>
              <td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $b['dipinjam']; ?></td>
              <td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);"><?= $b['dibooking']; ?></td>
              <td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);">
                <picture>
                  <source srcset="" type="image/svg+xml">
                    <img src="<?= base_url('assets/img_pustaka/') . $b['image']; ?>" class="img-fluid " alt="...">
                  </picture>
                </td>
                <td style="border: 1px solid rgba(129, 2, 129, 0.3); color: purple; background-color: rgba(129, 2, 129, 0.1);">
                  <a href="<?= base_url('buku/ubahBuku/') . $b['id']; ?>" style="font-size: 15px; background-color: purple; color: white; padding: 7px; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4); margin-bottom: 4px; border: 1px solid rgba(0,0,0,0.4);" class="badge badge-info"><i class="fas fa-edit"></i></a>
                  <a href="<?= base_url('buku/hapusbuku/') . $b['id']; ?>" style="font-size: 15px; background-color: pink; color: purple; padding: 7px 8px; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4); border: 1px solid rgba(0,0,0,0.4);" onclick="return confirm('Kamu yakin akan menghapus <?= $b['judul_buku']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i></a>
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

<!-- Modal Tambah buku baru -->
<div class="modal fade" id="bukuBaruModal" tabindex="-1" role="dialog" aria-labelledby="bukuBaruModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bukuBaruModalLabel" style="color: purple;">Tambah Buku Baru</h5>
        <button type="button" style="color: purple;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('buku'); ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" class="form-control form-control-user" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku">
          </div>
          <div class="form-group">
            <select style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" name="id_kategori" class="form-control form-control-user">
              <option value="">Pilih Kategori</option>
              <?php foreach ($kategori as $k) { ?>
                <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Masukkan nama pengarang">
          </div>
          <div class="form-group">
            <input type="text" style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukkan nama penerbit">
          </div>
          <div class="form-group">
            <select name="tahun" style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" class="form-control form-control-user">
              <option value="">Pilih Tahun</option>
              <?php for ($i = date('Y'); $i > 1000; $i--) { ?>
                <option value="<?= $i; ?>"><?= $i; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukkan ISBN">
          </div>
          <div class="form-group">
            <input type="text" style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominal stok">
          </div>
          <div class="form-group">
            <input type="file" style="border: 1px solid rgba(129, 2, 129, 0.6); box-shadow: inset -2px -2px rgba(129, 2, 129, 0.4); border-radius: 10px;" class="form-control form-control-user" id="image" name="image">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: pink; color: purple; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4); border-radius: 10px;"> Batal</button>
          <button type="submit" class="btn btn-primary" style="background-color: purple; color: white; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4); border-radius: 10px;"> Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End of Modal Tambah buku baru -->