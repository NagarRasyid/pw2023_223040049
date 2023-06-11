<?php
require 'functions.php';
$name = "Tambah Data Mahasiswa";

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo " <script>
        alert('Tambah Data Berhasil !');
        document.location.href ='index.php';
      </script>";
  }
}
require 'views/tambah.view.php';
