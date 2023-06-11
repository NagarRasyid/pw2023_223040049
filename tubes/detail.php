<?php 
require 'function.php';

if(!isset($_GET['id'])) {
    header("location: index.php");
    exit;
}

require 'view/detail.view.php';
?>