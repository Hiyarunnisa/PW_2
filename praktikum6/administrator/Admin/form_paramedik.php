<?php

require_once './db_koneksi.php';

$data_uk = $dbh->query("SELECT * FROM unit_kerja ORDER BY nama ASC");

$error = false;

$paramedik_id = $_GET['id'] ?? 0;
if ($paramedik_id) {
  $findParamedikSQL = "SELECT * FROM paramedik WHERE id = $paramedik_id LIMIT 1";
  $paramedik = $dbh->query($findParamedikSQL);
  if ($paramedik->rowCount()) $paramedik = 
  $paramedik->fetch();
  else header('location: ./data_paramedik.php');
}

require_once './layouts/top.php';
require_once './layouts/navbar.php';
require_once './layouts/sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>paramedik</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Form Paramedik</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <form method="post" action="proses_paramedik.php">
          <?php if (!empty($paramedik_id)) :?>
              <input type="hidden" name="id_paramedik" value="<?= $paramedik_id; ?>">
          <?php endif;  ?>
          <input type="hidden" >
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
            <div class="col-8">
              <input id="nama" name="nama" type="text" class="form-control" value="<?= $paramedik['nama'] ?? '' ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" checked>
                <label for="gender_0" class="custom-control-label">Laki-Laki</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" <?= $paramedik_id && $paramedik['gender'] == 'P' ? 'checked' : '' ?>>
                <label for="gender_1" class="custom-control-label">Perempuan</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
            <div class="col-8">
              <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="<?= $paramedik['tmp_lahir'] ?? '' ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
            <div class="col-8">
              <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" value="<?= $paramedik['tgl_lahir'] ?? '' ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="kategori" class="col-4 col-form-label">Kategori</label>
            <div class="col-8">
              <input id="kategori" name="kategori" type="text" class="form-control" value="<?= $paramedik['kategori'] ?? '' ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="telpon" class="col-4 col-form-label">Telpon</label>
            <div class="col-8">
              <input id="telpon" name="telpon" type="tel" class="form-control" value="<?= $paramedik['kategori'] ?? '' ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
              <textarea id="alamat" name="alamat" cols="40" rows="2" class="form-control"><?= $paramedik['alamat'] ?? '' ?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="kelurahan" class="col-4 col-form-label">Unit Kerja</label>
            <div class="col-8">
              <select id="unit_kerja" name="unit_kerja" class="custom-select">
                <option value="" disabled selected>--- Pilih unit_kerja ---</option>
                <?php foreach ($data_uk as $key => $unit_kerja) : ?>
                  <option <?= $paramedik_id && $paramedik['unit_kerja_id'] == $unit_kerja['id'] ? 'selected' : '' ?> value="<?= $unit_kerja['id'] ?>"><?= $unit_kerja['nama'] ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <input type="submit" name="proses" id="proses" class="btn btn-primary" value="<?= $paramedik_id ?'Ubah':'Simpan' ?>">
            </div>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once './layouts/bottom.php';
?>
