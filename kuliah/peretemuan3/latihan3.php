<?php
// Pengkondisian / Percabangan
// if else
// if else if else
// ternary
// switch

$x = 20;
if ($x < 20) {
    echo "Benar";
} else if ($x == 20) {
    echo "Bingo!";
} else {
    echo "Salah";
}
echo "<hr>";
?>


<!-- INI TERNARY -->
<?php

$admin = false;
$moderator = true;

echo ($admin === true) ? "You are an admin. " . (($moderator === true) ? "You are also a moderator." : "") : "You are an not admin";

echo "<hr>";
?>

<!-- INI SWITCH -->
<?php
$grade = "D";

switch ($grade) {
    case "A":
        echo "Sangat Baik" . PHP_EOL;
        break;
    case "B":
        echo "Baik" . PHP_EOL;
        break;
    case "C":
        echo "Cukup" . PHP_EOL;
        break;
    case "D":
        echo "Kurang" . PHP_EOL;
        break;
    case "E":
        echo "Gagal" . PHP_EOL;
        break;
}

// INI SWITCH ALTERNATIF
switch ($grade):
    case "A":
        echo "Sangat Baik" . PHP_EOL;
        break;
    case "B":
        echo "Baik" . PHP_EOL;
        break;
    case "C":
        echo "Cukup" . PHP_EOL;
        break;
    case "D":
        echo "Kurang" . PHP_EOL;
        break;
    case "E":
        echo "Gagal" . PHP_EOL;
        break;
endswitch;
?>