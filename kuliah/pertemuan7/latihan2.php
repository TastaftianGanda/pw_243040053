<?php
//$_GET
//variabel global yang bisa isi lewa metoder request GET
//lewat url

//isset()
//untuk memeriksa apakah sebuah variabel/ key sudah dibuat atau belum
if (isset($_GET['nama']));


//ternary operator
//untuk membuat if else menjadi ringkas
echo "Nama:" . (isset($_GET['nama']) ? $_GET['Nama'] : 'Unknown');


//null coalescing operator
//untuk membuat isset lebih ringkas lagi
//??
echo "Nama:" . ($_GET['Nama'] ?? 'Unknown');

echo "Nama:" . ($_GET['Nama'] ?? 'Unknown');
echo "Nim:" . ($_GET['Nim'] ?? 'Unknown');
//echo $_GET = ['nama'];