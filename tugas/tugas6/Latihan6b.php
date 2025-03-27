<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan6b</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            margin-top: .5rem;
        }

        .row {
            display: flex;
        }

        .col {
            font-family: serif;
            font-weight: 600;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid black;
            margin: 2px;
        }
    </style>
</head>

<body>

    <form method="POST">
        <label for="angka">Masukkan Angka :</label>
        <input type="number" name="angka" min="1" required>
        <button type="submit">Tampilkan</button>
    </form>

    <div class="container">
        <?php

        if (isset($_POST['angka'])) {
            $angka = $_POST['angka'];
        } else {
            $angka = 1;
        }

        for ($i = $angka; $i >= 1; $i--) {
            echo '<div class="row">';
            for ($j = 1; $j <= $i; $j++) {
                $class = ($i % 2 == 0) ? "background-color: red;" : "background-color: white;";
                echo "<div class='col' style='$class'>$i</div>";
            }
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>