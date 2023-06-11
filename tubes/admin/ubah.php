<?php
 require '../functions.php';
$name = "Ubah Data User";
$id = htmlspecialchars($_GET['id']);
$account = query("SELECT * FROM user WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
 if (ubah($_POST) > 0) {
    echo "<script>
            alert('ubah data berhasil');
            document.location.href = 'index.php';
            </script>";

 }
}
require 'view/ubah.view.php';
