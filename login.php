<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/fontawesome-all.min.css"> -->
    <link rel="stylesheet" href="css/login.css">
    <title>Signin Page</title>

</head>

<?php require("mainheader.php")  ?>
<br>
<br>

<body>

    <div class="container-fluid">



        <form action="post">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card card-body">

                        <p><b>Please fill in your username and password</b></p>
                        <hr>

                        <div class="form-group">
                            <label for="txtFirstname"><b>Username or Email:</b></label>
                            <input class="form-control" type="text" name="txtUsername" id="txtUsername"
                                placeholder="eg. jamesmi@gmail.com" required>
                        </div>

                        <div class="form-group">
                            <label for="txtPassword"><b>Enter Password:</b></label>
                            <input class="form-control" type="password" name="txtPassword" id="txtPassword"
                                placeholder="Enter Your Password" required>
                        </div>
                        <br>
                        <hr>
                        <button type="submit" class="btnSubmit"><b>Login</b></button>
                    </div>
                    <div class="card-body">

                        <div class="container signin">
                            <p><b>Don't have an account? <a href="login.php">Click Sign up.</a></b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <?php
            ?>

        </form>
    </div>
</body>

</html>