<?php require '../connection.php'; ?>
<!doctype html>
<html lang="en-US">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Shop Detail | HTML Template</title>
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel='stylesheet' href='../../css/settings.css' type='text/css' media='all' />
	<link rel='stylesheet' href='../../css/swatches-and-photos.css' type='text/css' media='all' />
	<link rel='stylesheet' href='../../css/font-awesome.min.css' type='text/css' media='all' />
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;' type='text/css' media='all' />
	<link rel='stylesheet' href='../../css/elegant-icon.css' type='text/css' media='all' />
	<link rel='stylesheet' href='../../css/style.css' type='text/css' media='all' />
	<link rel='stylesheet' href='../../css/shop.css' type='text/css' media='all' />
	<link rel='stylesheet' href='../../css/magnific-popup.css' type='text/css' media='all' />
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body class="shop">
	<div class="offcanvas open">
		<div class="offcanvas-wrap">
		<div class="offcanvas-user clearfix">
			<?php if (isset($_SESSION['userid'])) { ?> 
											<a href='./profile/My-profile.php'><?php echo $user['first_name'] .
               ' ' .
               $user['last_name'];} else { ?></a>
											<a data-rel="loginModal" href="#"><i class="fa fa-user"></i> Login</a>
											<?php } ?>
			</div>
			<nav class="offcanvas-navbar">
				<ul class="offcanvas-nav">
					<li class="menu-item-has-children dropdown">
						<a href="./index.php" class="dropdown-hover">Home <span class="caret"></span></a>
					</li>
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-hover">Pages <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="about-us.php">About us</a></li>
							<li><a href="contact-us.php">Contact Us</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div id="wrapper" class="wide-wrap">
		<div class="offcanvas-overlay"></div>
		<header class="header-type-classic">
			<div class="topbar">
				<div class="container topbar-wap">
					<div class="row">
						<div class="col-sm-6">
						</div>
						<div class="col-sm-6">
						<div class="right-topbar">
								<?php if (isset($_SESSION['userid'])) { ?>
														<div class="user-wishlist">
															<a href="../../views/profile/logout.php"><i class="fa fa-share-square-o"></i>Logout</a>
														</div>
													<?php } ?>
							<?php if (isAdmin()) { ?>
												<div class="user-wishlist">
													<a href="../../admin/views/index.php"><i class="fa fa-cog"></i>Dashboard</a>
												</div>
											<?php } ?>
								<div class="user-login">
									<ul class="nav top-nav">
										<li class="menu-item">
											<?php if (isset($_SESSION['userid'])) { ?> 
											<a href='My-profile.php'><?php echo $user['first_name'] .
               ' ' .
               $user['last_name'];} else { ?></a>
											<a data-rel="loginModal" href="#"><i class="fa fa-user"></i> Login</a>
											<?php } ?>
											
										</li>

									</ul>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="navbar-container">
				<div class="navbar navbar-default  navbar-scroll-fixed">
					<div class="navbar-default-wrap">
						<div class="container">
							<div class="row">
								<div class="col-md-12 navbar-default-col">
									<div class="navbar-wrap">
										<div class="navbar-header">
											<button type="button" class="navbar-toggle">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar bar-top"></span>
												<span class="icon-bar bar-middle"></span>
												<span class="icon-bar bar-bottom"></span>
											</button>
											<a class="navbar-search-button search-icon-mobile" href="#">
												<i class="fa fa-search"></i>
											</a>
											<a class="cart-icon-mobile" href="#">
												<i class="elegant_icon_bag"></i><span>0</span>
											</a>
											<a class="navbar-brand" href="./">
												<img class="logo" alt="The DMCS" src="../../images/ltrblack.png">
												<img class="logo-fixed" alt="The DMCS" src="../../images/ltrblack.png">
												<img class="logo-mobile" alt="The DMCS" src="../../images/ltrblack.png">
											</a>
										</div>
										<nav class="collapse navbar-collapse primary-navbar-collapse">
											<ul class="nav navbar-nav primary-nav">
												<li class="menu-item-has-children dropdown">
													<a href="./index.php" class="dropdown-hover">
														<span class="underline">Home</span> <span class="caret"></span>
													</a>
												</li>
												<li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
													<a href="shop.php" class="dropdown-hover">
														<span class="underline">Shop</span> <span class="caret"></span>
													</a>
												</li>
												<li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
													<a href="about-us.php" class="dropdown-hover">
														<span class="underline">About Us</span> <span class="caret"></span>
													</a>
												</li>
												<li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
													<a href="contact-us.php" class="dropdown-hover">
														<span class="underline">Contact Us</span> <span class="caret"></span>
													</a>
												</li>
												<?php
            if (isset($_GET['del'])) {
                if (isset($_SESSION['userid'])) {
                    $cart_id = $_GET['del'];
                    $query = $connect->prepare(
                        'DELETE  FROM `cart` Where cart_id=? '
                    );
                    $query->execute([$cart_id]);
                } else {
                    $productsInCart = $_SESSION['cartVisitor'];
                    for ($i = 0; $i < $productsInCart; $i++) {
                        if ($productsInCart[$i][0] == $_GET['del']) {
                            unset($productsInCart[$i]);
                        }
                    }
                }
            }

            $fromDB = 0;
            $fromSS = 0;
            if (isset($_SESSION['userid'])) {
                $query = 'SELECT * from `cart`';
                $query = $connect->prepare($query);
                $query->execute();
                $productsInCart = $query->fetchAll(PDO::FETCH_OBJ);
                $fromDB = 1;
            } elseif (isset($_SESSION['cartVisitor'])) {
                $productsInCart = $_SESSION['cartVisitor'];
                $fromSS = 1;
            } else {
                $productsInCart = [];
            }

            if (empty($productsInCart)) { ?>
												<li class="navbar-minicart navbar-minicart-nav">
													<a class="minicart-link" href="#">
														<span class="minicart-icon">
															<i class="minicart-icon-svg elegant_icon_bag"></i>
															<span><?php echo count($productsInCart); ?></span>
														</span>
													</a>

													<div class="minicart">
														<div class="minicart-header no-items show">
															Your shopping bag is empty.
														</div>

														<div class="minicart-footer">
															<div class="minicart-actions clearfix">
																<a class="button" href="./../shop.php">
																	<span class="text">Go to the shop</span>
																</a>
															</div>
														</div>
													</div>
												</li>


<?php } else { ?>
												<li class="navbar-minicart navbar-minicart-nav">
														<a class="minicart-link" href="#">
															<span class="minicart-icon has-item">
																<i class="minicart-icon-svg elegant_icon_bag"></i> <span><?php echo count(
                    $productsInCart
                ); ?></span>
															</span>
														</a>
														<div class="minicart" style="display:none">
															<div class="minicart-header"><?php echo count(
                   $productsInCart
               ); ?> items in the shopping cart</div>
															<div class="minicart-body">
																<?php foreach ($productsInCart as $pInCart) {

                    if ($fromDB) {
                        $query = "SELECT * from `products` WHERE product_id= '$pInCart->product_id'";
                    } else {
                        $query = "SELECT * from `products` WHERE product_id= '$pInCart[0]'";
                    }
                    $query = $connect->prepare($query);
                    $query->execute();
                    $product = $query->fetch(PDO::FETCH_OBJ);
                    ?>
																<div class="cart-product clearfix">
																	<div class="cart-product-image">
																		<a class="cart-product-img" href="#">
																			<img width="100" height="150" src="../../imgs/<?php echo $product->image1; ?>" alt="Product-1"/>
																		</a>
																	</div>
																	<div class="cart-product-details">
																		<div class="cart-product-title">
																			<a href="../product_page.php?prod_id=<?php echo $product->product_id; ?>"><?php echo $product->product_name; ?></a>
																		</div>
																		<div class="cart-product-quantity-price">
																			<?php echo $fromDB
                       ? $pInCart->quantity
                       : $pInCart[1]; ?> x <span class="amount">&#36;<?php echo $product->price; ?></span>
																		</div>
																	</div>
																	<a href="?del=<?php echo $fromDB
                     ? $pInCart->cart_id
                     : $pInCart[0]; ?>" class="remove" title="Remove this item">&times;</a>
																</div>
																<?php
                } ?>
															</div>
															<div class="minicart-footer">
																<div class="minicart-actions clearfix">
																	<a class="checkout-button button" href="../cart.php">
																		<span class="text">View Cart</span>
																	</a>
																</div>
															</div>
														</div>
													</li>
<?php }
            ?>
												<!-- cart and boxes -->
											</ul>

											<!--desktop nav end -->
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- search open box -->
					<div class="header-search-overlay hide">
						<div class="container">
							<div class="header-search-overlay-wrap">
								<!-- search form -->
								<button type="button" class="close">
									<span aria-hidden="true" class="fa fa-times"></span>
									<span class="sr-only">Close</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>


