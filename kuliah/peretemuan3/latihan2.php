<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .warna-baris {
            background-color: black;
        }
    </style>
</head>

<body>

    <table border="1" cellpadding="30" cellspacing="0">
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <?php if ($i % 2 == 0) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                <?php endif ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>

                    <td><?php echo "$i"; ?></td>
                    <!-- ATAU BISA JUGA MENGGUNAKAN "=" UNTUK MENGGANTI ECHO -->
                    <!-- <td><?= "$i, $j" ?></td> -->

                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>

</body>

</html>