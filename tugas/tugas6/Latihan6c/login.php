<!-- PHP -->
<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'] ?? "";
    $password = $_POST['password'] ?? "";

    if ($username === "admin" && $password === "admin") {
        $_SESSION['username'] = $username;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Oops! That doesn't seem right. Please check your username and password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Apple Watch - Login</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />

    <style>
        /* Body */
        body {
            background: #fcd2cd;
            background: linear-gradient(135deg,
                    rgba(252, 210, 205, 1) 15%,
                    rgba(189, 183, 213, 1) 65%);
            min-height: 100vh;
            font-family: "Poppins", sans-serif;
            display: flex;
            align-items: center;
            padding: 20px;
        }

        /* Form Container */
        .container {
            max-width: 1200px;
            margin: auto;
        }

        .form-contact {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.18);
            transition: all 0.3s ease;
        }

        /* Left Box */
        .left-box {
            min-height: 400px;
            background-size: cover;
            background-position: center;
            border-radius: 20px;
        }

        /* Right Box */
        .right-box {
            padding: 2.5rem;
        }

        /* Typography */
        .header-text h2 {
            font-weight: 600;
            font-size: calc(1.5rem + 0.5vw);
            margin-bottom: 0.5rem;
        }

        .header-text p {
            font-size: calc(0.8rem + 0.2vw);
            color: #666;
            margin-bottom: 1.5rem;
        }

        /* Form Elements */
        .form-control {
            padding: 0.75rem 1rem;
            font-size: 1rem;
            border-radius: 10px;
            border: 1px solid #ddd;
            background: rgba(255, 255, 255, 0.9);
        }

        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(227, 226, 230, 0.832);
            border-color: #bdb7d5;
        }

        small {
            font-size: 0.75rem;
            color: #666;
            margin-top: 0.25rem;
            display: block;
        }

        /* Button */
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

        .btn-primary:active {
            background-color: #b7b0d7 !important;
            border-color: #a69fc4 !important;
        }

        .btn-light {
            background-color: #fff;
        }

        .btn-light:hover {
            background-color: #e7dce9 !important;
        }

        @media screen and (max-width: 992px) {
            .left-box {
                min-height: 300px;
                margin-bottom: 1rem;
            }

            .right-box {
                padding: 2rem;
            }
        }

        @media screen and (max-width: 768px) {
            body {
                padding: 15px;
            }

            .form-contact {
                margin: 0;
            }

            .right-box {
                padding: 1.5rem;
            }

            .row.input-group {
                margin: 0 -5px;
            }

            .email,
            .phone {
                padding: 0 5px;
            }

            .form-control {
                padding: 0.6rem 0.8rem;
            }

            .btn-primary {
                padding: 0.6rem 1.5rem;
            }
        }

        @media screen and (max-width: 576px) {
            .header-text h2 {
                font-size: 1.5rem;
            }

            .header-text p {
                font-size: 0.85rem;
            }

            .left-box {
                min-height: 200px;
            }

            .email,
            .phone {
                width: 100%;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>

<body style="display: flex; flex-direction: column;">
    <h6>*Ini saya ambil dari website tugas besar company profile.</h6>
    <div class="container">
        <div class="row border rounded-5 p-3 mb-4 form-contact shadow">
            <!-- Left Box -->
            <div
                class="col-lg-6 rounded-4 d-flex justify-content-start align-items-start p-md-5 p-3 flex-column left-box"
                style="background-image: url(img/login.jpeg)">
                <p class="text-light display-md-1 display-4" style="font-weight: 700">
                    Simplify<br />Your<br />Life
                </p>
            </div>
            <!-- Right Box -->
            <div class="col-lg-6 right-box">
                <form action="" method="POST">
                    <div class="row align-items-center">
                        <div class="header-text">
                            <h2>Gateway to Your Apple Watch World</h2>
                            <p>Sign in to unlock your Apple Watch's full potential.</p>
                        </div>

                        <!-- PHP -->
                        <?php if (isset($error)): ?>
                            <p class="text-danger mb-4"><?= $error; ?></p>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col email">
                                <div class="form-input">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="username"
                                        name="username"
                                        placeholder="Username" />
                                    <small>Ensure a valid username.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col password">
                                <div class="input-group mb-1">
                                    <input
                                        type="password"
                                        name="password"
                                        class="form-control form-control-lg bg-light fs-6"
                                        placeholder="Password" />
                                </div>
                            </div>
                            <div class="input-group mb-1 d-flex justify-content-between">
                                <div class="form-check">
                                    <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="formCheck" />
                                    <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                                </div>
                                <div class="forgot">
                                    <small><a href="#">Forgot Password?</a></small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-2">
                                <button class="btn btn-primary w-100" type="submit">Login</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>