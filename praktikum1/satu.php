<?php
// Define Variable
$nama = 'Caca';
$umur = 21;
$berat = 48;

echo "Nama saya $nama, <br/> <br> Saya berumur " . $umur . " dan berat badan saya adalah " . $berat . "kg";

echo "<br/>";
echo "<br/>";

// // Variable system
echo 'dokumen Root'. $_SERVER ["DOCUMENT_ROOT"];
echo '<br/> Nama File'. $_SERVER ["PHP_SELF"];

echo "<br/>";
echo "<br/>";

// definisikan konstansta
define('PHI', 3.14);
define('DBNAME', 'inventori');
define('DBSERVER', 'localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan Jari ' . 
$jari . ' : ' . $luas;
echo '<br /> Kelilingnya : ' . $kll;

echo "<hr>";

echo "Nama databasenya : " . DBNAME;
echo "<br>Lokasi databasenya ada di : " . DBSERVER;

echo "PHI = ". PHI;

?>
