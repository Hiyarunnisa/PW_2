<?php

require_once './db_koneksi.php';

$pasien_id = $dbh->query('SELECT * FROM pasien');
$paramedik = $dbh->query('SELECT * FROM paramedik');


$error = false;

$periksa_id = $_GET['id'] ?? 0;
if ($periksa_id) {
  $findperiksaSQL = "SELECT * FROM periksa WHERE id = $periksa_id LIMIT 1";
  $periksa = $dbh->query($findperiksaSQL);
  if ($periksa->rowCount()) $periksa = 
  $periksa->fetch();
  else header('location: ./data_periksa.php');
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
          <h1>periksa</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Form periksa</h3>

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
        <form method="post" action="proses_periksa.php">
          <?php if (!empty($periksa_id)) :?>
              <input type="hidden" name="id_periksa" value="<?= $periksa_id; ?>">
          <?php endif;  ?>
          <input type="hidden" >
          <input type="hidden" value="<?= $periksa['id'] ?>" name="id">
  <div class="form-group row">
    <label for="pasien_id" class="col-4 col-form-label">ID Pasien</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user"></i>
          </div>
        </div> 
        <select id="pasien_id" name="pasien_id" class="custom-select">
                <option value="" disabled selected>--- Pilih pasien_id ---</option>
                <?php foreach ($pasien_id as $key => $pi) : ?>
                  <option <?= $periksa_id && $periksa['pasien_id'] == $pi['id'] ? 'selected' : '' ?> value="<?= $pi['id'] ?>"><?= $pi['nama'] ?></option>
                <?php endforeach ?>
              </select>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="dokter_id" class="col-4 col-form-label">ID Pemeriksa</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user"></i>
          </div>
        </div> 
        <select id="dokter_id" name="dokter_id" class="custom-select">
            <option value="">Pilih paramedik</option>
            <?php foreach ($paramedik as $pk) : ?>
                <option <?= $periksa_id && $periksa['dokter_'] == $pk['id'] ? 'selected' : '' ?> value="<?= $pk['id'] ?>"><?= $pk['nama'] ?></option>

            <?php endforeach ?>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" type="date" class="form-control" required="required" value="<?= $periksa['tanggal'] ?? ''  ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat</label> 
    <div class="col-8">
      <input id="berat" name="berat" type="number" required="required" class="form-control" value="<?= $periksa['berat']  ?? '' ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi" type="number" class="form-control" required="required" value="<?= $periksa['tinggi']  ?? '' ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="tensi" class="col-4 col-form-label">Tensi</label> 
    <div class="col-8">
      <input id="tensi" name="tensi" type="number" required="required" value="<?= $periksa['tensi']  ?? '' ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="keterangan" class="col-4 col-form-label">Keterangan</label> 
    <div class="col-8">
      <textarea id="keterangan" name="keterangan" cols="40" rows="5" class="form-control"><?= $periksa['keterangan'] ?? ''  ?></textarea>
    </div>
  </div> 

  <div class="form-group row">
          <div class="form-group row">
            <div class="offset-4 col-8">
              <input type="submit" name="proses" id="proses" class="btn btn-primary" value="<?= $periksa_id ?'Ubah':'Simpan' ?>">
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
