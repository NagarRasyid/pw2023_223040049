<?php
$nama_depan = 'Nagar';
$nama_belakang = 'Rasyid';

for ($nomor = 1; $nomor <= 100; $nomor++) {
    if ($nomor % 3 != 0 && $nomor % 5 != 0) {
        echo "$nomor <br>";
        continue;
    }
    if ($nomor  % 3 == 0) echo "$nama_depan ";
    if ($nomor % 5 == 0) echo "$nama_belakang";
    echo '<br>';
}
