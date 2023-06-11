<?php
require 'functions.php';
$name = 'Home';

// siapkan data students
$students = query("SELECT * FROM MAHASISWA");

//cari mahasiswa, ketika tombol search di-klik
if(isset($_GET['search'])){
$keyword = $_GET['keyword'];
$query = "SELECT * 
          FROM MAHASISWA 
          WHERE nama LIKE '%$keyword%' 
          OR jurusan LIKE '%$keyword%'";
$students = query($query);
}

require 'views/index.view.php';