<?php
$curUser = $_SESSION['userid'];
$stmt = $connect->query("SELECT * FROM users Where user_id='$curUser'");
$user = $stmt->fetch();
?>


    <a class='back-to-top-btn float-right' id="scroll-btn" role='button' aria-label='back to top button'>
        <img src="Images/up-green.png" alt="goto top" role="icon" aria-label='back to top image'>
    </a>
    <!-- End of Bottom Header -->

    <!-- Start of my-profile page -->

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <center>  <li class="breadcrumb-item active" aria-current="page">My Profile</li><center>
        </ol>
    </nav>

    <section class="my-profile">
        <div class="mega-container">
            <aside
            class='grid-column-1 container d-flex flex-lg-column align-items-lg-start justify-content-lg-start flex-md-column align-items-md-start float-lg-left'>
            <div class="profile mb-4 d-flex flex-column justify-content-center align-items-start">
                <h6 class="font-weight-bold my-account-heading">MY ACCOUNT</h6>
                <img src="https://th.bing.com/th/id/R.17f2c2b13373bd4048fa4c080448ed25?rik=EMhK7I2caY2%2bAw&riu=http%3a%2f%2fwww.colegiodepadua.com.br%2fimg%2fuser.png&ehk=QKwFrUE%2fGegwZb1KOz9FS5U0rT4ZUGhr%2bMjaR2jdDeo%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1" width="40%" alt="Profile picture">
                <p class='mb-0 mt-2'><?php echo $user['first_name'] .
                    ' ' .
                    $user['last_name']; ?></p>
                <p><?php echo $user['email']; ?></p>
            </div>
            <div class="orders mb-4">
                <h6 class="font-weight-bold">ORDERS</h6>
                <div class="list-group border-0">
                    <a href="../order_history.php" class="list-items">My Order</a>
                    <!-- <a href="Return-order.html" class="list-items">Return Order</a> -->
                </div>
            </div>
            <div class="payment mb-4">
                <h6 class="font-weight-bold"><a href="logout.php">Logout<a></h6>
                
            </div>

        </aside>
            <main class='flex-container grid-column-2 d-flex flex-column ml-xl-5 ml-lg-5 ml-md-5 ml-sm-0'>
                <h3 class="font-weight-bold">MY PROFILE</h3>
                <hr>
                <div id="profile-info">
                </div>
                <button type="button" id="edit-profile-btn" onclick="location.href ='Edit-profile.php';" class="edit-button btn" aria-label='edit button'>EDIT</button>
            </main>
        </div>
    </section>

    <script src="Javascript/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script>




       
        // parsing info from local storage for my profile page
        let returnedHTML = " ";
        returnedHTML += `
        <div class="flex-item flex-item-2 d-flex justify-content-between">
        <p class='key'>Name</p>
            <?php echo $user['first_name'] . ' '; ?>
            <?php echo $user['last_name']; ?>

        </div>
        <br>
        <div class="flex-item flex-item-1 d-flex justify-content-between">
                <p class='key'>Phone</p>
               <?php print_r($user['phone']); ?>
              
            </div>
            <br>
            <div class="flex-item flex-item-3 d-flex justify-content-between">
                <p class='key'>Email</p>
                <?php print_r($user['email']); ?>
            </div>
            <br>
            <div class="flex-item flex-item-5 d-flex justify-content-between">
                <p class='key'>City</p>
                <?php print_r($user['city']); ?>

            </div>
            <br>
            <div class="flex-item flex-item-4 d-flex justify-content-between">
                <p class='key'>Addres</p>
                <?php print_r($user['address']); ?>

            </div>
            <br>
            <div class="flex-item flex-item-4 d-flex justify-content-between">
                <p class='key'>Role</p>
                <?php echo $user['is_admin'] ? 'Admin' : 'Member'; ?>
            </div>
            
            <br>
            <div class="flex-item flex-item-8 d-flex justify-content-between">
               
            </div>`
        document.getElementById('profile-info').innerHTML += returnedHTML;  
    </script>




