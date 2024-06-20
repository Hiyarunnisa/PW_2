<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        thead,
        tfoot {
            background-color: #3271a5;
            color: white;
        }

        .btn-primary {
            background-color: #28a745 !important;
            border-color: #28a745 !important;
        }
    </style>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
<form method="POST" action="">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <fieldset>
                    <legend>Belanja Online</legend>
                    <hr>
                    <form method="POST" action="">
                        <div class="form-group row">
                            <label for="customer" class="col-4 col-form-label">Customer</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div>
                                    <input id="customer" name="customer" type="text" class="form-control" placeholder="Nama Customer">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="produk" class="col-4 col-form-label">Pilih Produk</label>
                            <div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="TV" required="required">
                                    <label for="radio_1" class="custom-control-label">TV</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="KULKAS" required="required">
                                    <label for="radio_2" class="custom-control-label">KULKAS</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="radio_3" type="radio" class="custom-control-input" value="MESIN CUCI" required="required">
                                    <label for="radio_3" class="custom-control-label">MESIN CUCI</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                            <div class="col-8">
                                <input id="jumlah" name="jumlah" type="text" class="form-control" placeholder="Jumlah">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>
                </fieldset>
                <hr>
            </div>
            <div class="col-6">
                <fieldset>
                    <legend>Daftar Harga</legend>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TV</td>
                                <td>4.200.000</td>
                            </tr>
                            <tr>
                                <td>KULKAS</td>
                                <td>3.100.000</td>
                            </tr>
                            <tr>
                                <td>MESIN CUCI</td>
                                <td>3.800.000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">Harga Dapat Berubah Setiap Saat</td>
                            </tr>
                        </tfoot>
                    </table>
                </fieldset>
            </div>
        </div>
    </div>
    <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                    $customer = $_POST['customer'];
                    $produk = $_POST['produk'];
                    $jumlah = $_POST['jumlah'];
                    echo 'Nama Customer : ' . $customer;
                    echo '<br/>Produk Pilihan : ' . $produk;
                    echo '<br/>Jumlah Beli : ' . $jumlah;
                    $tv = 4200000;
                    $kulkas = 3100000;
                    $mesin_cuci = 3800000;
                    $total = 0;
                    if ($produk == 'TV') {
                        $total = $tv * $jumlah;
                    } elseif ($produk == 'KULKAS') {
                        $total = $kulkas * $jumlah;
                    } elseif ($produk == 'MESIN CUCI') {
                        $total = $mesin_cuci * $jumlah;
                    } else {
                        echo '<br/>Produk tidak valid';
                    }
                    echo '<br/>Total Harga : Rp ' . $total;
                }
                ?>
</body>

</html>
