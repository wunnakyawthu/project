<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horizon Telecom International</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <style>
        /* Importing fonts from Google */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        /* Reseting */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #ecf0f3;
        }

        .wrapper {
            max-width: 500px;
            min-height: 500px;
            margin: 80px auto;
            padding: 40px 30px 30px 30px;
            background-color: #ecf0f3;
            border-radius: 15px;
            box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
        }

        .logo {
            width: 80px;
            margin: auto;
        }

        .logo img {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0px 0px 3px #5f5f5f,
            0px 0px 0px 5px #ecf0f3,
            8px 8px 15px #a7aaa7,
            -8px -8px 15px #fff;
        }

        .wrapper .name {
            font-weight: 600;
            font-size: 1.4rem;
            letter-spacing: 1.3px;
            padding-left: 10px;
            color: #555;
        }

        .wrapper .form-field input {
            width: 100%;
            display: block;
            border: none;
            outline: none;
            background: none;
            font-size: 1.2rem;
            color: #666;
            padding: 10px 15px 10px 10px;
            /* border: 1px solid red; */
        }

        .wrapper .form-field {
            padding-left: 10px;
            margin-bottom: 20px;
            border-radius: 20px;
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
        }

        .wrapper .form-field .fas {
            color: #555;
        }

        .wrapper .btn {
            box-shadow: none;
            width: 100%;
            height: 40px;
            background-color: #03A9F4;
            color: #fff;
            border-radius: 25px;
            box-shadow: 3px 3px 3px #b1b1b1,
            -3px -3px 3px #fff;
            letter-spacing: 1.3px;
        }

        .wrapper .btn:hover {
            background-color: #039BE5;
        }

        .wrapper a {
            text-decoration: none;
            font-size: 0.8rem;
            color: #03A9F4;
        }

        .wrapper a:hover {
            color: #039BE5;
        }

        @media(max-width: 380px) {
            .wrapper {
                margin: 30px 20px;
                padding: 40px 15px 15px 15px;
            }
        }

    </style>
</head>
<body>
<div class="wrapper">
    <div class="text-xxl-center">
<!--        <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt="">-->
        <img src="image/horizon.png"
             class="img-fluid" alt="Phone image">
    </div>
    <div class="text-center mt-4 name">
      Login
    </div>

    <?php if (isset($_GET['incorrect'])) : ?>
        <div class="alert alert-warning mt-4 text-center">
            Incorrect Email or Password.
        </div>
    <?php endif ?>

    <?php if (isset($_GET['suspended'])) : ?>
        <div class="alert alert-danger mt-4 text-center">
            Your account is suspended.
        </div>
    <?php endif ?>

    <?php if (isset($_GET['registered'])) : ?>
        <div class="alert alert-success mt-4 text-center">
            Account created. Please login.
        </div>
    <?php endif ?>



    <form class="p-3 mt-3" action="_actions/login.php" method="post" >
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>

            <input type="password" name="password" placeholder="Password" required>


        </div>
<!--        <button class="btn mt-3">Login</button>-->
        <button type="submit" class="w-100 btn btn-lg btn-primary">
            Login
        </button>
    </form>
    <div class="text-center fs-6">
<!--        <a href="#">Forget password?</a> or <a href="#">Sign up</a>-->
        <a href="register.php">Register</a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>