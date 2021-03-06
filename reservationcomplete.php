<?php
session_start();
?>
<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservation</title>
<meta name="reservation hotel for malaysia">
<meta name="zulkarnain" content="gambohnetwork.com.my">
<meta name="copyright" content="Hotel Malaysia, inc. Copyright (c) 2014">
<link rel="stylesheet" href="scss/foundation.css">
<link rel="stylesheet" href="scss/style.css">
<link href='http://fonts.googleapis.com/css?family=Slabo+13px' rel='stylesheet' type='text/css'>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="icon/css/fontello.css">
<link rel="stylesheet" href="icon/css/animation.css">
<!--[if IE 7]><link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script src="jquery.backstretch.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<meta class="foundation-data-attribute-namespace">
<meta class="foundation-mq-xxlarge">
<meta class="foundation-mq-xlarge">
<meta class="foundation-mq-large">
<meta class="foundation-mq-medium">
<meta class="foundation-mq-small">
<style></style>
<meta class="foundation-mq-topbar">
</head>

<body class="fontbody">

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
				<a href="book.php" class="btn-get-started scrollto animate__animated animate__fadeInUp">Back to Booking page</a>
              </div>
            </div>
          </div>
        </div>
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
				<a href="unsetroomchosen.php" class="button round blackblur fontslabo">2</a>
				<p class="fontgrey">Select Room</p>
			</div>
			<div class="large-3 columns centerdiv">
				<a href="guestform.php" class="button round  blackblur fontslabo">3</a>
				<p class="fontgrey">Guest Details</p>
			</div>
			<div class="large-3 columns centerdiv">
				<a href="#" class="button round fontslabo" style="background-color:#2ecc71;">4</a>
				<p class="fontgrey">Reservation Complete</p>
			</div>
		</div>

	</div>
	</div>

	<div class="row" style="color: grey;">
		<div class="large-4 columns blackblur fontcolor" style="margin-left:-10px; padding:10px;">

			<div class="large-12 columns ">
				<p style="color:white;"><b>Your Reservation</b></p>
				<hr class="line">
				<form name="guestdetails" action="unsetroomchosen.php" method="post">
					<div class="row">
						<div class="large-12 columns">
							<div class="row">

								<div class="large-5 columns" style="max-width:100%;">
									<span class="fontgreysmall">Check In
									</span>
								</div>

								<div class="large-5 columns" style="max-width:100%;">
									<span class="fontgrey">: <?php echo $_SESSION['checkin_date']; ?>
									</span>

								</div>
							</div>
							<div class="row">
								<div class="large-5 columns" style="max-width:100%;">
									<span class="fontgreysmall">Check Out
									</span>
								</div>

								<div class="large-5 columns" style="max-width:100%;">
									<span class="fontgrey">: <?php echo $_SESSION['checkout_date']; ?>
									</span>

								</div>
							</div>
							<div class="row">
								<div class="large-5 columns" style="max-width:100%;">
									<span class="fontgreysmall">Adults
									</span>
								</div>

								<div class="large-5 columns" style="max-width:100%;">
									<span class="fontgrey">: <?php echo $_SESSION['adults']; ?>
									</span>

								</div>
							</div>
							<div class="row">
								<div class="large-5 columns" style="max-width:100%;">
									<span class="fontgreysmall">Childrens
									</span>
								</div>

								<div class="large-5 columns" style="max-width:100%;">
									<span class="fontgrey">: <?php echo $_SESSION['childrens']; ?>
									</span>

								</div>
							</div>
							<div class="row">
								<div class="large-5 columns" style="max-width:100%;">
									<span class="fontgreysmall">Night Stay(s)
									</span>
								</div>

								<div class="large-5 columns" style="max-width:100%;">
									<span class="fontgrey">: <?php echo $_SESSION['total_night']; ?>
									</span>

								</div>
							</div>
							<div class="row">
								<hr>
								<div class="large-6 columns" style="max-width:100%;">
									<span class="fontgreysmall">Room Selected
									</span>
								</div>

								<div class="large-4 columns" style="max-width:100%;">
									<span class="fontgreysmall">Qty
									</span>

								</div>
							</div>
							<div class="row">
								<div class="large-6 columns" style="max-width:100%;">
									<span class="fontgrey"><?php

															foreach ($_SESSION['roomname'] as &$value0) {
																echo $value0;
																print "<br>";
															};

															?>

									</span>
								</div>

								<div class="large-4 columns" style="max-width:100%;">
									<span class="fontgrey">
										<?php foreach ($_SESSION['roomqty'] as &$value1) {
											echo $value1;
											print "<br>";
										};

										?>
									</span>

								</div>
							</div>

						</div>
					</div><br>
					<div class="row">
						<div class="large-12 columns" style="max-width:100%;">
							<p class="fontgrey borderstyle" style="text-align:center;">
								<!-- 15% Deposit Due Now<br> -->
								<!-- <span class="fontslabo " style="font-size:32px; text-align:center;">INR <?php echo $_SESSION['deposit']; ?></span> -->
								<br><span class="fontgrey" style="text-align:center;">Total</span><br>
								<span class="fontslabo" ,style="font-size:32px; text-align:center;">INR <?php echo $_SESSION['total_amount']; ?></span>
							</p>

						</div>

						<div class="large-12 columns" style="max-width:100%;">


						</div>
					</div>



					<div class="row">
						<div class="large-12 columns">
							<button name="submit" href="#" class="button small fontslabo" style="background-color:#2ecc71; width:100%;">Edit Reservation</button>
						</div>
					</div>
				</form>
			</div>



		</div>
		<div class="large-8 columns blackblur fontcolor" style="padding:10px">

			<div class="large-12 columns">
				<p style="color:white;"><b>Reservation Complete</b></p>
				<hr class="line">
				<p style="color:white;">Details of your reservation have just been sent to you
					via confirmation email. Please check your spam folder if you didn't received any email. We look forward to see you soon. In the
					meantime, if you have any questions, feel free to contact us.</p>
				<p>
					<i class="icon-phone" style="font-size:24px"></i> <span class="i-name fontgrey">Phone</span><span class="i-code" style="color: white;">&emsp; 7869286644</span><br>
					<i class="icon-mail-alt" style="font-size:24px"> </i> <span class="i-name fontgrey">Email</span><span class="i-code" style="color: white;">&emsp; Srcottage00@gmail.com</span>
				</p>
				<hr>
				<div class="row">
					<div class="large-12 columns">

						<!-- <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HcQtrYdDXcmPXP" async> </script> </form> -->

						<div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_HcRcpyHMvebXV1/view" data-text="Pay Now" data-color="#528FF0" data-size="large">
							<script>
								(function() {
									var d = document;
									var x = !d.getElementById('razorpay-embed-btn-js')
									if (x) {
										var s = d.createElement('script');
										s.defer = !0;
										s.id = 'razorpay-embed-btn-js';
										s.src = 'https://cdn.razorpay.com/static/embed_btn/bundle.js';
										d.body.appendChild(s);
									} else {
										var rzp = window['__rzp__'];
										rzp && rzp.init && rzp.init()
									}
								})();
							</script>
						</div>



					</div>



				</div>
			</div>
		</div>
	</div>
	</div>
	</div><br><br>	
	<script>
	</script>
</body>

</html>