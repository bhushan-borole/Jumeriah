<!DOCTYPE html>
<html>

<head>
    <title>Jumeriah Frankfurt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .bookform {
            display: none;
        }
    </style>
</head>

<body>
    <?php
        session_start();
    ?>
    <!-- NAV nav -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand nav-item" href="index.html"><img src="images/jumeriah7.png"></a>


            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="rooms.php" class="nav-link">Rooms</a></li>
                    <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
                    <li class="nav-item active"><a href="book.php" class="nav-link">Book Now</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="block-30 block-30-sm item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <span class="subheading-sm">Book Now</span>
                    <h2 class="heading">Book &amp; Stay Different</h2>
                </div>
            </div>
        </div>
    </div>


    <!--booking form-->

    <div class="site-section">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-12">
                    <div class="block-32">
                        <form action="submit.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                <?php
                                    $id = $_GET["id"];
                                    $_SESSION["room_id"] = $id;
                                    $name = $_GET["room"];
                                    $cost = $_GET["cost"];
                                    $_SESSION["finalPrice"] = $cost;
                                    echo "<h2>".$name."<span> Cost: $</span><span id=\"finalPrice\">".$cost."</span></h2>";
                                    ?>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                                    <label for="checkin">Check In</label>
                                    <input type="hidden" name="finalPrice"/>
                                    <div class="field-icon-wrap">
                                        <div class="icon"><span class="icon-calendar"></span></div>
                                        <input type="text" name="checkin_date" id="checkin_date" class="form-control" style="border-radius: 6px;" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                                    <label for="checkin">Check Out</label>
                                    <div class="field-icon-wrap">
                                        <div class="icon"><span class="icon-calendar"></span></div>
                                        <input type="text" name="checkout_date" id="checkout_date" class="form-control" style="border-radius: 6px;" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                                    <div class="row">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <label for="checkin">Adults</label>
                                            <div class="field-icon-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="adults" id="adults" class="form-control" style="border-radius: 6px;" required>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <label for="checkin">Children</label>
                                            <div class="field-icon-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="children" id="children" class="form-control" style="border-radius: 6px;" required>
                                                  <option value="0">0</option>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4+</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><br>


                            <div class="row block-10">
                                <div class="col-md-6 pr-md-6">

                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control" style="border-radius: 6px;" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control" style="border-radius: 6px;" placeholder="Your Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="mobileNumber" name="mobileNumber" pattern="[0-9]{10}" title="10 Digit Phone Number" class="form-control " style="border-radius: 6px;" placeholder="Mobile Number">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="address" id="address" cols="30" rows="7" class="form-control" style="border-radius: 6px;" placeholder="Address"></textarea>
                                    </div>


                                </div>
                                <div class="col-md-6 pr-md-6">
                                    <div class="form-group">
                                        <input type="text" id="cardNumber" name="cardNumber" class="form-control creditCard"  maxlength="19" style="border-radius: 6px;" placeholder="Card Number">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="nameOnCard" name="nameOnCard" class="form-control"  style="border-radius: 6px;" placeholder="Name on the Card">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="expiryDate" name="expiryDate" class="form-control" style="border-radius: 6px;" placeholder="Expiry Date" required>
                                    </div>
                                    <div class="form-group">
                                        <!-- <textarea name="" id="" cols="30" rows="7" class="form-control" style="border-radius: 6px;" placeholder="Message"></textarea> -->
                                        <input type="number" id="count" name="count" class="form-control"  style="border-radius: 6px;" placeholder="Number of Rooms" onkeyup="update()">
                                    </div>


                                </div>

                            </div>

                            <div class="row block-11">
                                <div class="col-md-12 pr-md-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary book_btn" style="border-radius: 6px; width: 100%;" onclick="return checkDate();" value="Book Room"/>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>

        <!-- START footer -->
        <footer class="footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6 col-lg-4">
                        <h3 class="heading-section">About Us</h3>
                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt.</p>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="block-23">
                            <h3 class="heading-section">Contact Info</h3>
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                                <li><span class="icon icon-clock-o"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row pt-5">
                    <div class="col-md-12 text-center">
                        <p>
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!--loader-->
        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
        <!-- END footer -->

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="js/validate.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="js/google-map.js"></script>
        <script src="js/main.js"></script>
        <script>
            function update(){
                var message = jQuery("#count").val();
                console.log(message);
                var cost = "<?php echo $_GET["cost"]; ?>";
                console.log(cost);
                if(message == ""){
                    jQuery("#finalPrice").text(parseInt(cost));
                    
                }
                else{
                jQuery("#finalPrice").text(parseInt(cost)*parseInt(message));
              }

            }
        </script>

        
</body>

</html>
