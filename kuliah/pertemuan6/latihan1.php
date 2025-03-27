<?php
// Membuat Array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$myArray = ["Reiza", 19, true];

// Menampilkan Array
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
// Gunakan echo jika ingin mencetak 1 elemen (Menggunakan index)
echo $hari[0];
echo "<br>";
echo $myArray[0];
echo "<hr>";

// Menambahkan elemen baru pada array
$hari[] = "Kamis";
$hari[] = "Jum'at";
$bulan = "April";
print_r($hari);
echo "<br>";
print_r($bulan);
