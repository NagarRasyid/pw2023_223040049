<?php
require('functions.php');
$name = 'Home';
// koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040049') or die('Koneksi Ke Database Gagal!');

//lakukan query ke tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

$rows = [];
while( $row = mysqli_fetch_assoc($result)) {
  $rows[]=$row;
}
// siapkan data $students
$students = $rows ;

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/index.view.php');
