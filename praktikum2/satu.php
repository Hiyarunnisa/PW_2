<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Formulir Penilaian</title>
</head>

<body>
    <div class="container mt-4">
        <form class="form-horizontal" method="POST" action="form_nilai.php">
            <fieldset>
                <legend>Sistem Penilaian</legend>

                <div class="form-group row">
                    <label for="text" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                            <input id="text" name="nama" type="text" class="form-control" placeholder="Masukkan Nama Lengkap">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Mata Kuliah</label>
                    <div class="col-8">
                        <select id="select" name="matkul" class="custom-select">
                            <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                            <option value="UI UX">UI UX</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">Nilai UTS</label>
                    <div class="col-8">
                        <input id="text1" name="nilai_uts" type="text" class="form-control" placeholder="Masukkan Nilai UTS">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">Nilai UAS</label>
                    <div class="col-8">
                        <input id="text1" name="nilai_uas" type="text" class="form-control" placeholder="Masukkan Nilai UAS">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
                    <div class="col-8">
                        <input id="text1" name="nilai_tugas" type="text" class="form-control" placeholder="Masukkan Nilai Tugas/Praktikum">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</body>

</html>
