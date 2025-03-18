<?php
$mahasiswa = [
    ['Egi', '24304004', 'egiabdul@gmail.com', 'Teknik Informatika', 'gie.jpg'],
    ['Tastaftian', '243040053', 'permanagana109@gmail.com', 'Teknik Informatika', 'tastaftian.jpg'],
    ['Moch Ibrahim', '243040023', 'ibrahim@gmail.com', 'Teknik Informatika', 'ibrahim.jpg'],
    ['Agil', '243040013', 'agil@gmail.com', 'Teknik Informatika', 'agil.jpg'],
    ['Azriel', '243040003', 'azriel09@gmail.com', 'Teknik Informatika', 'azriel.jpg'],
    ['Gandul', '243040063', 'gandul9@gmail.com', 'Teknik Informatika', 'gandul.jpg'],
    ['Zildan', '243040002', 'zldan@gmail.com', 'Teknik Informatika', 'zildan.jpg'],
    ['Fadli Nata', '243040004', 'fadlin@gmail.com', 'Teknik Informatika', 'fadlinata.jpg'],
    ['Salman Kepli', '243040010', 'kepli@gmail.com', 'Teknik Informatika', 'salman.jpg'],
    ['Halim', '243040027', 'halimsur@gmail.com', 'Teknik Informatika', 'halim.jpg'],
];
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
            <li>
                <img src="img/<?= $m[4]; ?>">
            </li>
            <li>Nama: <?= $m[0]; ?> </li>
            <li>NIM: <?= $m[1]; ?></li>
            <li>Email: <?= $m[2]; ?></li>
            <li>Jurusan: <?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>