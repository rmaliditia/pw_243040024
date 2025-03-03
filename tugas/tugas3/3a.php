<?php
echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r)
{
    echo "Jari - jari = " . $r . " cm." . "<br>";
    return 3.14 * ($r * $r) . " cm²";
}

echo "Luas lingkaran = " . hitungLuasLingkaran(10);
echo "<hr>";
echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r)
{
    echo "Jari - jari = " . $r . " cm." . "<br>";
    return 2 * 3.14 * $r . " cm²";
}
echo "Keliling lingkaran = " . hitungKelilingLingkaran(20);
echo "<hr>";
