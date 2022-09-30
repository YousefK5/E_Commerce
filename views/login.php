<?php 
require_once "connection.php";



if (isset($_POST['login'])) {
  $password=$_POST['password'];
  $email=$_POST['email'];
  $stmt = $connect->query("SELECT * FROM users WHERE email ='$email' and password='$password' ");

  $user = $stmt->fetchAll();
  // print_r($user);
  // header("Location: welcome.php");

    if(!empty($user))
    {
        header("Location: index.php");
    }


} else echo "<script>alert('It looks like you’re connected try login. Please ');</script>";




?>


<?php require 'header.php'; ?>




<div class="heading-container">
				<!-- <div class="container heading-standar">
					<div class="page-breadcrumb">
						<ul class="breadcrumb">
							<li><span><a href="#" class="home"><span>Home</span></a></span></li>
							<li><span>My Account</span></li>
						</ul>
					</div>
				</div> -->
			</div>
			<div class="content-container">
				<div class="container">
					<div class="row">
						<div class="col-md-12 main-wrap">
							<div class="main-content">
								<div class="shop">
									<h2 class="shop-account-heading">Login</h2>
									<div class="user-login-facebook">
										<button class="btn-login-facebook" type="button">
											<i class="fa fa-facebook"></i>Sign in with Facebook
										</button>
									</div>
									<div class="user-login-or"><span>or</span></div>
									<form class="login">
										<p class="form-row form-row-wide">
											<label>Username or email address <span class="required">*</span></label>
											<input type="text" class="input-text" name="username" value=""/>
										</p>
										<p class="form-row form-row-wide">
											<label>Password <span class="required">*</span></label>
											<input class="input-text" type="password" name="password"/>
										</p>
										<p class="form-row">
											<label class="inline form-flat-checkbox">
												<input name="rememberme" type="checkbox" value="forever"/><i></i>Remember me 
											</label>
											<br><br>
											<input type="submit" class="button" name="login" value="Login"/>
										</p>
										<p class="lost_password">
											<a href="#">Lost your password?</a>
										</p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-widget">
				<div class="container">
					<div class="footer-widget-wrap">
						<div class="row">
							<div class="footer-widget-col col-md-2 col-sm-6">
								<div class="widget widget_nav_menu">
									<h3 class="widget-title"><span>Infomation</span></h3>
									<ul class="menu">
										<li><a href="#">About Us</a></li>
										<li><a href="#">Work Here</a></li>
										<li><a href="#">Careers</a></li>
										<li><a href="#">Dealer Locator</a></li>
										<li><a href="#">Happenings</a></li>
									</ul>
								</div>
							</div>
							<div class="footer-widget-col col-md-2 col-sm-6">
								<div class="widget widget_nav_menu">
									<h3 class="widget-title"><span>Customer Care</span></h3>
									<ul class="menu">
										<li><a href="#">Support</a></li>
										<li><a href="#">FAQ</a></li>
										<li><a href="#">Repair Center</a></li>
										<li><a href="#">Contact us</a></li>
									</ul>
								</div>
							</div>
							<div class="footer-widget-col col-md-2 col-sm-6">
								<div class="widget widget_nav_menu">
									<h3 class="widget-title"><span>Quick Link</span></h3>
									<ul class="menu">
										<li><a href="#">Order Status</a></li>
										<li><a href="#">Shipping Policy</a></li>
										<li><a href="#">Return Policy</a></li>
										<li><a href="#">Digital Gift Card</a></li>
									</ul>
								</div>
							</div>
							<div class="footer-widget-col col-md-2 col-sm-6">
								<div class="widget widget_nav_menu">
									<h3 class="widget-title"><span>Help</span></h3>
									<ul class="menu">
										<li><a href="#">Privacy</a></li>
										<li><a href="#">Terms and Conditions</a></li>
										<li><a href="#">Social Responsibility</a></li>
									</ul>
								</div>
							</div>
							<div class="footer-widget-col col-md-4 col-sm-6">
								<div class="widget widget_text">
									<h3 class="widget-title"><span>The Store</span></h3>
									<div class="textwidget">
										<p><i class="fa fa-map-marker"></i> No 68/12, Tower Street,New York, USA</p>
										<p><i class="fa fa-phone"></i> (012) 1234 7824</p>
										<p><i class="fa fa-envelope"></i> <a href="mailto:email@domain.com">email@domain.com</a></p>
										<p class="payment"><img src="images/footer-payment-color.png" alt=""></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>








<script>document.body.classList.add("shop-account")</script>
            <?php require 'footer.php'; ?>