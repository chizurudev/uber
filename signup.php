<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/fontawesome-all.min.css"> -->
    <link rel="stylesheet" href="css/signup.css">
    <title>signup page</title>
</head>
<style>
    .signin {
        background-color: #f1f1f1;
        width: 500px;
        height: inherit;
        text-align: center;
    }
</style>

<body>
    <div class="container">

        <?php require("mainheader.php")  ?>
    </div>

    <form action="post">
        <div class="container row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h3>Register</h3>
                    <p>Please fill in this form to create an account</p>
                    <hr>

                    <div class="form-group">
                        <label for="txtFirstname">First Name:</label>
                        <input class="form-control" type="text" name="txtFirstname" id="txtFirstname"
                            placeholder="eg. John" required>
                    </div>
                    <div class="form-group">
                        <label for="txtOthernames">Other Names:</label>
                        <input class="form-control" type="text" name="txtOthernames" id="txtOthernames"
                            placeholder="eg. James Mike" required>
                    </div>
                    <div class="form-group">
                        <label for="txtEmail">Email:</label>
                        <input class="form-control" type="email" name="txtEmail" id="txtEmail"
                            placeholder="eg. jamesmi@gmail.com" required>
                    </div>

                    <div class="form-group">
                        <label for="selGender">Select Gender:</label>
                        <select class="form-control" name="selGender" id="selGender" required>
                            <option value="none" selected hidden></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="txtUsername">Username:</label>
                        <input class="form-control" type="text" name="txtUsername" id="txtUsername"
                            placeholder="Enter Your Username" required>
                    </div>

                    <div class="form-group">
                        <label for="txtPassword">Enter Password:</label>
                        <input class="form-control" type="password" name="txtPassword" id="txtPassword"
                            placeholder="Enter Your Password" required>
                    </div>

                    <div class="form-group">
                        <label for="txtPassword">Confirm Password:</label>
                        <input class="form-control" type="password" name="txtCPassword" id="txtCPassword"
                            placeholder="Confirm Your Password" required>
                    </div>
                    <hr>
                    <p>By clicking register you agree to our <a href="conditions.php">Terms & Conditions.</a></p>
                    <button type="submit" class="btnSubmit">Register</button>
                </div>
                <div class="card-body">

                    <div class="container signin">
                        <p>Already have an account? <a href="login.php">Sign in.</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <?php 
        ?>

    </form>
</body>

</html>