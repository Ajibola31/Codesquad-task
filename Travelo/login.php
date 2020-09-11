<div class="cont" style='background-color:grey;'>
<?php include "includes/db.php"; ?>
<?php ob_start();
	session_start();
?>

<?php include "includes/header.php"?>

	

	<?php
		if(isset($_POST["login"])){
			$email = $_POST["email"];
			$password = $_POST["password"];
			$check = "SELECT * FROM signup WHERE email = '$email' AND password = '$password' ";
			$check_query = mysqli_query($connection,$check);
			$rows = mysqli_num_rows($check_query);
			if($rows == 0){
				echo "Incorrect details";
			}else{
				while($details = mysqli_fetch_assoc($check_query)){
					$d_email = $details["email"];
					$d_firstname = $details["firstname"];
					$d_lastname = $details["lastname"];
					$d_phone = $details["phone"];
				}
					$_SESSION["email"] = $d_email;
					$_SESSION["firstname"] = $d_firstname;
					$_SESSION["lastname"] = $d_lastname;
					$_SESSION["phone"] = $d_phone;
				header("Location: user/");
			}
		}
	
	?>

	<!-- Login Form -->
	<div class="container ">
		<div class="row">
			<div class="col-6 offset-3 login"  style="border-radius:2rem; padding:1rem;">
				<form action="" method="post">
					<h3 class="home-search-title text-center" style="color: black;">Log in with</h3>
					<div class="form-group">
						<label style="color: black;" for="" name= "email"><h6>Enter Email</h6></label>
						<input name="email" class="form-control" type="text" placeholder="Enter your Email">
					</div>
					<div class="form-group">
						<label for="" style="color: black;" name="password"><h6>Enter Password</h6></label>
						<input name="password" class="form-control" type="password" placeholder="Enter your password">
					</div>
					<div class="form-group text-center">
						<input name="login" class="btn btn-md bg-primary text-white" type="submit" value="LOGIN">
					</div>
					<p style="color: black;">Not a member? <a href="signup.php" style="color: blue;" name="signup">Sign up now</a></p>
				</form>
			</div>
		</div>
	</div>
	
	</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>