<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jumeriah Frankfurt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
        session_start();
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand nav-item" href="../index.php"><img src="../images/jumeriah2.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                    <li class="nav-item active"><a href="../php/rooms.php" class="nav-link">Rooms</a></li>
                    <li class="nav-item"><a href="../html/services.html" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="../html/about.html" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="../php/rooms.php" class="nav-link">Book Now</a></li>
                    <li class="nav-item"><a href="../html/contact.html" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->



    <div class="block-30 block-30-sm item" style="background-image: url('../images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <span class="subheading-sm">Rooms</span>
                    <h2 class="heading">Rooms &amp; Suites</h2>
                </div>
            </div>
        </div>
    </div>






    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <?php
                    $conn = mysqli_connect("localhost", "root", "");
                    $dbname = "id7257488_jumeriah";
                    mysqli_select_db($conn, $dbname);
                    $query = "select * from room_type";
                    $data = mysqli_query($conn, $query);
                    while($info = mysqli_fetch_array($data)){
                        print("<div class=\"col-md-12 mb-5\">");
                        print("<form action=\"book.php\" method=\"GET\">");
                        $x = $info['image'];
                        print("<input type=\"hidden\" name=\"id\" value=\"".$info['id']."\" />");
                        print("<input type=\"hidden\" name=\"room\" value=\"".$info['name']."\" />");
                        print("<input type=\"hidden\" name=\"cost\" value=\"".$info['cost']."\" />");
                        print("<div class=\"block-3 d-md-flex\">");

                        if($info['id']%2 == 0){
                          print("<div class=\"image order-2\" style=\"background-image: url($x); \"></div>");
                          print("<div class=\"text order-1\">");
                        }
                        else{
                          print("<div class=\"image\" style=\"background-image: url('$x'); \"></div>");
                          print("<div class=\"text\">");
                        }
                        print("<h2 class=\"heading\">".$info['name']."</h2>");
                        print("<div class=\"price\"><sup>$</sup><span class=\"number\">".$info['cost']."</span><sub>/per night</sub></div>");
                        print("<ul class=\"specs mb-5\">");
                        print("<li><strong>Adults:</strong>".$info['capacity']."</li>");
                        print("<li><strong>Categories:</strong> Single</li>");
                        print("<li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>");
                        print("<li><strong>Size:</strong>".$info['size']."m<sup>2</sup></li>");
                        print("<li><strong>Bed Type:</strong> One bed</li>");
                        print("</ul>");
                        print("<button type=\"submit\" class=\"btn btn-primary py-3 px-5\" style=\"border-radius: 6px;\">Book Now</button>");
                        print(" </div></div></form></div>");
                    }



                ?>


            </div>







        </div>
    </div>
    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-7 section-heading">
                    <span class="subheading-sm">Reviews</span>
                    <h2 class="heading">Guest Reviews</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">

                    <div class="block-33">
                        <div class="vcard d-flex mb-3">
                            <div class="image align-self-center"><img src="../images/person_3.jpg" alt="Person here"></div>
                            <div class="name-text align-self-center">
                                <h2 class="heading">Martin Newmansfield</h2>
                                <span class="meta">Satisfied Customer</span>
                            </div>
                        </div>
                        <div class="text">
                            <blockquote>
                                <p>&rdquo; On a trip me and my family were to attend some functions so had booked this place.We found it superb location wise,very easy to get there,silent,good,away from routine.It has great view from the room and also everything is taken care very nicely.I am sure to come again whenever possible. &ldquo;</p>
                            </blockquote>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4">

                    <div class="block-33">
                        <div class="vcard d-flex mb-3">
                            <div class="image align-self-center"><img src="../images/person_2.jpg" alt="Person here"></div>
                            <div class="name-text align-self-center">
                                <h2 class="heading">Nancy Green</h2>
                                <span class="meta">Satisfied Customer</span>
                            </div>
                        </div>
                        <div class="text">
                            <blockquote>
                                <p>&rdquo; Absolutely delightful great and peaceful stay and a nice weekend at the hotel.Rooms are cozy,airy and very comfortable.pleasant stay.Very good food but cost is on higher side.Staff at the hotel is very courteous.Miss forum on reception desk was very corteous and informative. &ldquo;</p>
                            </blockquote>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4">

                    <div class="block-33">
                        <div class="vcard d-flex mb-3">
                            <div class="image align-self-center"><img src="../images/person_1.jpg" alt="Person here"></div>
                            <div class="name-text align-self-center">
                                <h2 class="heading">Elizabeth Charles</h2>
                                <span class="meta">Satisfied Customer</span>
                            </div>
                        </div>
                        <div class="text">
                            <blockquote>
                                <p>&rdquo; Hotel is really good. Made to Western standards with clean, well equipped large rooms. Rooms equipped with large beds, coffee table with chairs, fridge, set for valuables, large TV, free WiFi etc. &ldquo;</p>
                            </blockquote>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="block-22">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="heading mb-4">Be Sure To Get Our Promos</h2>
                    <form action="formemail.php" class="subscribe">
                        <div class="form-group">
                            <input type="email" class="form-control email" placeholder="Enter your email" name="email" id="email">
                            <!-- <input type="submit" class="btn btn-primary submit"> -->
                            <button type="button" class="btn btn-primary submit" onclick="sendmail();">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-4">
                    <h3 class="heading-section">About Us</h3>
                    <p class="mb-5"> Jumeirah has transformed the way that luxury is defined as exemplified by its flagship hotel, Burj Al Arab Jumeirah.   Today, Jumeirah is a member of Dubai Holding and an acclaimed luxury hospitality leader.  We operate 22 properties in eight countries and employ 13,500 colleagues from across 140 nationalities.

</p>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="block-23">
                        <h3 class="heading-section">Contact Info</h3>
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">JUMEIRAH GROUP CORPORATE OFFICE
                            Level 5, Building 5
                            Dubai Design District
                            PO Box 73137
                            Dubai, UAE</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text"> +971 4 3665000</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text"> info@jumeirah.com</span></a></li>
                            <li><span class="icon icon-clock-o"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <h4 class="heading-section">Please fill this form so that it may help us improve ourselves</h4>
                    <a href="../html/form.html" class="btn btn-primary" style="text-emphasis-color: #1c7ff1; border-radius: 6px; ">Feedback</a>
<!--                    https://goo.gl/forms/C3WuvXOCULSsIQyd2                -->
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

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="https://smtpjs.com/v2/smtp.js"></script>
    <script src="../js/emailer.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/jquery.animateNumber.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="../js/google-map.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>
