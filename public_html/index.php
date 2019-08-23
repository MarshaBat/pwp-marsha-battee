<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script
		src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous"></script>

	<!-- jQuery Form, Additional Methods, Validate -->
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

	<!-- JavaScript Form Validator -->
	<script src="js/form-validate.js"></script>

	<!-- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- My Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

	<title>Working Title for PWP</title>
</head>

<!-----------------------------------------------------SECTION 1 - NAVBAR---------------------------------------------->
<body>
<section id="home">
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-dark m-2">
			<a class="navbar-brand" href="#">
				<img src="documentation/images/logoVisionCreative.png" width="150" alt="logo">
			</a>
			<button class="navbar-toggler border" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link text-white px-3" href="#home">Home</a></li>
					<li class="nav-item"><a class="nav-link text-white px-3" href="#about">About</a></li>
					<li class="nav-item"><a class="nav-link text-white px-3" href="#services">Our Services</a></li>
					<li class="nav-item"><a class="nav-link text-white px-3" href="#process">Our Process</a></li>
					<li class="nav-item"><a class="nav-link text-white px-3" href="#portfolio">Portfolio</a></li>
					<li class="nav-item"><a class="nav-link text-white px-3" href="#contact">Contact</a></li>
				</ul>
			</div>
		</nav>
	</div>
</section>

<!--<nav class="navbar navbar-expand-lg bg-transparent navbar-dark fixed-top scrolling-navbar m-2 bg-white">
	<a class="navbar-brand" href="#">
		<img src="documentation/images/ribbon.png" width="50" height="50" alt="logo">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>-->

<!--			<div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--				<ul class="navbar-nav ml-auto">-->
<!--					<li class="nav-item active">-->
<!--						<a class="nav-link text-white" href="#aboutMe">About Me <span class="sr-only">(current)</span></a>-->
<!--					</li>-->
<!--					<li class="nav-item">-->
<!--						<a class="nav-link text-white" href="#skills">Skills</a>-->
<!--					</li>-->
<!--					<li class="nav-item">-->
<!--						<a class="nav-link text-white" href="#portfolio">Portfolio</a>-->
<!--					</li>-->
<!--					<li class="nav-item">-->
<!--						<a class="nav-link text-white" href="#contactWrapper">Contact Me</a>-->
<!--					</li>-->
<!--				</ul>-->
<!--			</div>-->
<!-----------------------------------------SECTION 2 - HOME LANDING PAGE----------------------------------------------->
<section>
	<div class="jumbotron jumbotron-fluid img-fluid clear-fix">
		<div class="banner-overlay"></div>
		<div class="banner-overlay2"></div>
		<div class="container my-5">
			<div class="row banner-text">
				<div class="col-md-6 banner-title">
					<h1 class="animated zoomIn">We give you an online presence that helps you better care for <span>survivors.</span>
					</h1>
				</div>
			</div>
			<div>
<!--				<a href='#'>-->
<!--					<button class="banner-button animated zoomIn">LEARN HOW</button>-->
<!--				</a>-->
			</div>
		</div>
	</div>
</section>
<!------------------------------------------------SECTION 2 - ABOUT---------------------------------------------------->
<section id="about">
	<div class="about-background">
		<div class="container mb-3">
			<div class="row">
				<div class="col-sm-12 text-center mt-5 about-stat-panel">
					<div>
						<img class="img-fluid" src="documentation/images/webvector.png" alt="website images" width="300px">
					</div>
				</div>

				<div class="col-sm-12 text-center about-paragraph-panel">
					<div>
						<p class="mt-3">Vision Creative is a full-service creative firm. We design, develop and maintain
							mobile-first, responsive websites to help survivor support agencies reach out and engage with their
							clients during their reporting and healing process. </p>
						<img src="documentation/images/paint.png" class="pb-3" width="200">
						<p>When you work with us, you will be working with a team of professionals dedicated to building bold,
							innovative technology solutions to help you realize your mission and reach your organizational
							goals.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!------------------------------------------------SECTION 3 - OUR SERVICES--------------------------------------------->
<section>
	<div class="services-section my-5">
		<div class="color-overlay">
			<div class="container-fluid">
				<div>
					<div class="services">
						<h3 class="services-section-header">We serve you so that you may serve your clients</h3>
						<p class="services-section-para pt-3">We offer a number of services to ensure your message is seen by
							those who need you most. We're a full service firm ready to collaborate with your team and provide
							a product that suites you and your needs.</p>
					</div>
				</div>


				<!--<div>
					<div class="row services-section-boxes1">
						<div>
							<div class="col-lg services-block-1"></div>
							<h4 class="block-background">Company Branding and Logo Design</h4>
						</div>
						<div>
							<div class="col-lg services-block-2"></div>
							<h4 class="block-background">Web Hosting and Maintenance</h4>
						</div>
					</div>

					<div class="row services-section-boxes2">
						<div>
							<div class="col-lg services-block-3"></div>
							<h4 class="block-background">Web Design and Development</h4>
						</div>
						<div>
							<div class="col-lg services-block-4"></div>
							<h4 class="block-background">Research and Content Strategy</h4>
						</div>
					</div>
				</div>-->


			</div>
		</div>
	</div>
</section>

