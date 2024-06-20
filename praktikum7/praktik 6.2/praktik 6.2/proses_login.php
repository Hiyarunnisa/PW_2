<?php
// tangkap input login
$email = $_POST['email'];
$password = md5($_POST['password']);

$credential = [$email,$password];
include_once('koneksi.php');

//query
$query = "SELECT * FROM users WHERE email = ? AND password=?";
$statement= $dbh->prepare($query, $credential);
$results=$statement->execute($credential);
$result=$statement->fetch();

// validasi login
if ($result) {
    //simpan data user login ke session
    session_start();
    $_SESSION['name'] = $result['name'];
    $_SESSION['email'] = $result['email'];
    //pindahkan halaman ke dashboard.php
    header('Location: dashboard.php');
} else {
    header('Location: index.html');

}

