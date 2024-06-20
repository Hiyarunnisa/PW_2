<?php
require_once './layouts/top.php';
require_once './layouts/navbar.php';
require_once './layouts/sidebar.php';

require_once './db_koneksi.php';

// Query
$sql = "SELECT * FROM periksa";
$data = $dbh->query($sql);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class=" mb-2">
        <div class="px-4">
        <div class="d-flex mt-4 justify-content-between">
          <h1 class="me-auto">Periksa</h1>
          <a href="form_periksa.php" class="btn btn-primary">Tambahkan Periksa</a>
        </div>          
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data periksa</h3>

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
        <table class="table tablebordered">
          <thead>
            <tr>
              <th>No.</th>
              <th>Id Pasien</th>
              <th>Id Dokter</th>
              <th>Tinggi</th>
              <th>Berat</th>
              <th>Tensi</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $key => $periksa) : ?>
              <tr>
                <td><?= ++$key ?></td>
                <td><?= $periksa['pasien_id'] ?></td>
                <td><?= $periksa['dokter_id'] ?></td>
                <td><?= $periksa['tinggi'] ?></td>
                <td><?= $periksa['berat'] ?></td>
                <td><?= $periksa['tensi'] ?></td>
                <td><?= $periksa['keterangan'] ?></td>
                <td>
                  <a href="./form_periksa$periksa.php?id=<?= $periksa['id'] ?>" class="btn btn-sm btn-warning">Ubah</a>
                  <form action="proses_periksa$periksa.php" method="post">
                    <input type="hidden" name="id_periksa$periksa" value="<?= $periksa['id'] ?>">
                    <input type="submit" name="proses" class="btn btn-sm btn-danger" value="Hapus">
                  </form>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once './layouts/bottom.php';
?>