<?php require_once '../connection.php'; ?>
<?php
$curUser = $_SESSION['userid'];
$stmt = $connect->query("SELECT * FROM users Where user_id='$curUser'");
$user = $stmt->fetch();
?>
<?php if (isset($_POST['update_profile'])) {
    $stmt = $connect->prepare(
        'UPDATE users SET first_name=:fname,last_name=:lname, address=:address, phone=:phone, Email=:Email, password=:password,city=:city WHERE user_id= :curUser'
    ); // $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':Email', $Email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':curUser', $curUser);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $Email = $_POST['Email'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $userimg = null;
    $stmt->execute();
    header('location:My-profile.php');
} ?>
<!doctype html>
<html lang="en-US">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<link rel="shortcut icon" href="../images/favicon.png">
	<!-- <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->

<title>Edit Profile</title>
    <link rel="icon" type="image/png" href="Images/carts.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

	<link rel='stylesheet' href='../../css/settings.css' type='text/css' media='all' />
	<link rel='stylesheet' href='../../css/swatches-and-photos.css' type='text/css' media='all' />
	<link rel='stylesheet' href='../../css/font-awesome.min.css' type='text/css' media='all' />
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;' type='text/css' media='all' />
	<link rel='stylesheet' href='../../css/elegant-icon.css' type='text/css' media='all' />
	<link rel='stylesheet' href='../../css/style.css' type='text/css' media='all' />
	<link rel='stylesheet' href='../../css/shop.css' type='text/css' media='all' />
	<!-- <link rel='stylesheet' href='../css/layout.css' type='text/css' media='all' /> -->

	
    

</head>

