<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/fontawesome-all.min.css"> -->
    <link rel="stylesheet" href="css/signup.css">
    <script src="js/signup.js"></script>
    <title>signup page</title>
</head>


<?php require("mainheader.php")  ?>
<br>
<br>

<body>
    <div class="container-fluid">



        <form action="post">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6" id="form">
                    <div class="card card-body" id="body">
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
                            <label for="txtPassword">Password:</label>
                            <div class="input-group">
                                <input class="form-control" type="password" name="txtPassword" id="txtPassword"
                                    placeholder="Enter Your Password" required>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="show"
                                        >Show</button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="txtConfirmPassword">Confirm Password:</label>
                            <div class="input-group">
                                <input class="form-control" type="password" name="txtConfirmPassword" id="txtConfirmPassword"
                                    placeholder="Re-enter Your Password" required>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="show"
                                         >Show</button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <p>By clicking register you agree to our <a href="conditions.php">Terms & Conditions.</a></p>
                        <button type="submit" class="btnSubmit">Register</button>

                        <p>Already have an account? <a href="login.php">Sign in.</a></p>

                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <?php
            ?>

        </form>
    </div>
</body>
<!-- <script>
    let blnState = 0;
    let btnShow = document.getElementById("show")
    let password = document.getElementById("txtPassword");

    function showPass() {
        if (blnState === 0) {
            password.type = "text";
            blnState = 1;
            btnShow.innerText = "Hide"
        } else {
            password.type = "password";
            blnState = 0;
            btnShow.innerText = "Show"
        }
    };

    btnShow.addEventListener("click", showPass)
</script> -->

</html>