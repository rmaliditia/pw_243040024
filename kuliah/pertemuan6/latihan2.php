<?php
// Mencetak Array menggunakan looping

$animals = ['😻', '🐶', '🐵', '🐮', '🐷', '🐍', '🐴'];
$foods = ['🍎', '🍌', '🍉', '🍇', '🍓', '🍑', '🍒'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencetakk Array</title>
</head>

<body>
    <h2>Daftar Animals</h2>
    <ul>
        <?php
        for ($i = 0; $i < count($animals); $i++) { ?>
            <li><?php echo $animals[$i]; ?></li>
        <?php } ?>
    </ul>

    <h2>Daftar Foods</h2>
    <ul>
        <?php
        for ($i = 0; $i < count($foods); $i++) { ?>
            <li><?php echo $foods[$i]; ?></li>
        <?php } ?>
    </ul>

    <h2>Daftar Animals Baru</h2>
    <ul>
        <?php foreach ($animals as $b) : ?>
            <li><?= $b; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Daftar Foods Baru</h2>
    <ul>
        <?php foreach ($foods as $f) : ?>
            <li><?= $f; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>