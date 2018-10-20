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

    <style>
          /* The Modal (background) */
      .modal {

      display: none; /* Hidden by default */
      z-index: 100; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 50px;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }

      /* Modal Content */
      .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      }

      /* The Close Button */
      .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      }

      .close:hover,
      .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
      }
    </style>
</head>

<body>
    <?php
        session_start();
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand nav-item" href="../index.php"><img src="../images/jumeriah2.png"></a>


            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="../index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="../php/rooms.php" class="nav-link">Rooms</a></li>
                    <li class="nav-item"><a href="../html/services.html" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="../html/about.html" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="../php/rooms.php" class="nav-link">Book Now</a></li>
                    <li class="nav-item"><a href="../html/contact.html" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->



    <!-- The Modal -->
    <div id="myModal1" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>
            <?php
                $nameArray = $_SESSION['nameArray'];
                $count = $_SESSION['countArray'];
                for($i = 0; $i < count($count); $i++){
                  echo $nameArray[$i]." : ".$count[$i]." Rooms Availale<br>";
                }
            ?>
        </p>
      </div>

    </div>




    <div class="block-31" style="position: relative;">
        <div class="owl-carousel loop-block-31 ">
            <div class="block-30 item" style="background-image: url('../images/hotel.jpg');" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-10">
                            <span class="subheading-sm">Welcome</span>
                            <h2 class="heading">Enjoy a Luxury Experience</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-30 item" style="background-image: url('../images/bg_1.jpg');" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-10">
                            <span class="subheading-sm">Welcome</span>
                            <h2 class="heading">Simple &amp; Elegant</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-30 item" style="background-image: url('../images/bg_2.jpg');" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-10">
                            <span class="subheading-sm">Welcome</span>
                            <h2 class="heading">Food &amp; Drinks</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">

                <div class="block-32">
                  <iframe name="bl" id="bl" style="display:none;"></iframe>
                    <form id="check" method="post" target="bl" action="../php/checkAvailibility.php">
                        <div class="row">
                            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                                <label for="checkin">Check In</label>
                                <div class="field-icon-wrap">
                                    <div class="icon"><span class="icon-calendar"></span></div>
                                    <input type="text" id="checkin_date" class="form-control" style="border-radius: 6px;" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                                <label for="checkin">Check Out</label>
                                <div class="field-icon-wrap">
                                    <div class="icon"><span class="icon-calendar"></span></div>
                                    <input type="text" id="checkout_date" class="form-control" style="border-radius: 6px;" required>
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
                            <div class="col-md-6 col-lg-3 align-self-end">
                                <button id="checkAvailable" type="submit" class="btn btn-primary btn-block" style="border-radius: 6px;" >Check Availabilty</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>

    <div class="site-section block-13 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-7 section-heading">
                    <span class="subheading-sm">Featured Rooms</span>
                    <h2 class="heading">Rooms &amp; Suites</h2>
                    <p>30 beautifully appointed rooms