<body class="shop">
	<div class="offcanvas open">
		<div class="offcanvas-wrap">
			<div class="offcanvas-user clearfix">
				<a class="offcanvas-user-wishlist-link" href="wishlist.html">
					<i class="fa fa-heart-o"></i> My Wishlist
				</a>
				<a class="offcanvas-user-account-link" href="my-account.html">
					<i class="fa fa-user"></i> Login
				</a>
			</div>
			<nav class="offcanvas-navbar">
				<ul class="offcanvas-nav">
					<li class="menu-item-has-children dropdown">
						<a href="./" class="dropdown-hover">Home <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="home-lookbook.html">Home Lookbook</a></li>
							<li><a href="home-instagram.html">Home Instagram</a></li>
							<li><a href="home-product-slider.html">Home Product Slider</a></li>
							<li><a href="home-default.html">Home Default</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children dropdown">
						<a href="shop.html" class="dropdown-hover">Shop <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li id="menu-item-10433" class="menu-item-has-children dropdown-submenu">
								<a href="shop-by-category.html">Women <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="shop-by-category.html">Nulla</a></li>
									<li><a href="shop-by-category.html">Maecenas</a></li>
									<li><a href="shop-by-category.html">Aliquam</a></li>
									<li><a href="shop-by-category.html">Donec</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children dropdown-submenu">
								<a href="shop-by-category.html">Brands <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="shop-by-category.html">Adesso</a></li>
									<li><a href="shop-by-category.html">Barbour</a></li>
									<li><a href="shop-by-category.html">Carvela</a></li>
									<li><a href="shop-by-category.html">Crocs</a></li>
									<li><a href="shop-by-category.html">Evans</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children dropdown-submenu">
								<a href="shop-by-collection.html">Conllections <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="shop-by-collection.html">Spring/Summer 2014</a></li>
									<li><a href="shop-by-collection.html">Sweet Summer</a></li>
									<li><a href="shop-by-collection.html">Winter 2015</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children dropdown-submenu">
								<a href="#">Woo <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="shop-masonry.html">Shop Masonry</a></li>
									<li><a href="shop-detail.html">Shop Detail</a></li>
									<li><a href="my-account.html">My Account</a></li>
									<li><a href="cart.html">Cart</a></li>
									<li><a href="cart-empty.html">Empty Cart</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="collection.html">Collections</a></li>
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-hover">Blog <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="blog-default.html">Blog Default</a></li>
							<li><a href="blog-center.html">Blog Center</a></li>
							<li><a href="blog-masonry.html">Blog Masonry</a></li>
							<li><a href="blog-detail.html">Blog Detail</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-hover">Pages <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="about-us.html">About us</a></li>
							<li><a href="contact-us.html">Contact Us</a></li>
							<li><a href="faq.html">FAQ</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<div class="offcanvas-widget">
				<div class="widget social-widget">
					<div class="social-widget-wrap social-widget-none">
						<a href="#" title="Facebook" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
						<a href="#" title="Twitter" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
						<a href="#" title="Google+" target="_blank">
							<i class="fa fa-google-plus"></i>
						</a>
						<a href="#" title="Pinterest" target="_blank">
							<i class="fa fa-pinterest"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="wrapper" class="wide-wrap">
		<div class="offcanvas-overlay"></div>
		<header class="header-type-classic">
			<div class="topbar">
				<div class="container topbar-wap">
					<div class="row">
						<div class="col-sm-6">
							<div class="left-topbar">
								<div class="topbar-social">
									<a href="#" title="Facebook" target="_blank">
										<i class="fa fa-facebook facebook-bg-hover"></i>
									</a>
									<a href="#" title="Twitter" target="_blank">
										<i class="fa fa-twitter twitter-bg-hover"></i>
									</a>
									<a href="#" title="Google+" target="_blank">
										<i class="fa fa-google-plus google-plus-bg-hover"></i>
									</a>
									<a href="#" title="Pinterest" target="_blank">
										<i class="fa fa-pinterest pinterest-bg-hover"></i>
									</a>
									<a href="#" title="RSS" target="_blank">
										<i class="fa fa-rss rss-bg-hover"></i>
									</a>
									<a href="#" title="Instagram" target="_blank">
										<i class="fa fa-instagram instagram-bg-hover"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="right-topbar">
								<div class="user-wishlist">
									<a href="wishlist.html"><i class="fa fa-heart-o"></i> My Wishlist</a>
								</div>
								<div class="user-login">
									<ul class="nav top-nav">
										<li class="menu-item">
											<a data-rel="loginModal" href="#"><i class="fa fa-user"></i> Login</a>
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
													<a href="./" class="dropdown-hover">
														<span class="underline">Home</span> <span class="caret"></span>
													</a>
													<ul class="dropdown-menu">
														<li><a href="home-lookbook.html">Home Lookbook</a></li>
														<li><a href="home-instagram.html">Home Instagram</a></li>
														<li><a href="home-product-slider.html">Home Product Slider</a></li>
														<li><a href="home-default.html">Home Default</a></li>
													</ul>
												</li>
												<li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
													<a href="shop.html" class="dropdown-hover">
														<span class="underline">Shop</span> <span class="caret"></span>
													</a>
													<ul class="dropdown-menu">
														<li class="menu-item-has-children mega-col-3 dropdown-submenu">
															<h3 class="megamenu-title">
																Women <span class="caret"></span>
															</h3>
															<ul class="dropdown-menu">
																<li><a href="shop-by-category.html">Nulla</a></li>
																<li><a href="shop-by-category.html">Maecenas</a></li>
																<li><a href="shop-by-category.html">Aliquam</a></li>
																<li><a href="shop-by-category.html">Donec</a></li>
															</ul>
														</li>
														<li class="menu-item-has-children mega-col-3 dropdown-submenu">
															<h3 class="megamenu-title">
																Brands <span class="caret"></span>
															</h3>
															<ul class="dropdown-menu">
																<li><a href="shop-by-category.html">Adesso</a></li>
																<li><a href="shop-by-category.html">Barbour</a></li>
																<li><a href="shop-by-category.html">Carvela</a></li>
																<li><a href="shop-by-category.html">Crocs</a></li>
																<li><a href="shop-by-category.html">Evans</a></li>
															</ul>
														</li>
														<li class="menu-item-has-children mega-col-3 dropdown-submenu">
															<h3 class="megamenu-title">
																Collections <span class="caret"></span>
															</h3>
															<ul class="dropdown-menu">
																<li><a href="shop-by-collection.html">Spring/Summer 2014</a></li>
																<li><a href="shop-by-collection.html">Sweet Summer</a></li>
																<li><a href="shop-by-collection.html">Winter 2015</a></li>
															</ul>
														</li>
														<li class="menu-item-has-children mega-col-3 dropdown-submenu">
															<h3 class="megamenu-title">
																Woo <span class="caret"></span>
															</h3>
															<ul class="dropdown-menu">
																<li><a href="shop-masonry.html">Shop Masonry</a></li>
																<li><a href="shop-detail.html">Shop Detail</a></li>
																<li><a href="my-account.html">My Account</a></li>
																<li><a href="cart.html">Cart</a></li>
																<li><a href="cart-empty.html">Empty Cart</a></li>
															</ul>
														</li>
													</ul>
												</li>
												<li><a href="collection.html"><span class="underline">Collections</span></a></li>
												<li class="menu-item-has-children dropdown">
													<a href="#" class="dropdown-hover">
														<span class="underline">Blog</span> <span class="caret"></span>
													</a>
													<ul class="dropdown-menu">
														<li><a href="blog-default.html">Blog Default</a></li>
														<li><a href="blog-center.html">Blog Center</a></li>
														<li><a href="blog-masonry.html">Blog Masonry</a></li>
														<li><a href="blog-detail.html">Blog Detail</a></li>
													</ul>
												</li>
												<li class="menu-item-has-children dropdown">
													<a href="#" class="dropdown-hover">
														<span class="underline">Pages</span> <span class="caret"></span>
													</a>
													<ul class="dropdown-menu">
														<li><a href="about-us.html">About us</a></li>
														<li><a href="contact-us.html">Contact Us</a></li>
														<li><a href="faq.html">FAQ</a></li>
													</ul>
												</li>
												<li class="navbar-search">
													<a class="navbar-search-button" href="#">
														<i class="fa fa-search"></i>
													</a>
												</li>
												<?php
            if (isset($_GET['del'])) {
                $cart_id = $_GET['del'];
                $query = $connect->prepare(
                    'DELETE  FROM `cart` Where cart_id=? '
                );
                $query->execute([$cart_id]);
            }
            $query = 'SELECT * from `cart`';
            $query = $connect->prepare($query);
            $query->execute();
            $productsInCart = $query->fetchAll(PDO::FETCH_OBJ);
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
																<a class="button" href="./shop.php">
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

                    $query = "SELECT * from `products` WHERE product_id= '$pInCart->product_id'";
                    $query = $connect->prepare($query);
                    $query->execute();
                    $product = $query->fetch(PDO::FETCH_OBJ);
                    ?>
																<div class="cart-product clearfix">
																	<div class="cart-product-image">
																		<a class="cart-product-img" href="#">
																			<img width="100" height="150" src="../imgs/<?php echo $product->image1; ?>" alt="Product-1"/>
																		</a>
																	</div>
																	<div class="cart-product-details">
																		<div class="cart-product-title">
																			<a href="#"><?php echo $product->product_name; ?></a>
																		</div>
																		<div class="cart-product-quantity-price">
																			<?php echo $pInCart->quantity; ?> x <span class="amount">&#36;<?php echo $product->price; ?></span>
																		</div>
																	</div>
																	<a href="?del=<?php echo $pInCart->cart_id; ?>" class="remove" title="Remove this item">&times;</a>
																</div>
																<?php
                } ?>
															</div>
															<div class="minicart-footer">
																<div class="minicart-actions clearfix">
																	<a class="checkout-button button" href="./cart.php">
																		<span class="text">View Cart</span>
																	</a>
																</div>
															</div>
														</div>
													</li>
