<?php
session_start();

if (isset($_SESSION['auth'])) {
    if ($_SESSION['auth_role'] == "1") {
        $_SESSION['message'] = "You are already logged in";
        header("Location: admin/index.php");
        exit(0);
    } elseif($_SESSION['auth_role'] == "0") {
        $_SESSION['message'] = "You are already logged in";
        header("Location: user/index.php");
        exit(0);
    }
}

include('includes/header.php');
include('includes/navbar.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Blood Bank Portal</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background: rgb(219, 226, 226);
        }

        .row {
            background: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
        }

        .img {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;

        }

        .btn1 {
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn1:hover {
            background-color: white;
            border: 1px solid;
            color: black;
        }
    </style>
</head>

<body>

    <section class="form my-4 mx-5">
        <?php include("message.php"); ?>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="./img.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <!-- <h1 class="font-weight-bold py-3"></h1> -->
                    <h4>Sign into your account</h4>
                    <hr>
                    <form action="logincode.php" method="post">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" placeholder="username" name="username" class="form-control my-3 p-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="password" name="password" class="form-control my-3 p-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" name="login_btn" class="btn1 mt-3 mb-5" data-bs-display="static" aria-expanded="true">login</button>
                            </div>
                        </div>
                        <a href="#">Forgot Password</a>
                        <p>Don't have an account? <a href="register.php">Register here</a></p>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

<?php
include('includes/footer.php');
?>