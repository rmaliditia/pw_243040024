<?php

$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Cars", "SSD"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>4b</title>
</head>
<style>
    * {
        font-family: Calibri, sans-serif;
    }

    li {
        margin-left: 3rem;
    }
</style>

<body>
    <ol>
        <?php
        echo "<h4>Macam-macam perangkat keras komputer</h4>";
        foreach ($hardware as $urutan) {
            echo "<li>$urutan</li>";
        }
        ?>
    </ol>
    <?php
    $hardware[] = "Card Reader";
    $hardware[] = "Modem";
    sort($hardware);
    ?>

    <ol>
        <?php
        echo "<h4>Macam-macam perangkat keras komputer baru</h4>";
        foreach ($hardware as $urutan) {
            echo "<li>$urutan</li>";
        }
        ?>
    </ol>
</body>

</html>