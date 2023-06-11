<?php 
$mahasiswa = [
    [
        'NRP' => 223040049,
        'Nama' => 'Nagar Rasyid Erdiansyah',
        'Kelas' => 'B',
        'Jurusan' => 'Teknik Informatika',
        'Semester' => 2,
        'Gambar' => 'male.png',
        'Email' => 'nagar.223040049@mail.unpas.ac.id'
    ],
    [
        'NRP' => 223040047,
        'Nama' => 'Sandy Nugraha',
        'Kelas' => 'B',
        'Jurusan' => 'Teknik Informatika',
        'Semester' => 2,
        'Gambar' => 'male.png',
        'Email' => 'sandy.223040047@mail.unpas.ac.id'
    ]
]
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
 </head>
 <body>

 <h1>Daftar Mahasiswa</h1>
 <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
    <li>
            <img src="img/<?= $mhs['Gambar']; ?>"></li>
            <li>NRP :<?= $mhs['NRP']; ?></li>
            <li>Nama :<?= $mhs['Nama']; ?></li>
            <li>Kelas :<?= $mhs['Kelas']; ?></li>
            <li>Jurusan :<?= $mhs['Jurusan']; ?></li>
            <li>Semester :<?= $mhs['Semester']; ?></li>
            <li>Email :<?= $mhs['Email']; ?></li>
    </ul>
    <?php endforeach; ?>
    
 </body>
 </html>