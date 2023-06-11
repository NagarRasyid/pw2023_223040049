<?php
require '../functions.php';
$name = 'Daftar User';

$accounts = query("SELECT * FROM user");

require 'view/daftar.view.php';
    