<!------------------------------------------------SECTION 4 - OUR PROCESS--------------------------------------->
<section id="process" class="bg-transparent our-process">
	<div class="container my-5 py-5">
		<div class="h2">
			<h2 class="process-header-text">Our Process</h2>
		</div>
		<div class="row text-center">
			<div class="col-lg-4 mt-5">
				<img src="documentation/images/discovery-vector-pwp.png" alt="" width="100px" class="mb-3">
				<h5>
					DISCOVERY
				</h5>
				<p class="process-text">Let's collaborate. Our onboarding shows you how we'll bring your ideas to life by
					examining
					solutions that match your needs.</p>
			</div>
			<div class="col-lg-4 mt-5">
				<img src="documentation/images/research-plan-vector-pwp.png" alt="" width="100px" class="mb-3">
				<h5>
					RESEARCH & PLAN
				</h5>
				<p class="process-text">Let's prepare. Here is where we'll focus on the specific goals for your project. We
					learn your why
					and focus on the clients and stakeholders you serve. </p>
			</div>
			<div class="col-lg-4 mt-5">
				<img src="documentation/images/design-vector-pwp.png" alt="" width="100px" class="mb-3">
				<h5>
					WEBSITE DESIGN
				</h5>
				<p class="process-text">Let's get creative. We work closely with you and your team to gain insight on your
					branding and
					design preferences.</p>
			</div>
			<div class="col-lg-4 mt-5">
				<img src="documentation/images/develop-vector-pwp.png" alt="" width="100px" class="mb-3">
				<h5>
					WEBSITE DEVELOPMENT
				</h5>
				<p class="process-text">Let's build. We'll bring your project to life, producing a website you can be proud
					of and better
					engage survivors who need you most.</p>
			</div>
			<div class="col-lg-4 mt-5">
				<img src="documentation/images/go-live-vector-pwp.png" alt="" width="100px" class="mb-3">
				<h5>
					GO LIVE!
				</h5>
				<p class="process-text">Let's launch. Your website goes live. Celebrations are in order. We'll give you
					strategy on getting
					the word out about your new looks.</p>
			</div>
			<div class="col-lg-4 mt-5">
				<img src="documentation/images/maintenance-vector-pwp.png" alt="" width="100px" class="mb-3">
				<h5>
					MAINTENANCE & UPDATES
				</h5>
				<p class="process-text">Let's keep you current. We offer website hosting plans that includes frequent
					maintenace, updates
					and development time.</p>
			</div>
		</div>
	</div>
</section>
<!------------------------------------------------SECTION 5 - PORTFOLIO------------------------------------------------>
<section class="portfolio-background">
	<div class="container pb-5 pt-3">
		<div class="my-3">

			<div class="pb-5">
				<h2 class="portfolio-header-text">Portfolio</h2>
			</div>

			<div class="row ml-4">
				<div class="col-md-4">
					<div class="flip-card mb-5">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="https://placekitten.com/300/300" alt="Avatar">
							</div>
							<div class="flip-card-back">
								<h1>Project #1</h1>
								<p>//Signs on 66//</p>
								<p>More Sample Text</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="flip-card mb-5">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="https://placekitten.com/300/300" alt="Avatar">
							</div>
							<div class="flip-card-back">
								<h1>Project #2</h1>
								<p>//Wireframes//</p>
								<p>More Sample Text</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="flip-card mb-5">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="https://placekitten.com/300/300" alt="Avatar">
							</div>
							<div class="flip-card-back">
								<h1>Project #3</h1>
								<p>//3rd Project//</p>
								<p>More Sample Text</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!------------------------------------------------SECTION 6 - CONTACT FORM--------------------------------------------->
<section id="contact" class="footer">
	<div class="banner-overlay3"></div>
	<div class="banner-overlay4"></div>
	<div class="container py-5">

		<h2 class="h1-responsive contact-us-header font-weight-bold text-center my-4">Contact Us</h2>
		<p class="text-center w-responsive mx-auto mb-5">Ready to get started on your website design? Let's us know,
			and we'll get back to you within 24 hours to discuss your project.</p>

		<div class="row">
			<div class="col-md-9 mb-md-0 mb-5">

				<form id="contact-form" name="contact-form" action="../php/" method="POST">
					<div class="row">
						<div class="col-md-6">
							<div class="md-form mb-0">
								<input type="text" id="name" name="name" class="form-control bg-transparent">
								<label for="name" class="">Your name</label>
							</div>
						</div>

						<div class="col-md-6">
							<div class="md-form mb-0">
								<input type="text" id="email" name="email" class="form-control bg-transparent">
								<label for="email" class="">Your email</label>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="md-form mb-0">
								<input type="text" id="subject" name="subject" class="form-control bg-transparent">
								<label for="subject" class="">Subject</label>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="md-form">
									<textarea type="text" id="message" name="message" rows="2"
												 class="form-control md-textarea bg-transparent"></textarea>
								<label for="message">Your message</label>
							</div>
						</div>
					</div>

					<!-- reCAPTCHA -->
					<div class="g-recaptcha mt-4 block" data-sitekey="6LfB6LIUAAAAAKOe9Op74f-HywjO0D-vWUgHkQRa"></div>

					<div class="text-center text-md-left mt-4 block">
						<button type="submit" class="btn btn-info contact-button">SUBMIT</button>
					</div>
					<div class="status"></div>
				</form>

				<div id="output-area"></div>


			</div>

			<div class="col-md-3 text-center">
				<ul class="list-unstyled mb-0">
					<li>
						<p>Albuquerque, NM 87111, USA</p>
					</li>
					<li>
						<p>000-000-0000</p>
					</li>
					<li>
						<p>contact@marshabattee.com</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		  crossorigin="anonymous"></script>


</body>
</html>

