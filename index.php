<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Uber Clone App </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.min.js" integrity="sha512-nKXmKvJyiGQy343jatQlzDprflyB5c+tKCzGP3Uq67v+lmzfnZUi/ZT+fc6ITZfSC5HhaBKUIvr/nTLCV+7F+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script> -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap-grid.min.css" integrity="sha512-dOjUSaLkr6G2pwQ7ry9juX+iXw5602zg1kg8yH+guR3uSEidGyCnOEQnGlr7xwu/8WE+pVm1ZNqaIs5ETTIJQg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/brands.min.css" integrity="sha512-WxpJXPm/Is1a/dzEdhdaoajpgizHQimaLGL/QqUIAjIihlQqlPQb1V9vkGs9+VzXD7rgI6O+UsSKl4u5K36Ydw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="css/bootstrap/bootstrap.min.js"></script>
    <script src="css/bootstrap/popper.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/index.js"></script>
</head>

<?php require("mainheader.php")  ?>
<br>
<br>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-5">
                <h1>Go anywhere with <br> Uber.</h1>
                <div class="form-group">
                    <input class="form-control" type="text" name="pickuplocation" id="dropofflocation" placeholder="Pickup Location" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="dropofflocation" id="dropofflocation" placeholder="Dropoff Location " required>
                </div>
                <div class="row">

                    <div class="col-sm-12 col-md-6">

                        <div class="">
                            <div class="form-group">
                                <input class="form-control" type="text" name="today" id="today" placeholder="Today " required>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="now" id="now" placeholder=" Now " required>
                        </div>
                    </div>
                </div>




                <div>
                    <button class="submit" id="send">See Price </button>
                    <a href="login.php"> Log in to see your Recent Acticvity </a>
                </div>
            </div>
            <div class="col-sm-12 col-lg-1">

            </div>

            <!-- LOCATION TRACKER -->
            <div class="col-sm-12 col-lg-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7944.390521349006!2d7.0006623!3d5.3871828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10425dceaaaaaaab%3A0x106fc305f260cd5b!2sHOSTEL%20E!5e0!3m2!1sen!2sng!4v1764676646060!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
        <br>
        <br>
        <p>
        <h3>
            Suggestions
        </h3>
        </p>
        <div class="row">
            <div class="col-sm-12 col-lg-4">
                <div class="card-body custom-bg cuscard-radius">
                    <h4 class="card-title">Courier</h4>
                    <p class="card-text">Uber makes same-day items delivery <br>easier than ever.</p>
                    <br>
                    <button class="submit cusbtncard1">Details</button>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="card-body custom-bg cuscard-radius">
                    <h4 class="card-title">Reserve</h4>
                    <p class="card-text">Reserve your fide in <br>addvance so you can relax <br>on the day of your trip.</p>
                    <button class="submit cusbtncard1">Details</button>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="card-body custom-bg cuscard-radius">
                    <h4 class="card-title">Ride</h4>
                    <p class="card-text">Go anywhere with Uber.<br>Request a ride, hop in, <br> and go</p>
                    <button class="submit cusbtncard1">Details</button>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">

            <div class="col-sm-12 col-lg-6">
                <h3>Log in to see your <br>reccent activity</h3>
                <br>
                <p>View past trips, tailored suggestions, support resources, <br> and more.</p>
                <button class="submit" id="send">Log in to your account</button>
                <i>Don't have an Uber account?<a href="signup.php">Sign up</a></i>
            </div>
            <div class="col-sm-12 col-lg-5">
                <img src="images/uber3.jpg" class="indeximg" alt="">
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-12 col-lg-7">
                <img src="images/uber2.jpg" class="indeximg" alt="">
            </div>

            <div class="col-sm-12 col-lg-5">
                <h3>Drive when you<br>want, make what<br>you need</h3>
                <br>
                <p>Make money on your schedule with deliveries or rides<br> Or both. You can use your own car or choose or rental <br>Through Uber.</p>
                <button class="submit" id="send">Get Started</button>
                <i>Already have an account?<a href="signup.php">Sign in</a></i>
            </div>

        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <h3>The Uber you<br>know, reimagined<br>for business</h3>
                <br>
                <p>Uber for Business is a platform for managing global rides and <br> meals, and local deliveries, for companies of any size. <br>through Uber.</p>
                <button class="submit" id="send">Get Started</button>
                <i><a href="login.php">Check out our solutions</a></i>
            </div>
            <div class="col-sm-12 col-lg-5">
                <img src="images/uber1.jpg" class="indeximg" alt="">
            </div>
        </div>
        <br>
        <br>
        <p>
        <h4>it's easier in the app</h4>
        </p>
    </div>
    <br>
    <br>

    <div id="indexdpage">

        <p>
        <h5>Uber</h5><br>
        </p>
        <br>
        <p>visit Help Center</p>
        <br>
        <br>
        <div class="row" id="dpage">
            <div class="col-sm-12 col-lg-3">
                <h5>Company</h5><br>
                <p><a href=""></a>Our Offerings</p><br>
                <p><a href=""></a>Newsroom</p><br>
                <p><a href=""></a>Investors</p><br>
                <p><a href=""></a>Blog</p><br>
                <p><a href=""></a>Careers</p><br>
            </div>

            <div class="col-sm-12 col-lg-3">
                <h5>Products</h5><br>
                <p><a href=""></a>Ride</p><br>
                <p><a href=""></a>Drive</p><br>
                <p><a href=""></a>Eat</p><br>
                <p><a href=""></a>Uber Freight</p><br>
                <p><a href=""></a>Gift cards</p><br>
            </div>

            <div class="col-sm-12 col-lg-3">
                <h5>Global Citizenship</h5><br>
                <p><a href=""></a>Safety</p><br>
                <p><a href=""></a>Sustainability</p><br>
            </div>

            <div class="col-sm-12 col-lg-3">
                <h5>Travel</h5><br>
                <p><a href=""></a>Reserve</p><br>
                <p><a href=""></a>Airports</p><br>
                <p><a href=""></a>Cities</p><br>
            </div>
            <br>
            <br>
        </div>

        <div class="socials">
            <div>
                <button class="btn"> <i class="fa-brands fa-facebook"></i> </button>
                <button class="btn"> <i class="fa-brands fa-twitter"></i> </button>
                <button class="btn"> <i class="fa-brands fa-youtube"></i> </button>
                <button class="btn"> <i class="fa-brands fa-linkedin"></i> </button>
                <button class="btn"> <i class="fa-brands fa-instagram"></i> </button>
            </div>

            <div class="left-side">
                <button class="btn"> <i class="fa-solid fa-globe"></i>
                    <p> English </p>
                </button>
                <button class="btn"> <i class="fa-solid fa-location-crosshairs"></i>
                    <p> San Francisco Buy Area </p>
                </button>
            </div>
        </div>
        <br>
        <br>

        <div class="down-footer">
            <div>
                &copy; 2025 Uber technologies Inc.
            </div>

            <div class="left-side">
                <p><a href=""></a>Privacy</p>
                <p><a href=""></a>Accesibility</p>
                <p><a href=""></a>Terms</p>
            </div>
        </div>
    </div>

    <!-- <script>
        $('#navId a').click(e => {
            e.preventDefault();
            $(this).tab('show');
        });
    </script> -->


</body>

</html>
<!-- <?php
        $a = 1;
        if ($a == 2) {
            echo "a=2";
        }
        ?> -->