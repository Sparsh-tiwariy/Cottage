<?php
session_start();
if (isset($_POST["checkin"]) && !empty($_POST["checkin"]) && isset($_POST["checkout"]) && !empty($_POST["checkout"])) {
	$_SESSION['checkin_date'] = date('d-m-y', strtotime($_POST['checkin']));
	$_SESSION['checkout_date'] = date('d-m-y', strtotime($_POST['checkout']));
	$_SESSION['checkin_db'] = date('y-m-d', strtotime($_POST['checkin']));
	$_SESSION['checkout_db'] = date('y-m-d', strtotime($_POST['checkout']));
	$_SESSION['datetime1'] = new DateTime($_SESSION['checkin_db']);
	$_SESSION['datetime2'] = new DateTime($_SESSION['checkout_db']);
	$_SESSION['checkin_unformat'] = $_POST["checkin"];
	$_SESSION['checkout_unformat'] = $_POST["checkout"];
	$_SESSION['interval'] = $_SESSION['datetime1']->diff($_SESSION['datetime2']);

	$_SESSION['total_night'] = $_SESSION['interval']->format('%d');
}
if (isset($_POST["totaladults"])) {
	$_SESSION['adults'] = $_POST["totaladults"];
}

if (isset($_POST["totalchildrens"])) {
	$_SESSION['childrens'] = $_POST["totalchildrens"];
}


?>
<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reservation</title>
	<meta name="reservation hotel for malaysia">
	<meta name="zulkarnain" content="gambohnetwork.com.my">
	<meta name="copyright" content="Hotel Malaysia, inc. Copyright (c) 2014">
	<meta name="reservation hotel for malaysia">
	<meta class="foundation-data-attribute-namespace">
	<meta class="foundation-mq-xxlarge">
	<meta class="foundation-mq-xlarge">
	<meta class="foundation-mq-large">
	<meta class="foundation-mq-medium">
	<meta class="foundation-mq-small">
	<style></style>
	<meta class="foundation-mq-topbar">



	<link rel="stylesheet" href="scss/foundation.css">
	<link rel="stylesheet" href="scss/normalize.css">
	<link rel="stylesheet" href="scss/style.css">
	<link href='http://fonts.googleapis.com/css?family=Slabo+13px' rel='stylesheet' type='text/css'>
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />

	<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>


	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">




	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>


</head>

