<?php 
  $page = 'home';
  $title = 'PMK Network';
  include 'meta.php';
  // include 'header.php';
?>

<body data-spy="scroll" data-target="#navbar">


<!-- main_wrapper -->
<div class="main_wrapper">
	<!-- section 1 -->
	<div class="section section1" id="home">

		<?php include 'header.php'; ?>


		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active slide1">
		      <div class="overlay"></div>
		      <div class="typewriter_wrapper">
			      <div class="typewriter">
					  <h1>PROFESSIONAL</h1>
				  </div>
			  </div>
		    </div>
		    <div class="carousel-item slide1">
		    	<div class="overlay"></div>
		      <div class="typewriter_wrapper">
			      <div class="typewriter">
					  <h1>EXPERIENCED</h1>
				  </div>
			  </div>
		    </div>
		    <div class="carousel-item slide1">
		    	<div class="overlay"></div>
		      <div class="typewriter_wrapper">
			      <div class="typewriter">
					  <h1>INSPIRATION</h1>
				  </div>
			  </div>
		    </div>
		  </div>
		</div>


	</div>
	<!-- end section 1 -->



	<!-- section 2 -->
	<div class="section section2" id="about">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 content_image">
					<div class="white_overlay"></div>
				</div>
				<div class="col-lg-6 aboutus_wrapper">
					<h1>GET TO KNOW US</h1>

					<div class="aboutus_content">

						<div class="row">
							<div class="col-lg-6 aboutus_box">
								<h3 class="header_grey"><span class="number">01.</span>Some text here</h3>
								<p class="text_grey">Lorem Ipsum is simply text the 
								printing and typesetting standard 
								industry. Lorem Ipsum has been 
								the industry's standard dummy text.</p>
							</div>
							<div class="col-lg-6 aboutus_box">
								<h3 class="header_grey"><span class="number">02.</span>Some text here</h3>
								<p class="text_grey">Lorem Ipsum is simply text the 
								printing and typesetting standard 
								industry. Lorem Ipsum has been 
								the industry's standard dummy text.</p>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 aboutus_box">
								<h3 class="header_grey"><span class="number">03.</span>Some text here</h3>
								<p class="text_grey">Lorem Ipsum is simply text the 
								printing and typesetting standard 
								industry. Lorem Ipsum has been 
								the industry's standard dummy text.</p>
							</div>
							<div class="col-lg-6 aboutus_box">
								<h3 class="header_grey"><span class="number">04.</span>Some text here</h3>
								<p class="text_grey">Lorem Ipsum is simply text the 
								printing and typesetting standard 
								industry. Lorem Ipsum has been 
								the industry's standard dummy text.</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- aboutus_bottom_bar -->
		<div class="aboutus_bottom_bar">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-6  icon_box">
						<div class="icon">
							<i class="fas fa-brain"></i>
						</div>
						<p class="number">60</p>
						<h2>Experienced stuff</h2>
					</div>
					<div class="col-lg-3 col-6  icon_box">
						<div class="icon">
							<i class="fas fa-cogs"></i>
						</div>
						<p class="number">10</p>
						<h2>Services</h2>
					</div>
					<div class="col-lg-3 col-6  icon_box">
						<div class="icon">
							<i class="fas fa-archive"></i>
						</div>
						<p class="number">30</p>
						<h2>Projects done</h2>
					</div>
					<div class="col-lg-3 col-6  icon_box">
						<div class="icon">
							<i class="fas fa-rocket"></i>
						</div>
						<p class="number">5</p>
						<h2>Ongoing projects</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- end aboutus_bottom_bar -->
	</div>
	<!-- end section 2 -->


	<!-- section3 -->
	<div class="section section3" id="service">
		<div class="container">
			<div class="service_wrapper">
				<h1 class="header_grey">SERVICES</h1>
				<p class="text_grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<div class="slider_wrapper">
				<!-- Set up your HTML -->
				<div class="owl-carousel owl-theme">
					<!-- card 1 -->
					<div>
					  	<div class="card">
						  <img class="card-img-top" src="images/services/service1.jpg" alt="service 1">
						  <div class="card-body">
						  	<h3 class="text_grey">Service 1 Text Here</h3>
						    <p class="card-text text_grey">Lorem ipsum dolor sit amet, 
		consectetur adipiscing elit, sed
		do eiusmod tempor incididunt
		ut labore et dolore magna
		aliqua. </p>
						  </div>
						</div>
					</div>
					<!-- end card 1 -->

					<!-- card 2 -->
					<div>
					  	<div class="card">
						  <img class="card-img-top" src="images/services/service1.jpg" alt="service 2">
						  <div class="card-body">
						  	<h3 class="text_grey">Service 2 Text Here</h3>
						    <p class="card-text text_grey">Lorem ipsum dolor sit amet, 
		consectetur adipiscing elit, sed
		do eiusmod tempor incididunt
		ut labore et dolore magna
		aliqua. </p>
						  </div>
						</div>
					</div>
					<!-- end card 2 -->

					<!-- card 3 -->
					<div>
					  	<div class="card">
						  <img class="card-img-top" src="images/services/service1.jpg" alt="service 3">
						  <div class="card-body">
						  	<h3 class="text_grey">Service 3 Text Here</h3>
						    <p class="card-text text_grey">Lorem ipsum dolor sit amet, 
		consectetur adipiscing elit, sed
		do eiusmod tempor incididunt
		ut labore et dolore magna
		aliqua. </p>
						  </div>
						</div>
					</div>
					<!-- end card 3 -->


					<!-- card 4 -->
					<div>
					  	<div class="card">
						  <img class="card-img-top" src="images/services/service1.jpg" alt="service 4">
						  <div class="card-body">
						  	<h3 class="text_grey">Service 4 Text Here</h3>
						    <p class="card-text text_grey">Lorem ipsum dolor sit amet, 
		consectetur adipiscing elit, sed
		do eiusmod tempor incididunt
		ut labore et dolore magna
		aliqua. </p>
						  </div>
						</div>
					</div>
					<!-- end card 4 -->



					<!-- card 5 -->
					<div>
					  	<div class="card">
						  <img class="card-img-top" src="images/services/service1.jpg" alt="service 5">
						  <div class="card-body">
						  	<h3 class="text_grey">Service 5 Text Here</h3>
						    <p class="card-text text_grey">Lorem ipsum dolor sit amet, 
		consectetur adipiscing elit, sed
		do eiusmod tempor incididunt
		ut labore et dolore magna
		aliqua. </p>
						  </div>
						</div>
					</div>
					<!-- end card 5 -->



					<!-- card 6 -->
					<div>
					  	<div class="card">
						  <img class="card-img-top" src="images/services/service1.jpg" alt="service 6">
						  <div class="card-body">
						  	<h3 class="text_grey">Service 6 Text Here</h3>
						    <p class="card-text text_grey">Lorem ipsum dolor sit amet, 
		consectetur adipiscing elit, sed
		do eiusmod tempor incididunt
		ut labore et dolore magna
		aliqua. </p>
						  </div>
						</div>
					</div>
					<!-- end card 6 -->



					<!-- card 7 -->
					<div>
					  	<div class="card">
						  <img class="card-img-top" src="images/services/service1.jpg" alt="service 7">
						  <div class="card-body">
						  	<h3 class="text_grey">Service 7 Text Here</h3>
						    <p class="card-text text_grey">Lorem ipsum dolor sit amet, 
		consectetur adipiscing elit, sed
		do eiusmod tempor incididunt
		ut labore et dolore magna
		aliqua. </p>
						  </div>
						</div>
					</div>
					<!-- end card 7 -->

				  
				</div>
			</div>
		</div>
	</div>
	<!-- end section3 -->


	<!-- section4 -->
	<div class="section section4" id="contact">
		<div class="container">
			<div class="contact_wrapper">
				<h1 class="header_white">CONTACT US</h1>
				<p class="text_white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
			</div>

			<div class="contact_detail">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 contact_box1">
							<h1 class="header_white">TALK TO US</h1>
							<h3 class="header_white">PMK Network</h3>
							<address class="text_white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed do 