<br><br>

<footer id="footer" class="footer">
	<div class="footer-info">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="footer-info-logo">
						<!-- logo image -->
						<img alt="logo" src="../../images/ltrblack.png" style="max-width: 25%;">
					</div>
					<div class="copyright text-center">Copyright right © 2022 Gruop4. All Rights Reserved.</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>




<!-- login model  -->
<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="userloginModalForm" method="post" action="login.php">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title">Login</h4>
				</div>

				<div class="modal-body">
					<!-- <div class="user-login-facebook">
								<button class="btn-login-facebook" type="button">
									<i class="fa fa-facebook"></i>Sign in with Facebook
								</button>
							</div>
							<div class="user-login-or"><span>or</span></div> -->


					<!-- login form input  -->
					<div class="form-group">
						<label>Email</label>
						<input type="text" id="username" name="email" required class="form-control" value="" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" required value="" name="password" class="form-control" placeholder="Password">
					</div>
					<div class="checkbox clearfix">
						<div class="form-flat-checkbox pull-left">
							<input type="checkbox" name="rememberme" id="rememberme" value="forever"><i></i>&nbsp;Remember Me
						</div>
						<span class="lostpassword-modal-link pull-right">
							<a href="#lostpasswordModal" data-rel="lostpasswordModal">Lost your password?</a>
						</span>
					</div>
				</div>

				<div class="modal-footer">
					<span class="user-login-modal-register pull-left">
						<a data-rel="registerModal" href="#">Not a Member yet?</a>
					</span>
					<button type="submit" name="login" class="btn btn-default btn-outline">Sign in</button>
				</div>
			</form>
		</div>
	</div>
