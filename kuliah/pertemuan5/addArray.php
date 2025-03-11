<?php

$hari = ["Senin", "Selasa"];

print_r($hari); //[print_r] digunakan untuk mencetak isi dari suatu variabel
// dalam bentuk yang lebih mudah dibaca, terutama untuk array dan objek.
echo "</br>";

$hari[] = "Rabu"; //Menambah elemen pada urutan terakhir array 
print_r($hari);
echo "</br>";
$hari[3] = "Kamis"; //Menambah elemen pada urutan yang kita tentukan.
//Jika index yang ditentukan sudah terisi,
//maka elemen lama akan diganti dengan elemen baru.
print_r($hari);
