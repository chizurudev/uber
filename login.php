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

<body>
    <?php  require("mainheader.php")  ?>

    <div class="container">
    <div class="row">
            <div class="col-sm-12 col-lg-2"></div>
            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Enter your login detail</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success">
                            <h5>Login Successful</h5>
                        </div>
                       
                           
                            <div class="form-group">
                                <label for="txtUsername">Email or Username:</label>
                                <input class="form-control" type="text" name="txtUsername" id="txtUsername" placeholder="Enter Your Email or Username">
                            </div>
                           
                            <div class="form-group">
                                <label for="txtPassword">Enter Password:</label>
                                <input class="form-control" type="password" name="txtPassword" id="txtPassword" class="fa fa-eye " placeholder="Enter Your Password">
                            </div>

                    </div>

                    <div style="padding:10px">
                        <button type="submit" class="btn btn-success badge badge-secondary badge-large">
                            Log In <span></span>

                        </button>
                    </div>

                    </form>
                </div>
            </div>

        </div>
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
    </div>
    </div>
</body>
</html>