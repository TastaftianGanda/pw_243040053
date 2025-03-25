<?php
// array asociative
// array yang indexnya berupa string yang ber asosiasi dengan tiap elemen
$mahasiswa = [
    [
        'nama' => 'Egi',
        'nim' => '24304004',
        'email' => 'egiabdul@gmail.com',
        'jurusan' => 'Teknik Informatika'
    ],
    [
        'nama' => 'Tastaftian',
        'nim' => '243040053',
        'email' => 'permanaganda109@gmail.com',
        'jurusan' => 'Teknik Informatika'
    ]
];
var_dump($mahasiswa);
// echo $mahasiswa[1][2];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array bersarang</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama: <?= $m['nama']; ?> </li>
            <li>NIM: <?= $m['nim']; ?></li>
            <li>Email: <?= $m['email']; ?></li>
            <li>Jurusan: <?= $m['jurusan']; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>