<?php
session_start();
/**
 * Created by PhpStorm.
 * User: BDDL-102
 * Date: 4/11/2019
 * Time: 4:21 PM
 */
error_reporting(0);

if (($_SESSION['checkLogin'])) {
    session_unset();
    session_destroy();
    echo "
            <script> alert('User Not Found!'); </script>
           ";

}
?>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
<html>
<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Admin Login</h5>
                    <form class="form-signin" action="login.php" method="post">
                        <div class="form-group">
                            <!--<label for="inputEmail">Email</label>-->
                            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>

                        </div>

                        <div class="form-group">
                            <!--<label for="inputPassword">Password</label>-->
                            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

                        </div>

                        <!--<div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                        </div>-->
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" name="login_btn" type="submit">Login</button>
                        <hr class="my-4">
                        <!--<button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>