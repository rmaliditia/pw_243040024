<?php
// Pengulangan :
// for
// while
// do..while
// foreach (pengulangan khusus array)

for ($i = 0; $i < 10; $i++) {
    echo "Hello World" . "<br>";
}

echo "<hr>";

$i = 0;
while ($i < 5) {
    echo "Hello World" . "<br>";
    $i++;
}

echo "<hr>";

$i = 10;
do {
    echo "Hello World" . "<br>";
    $i++;
} while ($i < 5);

echo "<hr>";

