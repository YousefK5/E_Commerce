<?php
require_once "connection.php";



if (isset($_POST['login'])) {
	$password = $_POST['password'];
	$email = $_POST['email'];
	$stmt = $connect->query("SELECT * FROM users WHERE email ='$email' and password='$password' ");

	$user = $stmt->fetchAll();
	// print_r($user);
	// header("Location: welcome.php");

	if (!empty($user)) {
		header("Location: index.php");
	}
} else echo "<script>alert('It looks like you’re connected try login. Please ');</script>";




?>


<?php require 'header.php'; ?>




<div class="heading-container">
	<div class="container heading-standar">
		<div class="page-breadcrumb">
			<ul class="breadcrumb">
				<li><span><a href="#" class="home"><span>Home</span></a></span></li>
				<li><span>login</span></li>
			</ul>
		</div>
	</div>
</div>
<div class="content-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 main-wrap">
				<div class="main-content">
					<div class="shop">
						<h2 class="shop-account-heading">Login</h2>

						<form class="login" method="post" action="login.php">
							<p class="form-row form-row-wide">
								<label>Email address <span class="required">*</span></label>
								<input type="text" class="input-text" name="email" value="" />
							</p>
							<p class="form-row form-row-wide">
								<label>Password <span class="required">*</span></label>
								<input class="input-text" type="password" name="password" />
							</p>
							<p class="form-row">

								<input type="submit" class="button" name="login" value="Login" />
							</p>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require 'footer.php'; ?>
<script>
	document.body.classList.add("shop-account")
</script>