</div>


<!-- register modal -->
<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="userregisterModalForm" action="signup.php" method="post">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title">Register account</h4>
				</div>
				<div class="modal-body">
					<!-- <div class="user-login-facebook">
								<button class="btn-login-facebook" type="button">
									<i class="fa fa-facebook"></i>Sign in with Facebook
								</button>
							</div>
							<div class="user-login-or"><span>or</span></div> -->

					<!-- register input  -->
					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="fname" required class="form-control" value="" placeholder="Username">
						<span class="error">* <?php if (isset($_POST['register'])) {
          echo $nameErr;
      } ?></span>

					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="lname" required class="form-control" value="" placeholder="Username">
						<span class="error">* <?php if (isset($_POST['register'])) {
          echo $nameErr;
      } ?></span>

					</div>
					<div class="form-group">
						<label for="user_email">Email</label>
						<input type="email" id="user_email" name="email" required class="form-control" value="" placeholder="Email">
						<span class="error">* <?php if (isset($_POST['register'])) {
          echo $emailErr;
      } ?></span>

					</div>


					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" required class="form-control" value="" placeholder="Phone">
						<span class="error">* <?php if (isset($_POST['register'])) {
          echo $phoneErr;
      } ?></span>

					</div>


					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" required class="form-control" value="" placeholder="Address">
						<span class="error">* <?php if (isset($_POST['register'])) {
          echo $addressEr;
      } ?></span>

					</div>


					<div class="form-group">
						<label>City</label>
						<input type="text" name="city" required class="form-control" value="" placeholder="City">
						<span class="error">* <?php if (isset($_POST['register'])) {
          echo $cityEr;
      } ?></span>

					</div>






					<div class="form-group">
						<label for="user_password">Password</label>
						<input type="password" id="user_password" required value="" name="password" class="form-control" placeholder="Password">
						<span class="error">* <?php if (isset($_POST['register'])) {
          echo $passErr;
      } ?></span>

					</div>
					<div class="form-group">
						<label for="user_password">Retype password</label>
						<input type="password" id="cuser_password" required value="" name="cuser_password" class="form-control" placeholder="Retype password">
						<span class="error">* <?php if (isset($_POST['register'])) {
          echo $cpassErr;
      } ?></span>

					</div>
					







				</div>
				<div class="modal-footer">
					<span class="user-login-modal-link pull-left">
						<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
					</span>
					<input type="submit" name="register" class="btn btn-default btn-outline" value="Register">
				</div>
			</form>
		</div>
	</div>
