<?php
//Membuat Array
$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari','Februari','Maret'];
$myArray = ['Tastaftian','20', true];

//Mencetak/Menampilkan Array
//Menampilkan seluruh isi (hanya untuk debugging)
var_dump($hari);
echo"<br>";
print_r($bulan);
echo"<br>";
//GUnakan echo jika ingin mencetak 1 elemen (menggunakan index)
echo $hari[2];
echo"<br>";
echo $myArray[0];
echo"<hr>";

//Menambahkan isi array
//gunakan []
$hari[]='Kamis';
$hari[]="Jumat";
$bulan[]='April';
print_r($hari);
echo"<br>";
print_r($bulan);
