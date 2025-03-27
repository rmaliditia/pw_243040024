<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan6a</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
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

    <div class="container">
        <?php
        if (!isset($_GET['angka'])) {
            header("Location: ?angka=10");
            exit();
        }

        for ($i = $_GET['angka']; $i >= 1; $i--) {
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