</div>


	
<div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="userlostpasswordModalForm">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title">Forgot Password</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Username or E-mail:</label>
						<input type="text" name="user_login" required class="form-control" value="" placeholder="Username or E-mail">
					</div>
				</div>
				<div class="modal-footer">
					<span class="user-login-modal-link pull-left">
						<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
					</span>
					<button type="submit" class="btn btn-default btn-outline">try in</button>
				</div>
			</form>
		</div>
	</div>
</div>


<!-- product-quickview -->




<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
		<script type='text/javascript' src='../../js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='../../js/jquery.themepunch.tools.min.js'></script>
		<script type='text/javascript' src='../../js/jquery.themepunch.revolution.min.js'></script>
		<script type='text/javascript' src='../../js/easing.min.js'></script>
		<script type='text/javascript' src='../../js/imagesloaded.pkgd.min.js'></script>
		<script type='text/javascript' src='../../js/bootstrap.min.js'></script>
		<script type='text/javascript' src='../../js/superfish-1.7.4.min.js'></script>
		<script type='text/javascript' src='../../js/jquery.appear.min.js'></script>
		<script type='text/javascript' src='../../js/script.js'></script>
		<script type='text/javascript' src='../../js/swatches-and-photos.js'></script>
		<script type='text/javascript' src='../../js/jquery.prettyPhoto.min.js'></script>
		<script type='text/javascript' src='../../js/jquery.prettyPhoto.init.min.js'></script>
		<script type='text/javascript' src='../../js/jquery.selectBox.min.js'></script>
		<script type='text/javascript' src='../../js/jquery.parallax.js'></script>
		<script type='text/javascript' src='../../js/jquery.touchSwipe.min.js'></script>
		<script type='text/javascript' src='../../js/jquery.transit.min.js'></script>
		<script type='text/javascript' src='../../js/jquery.carouFredSel.min.js'></script>
		<script type='text/javascript' src='../../js/isotope.pkgd.min.js'></script>
		<script type='text/javascript' src='../../js/core.min.js'></script>
		<script type='text/javascript' src='../../js/widget.min.js'></script>
		<script type='text/javascript' src='../../js/mouse.min.js'></script>
		<script type='text/javascript' src='../../js/slider.min.js'></script>
		<script type='text/javascript' src='../../js/jquery-ui-touch-punch.min.js'></script>
		<script type='text/javascript' src='../../js/price-slider.js'></script>
		<script type='text/javascript' src='../../js/custom.js'></script>

		<script type='text/javascript' src='../../js/jquery.magnific-popup.min.js'></script>
		<!-- <script type='text/javascript' src='../js/jquery.js'></script> -->
		<script type='text/javascript' src='../../js/jquery.cookie.min.js'></script>



<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->


</body>

</html>
