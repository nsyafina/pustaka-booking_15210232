<!-- Begin Page Content -->
<div class="container-fluid">
  <?= $this->session->flashdata('pesan'); ?>
  <div class="row">
    <div class="col-lg-8">
      <?php if (validation_errors()) { ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
      <?php } ?>
      <?= $this->session->flashdata('pesan'); ?>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">No.</th>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Nama Anggota</th>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Email</th>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Role ID</th>
            <th scope="col" style="border: 1px solid rgba(129, 2, 129, 0.6); color: purple; background-color: rgba(129, 2, 129, 0.3);">Aktif</th>
            <!--<th scope="col">Pilihan</th>-->
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
              <!--<td> 
                <a href="<?= base_url('user/ubahuser/') . $a['id']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                <a href="<?= base_url('user/hapususer/') . $a['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $a['nama']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
              </td>-->

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