<?php }
            ?>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-search-overlay hide">
						<div class="container">
							<div class="header-search-overlay-wrap">
								<form class="searchform">
									<input type="search" class="searchinput" name="s" value="" placeholder="Search..." />
									<input type="submit" class="searchsubmit hidden" name="submit" value="Search" />
								</form>
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


    <a class='back-to-top-btn float-right' id="scroll-btn" role='button' aria-label='back to top button'>
        <img src="Images/up-green.png" alt="goto top" role="icon" aria-label='back to top image'>
    </a>

    
    <!-- Start of my-profile page -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
        </ol>
    </nav>

    


     <main class='flex-container grid-column-2'>
             <center>   <h3 class="font-weight-bold">EDIT PROFILE</h3></center>
                <hr>

  <form action="Edit-profile.php" method="POST" enctype='multipart/form-data' class='edit-profile-form'>
  <div class="login_form">


   <!-- <img src="https://technosmarter.com/assets/userimgs/logo.png" alt="Techno Smarter" class="logo img-fluid"> <br>   -->

       
         <div class="mb-3">
                <label class="form-label">First Name</label>
           
                <input type="text"  class="form-control" name="fname" value=<?php print_r(
                    $user['first_name']
                ); ?> class="form-control">
            </div>
         <div class="mb-3">
                <label class="form-label">Last Name</label>
           
                <input type="text"  class="form-control" name="lname" value=<?php print_r(
                    $user['last_name']
                ); ?> class="form-control">
            </div>
         
    
            <div class="mb-3">
                <label class="form-label">address</label>
                <input type="text"  class="form-control" name="address"  value=<?php print_r(
                    $user['address']
                ); ?>  
            </div>
        
     
     
    <div class="mb-3">
         
                <label class="form-label">phone</label>
                <input type="text"  class="form-control" name="phone" value=<?php print_r(
                    $user['phone']
                ); ?>>
             </div>
        
    <div class="mb-3">
     
         
                <label class="form-label">Email</label>
                <input type="text"  class="form-control"  name="Email" value=<?php print_r(
                    $user['email']
                ); ?> >
            </div>
          <div class="mb-3">
                <label class="form-label">password</label>
                <input type="password" class="form-control" name="password"  value=<?php print_r(
                    $user['password']
                ); ?>>
            </div>
         <div class="mb-3">

                <label class="form-label">City</label>
                <input type="text" class="form-control" name="city" value=<?php print_r(
                    $user['city']
                ); ?> >
            </div>
         

      <div class="form-group">





           <div class="row">
           
            <div class="col-sm-6">


            <!-- $sql="update tblusers set FirstName=:fn,LastName=:ln,EmailId=:eml,ContactNumber=:cno,Address=:adrss where id=:uid"; -->

            </div>
           </div>
               </div>

               <div class="button-group d-flex flex-column mt-3" id="btn-group">
                        <button type="submit" class="btn btn-success" class="btn mb-3" name="update_profile"> Save Profile</button>

                    </div>
                </form>
            </main>




    <!-- Start of Footer -->
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
					<div class="footer-social">
						<a href="https://www.facebook.com" title="Facebook">
							<i class="fa fa-facebook"></i>
						</a>
						<a href="https://www.twitter.com" title="Twitter">
							<i class="fa fa-behance"></i>
						</a>
						<a href="https://www.instgram.com" title="Instagram">
							<i class="fa fa-instagram instagram-bg-hover"></i>
						</a>
						<a href="https://www.pinterest.com" title="Pinterest">
							<i class="fa fa-pinterest"></i>
						</a>
					</div>
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
						<label>Username</label>
						<input type="text" name="name" required class="form-control" value="" placeholder="Username">
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
		<script type='text/javascript' src='../js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='../js/jquery.themepunch.tools.min.js'></script>
		<script type='text/javascript' src='../js/jquery.themepunch.revolution.min.js'></script>
		<script type='text/javascript' src='../js/easing.min.js'></script>
		<script type='text/javascript' src='../js/imagesloaded.pkgd.min.js'></script>
		<script type='text/javascript' src='../js/bootstrap.min.js'></script>
		<script type='text/javascript' src='../js/superfish-1.7.4.min.js'></script>
		<script type='text/javascript' src='../js/jquery.appear.min.js'></script>
		<script type='text/javascript' src='../js/script.js'></script>
		<script type='text/javascript' src='../js/swatches-and-photos.js'></script>
		<script type='text/javascript' src='../js/jquery.prettyPhoto.min.js'></script>
		<script type='text/javascript' src='../js/jquery.prettyPhoto.init.min.js'></script>
		<script type='text/javascript' src='../js/jquery.selectBox.min.js'></script>
		<script type='text/javascript' src='../js/jquery.parallax.js'></script>
		<script type='text/javascript' src='../js/jquery.touchSwipe.min.js'></script>
		<script type='text/javascript' src='../js/jquery.transit.min.js'></script>
		<script type='text/javascript' src='../js/jquery.carouFredSel.min.js'></script>
		<script type='text/javascript' src='../js/isotope.pkgd.min.js'></script>
		<script type='text/javascript' src='../js/core.min.js'></script>
		<script type='text/javascript' src='../js/widget.min.js'></script>
		<script type='text/javascript' src='../js/mouse.min.js'></script>
		<script type='text/javascript' src='../js/slider.min.js'></script>
		<script type='text/javascript' src='../js/jquery-ui-touch-punch.min.js'></script>
		<script type='text/javascript' src='../js/price-slider.js'></script>
		<script type='text/javascript' src='../js/custom.js'></script>

		<script type='text/javascript' src='../js/jquery.magnific-popup.min.js'></script>
		<!-- <script type='text/javascript' src='../js/jquery.js'></script> -->
		<script type='text/javascript' src='../js/jquery.cookie.min.js'></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="Javascript/index.js"></script>
    <script src="Javascript/jQuery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->


</body>

</html>  

























</body>

</html>