<body class="fontbody">

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top header-transparent">
		<div class="container-fluid">

			<div class="row justify-content-center">
				<div class="col-xl-11 d-flex align-items-center">
					<h1 class="logo mr-auto"><a href="index.html"><img src="assets/img/logo (2).png" alt="" class="img-fluid">  SR COTTAGE</a></h1>
					<!-- Uncomment below if you prefer to use an image logo -->
					<!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

					<nav class="nav-menu d-none d-lg-block">
						<ul>
						<li class="active"><a href="index.html">Home</a></li>
              <li><a href="index.html#about">About Us</a></li>
              <li><a href="index.html#facility">Facilities</a></li>
              <li><a href="index.html#services">Rooms</a></li>
              <li><a href="index.html#gallery">Gallery</a></li>
              <li><a href="index.html#events">Events</a></li>

						</ul>
					</nav><!-- .nav-menu -->
				</div>
			</div>

		</div>
	</header><!-- End Header -->

	<!-- ======= Intro Section ======= -->
	<section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(img/i-12.jpeg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to SR COTTAGE</h2>
                <p class="animate__animated animate__fadeInUp">We Intend to provide a blissfull Experience.</p>
                <a href="#facility" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(img/i-15.jpeg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Heart of MP</h2>
                <p class="animate__animated animate__fadeInUp">True luxury for you in the lap of nature..</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(img/i-7.jpeg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Roomsssss</h2>
                <p class="animate__animated animate__fadeInUp">Fresh beds, clean rooms, excellent room service is what we provide.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Intro Section -->


	<div class="row foo" style="margin:30px auto 30px auto;">
		<div class="large-12 columns">
			<div class="large-3 columns centerdiv">
				<a href="sessiondestroy.php" class="button round blackblur fontslabo">1</a>
				<p class="fontgrey">Please select Date</p>
			</div>
			<div class="large-3 columns centerdiv">
				<a href="#" class="button round fontslabo" style="background-color:#2ecc71;">2</a>
				<p class="fontgrey">Select Room</p>
			</div>
			<div class="large-3 columns centerdiv">
				<a href="#" class="button round blackblur fontslabo">3</a>
				<p class="fontgrey">Guest Details</p>
			</div>
			<div class="large-3 columns centerdiv">
				<a href="#" class="button round blackblur fontslabo">4</a>
				<p class="fontgrey">Reservation Complete</p>
			</div>
		</div>

	</div>
	</div>

	<div class="row" style="margin:30px auto 30px auto;">
		<div class="large-4 columns blackblur fontcolor" style="margin-left:0; padding:10px; ">

			<div class="large-12 columns">
				<p class="fontgrey"><b>Your Reservation</b></p>
				<hr class="line">
				<form action="sessiondestroy.php" method="post">
					<div class="row">
						<div class="large-12 columns">
							<div class="row">

								<div class="large-6 columns" style="max-width:100%;">
									<span class="fontgrey">Check In
									</span>
								</div>

								<div class="large-4 columns" style="max-width:100%;">
									<span class="fontgrey">: <?php echo $_SESSION['checkin_date']; ?>
									</span>

								</div>
							</div>
							<div class="row">
								<div class="large-6 columns" style="max-width:100%;">
									<span class="fontgrey">Check Out
									</span>
								</div>

								<div class="large-4 columns" style="max-width:100%;">
									<span class="fontgrey">: <?php echo $_SESSION['checkout_date']; ?>
									</span>

								</div>
							</div>
							<div class="row">
								<div class="large-6 columns" style="max-width:100%;">
									<span class="fontgrey">Adults
									</span>
								</div>

								<div class="large-4 columns" style="max-width:100%;">
									<span class="fontgrey">: <?php echo $_SESSION['adults']; ?>
									</span>

								</div>
							</div>
							<div class="row">
								<div class="large-6 columns" style="max-width:100%;">
									<span class="fontgrey">Childrens
									</span>
								</div>

								<div class="large-4 columns" style="max-width:100%;">
									<span class="fontgrey">: <?php echo $_SESSION['childrens']; ?>
									</span>

								</div>
							</div>
							<div class="row">
								<div class="large-6 columns" style="max-width:100%;">
									<span class="fontgrey" style="font-size:13.2px;">No. of Night Stay(s)
									</span>
								</div>

								<div class="large-4 columns" style="max-width:100%;">
									<span class="fontgrey">: <?php echo  $_SESSION['total_night']; ?>
									</span>

								</div>
							</div>

						</div>
					</div>



					<div class="row">
						<div class="large-12 columns">
							<br><button name="submit" href="#" class="button small fontslabo" style="background-color:#2ecc71; width:100%;">Edit Reservation</button>
						</div>
					</div>
				</form>
			</div>
			<div class="large-12 columns" id="roomselected" style="display:none;">
				<hr>
				<br><label for="submit-form" class="book button small fontslabo" style="background-color:#2ecc71; width:100%; height:45px;">Proceed To Book</label>
				<!--button name="submit" href="#" class="button small fontslabo" style="background-color:#2ecc71; width:100%;" >Proceed Booking</button-->

			</div>



		</div>
		<div class="large-8 columns blackblur fontcolor" style="padding:10px">

			<div class="large-12 columns">
				<?php
				include './auth.php';
				// check available room
				$datestart =  date('y-m-d', strtotime($_SESSION['checkin_unformat']));
				$dateend =  date('y-m-d', strtotime($_SESSION['checkout_unformat']));

				$result = mysqli_query($mysqli, "SELECT r.room_id, (r.total_room-br.total) as availableroom from room as r LEFT JOIN ( 
				
										SELECT roombook.room_id, sum(roombook.totalroombook) as total from roombook where roombook.booking_id IN 
											(
												SELECT b.booking_id as bookingID from booking as b 
												where 
												(b.checkin_date between '" . $datestart . "' AND '" . $dateend . "') 
												OR 
												(b.checkout_date between '" . $dateend . "' AND '" . $datestart . "')
												
												
											)
										
										group by roombook.room_id
										)
										as br
					 
					 ON r.room_id = br.room_id");
				echo mysqli_error($mysqli);
				if (mysqli_num_rows($result) > 0) {
					echo "<p class=fontgrey><b>Choose Your Room</b></p><hr class=\"line\">";
					print "				<form action=\"guestform.php\" method=\"post\">\n";


					while ($row = mysqli_fetch_array($result)) {


						if ($row['availableroom'] != null && $row['availableroom'] > 0) {

							$sub_result = mysqli_query($mysqli, "select room.* from room where room.room_id = " . $row['room_id'] . " ");

							if (mysqli_num_rows($sub_result) > 0) {

								while ($sub_row = mysqli_fetch_array($sub_result)) {


									print "					<p><h4 class=>" . $sub_row['room_name'] . "</h4></p>\n";
									print "					<div class=\"row\">\n";
									print "					\n";
									print "						<div class=\"large-4 columns\">\n";
									print "							<img src=\"" . $sub_row['imgpath'] . "\"></img>\n";
									print "						</div>\n";
									print "						<div class=\"large-4 columns\">\n";
									print "						<p><span class=\"fontgrey\">Occupancy : </span> " . $sub_row['occupancy'] . "<br>\n";
									print "						<span class=\"fontgrey\">Size : </span> " . $sub_row['size'] . "\n";
									print "						<br><span class=\"fontgrey\">View : </span> " . $sub_row['view'] . "</p>\n";
									print "\n";
									print "						</div>\n";
									print "						<div class=\"large-4 columns\">\n";
									print "						<p ><span class=\"fontgrey\">Rate : MYR </span><span style=\"font-size:24px;\">" . $sub_row['rate'] . "</span><span class=\"fontgrey\">/ night</span><br>\n";
									print "						<span style=\"text-align:right;\">" . $row['availableroom'] . " room available</span>\n";
									print "						</p>\n";
									print "							<div class=\"row\">\n";
									print "								<div class=\"large-11 columns\">\n";
									print "									<label class=\"fontcolor\">\n";
									print "										<select  class=\"no_of_room\" name=\"qtyroom" . $sub_row['room_id'] . "\" id=\"room" . $sub_row['room_id'] . "\" onChange=\"selection(" . $sub_row['room_id'] . ")\"  style=\"width:100%; color:black; height:45px;\" ;\">\n";
									print "											<option  value=\"0\">0</option>\n";
									$i = 1;
									while ($i <= $row['availableroom']) {
										print "											<option value=\"" . $i . "\">" . $i . "</option>\n";
										$i = $i + 1;
									}
									print "										</select>\n";
									print "									</label>\n";
									print "								</div>\n";
									print "								<div class=\"large-1 columns\">\n";
									print "<input type=hidden name=\"selectedroom" . $sub_row['room_id'] . "\"  id=\"selectedroom" . $sub_row['room_id'] . "\" value=\"" . $sub_row['room_id'] . "\">";
									print "<input type=hidden name=\"room_name" . $sub_row['room_id'] . "\" id=\"room_name" . $sub_row['room_id'] . "\" value=\"" . $sub_row['room_name'] . "\">";
									print "								</div>\n";
									print "							</div>\n";
									print "						</div>\n";
									print "						\n";
									print "					</div>\n";
									print "					\n";
									print "				<hr>";
								}
							}
						} else if ($row['availableroom'] == null) {
							$sub_result2 = mysqli_query($mysqli, "select room.* from room where room.room_id = " . $row['room_id'] . " ");
							if (mysqli_num_rows($sub_result2) > 0) {
								while ($sub_row2 = mysqli_fetch_array($sub_result2)) {

									print "					<p><h4 class=fontgrey>" . $sub_row2['room_name'] . "</h4></p>\n";
									print "					<div class=\"row\">\n";
									print "					\n";
									print "						<div class=\"large-4 columns\">\n";
									print "							<img src=\"" . $sub_row2['imgpath'] . "\"></img>\n";
									print "						</div>\n";
									print "						<div class=\"large-4 columns\">\n";
									print "						<p class=fontgrey><span class=\"fontgrey\">Occupancy : </span> " . $sub_row2['occupancy'] . "<br>\n";
									print "						<span class=\"fontgrey\">Size : </span> " . $sub_row2['size'] . "\n";
									print "						<br><span class=\"fontgrey\">View : </span> " . $sub_row2['view'] . "</p>\n";
									print "\n";
									print "						</div>\n";
									print "						<div class=\"large-4 columns\">\n";
									print "						<p class=fontgrey><span class=\"fontgrey\"> Rate : RS </span><span style=\"font-size:24px;\">" . $sub_row2['rate'] . "</span><span class=\"fontgrey\">/ night</span><br>\n";
									print "						<span style=\"text-align:right;\">" . $sub_row2['total_room'] . " room available</span>\n";
									print "						</p>\n";
									print "							<div class=\"row\">\n";
									print "								<div class=\"large-11 columns\">\n";
									print "									<label class=\"fontcolor\">\n";
									print "										<select  class=\"no_of_room\" name=\"qtyroom" . $sub_row2['room_id'] . "\"  id=\"room" . $sub_row2['room_id'] . "\" onChange=\"selection(" . $sub_row2['room_id'] . ")\" style=\"width:145px; color:black; height:45px;\" >\n";
									print "											<option value=\"0\">0</option>\n";
									$i = 1;
									while ($i <= $sub_row2['total_room']) {
										print "											<option value=\"" . $i . "\">" . $i . "</option>\n";
										$i = $i + 1;
									}
									print "										</select>\n";
									print "									</label>\n";
									print "								</div>\n";
									print "								<div class=\"large-1 columns\">\n";
									print "<input type=hidden name=\"selectedroom" . $sub_row2['room_id'] . "\" value=\"" . $sub_row2['room_id'] . "\">";
									print "<input type=hidden name=\"room_name" . $sub_row2['room_id'] . "\" value=\"" . $sub_row2['room_name'] . "\">";
									//print "				<button type=\"submit\"  class=\"book button small\" style=\"background-color:#2ecc71; width:100%; height:45px; !important;\" >Book</button>\n";	
									print "								</div>\n";
									print "							</div>\n";
									print "						</div>\n";
									print "						\n";
									print "					</div>\n";
									print "					\n";
									print "				<hr>";
								}
							}
						}
					}
				} else {
					echo "<p><b>No room available</b></p><hr>";
				}
				print "<button type=\"submit\" id=\"submit-form\" class=\"hidden\" style=\"display:none\">Book</button>\n";
				print "	</form>";

				?>
			</div>



		</div>

	</div><br>

	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row" style="margin-left: 5%;">



					<div class="col-lg-6 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
						</ul>
					</div>

					<div class="col-lg-6 col-md-6 footer-contact">
						<h4>Contact Us</h4>
						<p>
							Nikunj Vihar Colony, Sahastradhara Rd<br>
							Maheshwar, Madhya Pradesh 451224<br>

							<strong>Phone:</strong> +91 78692-86644<br>
							<strong>Email:</strong> Srcottage00@gmail.com<br>
						</p>


						<div class="social-links">
							<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
							<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
							<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
						</div>

					</div>



					<div class="container">
						<div class="copyright">
							&copy; Copyright <strong>SR Cottage</strong>. All Rights Reserved
						</div>
						<div class="credits">
							<!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->

						</div>
					</div>
	</footer><!-- End Footer -->


	<script>
		function selection(id) {
			var e = document.getElementById('roomselected').style.display = 'block';

		}
	</script>


	<!-- Vendor JS Files -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="assets/vendor/counterup/counterup.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/venobox/venobox.min.js"></script>
	<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>
</body>

</html>