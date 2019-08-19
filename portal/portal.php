<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ../login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Technical Services | Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

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
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="../index.php">Technical Services | Portal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="../units.php" class="nav-link">Data Entry</a></li>
            <li class="nav-item"><a href="portal.php" class="nav-link">Portal</a></li>
            <li class="nav-item"><a href="../about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="../sections.php" class="nav-link">Sections</a></li>
            <li class="nav-item"><a href="../department-updates.php" class="nav-link">Department Updates</a></li>
            <li class="nav-item"><a href="../contact.php" class="nav-link">Contacts</a></li>
            <li>     <?php  if (isset($_SESSION['username'])) : ?>
      <p><strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="../index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?> </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">Section Units</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Section Units <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section">
      <div class="container">
        <div class="ftco-schedule">
          <div class="row">
            <div class="col-md-3 nav-link-wrap text-center text-md-right">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Transmitter Station Updates <span>2019</span></a>
                <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-" aria-selected="false">TV Centre Updates <span>2019</span></a>
                <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">BH TV Stations <span>2019</span></a>
                <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="true">BH Radio Stations <span>2019</span></a>
                <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Signet Visitor's Log <span>2019</span></a>
                <a class="nav-link ftco-animate" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Limuru Head-End <span>Services 2019</span></a>
              </div>
            </div>
            <div class="col-md-9 tab-wrap">              
              <div class="tab-content" id="v-pills-tabContent">
                <!-- table styling for all stations-->
                <style>
                  table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                  }

                  td, th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  }

                  tr:nth-child(even) {
                    background-color: #dddddd;
                  }
                </style>
                <!-- end of table styling-->

                <!-- transmitter station updates-->
                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                      <h2><a href="#">All Transmitter Station Updates</a></h2>
                      <div>
                    <form method="post" action="php/export.php">
                   <input type="submit" name="export" class="btn btn-success" value="Export" />
                  </form> 
                  </div>
                  <div class="speaker-wrap ftco-animate d-md-flex">

                    <table>
                      <tr>
                        <th>Present Date</th>
                        <th>Engineer</th>
                        <th>Location</th>
                        <th>Signal Reception</th>
                        <th>Signal Transmision</th>
                        <th>Services</th>
                        <th>Description</th>
                      </tr>

                      <?php
                        include 'php/technicaldb.php';
                        
                        $sql = "SELECT * FROM tx_records ORDER BY date_now DESC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["date_now"]. "</td><td>" . $row["engineer_name"]. "</td><td>" . $row["location"]. "</td><td>" . $row["signal_reception"]. "</td><td>" . $row["signal_transmission"]. "</td><td>" . $row["services"]. "</td><td>" . $row["message"]. "</td></tr>";
                        }
                        echo "</table>";
                        } else { echo "0 results"; }
                        $conn->close();
                      ?>
                    </table>                           
                  </div>
                  
                </div>

        <!-- TV Centre-->
                <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                      <h2><a href="#">TV Centre Updates</a></h2>
                  <div class="speaker-wrap ftco-animate d-md-flex">

                    <table>
                      <tr>
                        <th>Time</th>
                        <th>Source</th>
                        <th>Programmes</th>
                        <th>Power Radiated</th>
                        <th>Remarks</th>
                      </tr>

                      <?php
                        include 'php/technicaldb.php';
                        
                        $sql = "SELECT * FROM tv_centre ORDER BY time_now DESC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["time_now"]. "</td><td>" . $row["source"]. "</td><td>" . $row["programmes"]. "</td><td>" . $row["power_radiated"]. "</td><td>" . $row["remarks"]. "</td></tr>";
                        }
                        echo "</table>";
                        } else { echo "0 results"; }
                        $conn->close();
                      ?>
                    </table>   
                          
                  </div>
                  <div class="speaker-wrap ftco-animate d-md-flex">
                    <div class="img speaker-img" style="background-image: url(images/staff-2.jpg);"></div>
                    <div class="text">
                      <h2><a href="#">Introduction to Business Leaders</a></h2>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                  </div>
                </div>

                <!-- TV stations-->
                <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                  <h2><a href="#">TV Stations Owned by the Corporation</a></h2>
                  <div class="speaker-wrap ftco-animate d-md-flex">

                    <table>
                      <tr>
                        <th>Station Name</th>
                        <th>Station EIC</th>
                        <th>Station Status</th>
                      </tr>

                      <?php
                        include 'php/technicaldb.php';
                        
                        $sql = "SELECT * FROM tv_stations ORDER BY station_id DESC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["station_name"]. "</td><td>" . $row["station_eic"]. "</td><td>" . $row["station_status"]. "</td></tr>";
                        }
                        echo "</table>";
                        } else { echo "0 results"; }
                        $conn->close();
                      ?>
                    </table>                             
                  </div>
                  <div class="speaker-wrap ftco-animate d-md-flex">
                    <div class="img speaker-img" style="background-image: url(images/kbc.jpg);"></div>
                    <div class="text">
                      <h2><a href="#">Introduction to KBC Channel 1</a></h2>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                  </div>
                  <div class="speaker-wrap ftco-animate d-md-flex">
                    <div class="img speaker-img" style="background-image: url(images/y254.jpg);"></div>
                    <div class="text">
                      <h2><a href="#">Introduction to Y254 TV</a></h2>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                  </div>
                  <div class="speaker-wrap ftco-animate d-md-flex">
                    <div class="img speaker-img" style="background-image: url(images/kbc.jpg);"></div>
                    <div class="text">
                      <h2><a href="#">Introduction to Heritage TV</a></h2>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                  </div>
                </div>

                <!-- Radio Stations-->
                <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
                      <h2><a href="#">Radio Stations Owned by the Corporation</a></h2>
                  <div class="speaker-wrap ftco-animate d-md-flex">

                    <table>
                      <tr>
                        <th>Engineer</th>
                        <th>Location</th>
                        <th>Signal Reception</th>
                        <th>Signal Transmision</th>
                        <th>Services</th>
                        <th>Description</th>
                      </tr>

                      <?php
                        include 'php/technicaldb.php';
                        
                        $sql = "SELECT * FROM tx_records";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["engineer_name"]. "</td><td>" . $row["location"]. "</td><td>" . $row["signal_reception"]. "</td><td>" . $row["signal_transmission"]. "</td><td>" . $row["services"]. "</td><td>" . $row["message"]. "</td></tr>";
                        }
                        echo "</table>";
                        } else { echo "0 results"; }
                        $conn->close();
                      ?>
                    </table>                             
                  </div>
                  <div class="speaker-wrap ftco-animate d-md-flex">
                    <div class="img speaker-img" style="background-image: url(images/staff-2.jpg);"></div>
                    <div class="text">
                      <h2><a href="#">Introduction to Radio Stations</a></h2>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                  </div>
                </div>

                <!-- signet visitors log-->
                <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
                      <h2><a href="#">SIGNET Visitor Log</a></h2>
                  <div class="speaker-wrap ftco-animate d-md-flex">

                    <table>
                      <tr>
                        <th>National ID</th>
                        <th>Visitor Station</th>
                        <th>Time In</th>
                        <th>Engineer on Duty</th>
                      </tr>

                      <?php
                        include 'php/technicaldb.php';
                        
                        $sql = "SELECT * FROM signet_visitors ORDER BY time_in DESC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["national_id"]. "</td><td>" . $row["visitor_station"]. "</td><td>" . $row["time_in"]. "</td><td>" . $row["engineer_on_duty"]. "</td></tr>";
                        }
                        echo "</table>";
                        } else { echo "0 results"; }
                        $conn->close();
                      ?>
                    </table>   
                          
                  </div>
                  <div class="speaker-wrap ftco-animate d-md-flex">
                    <div class="img speaker-img" style="background-image: url(images/staff-2.jpg);"></div>
                    <div class="text">
                      <h2><a href="#">Introduction to Business Leaders</a></h2>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                  </div>
                </div>


                <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-day-6-tab">
                  <div class="speaker-wrap ftco-animate d-md-flex">
                    <div class="img speaker-img" style="background-image: url(images/staff-4.jpg);"></div>
                    <div class="text">
                      <h2><a href="#">Introduction to Business Leaders</a></h2>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                  </div>
                  <div class="speaker-wrap ftco-animate d-md-flex">
                    <div class="img speaker-img" style="background-image: url(images/staff-2.jpg);"></div>
                    <div class="text">
                      <h2><a href="#">Introduction to Business Leaders</a></h2>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <section class="ftco-section-parallax ftco-section ftco-no-pt">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-lg-7 text-center heading-section ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">KBC | Portal</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Speakers</a></li>
                <li><a href="#" class="py-2 d-block">Shcedule</a></li>
                <li><a href="#" class="py-2 d-block">Events</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Career</a></li>
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://www.youtube.com/channel/UCRX1mqN-ocDbs1Tc6ZOkmkA" target="_blank">C0nan 3xploits and </a><i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>