eiusmod tempor incididunt ut labore et dolore magna aliqua.</address>

							<p class="text_white">
								<i class="fas fa-phone"></i>
								<a href="tel:+48-XXX-XXXX">+48-XXX-XXXX</a>
							</p>

							<p class="text_white">
								<i class="fas fa-envelope"></i>
								<a href="mailto:abc@abc.com">abc@abc.com</a>
							</p>
						</div>
						<div class="col-lg-6 contact_box2">
							<h1 class="header_white">GET IN TOUCH</h1>

							<form>
								<input type="text" name="name" placeholder="name">
								<input type="tel" name="phone" placeholder="Phone number">
								<input type="email" name="email" placeholder="Email">
								<textarea rows="4" cols="50" placeholder="Message"></textarea>

								<div class="captcha">
									<div class="g-recaptcha" data-sitekey="6LeQFkIUAAAAAIXZlEPnxuC65laVDcNlW4lFHdsr"></div>
								</div>

								<button>Send</button>
							</form>
						</div>
					</div>
				</div>
			</div>


			<p class="copyright text_white">PMK Network <i class="far fa-copyright"></i> 2018 all rights reserved</p>
		</div>
	</div>
	<!-- end section4 -->







</div>
<!-- end main_wrapper -->
  


<?php 
  include 'footer.php';
?>