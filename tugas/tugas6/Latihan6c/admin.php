<!-- PHP -->
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Apple Watch - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <style>
        body {
            background: linear-gradient(135deg, rgba(252, 210, 205, 1) 15%, rgba(189, 183, 213, 1) 65%);
            min-height: 100vh;
            font-family: "Poppins", sans-serif;
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
        }

        .form-contact {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.18);
            padding: 2.5rem;
        }

        .left-box {
            min-height: 600px;
            background-size: cover;
            background-position: center;
            border-radius: 20px;
        }

        .btn-primary {
            background-color: #bdb7d5;
            border-color: #bdb7d5;
            padding: 0.75rem 2rem;
            font-weight: 500;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #a69fc4;
            border-color: #a69fc4;
        }

        @media screen and (max-width: 768px) {
            body {
                padding: 15px;
            }

            .form-contact {
                padding: 1.5rem;
            }

            .left-box {
                min-height: 400px;
                background-size: cover;
                background-position: center;
                border-radius: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row border rounded-5 p-3 form-contact shadow">
            <div class="col-12 rounded-4 left-box mb-3" style="background-image: url(img/welcome.png)"></div>
            <div class="col-12 text-center">
                <form action="" method="POST">
                    <button class="btn btn-primary w-100" type="submit" name="logout">Logout</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>