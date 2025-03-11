<!-- FUNCTION
1. Built-in Function (Function bawaan)
2. User-Defined Function (Function yang dibuat sendiri) -->
<?php
//  Date / Time
// -date ()
// -time ()
// -mktime()
// -strtotime()

// 1. date()
// Untuk menampilkan tanggal dengan format tertentu
echo date("l, d - M - Y");
echo "<br>";

// 2. time()
// Untuk menampilkan waktu dengan format tertentu
// Unix Timestamp / Epoch time
echo time(); // Detik sejak 1 januari 1970
echo "<br>";
echo date("l", time() + 60 * 60 * 24 * 100); // 100 hari kedepan
echo "<br>";
echo date("l, d - M - Y", time() - 60 * 60 * 24 * 100); // 100 hari kebelakang
?>