Elegantly designed and exquisitely furnished, our 30 beautifully appointed suites and rooms at Frankfurt Resort range in size from 280 to 480 sqft. The rooms overlook either the sprawling lush green mangroves of Germany or the mesmerizing property view. </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="nonloop-block-13 owl-carousel">
                        <?php
                        $conn = mysqli_connect("localhost", "root", "");
                        $dbname = "id7257488_jumeriah";
                        mysqli_select_db($conn, $dbname);
                        $query = "select * from room_type";
                        $data = mysqli_query($conn, $query);
                        while($info = mysqli_fetch_array($data)){
                            $x = $info['image'];
                            print("<div class=\"item\"><div class=\"block-34\"><div class=\"image\">");
                            print("<a href=\"#\"><img src=\"$x\" alt=\"Image placeholder\"></a></div>");
                            print("<div class=\"text\">");
                            print("<h2 class=\"heading\">".$info['name']."</h2>");
                            print("<div class=\"price\"><sup>$</sup><span class=\"number\">".$info['cost']."</span><sub>/per night</sub></div>");
                            print("<ul class=\"specs\">");
                            print("<li><strong>Adults:</strong>".$info['capacity']."</li>");
                            print("<li><strong>Categories:</strong> Single</li>");
                            print("<li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>");
                            print("<li><strong>Size:</strong>".$info['size']."m<sup>2</sup></li>");
                            print("<li><strong>Bed Type:</strong> One bed</li>");
                            print("</ul></div></div></div>");
                        }


                        ?>


                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="site-section ">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-7 section-heading">
                    <span class="subheading-sm">Menus</span>
                    <h2 class="heading">Restaurant Menu</h2>
                </div>
            </div>

            <div class="block-35">

                <ul class="nav" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Breakfast</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Lunch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Dinner</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-md-12 block-13">
                                <div class="nonloop-block-13 owl-carousel">
                                <?php
                                    $conn = mysqli_connect("localhost", "root", "");
                                    $dbname = "id7257488_jumeriah";
                                    mysqli_select_db($conn, $dbname);
                                    $query = "select * from food where time='breakfast'";
                                    $data = mysqli_query($conn, $query);
                                    while($info = mysqli_fetch_array($data)){
                                        $x = $info['image'];
                                        print("<div class=\"item\">
                                        <div class=\"block-34\">
                                            <div class=\"image\">
                                                <a href=\"#\"><img src=\"$x\" alt=\"Image placeholder\"></a>
                                            </div>
                                            <div class=\"text\">");
                                        print("<h2 class=\"heading\">".$info['name']."</h2>
                                        <div class=\"price\"><sup>$</sup><span class=\"number\">".$info['price']."</span></div>");
                                        print("</div></div></div>");

                                    }
                                ?>


                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-md-12 block-13">
                                <div class="nonloop-block-13 owl-carousel">
                                <?php
                                    $conn = mysqli_connect("localhost", "root", "");
                                    $dbname = "id7257488_jumeriah";
                                    mysqli_select_db($conn, $dbname);
                                    $query = "select * from food where time='lunch'";
                                    $data = mysqli_query($conn, $query);
                                    while($info = mysqli_fetch_array($data)){
                                        $x = $info['image'];
                                        print("<div class=\"item\">
                                        <div class=\"block-34\">
                                            <div class=\"image\">
                                                <a href=\"#\"><img src=\"$x\" alt=\"Image placeholder\"></a>
                                            </div>
                                            <div class=\"text\">");
                                        print("<h2 class=\"heading\">".$info['name']."</h2>
                                        <div class=\"price\"><sup>$</sup><span class=\"number\">".$info['price']."</span></div>");
                                        print("</div></div></div>");

                                    }
                                ?>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row">
                            <div class="col-md-12 block-13">
                                <div class="nonloop-block-13 owl-carousel">
                                 <?php
                                    $conn = mysqli_connect("localhost", "root", "");
                                    $dbname = "id7257488_jumeriah";
                                    mysqli_select_db($conn, $dbname);
                                    $query = "select * from food where time='dinner'";
                                    $data = mysqli_query($conn, $query);
                                    while($info = mysqli_fetch_array($data)){
                                        $x = $info['image'];
                                        print("<div class=\"item\">
                                        <div class=\"block-34\">
                                            <div class=\"image\">
                                                <a href=\"#\"><img src=\"$x\" alt=\"Image placeholder\"></a>
                                            </div>
                                            <div class=\"text\">");
                                        print("<h2 class=\"heading\">".$info['name']."</h2>
                                        <div class=\"price\"><sup>$</sup><span class=\"number\">".$info['price']."</span></div>");
                                        print("</div></div></div>");

                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="block-30 block-30-sm item" style="background-image: url('../images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h2 class="heading">Quality accommodation that exceeds the expectations</h2>
                </div>
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
                                <p>&rdquo; On a trip me and my family were to attend some functions so had booked this place.We found it superb location wise,very easy to get there,silent,good,away from routine.It has great view from the room and also everything is taken care very nicely.I am sure to come again whenever possible.
                                     &ldquo;</p>
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
    <script src="../js/validate.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/jquery.animateNumber.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="../js/google-map.js"></script>
    <script src="../js/main.js"></script>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

    <script>
      // Get the modal
      var modal = document.getElementById('myModal1');

      // Get the button that opens the modal
      var btn = document.getElementById("checkAvailable");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal

      btn.onclick = function () {

          if(check1()){
              modal.style.display = "block";
          }

      }


      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {

          modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
</script>


</body>

</html>
