<?php

require_once './db_koneksi.php';

// Tangkap data form yang dikirim
$tanggal = $_POST['tanggal'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$tensi = $_POST['tensi'];
$keterangan = $_POST['keterangan'];
$pasien_id = $_POST['pasien_id'];
$dokter_id = $_POST['dokter_id'];

// Simpan data ke dalam array
$data = [$tanggal, $berat, $tinggi, $tensi, $keterangan, $pasien_id, $dokter_id];

// Check nilai proses
switch ($_POST['proses']) {
    case 'Simpan':
        // Membuat sql
        $insertperiksaSQL = "INSERT INTO periksa (tanggal, berat, tinggi, tensi, keterangan, pasien_id, dokter_id) VALUES (?,?,?,?,?,?,?)";
        // Mendefinisikan prepare statement
        $stmt = $dbh->prepare($insertperiksaSQL);
        // Eksekusi statement
        $stmt->execute($data);
        break;
    case 'Ubah':
        $id_periksa = $_POST['id_periksa'];
        $updateperiksaSQL = "UPDATE periksa SET tanggal=?, berat=?, tinggi=?, tensi=?, keterangan=?, pasien_id=?, dokter_id=? WHERE id=?";

        //menambahkan id_periksa kedalam data
        $data[] = $id_periksa;

        $stmt = $dbh->prepare($updateperiksaSQL);

        $stmt->execute($data);
        break;
    case 'Hapus':
        $id_periksa = $_POST['id_periksa'];
        $deleteperiksaSQL = "DELETE FROM periksa WHERE id =?";
        $stmt = $dbh->prepare($deleteperiksaSQL);
        $stmt->execute([$id_periksa]);
        break;
    default:
        header('location: ./data_periksa.php');
}

// Redirect ke halaman data periksa
header('location: ./data_periksa.php');
