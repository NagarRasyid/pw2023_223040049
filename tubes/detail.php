<?php 
if(!isset($_GET['id'])) {
    header("location: index.php");
    exit;
}

require 'function.php';

require 'view/detail.view.php';
?>