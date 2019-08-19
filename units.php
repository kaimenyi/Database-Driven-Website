<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KBC | Section Data Entry</title>
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
	      <a class="navbar-brand" href="index.php">KBC - Technical Services</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="units.php" class="nav-link">Data Entry</a></li>
            <li class="nav-item"><a href="portal/portal.php" class="nav-link">Portal</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="sections.php" class="nav-link">Sections</a></li>
            <li class="nav-item"><a href="department-updates.php" class="nav-link">Department Updates</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contacts</a></li>
            <li>     <?php  if (isset($_SESSION['username'])) : ?>
    	<p><strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
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
            <h1 class="mb-3 bread">Data Entry</h1>
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
	              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Transmitter Data Entry <span>2019</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">TV Centre <span>2019</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Signet (DVBT) <span>2019</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">CAR <span>2019</span></a>

	            </div>
	          </div>
	          <div class="col-md-9 tab-wrap">
	            
	            <div class="tab-content" id="v-pills-tabContent">

<!-- transmitter data entry-->
	              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
	              	<div class="row block-9">
      							<div class="col-md-6 order-md-last d-flex">
      						    <form action="php/tx_update.php" method="post" class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <label>Please select the current date: </label>
                          <input type="date" name="date_now" width="300" style="width: 300px">
                        </div>
                        <div class="form-group">
                            <label>Please enter your Name: </label>
                            <input name="engineer_name" type="text" class="form-control" placeholder="Your Name">
                          </div>
                          <div class="form-group">
												<div>
												    <label>Select Your Transmitter Location: </label>
													  <select width="300" style="width: 300px" name="location"> 
													    <option value="Limuru">Limuru</option>
													    <option value="Kisumu">Kisumu</option>
													    <option value="Mombasa">Mombasa</option>
													    <option value="Kitale">Kitale</option>
													    <option value="Marsabit">Marsabit</option>
													    <option value="Machakos">Machakos</option>
													    <option value="Nyambene">Nyambene</option>
													    <option value="Nyadundo">Nyadundo</option>
													  </select>
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
                          </div>
                          <div class="form-group">
                              <label>Signal reception strength in dB: </label>
                            <input name="signal_reception" type="text" class="form-control" placeholder="Signal Reception Power">
                          </div>
                          <div class="form-group">
                              <label>Signal transmission power in KW: </label>
                            <input name="signal_transmission" type="text" class="form-control" placeholder="Signal Transmission Power">
                          </div>
                          <div class="form-group">
                              <label>Enter all the services running at the Transmitter site: </label>
                            <input name="services" type="text" class="form-control" placeholder="Services">
                          </div>
                          <div class="form-group">
                              <label>Comment on KPLC Power availability: </label>
                            <input name="mains" type="text" class="form-control" placeholder="Mains (KPLC)">
                          </div>
                          <div class="form-group">
                              <label>Please enter additional comments not covered in the above scope: </label>
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Additional Information"></textarea>
                          </div>
                          <div class="form-group">
                           <input type="submit" value="Send Transmitter Record" class="btn btn-primary py-3 px-5">
                          </div>
                      </form>
    						    </div>
						    </div>
	              </div>

<!-- tv centre data entry-->
	              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	              		<div class="row block-9">
        							<div class="col-md-6 order-md-last d-flex">
        						    <form action="php/tv_centre.php" method="post" class="bg-light p-5 contact-form">
				                        <div class="form-group">
				                            <label>Pleae Enter date: </label>
				                          <input type="date" name="time_now" width="300" style="width: 300px">
				                        </div>
                          <div class="form-group">
												<div>
												    <label>Select Your Signal Source: </label>
													  <select width="300" style="width: 300px" name="source"> 
													    <option value="TVU Kit">TVU Kit</option>
													    <option value="Links 1">Links 1</option>
													    <option value="Links 2">Links 2</option>
													    <option value="Kitale">LInks 3</option>
													    <option value="VCR 1">VCR 1</option>
													    <option value="VCR 2">VCR 2</option>
													    <option value="VCR 3">VCR 3</option>
													    <option value="VCR 5">VCR 5</option>
													    <option value="VCR 9">VCR 9</option>
													  </select>
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
                          </div>
        						        <div class="form-group">
        						            <label>List all Aired Programmes: </label>
        						          <input type="text" name="programmes" class="form-control" placeholder="Programmes">
        						        </div>
        						        <div class="form-group">
        						            <label>Power Radiated: </label>
        						          <input type="text" name="power_radiated" class="form-control" placeholder="Power Radiated">
        						        </div>
        						        <div class="form-group">
        						            <label>Additional Remarks and comments on the Event: </label>
        						          <textarea name="remarks" id="" cols="30" rows="7" class="form-control" placeholder="Additional Remarks"></textarea>
        						        </div>
        						        <div class="form-group">
        						         <input type="submit" value="Send TV Centre Record" class="btn btn-primary py-3 px-5">
        						        </div>
        						    </form>
        						    </div>
        						</div>
        	       </div>

<!-- signet data entry-->
	              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                      <h2><a href="#">SIGNET Visitor Log - to be filled by Engineer on Duty</a></h2>
	              		<div class="row block-9">
        							<div class="col-md-6 order-md-last d-flex">
        						    <form action="php/signet_update.php" method="post" class="bg-light p-5 contact-form">
        						    	<div class="form-group">
        						          <input type="text" name="national_id" class="form-control" placeholder="Your National/Passport ID">
        						        </div>
        						        <div class="form-group">
        						          <input type="text" name="visitor_station" class="form-control" placeholder="Your TV/Radio Station">
        						        </div>
                            <div class="form-group">
                              <input type="date" name="time_in" width="300" style="width: 300px">
                            </div>
        						        <div class="form-group">
        						          <input type="text" name="engineer_on_duty" class="form-control" placeholder="Engineer on Duty">
        						        </div>
        						        <div class="form-group">
        						         <input type="submit" value="Send DVBT Log" class="btn btn-primary py-3 px-5">
        						        </div>
        						    </form>
        						    </div>
        						</div>
	              </div>
	              

<!-- car data entry-->
	              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
	              		<div class="row block-9">
      							<div class="col-md-6 order-md-last d-flex">
      						    <form action="#" class="bg-light p-5 contact-form">
      						    	<div class="form-group">
      						          <input type="text" class="form-control" placeholder="Your Name">
      						        </div>
      						        <div class="form-group">
      						          <input type="text" class="form-control" placeholder="Your Email">
      						        </div>
      						        <div class="form-group">
      						          <input type="text" class="form-control" placeholder="Subject">
      						        </div>
      						        <div class="form-group">
      						          <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
      						        </div>
      						        <div class="form-group">
      						         <input type="submit" value="Send CAR Record" class="btn btn-primary py-3 px-5">
      						        </div>
      						    </form>
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
              <h2 class="ftco-heading-2">KBC | Units.</h2>
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