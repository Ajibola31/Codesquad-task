<?php include "includes/db.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>News</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/news.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	
	<?php include "includes/header.php"?>

	<!-- Menu -->

	
	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/news.jpg)"></div>
	</div>

		<div class="home_search">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="home_search_container"  style="top:-40rem;">
							<div class="home_search_title">Sign Up Form</div>


							<?php
							if(isset($_POST['submit'])){
								$firstname = $_POST['firstname'];
								$lastname = $_POST['lastname'];
								$email = $_POST['email'];
								$phone = $_POST['phone'];
								$password = $_POST['password'];
								$con_password = $_POST['con-password'];

								$query = "INSERT INTO signup (firstname, lastname, email, phone, password ) VALUES('$firstname','$lastname','$email','$phone','$password')";
								$result= mysqli_query($connection, $query);

								if($result){
									echo "Successful";
								}
								else{
									die('querry failed');
								}

							}
							
							
							
							
							?>




							
							<div class="home_search_content">
								<form class="jumbotron" action="" method="post" onsubmit="confirm();">
									<div class="row">
									<div class="col-6">
										<div class="form-group">
										<div><label for="signup">First Name</label></div>
											<input class="form-control" name="firstname" type="text">
										</div>
										<div class="form-group">
										<div><label for="signup">Last Name</label></div>
											<input class="form-control" name="lastname" type="text">
										</div>
										<div class="form-group">
										<div><label for="signup">Email Address</label></div>
											<input class="form-control" name="email" type="email">
										</div>
									</div>
									
									<div class="col-6">
										<div class="form-group">
										<div><label for="signup">Phone</label></div>
											<input class="form-control" name="phone" type="text">
										</div>
										<div class="form-group">
										<div><label for="signup">Password</label></div>
											<input id="p1" class="form-control" name="password" type="password">
										</div>
										<div class="form-group">
										<div><label for="signup">Confirm Password</label></div>
											<input id="p2" class="form-control" name="con-password" type="password">
										</div>
									</div>
									</div>
									<div class="form-group">
										<input class="form-control bg-primary text-white" type="submit" name="submit" value="Submit">
									</div>
									
								</form> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Container -->
				<div class="col-lg-8">
					<div class="news_container">
						
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="images/news_4.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>02</div>
									<div>june</div>
								</div>
								<div class="news_post_title"><a href="#">Best tips to travel light</a></div>
								<div class="news_post_category">
									<ul>
										<li><a href="#">lifestyle & travel</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet.</p>
								</div>
								<div class="news_post_link"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="images/news_5.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>02</div>
									<div>june</div>
								</div>
								<div class="news_post_title"><a href="#">10 Amazing Destination for you this summer</a></div>
								<div class="news_post_category">
									<ul>
										<li><a href="#">lifestyle & travel</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet.</p>
								</div>
								<div class="news_post_link"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="images/news_6.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>02</div>
									<div>june</div>
								</div>
								<div class="news_post_title"><a href="#">How to organize your perfect vacation</a></div>
								<div class="news_post_category">
									<ul>
										<li><a href="#">lifestyle & travel</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet.</p>
								</div>
								<div class="news_post_link"><a href="#">Read More</a></div>
							</div>
						</div>

					</div>

					<!-- Pagination -->
					<div class="pagination">
						<ul class="d-flex flex-row align-items-start justify-content-start">
							<li class="active"><a href="#">1.</a></li>
							<li><a href="#">2.</a></li>
							<li><a href="#">3.</a></li>
							<li><a href="#">4.</a></li>
							<li><a href="#">5.</a></li>
						</ul>
					</div>
				</div>

				<!-- News Sidebar -->
				<div class="col-lg-4">
					<div class="news_sidebar">

						<!-- Categories -->
						<div class="categories">
							<div class="sidebar_title">Categories</div>
							<div class="sidebar_list">
								<ul>
									<li><a href="#"><div class="d-flex flex-row align-items-start justify-content-start">Travels<span class="ml-auto">(09)</span></div></a></li>
									<li><a href="#"><div class="d-flex flex-row align-items-start justify-content-start">Organization<span class="ml-auto">(12)</span></div></a></li>
									<li><a href="#"><div class="d-flex flex-row align-items-start justify-content-start">Tips & Tricks<span class="ml-auto">(16)</span></div></a></li>
									<li><a href="#"><div class="d-flex flex-row align-items-start justify-content-start">Uncategorized<span class="ml-auto">(22)</span></div></a></li>
								</ul>
							</div>
						</div>

						<!-- Latest News -->
						<div class="latest">
							<div class="sidebar_title">Latest News</div>
							<div class="latest_container">
								
								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div class="latest_post_image"><img src="images/latest_1.jpg" alt=""></div>
									<div class="latest_post_content">
										<div class="latest_post_date d-flex flex-row align-items-end justify-content-start">
											<div class="latest_post_day">02</div>
											<div class="latest_post_month">june</div>
										</div>
										<div class="latest_post_title"><a href="#">Best tips to travel light</a></div>
										<div class="latest_post_text"><p>Pellentesque sit amet..</p></div>
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div class="latest_post_image"><img src="images/latest_2.jpg" alt=""></div>
									<div class="latest_post_content">
										<div class="latest_post_date d-flex flex-row align-items-end justify-content-start">
											<div class="latest_post_day">02</div>
											<div class="latest_post_month">june</div>
										</div>
										<div class="latest_post_title"><a href="#">Best tips to travel light</a></div>
										<div class="latest_post_text"><p>Pellentesque sit amet..</p></div>
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div class="latest_post_image"><img src="images/latest_3.jpg" alt=""></div>
									<div class="latest_post_content">
										<div class="latest_post_date d-flex flex-row align-items-end justify-content-start">
											<div class="latest_post_day">02</div>
											<div class="latest_post_month">june</div>
										</div>
										<div class="latest_post_title"><a href="#">Best tips to travel light</a></div>
										<div class="latest_post_text"><p>Pellentesque sit amet..</p></div>
									</div>
								</div>

							</div>
						</div>

						<div class="travello">
							<div class="background_image" style="background-image:url(images/travello.jpg)"></div>
							<div class="travello_content">
								<div class="travello_content_inner">
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="travello_container">
								<a href="#">
									<div class="d-flex flex-column align-items-center justify-content-end">
										<span class="travello_title">Get a 20% Discount</span>
										<span class="travello_subtitle">Buy Your Vacation Online Now</span>
									</div>
								</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer_1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter">
						<div class="newsletter_title_container text-center">
							<div class="newsletter_title">Subscribe to our newsletter to get the latest trends & news</div>
							<div class="newsletter_subtitle">Join our database NOW!</div>
						</div>
						<div class="newsletter_form_container">
							<form action="#" class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between" id="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
									<div><input type="text" class="newsletter_input newsletter_input_name" id="newsletter_input_name" placeholder="Name" required="required"><div class="input_border"></div></div>
									<div><input type="email" class="newsletter_input newsletter_input_email" id="newsletter_input_email" placeholder="Your e-mail" required="required"><div class="input_border"></div></div>
								</div>
								<div><button class="newsletter_button">subscribe</button></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_contact_row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/sign.svg" alt=""></div>
								<div class="footer_contact_title">give us a call</div>
								<div class="footer_contact_list">
									<ul>
										<li>Office Landline: +44 5567 32 664 567</li>
										<li>Mobile: +44 5567 89 3322 332</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/trekking.svg" alt=""></div>
								<div class="footer_contact_title">come & drop by</div>
								<div class="footer_contact_list">
									<ul style="max-width:190px">
										<li>4124 Barnes Street, Sanford, FL 32771</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/around.svg" alt=""></div>
								<div class="footer_contact_title">send us a message</div>
								<div class="footer_contact_list">
									<ul>
										<li>youremail@gmail.com</li>
										<li>Office@yourbusinessname.com</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="col text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/news.js"></script>
<script>
	function confirm(){
	let password1 = document.getElementById("p1").value;
	let password2 = document.getElementById("p2").value;
	if(password1 != password2){
		event.preventDefault();
		alert("Password fields do not match");
	}
	}
</script>
</body>
</html>