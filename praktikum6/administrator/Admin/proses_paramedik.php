<?php
require_once './db_koneksi.php';

// tangkap data dari form
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kategori = $_POST['kategori'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];
$unit_kerja = $_POST['unit_kerja'];

// Simpan data ke dalam array
$data = [$nama, $gender, $tmp_lahir, $tgl_lahir, $kategori, $telpon, $alamat, $unit_kerja];

// Check nilai proses
switch ($_POST['proses']) {
    case 'Simpan':
        // Membuat sql
        $insertparamedikSQL = "INSERT INTO paramedik (nama, tmp_lahir, tgl_lahir, gender, kategori, telpon, alamat, unit_kerja_id) VALUES (?,?,?,?,?,?,?,?)";
        // Mendefinisikan prepare statement
        $stmt = $dbh->prepare($insertparamedikSQL);
        // Eksekusi statement
        $stmt->execute($data);
        break;
    case 'Ubah':
        $id_paramedik = $_POST['id_paramedik'];
        $updateparamedikSQL = "UPDATE paramedik SET nama=?, tmp_lahir=?, tgl_lahir=?, gender=?, kategori=?, telpon=?, alamat=?, unit_kerja_id=? WHERE id=?";

        //menambahkan id_paramedik kedalam data
        $data[] = $id_paramedik;

        $stmt = $dbh->prepare($updateparamedikSQL);

        $stmt->execute($data);
        break;
    case 'Hapus':
        $id_paramedik = $_POST['id_paramedik'];
        $deleteparamedikSQL = "DELETE FROM paramedik WHERE id =?";
        $stmt = $dbh->prepare($deleteparamedikSQL);
        $stmt->execute([$id_paramedik]);
        break;
    default:
        header('location: ./data_paramedik.php');
}

// Redirect ke halaman data paramedik
header('location: ./data_paramedik.php');

