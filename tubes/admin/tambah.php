<?php
require '../functions.php';
$name = "Tambah Data User";

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo " <script>
        alert('Tambah Data Berhasil !');
        document.location.href ='index.php';
      </script>";
  }
}
require 'view/tambah.view.php';
