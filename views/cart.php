<?php require_once "connection.php"; ?>

<?php
  
session_start();
  
?>
<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Cart | HTML Template</title>
		<link rel="shortcut icon" href="images/favicon.png">

		<link rel='stylesheet' href='../css/settings.css' type='text/css' media='all' />
		<link rel='stylesheet' href='../css/swatches-and-photos.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='../css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;' type='text/css' media='all'/>
		<link rel='stylesheet' href='../css/elegant-icon.css' type='text/css' media='all' />
		<link rel='stylesheet' href='../css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='../css/shop.css' type='text/css' media='all'/>
	</head>
	
	<body class="shop-account">
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
									<div class="language-switcher">
										<div class="wpml-languages disabled">
											<a class="active" href="#" data-toggle="dropdown">
												<img src="images/en.png" alt="English"/> EN
											</a>
										</div>
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
													<i class="elegant_icon_bag"></i><span>3</span>
												</a>
												<a class="navbar-brand" href="./">
													<img class="logo" alt="The DMCS" src="images/logo.png">
													<img class="logo-fixed" alt="The DMCS" src="images/logo-fixed.png">
													<img class="logo-mobile" alt="The DMCS" src="images/logo-mobile.png">
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
													<li class="navbar-minicart navbar-minicart-nav">
														<a class="minicart-link" href="#">
															<span class="minicart-icon has-item">
																<i class="minicart-icon-svg elegant_icon_bag"></i> <span>3</span>
															</span>
														</a>
														<div class="minicart" style="display:none">
															<div class="minicart-header">3 items in the shopping cart</div>
															<div class="minicart-body">
																<div class="cart-product clearfix">
																	<div class="cart-product-image">
																		<a class="cart-product-img" href="#">
																			<img width="100" height="150" src="images/product/product-1.jpg" alt="Product-1"/>
																		</a>
																	</div>
																	<div class="cart-product-details">
																		<div class="cart-product-title">
																			<a href="#">Cras rhoncus duis viverra</a>
																		</div>
																		<div class="cart-product-quantity-price">
																			2 x <span class="amount">&#36;22.00</span>
																		</div>
																	</div>
																	<a href="#" class="remove" title="Remove this item">&times;</a>
																</div>
																<div class="cart-product clearfix">
																	<div class="cart-product-image">
																		<a class="cart-product-img" href="#">
																			<img width="100" height="150" src="images/product/product-3.jpg" alt="Product-3"/>
																		</a>
																	</div>
																	<div class="cart-product-details">
																		<div class="cart-product-title">
																			<a href="#">Creamy Spring Pasta</a>
																		</div>
																		<div class="cart-product-quantity-price">
																			1 x <span class="amount">&#36;12.00</span>
																		</div>
																	</div>
																	<a href="#" class="remove" title="Remove this item">&times;</a>
																</div>
															</div>
															<div class="minicart-footer">
																<div class="minicart-actions clearfix">
																	<a class="checkout-button button" href="#">
																		<span class="text">Checkout</span>
																	</a>
																</div>
															</div>
														</div>
													</li>
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
										<input type="search" class="searchinput" name="s" value="" placeholder="Search..."/>
										<input type="submit" class="searchsubmit hidden" name="submit" value="Search"/>
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
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php 
	
	$delevery=0;
	$sub=0;
	
//get cart info 
$query = "SELECT * from `cart`";
$query = $connect->prepare($query);
$query->execute();
$productsInCart = $query->fetchAll(PDO::FETCH_OBJ);


//add to cart 
if (isset($_POST['update_cart'])) {

	$query ="UPDATE `cart` SET `quantity` =? WHERE `cart_id` = ?";
	$query = $connect->prepare($query);
	$query->execute([ intval($_POST['qunatity1']),$_POST['id_c']]);

	$sub=intval($_POST['qunatity1'])*intval($_POST['price']);
	}


//coupon
if(isset($_POST['apply_coupon'])){
$coupon=$_POST['coupon_code'];
$query = "SELECT * from `coupons` where name=?";
$query = $connect->prepare($query);
$query->execute([$coupon]);

$coupon_saved = $query->fetch(PDO::FETCH_OBJ);

if(!empty($coupon_saved)){
if (intval($coupon_saved->count) > 0){
  $sub=$sub*$coupon_saved->discount;
	 $query ="UPDATE `coupons` SET `count` =? WHERE `coupon_id` = ?";
	 $query = $connect->prepare($query);
	 $coupon_saved->count-=1;
	 $query->execute([ $coupon_saved->count,$coupon_saved->coupon_id]);
}
else{

	echo "<script>alert('invalid coupon')</script>";

}

}else	echo "<script>alert('invalid coupon')</script>";
}




