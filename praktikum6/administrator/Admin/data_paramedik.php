<?php
require_once './layouts/top.php';
require_once './layouts/navbar.php';
require_once './layouts/sidebar.php';

require_once './db_koneksi.php';

// Query
$sql = "SELECT * FROM paramedik";
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
          <h1 class="me-auto">Paramedik</h1>
          <a href="form_paramedik.php" class="btn btn-primary">Tambahkan Paramedik</a>
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
        <h3 class="card-title">Data Paramedik</h3>

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
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Kategori</th>
              <th>Telpon</th>
              <th>Alamat</th>
              <th>Unit Kerja</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $key => $paramedik) : ?>
              <tr>
                <td><?= ++$key ?></td>
                <td><?= $paramedik['nama'] ?></td>
                <td><?= $paramedik['gender'] ?></td>
                <td><?= $paramedik['kategori'] ?></td>
                <td><?= $paramedik['telpon'] ?></td>
                <td><?= $paramedik['alamat'] ?></td>
                <td><?= $paramedik['unit_kerja_id'] ?></td>
                <td>
                  <a href="./form_paramedik.php?id=<?= $paramedik['id'] ?>" class="btn btn-sm btn-warning">Ubah</a>
                  <form action="proses_paramedik.php" method="post">
                    <input type="hidden" name="id_paramedik" value="<?= $paramedik['id'] ?>">
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