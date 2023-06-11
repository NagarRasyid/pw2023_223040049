<?php 
require 'functions.php';
$name = "Register";
$conn = koneksi();

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
      header("Location: login.php");
    } else {
        echo mysqli_error($conn);
    }
}
require 'view/registrasi.view.php';
?>