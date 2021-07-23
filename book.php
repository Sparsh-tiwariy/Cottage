<?php
session_start();
?>
<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservation</title>
<meta name="reservation hotel for malaysia" >
<meta name="zulkarnain" content="gambohnetwork.com.my">
<meta name="copyright" content="Hotel Malaysia, inc. Copyright (c) 2014">
<link rel="stylesheet" href="scss/normalize.css">
<link rel="stylesheet" href="scss/foundation.css">
<link rel="stylesheet" href="scss/style.css">
<link rel="stylesheet" href="scss/datepicker.css">
<link href="scss/datepicker.css" rel="stylesheet" type="text/css"/> 

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">


<link href='http://fonts.googleapis.com/css?family=Slabo+13px' rel='stylesheet' type='text/css'>
<!--link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script>
  $(document).ready(function() {
		$("#checkout").datepicker();
		$("#checkin").datepicker({
		minDate : new Date(),
		onSelect: function (dateText, inst) {
        var date = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);
        $("#checkout").datepicker("option", "minDate", date);
		}
		});
  });
</script>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<meta class="foundation-data-attribute-namespace">
<meta class="foundation-mq-xxlarge">
<meta class="foundation-mq-xlarge">
<meta class="foundation-mq-large">
<meta class="foundation-mq-medium">
<meta class="foundation-mq-small"><style></style>
<meta class="foundation-mq-topbar"></head>
<body class="fontbody" style="background-image : url(img/background.jpg); position: center fixed; background-size: cover;">



<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.html">SR COTTAGE</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="#facility">Facilities</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#gallery">Gallery</a></li>
              <li><a href="#events">Events</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="#contact">Contact Us</a></li>

            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->
  <div class="row foo" style="margin:30px auto 30px auto;"><br><br>
  <div class="row">
	<div class="large-6 columns blackblur fontcolor" style="padding-top:10px;">
	
	<div class="large-12 columns " >
	<p><b>Check Date</b></p><hr class="line">
			<form name="form" action="checkroom.php" method="post" onSubmit="return validateForm(this);">
			<div class="row">
				
					<div class="large-6 columns" style="max-width:100%;">
						<label class="fontcolor" for="checkin">Check In
							<input name="checkin" id="checkin" style="width:100%;"/>
						</label>
					</div>
					
					<div class="large-6 columns" style="max-width:100%;">
						<label class="fontcolor" for="checkout">Check Out
							<input name="checkout" id="checkout" style="width:100%;"/>
						</label>
					
					
					</div>
			</div>
					
			<div class="row">
				
					<div class="large-6 columns">
						<label class="fontcolor">Adults
							
								<select  name="totaladults" id="totaladults" style="width:100%;">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								</select>
							
						</label>
					</div>
					
					<div class="large-6 columns"  style="max-width:100%;">
						<label class="fontcolor">Children
							<select  name="totalchildrens" id="totalchildrens" style="width:100%; color:black;">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							</select>
						</label>
					</div>
					
				
			</div>
			
			  <div class="row">
				<div class="large-12 columns" >
					<button name="submit" href="#" class="button small fontslabo" style="background-color:#2ecc71; width:100%;" >Check Availability</button>
				</div>
			  </div>
			</form>
	</div>
	</div>
</div>
</div>

<script>
	function validateForm(form) {
		var a = form.checkin.value;
		var b = form.checkout.value;
		var c = form.totaladults.value;
		var d = form.totalchildrens.value;
			if(a == null || b == null || a == "" || b == "") 
			{
			 alert("Please choose date");
			 return false;
			}
			if(c == 0) 
			{
			 	if(d == 0) 
				{
				 alert("Please choose no. of guest");
				 return false;
				}
			}
			if(d == 0) 
			{
			 	if(c == 0) 
				{
				 alert("Please choose no. of guest");
				 return false;
				}
			}

	}
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57205452-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>