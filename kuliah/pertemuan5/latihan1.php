<?php
//ARRAY
//ARRAY adalah variabel yang bisa menampung banyak nilai

//Membuat ARRAY
$hari = array('Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Nagar', 10, false];
$binatang = ['🐈‍⬛', '🐇', '🐒', '🐨', '🐄'];

//Mencetak ARRAY
print_r($hari);
echo "<br>";
var_dump($bulan);
echo "<br>";
var_dump($myArray);
echo "<br>";
var_dump($binatang[3]);

echo "<hr>";

//Manipulasi Array
//Menambah element di akhir array
$bulan[] = 'April';
$bulan[] = 'Mei';
var_dump($bulan);

echo "<hr>";
array_push($bulan, 'Juni', 'Juli', 'Agustus');
var_dump($bulan);

echo "<hr>";
//Menambah element di awal Array
array_unshift($binatang, '🐍', '🦆');
var_dump($binatang);

echo "<hr>";

//Menghapus element di akhir Array
array_pop($hari);
var_dump($hari);