?>


               <div class="heading-container">
				<div class="container heading-standar">
					<div class="page-breadcrumb">
						<ul class="breadcrumb">
							<li><span><a href="/views/index.php" class="home"><span>Home</span></a></span></li>
							<li><span>Cart</span></li>
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
									<form method="post" action="cart.php">
										<table class="table shop_table cart">
											<thead>
												<tr>
													<th class="product-remove hidden-xs">&nbsp;</th>
													<th class="product-thumbnail hidden-xs">&nbsp;</th>
													<th class="product-name">Product</th>
													<th class="product-price text-center">Price</th>
													<th class="product-quantity text-center">Quantity</th>
													<th class="product-subtotal text-center hidden-xs">Total</th>
												</tr>
											</thead>
											<tbody>
                                                    <?php 
                                                    foreach ($productsInCart as $product) {
														$qunatity=$product->quantity;
														$query = "SELECT * from `products`";

														// $query ="SELECT products.name,products.image2,products.price,categories.name
														// FROM products 
														// FULL JOIN categories
														// ON products.product_id = ? and  categories.category_id=? ";
														$query = $connect->prepare($query);
														$query->execute();
														$product_catr_info= $query->fetch(PDO::FETCH_OBJ);
                                                        //   print_r($product_catr_info) ;
														
														$query = "SELECT categories.name from `categories`";
														$query = $connect->prepare($query);
														$query->execute();
														$category_name= $query->fetch(PDO::FETCH_OBJ);
														
														
														// print_r($category_name) ;
											
														
														?>
                                                        <tr class="cart_item">
													<td class="product-remove hidden-xs">
														<input type="hidden" value="<?php echo $product->cart_id?>" name="id_c">
														<a href="./delete.php?del=<?php echo $product->cart_id?>" class="remove" title="Remove this item">&times;</a>
													</td>
													<td class="product-thumbnail hidden-xs">
														<a href="#">
															<img width="100" height="150" src="../images/product/<?php echo $product_catr_info->image1 ?>" alt="Product-1"/>
														</a>
													</td>
													<td class="product-name">
														<a href="#" data-rel="quickViewModal" data-original-title="" title=""><?php echo $product_catr_info->name?></a>
														<dl class="variation">
															<dt class="variation-Size">category:</dt>
															<dd class="variation-Size"><p><?php echo $category_name->name ?></p></dd>
														</dl>
													</td>
													<td class="product-price text-center">
													<input type="hidden" value="<?php echo $product->price;?>" name="price">
                                                    <span class="amount">JD <?php echo $product->price;?></span>
													</td>
													<td class="product-quantity text-center">
														<div class="quantity">
															<input type="number" step="1" min="0" name="qunatity1" value="<?php echo $product_catr_info->qunatity ?>" title="Qty" class="input-text qty text" size="4"/>
														</div>
													</td>
													<td class="product-subtotal hidden-xs text-center">
														<span class="amount">JD <?php echo $sub?></span>
													</td>
												</tr>

<?php }?>
                 
												<tr>
													<td colspan="6" class="actions">
														<div class="coupon">
                                                            <!-- <form method="post" action="cart.php" > -->
															<label for="coupon_code">Coupon:</label> 
															<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"/> 
															<input type="submit" class="button" name="apply_coupon" value="Apply Coupon"/>
                                                          <!-- </form> -->
														</div>
														<input type="submit" class="button update-cart-button" name="update_cart" value="Update Cart"/>
													</td>
												</tr>
											</tbody>
										</table>
									</form>
									<div class="cart-collaterals">
										<div class="cart_totals">
											<h2>Cart Totals</h2>
											<table>
												<tr class="cart-subtotal">
													<th>Subtotal</th>
													<td><span class="amount">JD <?php echo $sub* $qunatity ?></span></td>
												</tr>
												<tr class="shipping">
													<th>Shipping</th>
													<td><span class="amount">JD <?php echo $delevery?></span></td>
												</tr>
												<tr class="order-total">
													<th>Total</th>
													<td><strong><span class="amount">JD <?php $total=$sub*$qunatity+$delevery; echo $total; ?></span></strong></td>
												</tr>
											</table>
											<div class="wc-proceed-to-checkout">
												<a href="#" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
											</div>
										</div>
										<div class="cross-sells">
											<h2>You may be interested in&hellip;</h2>
											<ul class="products columns-2">
												<li class="product">
													<div class="product-container">
														<figure>
															<div class="product-wrap">
																<div class="product-images">
																	<div class="shop-loop-thumbnail">
                                                                        <img width="300" height="350" src="images/product/product-3.jpg" alt="Product-3"/>
                                                                    </div>
                                                                    <!-- <div class="yith-wcwl-add-to-wishlist">
                                                                        <div class="yith-wcwl-add-button">
                                                                            <a href="#" class="add_to_wishlist">
                                                                                Add to Wishlist
                                                                            </a>
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="clear"></div>
																	<div class="shop-loop-quickview">
																		<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
																	</div>
																</div>
															</div>
															<figcaption>
																<div class="shop-loop-product-info">
																	<div class="info-title">
																		<h3 class="product_title"><a href="#">Creamy Spring Pasta</a></h3>
																	</div>
																	<div class="info-meta">
																		<div class="info-price">
																			<span class="price">
																				<span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;23.00</span>
																			</span>
																		</div>
																		<div class="loop-add-to-cart">
																			<a href="cart.php?add:1">Select options</a>
																		</div>
																	</div>
																</div>
															</figcaption>
														</figure>
													</div>
												</li>
								
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php	require_once "footer.php"?>

<script>
    document.body.classList.add("shop-account");
</script>
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