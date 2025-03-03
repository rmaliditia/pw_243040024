<?php
// PENGULANGAN / 
// for, while, do while, foreach(khusus array)

// while

$i = 10;
while ($i >= 1) {
    echo "Hello World $i x <br>";
    $i = $i - 1; // atau $i--
}

echo "<hr>";

for ($i = 1; $i <= 10; $i = $i + 2) {
    echo "Hello World $i x <br>";
}
