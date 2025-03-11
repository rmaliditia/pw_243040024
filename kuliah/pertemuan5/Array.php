<?php
$hari = ["Senin", "Selasa", "Rabu"];
$angka = ["2", "4", "5", "9", "0"];
echo "Array awal : ";
print_r($hari);
echo "<hr>";

echo "Array setelah di Pop : ";
$hasil = array_pop($hari); //Mengahapus atau mengambil elemen terakhir dari array
print_r($hari);
echo "<br>";

echo "Array setelah di PUSH : ";
$hasil = array_push($hari, "Rabu", "Kamis", "Jum'at"); //Menambahkan elemen baru di akhir array
print_r($hari);
echo "<br>";

echo "Array setelah di Shift : ";
$hasil = array_shift($hari); //Mengahapus atau mengambil elemen pertama dari array
print_r($hari);
echo "Elemen yang di Shift : $hasil <hr>";

echo "Array setelah di UNSHIFT : ";
$hasil = array_unshift($hari, "Elemen", "DItambahkan"); //Menambahkan elemen baru di awal array
print_r($hari);
echo "<hr>";

echo "Mengurutkan array secara menaik :";
$hasil = rsort($angka); //Mengurutkan array secara menaik
print_r($angka);
echo "<hr>";

echo "Mengurutkan array secara menurun :";
$hasil = sort($angka); //Mengurutkan array secara menurun
print_r($angka);
