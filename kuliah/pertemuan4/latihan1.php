<?php
//Mengecek apakah sebuah bilangan it GANJIL / GENAP

//jika $angka dibagi 2, sisanya 1 maka GANJIL
function cekGanjilGenap($angka) //Parameter
{
    if ($angka % 2 == 1) {
        return "$angka adalah bilangan GANJIL!";
    } else {    //Selain dari itu
        return "$angka adalah bilangan GENAP!";
    }
}
echo cekGanjilGenap(10);    //Argument
echo "<br>";
echo cekGanjilGenap(5);
echo "<br>";
echo cekGanjilGenap(123);
