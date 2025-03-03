<?php
function cetakSegitiga($n)
{
    $k = 1;

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$k ";
            $k++;
        }
        echo "<br>";
    }
}

cetakSegitiga(5);
