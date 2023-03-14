<?php
$mahasiswa = [
    [
        'NRP' => 223040049,
        'Nama' => 'Nagar Rasyid Erdiansyah',
        'Kelas' => 'B',
        'Jurusan' => 'Teknik Informatika',
        'Semester' => 2
    ],
    [
        'NRP' => 223040047,
        'Nama' => 'Sandy Nugraha',
        'Kelas' => 'B',
        'Jurusan' => 'Teknik Informatika',
        'Semester' => 2
    ],
    [
        'NRP' => 223040054,
        'Nama' => 'Muhammad Raihan Nagata',
        'Kelas' => 'B',
        'Jurusan' => 'Teknik Informatika',
        'Semester' => 2
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
    <h1>Daftar Mahasiswa</h1>

    <?php
    array_push(
        $mahasiswa,
        [
            'NRP' => 223040065,
            'Nama' => 'Rayyan Naufal Andriyana',
            'Kelas' => 'B',
            'Jurusan' => 'Teknik Informatika',
            'Semester' => 2
        ],
        [
            'NRP' => 223040057,
            'Nama' => 'Ivan Bayu Pratama',
            'Kelas' => 'B',
            'Jurusan' => 'Teknik Informatika',
            'Semester' => 2
        ],
        [
            'NRP' => 223040066,
            'Nama' => 'Ahmad Suherman',
            'Kelas' => 'B',
            'Jurusan' => 'Teknik Informatika',
            'Semester' => 2
        ],
        [
            'NRP' => 223040052,
            'Nama' => 'Angga Nugraha Sofyan',
            'Kelas' => 'B',
            'Jurusan' => 'Teknik Informatika',
            'Semester' => 2
        ],
        [
            'NRP' => 223040064,
            'Nama' => 'Anggi Mauliya Cendy',
            'Kelas' => 'B',
            'Jurusan' => 'Teknik Informatika',
            'Semester' => 2
        ],
        [
            'NRP' => 223040051,
            'Nama' => 'Arya Saputra',
            'Kelas' => 'B',
            'Jurusan' => 'Teknik Informatika',
            'Semester' => 2
        ],
        [
            'NRP' => 223040045,
            'Nama' => 'Aurelia Melati Suci',
            'Kelas' => 'B',
            'Jurusan' => 'Teknik Informatika',
            'Semester' => 2
        ]
    );
    sort($mahasiswa);
    foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>NRP :<?= $mhs['NRP']; ?></li>
            <li>Nama :<?= $mhs['Nama']; ?></li>
            <li>Kelas :<?= $mhs['Kelas']; ?></li>
            <li>Jurusan :<?= $mhs['Jurusan']; ?></li>
            <li>Semester :<?= $mhs['Semester']; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>
