<?php
$mahasiswa = [
    [
        'NRP' => 223040049,
        'Nama' => 'Nagar Rasyid Erdiansyah',
        'Jurusan' => 'Teknik Informatika'
    ],
    [
        'NRP' => 223040047,
        'Nama' => 'Sandy Nugraha',
        'Jurusan' => 'Teknik Informatika'
    ],
    [
        'NRP' => 223040054,
        'Nama' => 'Muhammad Raihan Nagata',
        'Jurusan' => 'Teknik Informatika'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5a - Daftar Data Mahasiswa</title>
</head>

<body>

    <?php
    array_push(
        $mahasiswa,
        [
            'NRP' => 223040065,
            'Nama' => 'Rayyan Naufal Andriyana',
            'Jurusan' => 'Teknik Informatika'
        ],
        [
            'NRP' => 223040057,
            'Nama' => 'Ivan Bayu Pratama',
            'Jurusan' => 'Teknik Informatika'
        ],
        [
            'NRP' => 223040066,
            'Nama' => 'Ahmad Suherman',
            'Jurusan' => 'Teknik Informatika'
        ],
        [
            'NRP' => 223040052,
            'Nama' => 'Angga Nugraha Sofyan',
            'Jurusan' => 'Teknik Informatika'
        ],
        [
            'NRP' => 223040064,
            'Nama' => 'Anggi Mauliya Cendy',
            'Jurusan' => 'Teknik Informatika'
        ],
        [
            'NRP' => 223040051,
            'Nama' => 'Arya Saputra',
            'Jurusan' => 'Teknik Informatika'
        ],
        [
            'NRP' => 223040045,
            'Nama' => 'Aurelia Melati Suci',
            'Jurusan' => 'Teknik Informatika'
        ]
    );
    sort($mahasiswa);
    foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>NRP :<?= $mhs['NRP']; ?></li>
            <li>Nama :<?= $mhs['Nama']; ?></li>
            <li>Jurusan<?= $mhs['Jurusan']; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>