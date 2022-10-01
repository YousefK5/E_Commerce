
<footer id="footer" class="footer">
	<div class="footer-info">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="footer-info-logo">
						<!-- logo image -->
						<a href="#"><img alt="The DMCS" src="../images/footer-logo.png"></a>
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
<div class="modal fade shop product-quickview" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			<div class="modal-body">
				<div class="product-quickview-content">
					<div class="row">
						<div class="col-sm-6">
							<div class="single-product-images">
								<div class="single-product-images-slider">
									<img width="800" height="850" src="../images/product/product-detail/product-1.jpg" alt="Product-1">

								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="summary entry-summary">
								<!--title  -->

								<h1 class="product_title entry-title">Cras rhoncus duis viverra</h1>
								<!-- rating -->

								<div class="shop-product-rating">
									<div class="star-rating">
										<span style="width:40%"></span>
									</div>
									<a href="#reviews" class="shop-review-link">(<span class="count">1</span> customer review)</a>
								</div>
								<!-- price -->

								<p class="price">
									<span class="amount">$12.00</span>–<span class="amount">$23.00</span>
								</p>
								<!-- description -->

								<div class="product-excerpt">
									<p>
										Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id metus eget nibh imperdiet fermentum non in metus.
									</p>
								</div>
								<div class="product-actions res-color-attr">
									<form class="cart">
										<div class="product-options-outer">
											<div class="variation_form_section">
												<div class="product-options icons-lg">
													<table class="variations-table">
														<tbody>

															<tr>
																<td><label>Size</label></td>
																<td>
																	<div class="select-option swatch-wrapper selected">
																		<a href="#" title="Extra Large" class="swatch-anchor">
																			<img src="../images/sizes/XL.jpg" alt="thumbnail" width="35" height="35" />
																		</a>
																	</div>
																	<div class="select-option swatch-wrapper">
																		<a href="#" title="Extra Extra Large" class="swatch-anchor">
																			<img src="../images/sizes/XXL.jpg" alt="thumbnail" width="35" height="35" />
																		</a>
																	</div>
																	<div class="select-option swatch-wrapper">
																		<a href="#" title="Medium" class="swatch-anchor">
																			<img src="../images/sizes/M.jpg" alt="thumbnail" width="35" height="35" />
																		</a>
																	</div>
																	<div class="select-option swatch-wrapper">
																		<a href="#" title="Small" class="swatch-anchor">
																			<img src="../images/sizes/S.jpg" alt="thumbnail" width="35" height="35" />
																		</a>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="single_variation_wrap">
											<div class="single_variation">
												<!-- price  -->
												<span class="price"><span class="amount">$20.00</span></span>
											</div>
											<div class="variations_button">
												<div class="quantity">
													<input type="number" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
												</div>
												<button type="submit" class="button">Add to cart</button>
											</div>
										</div>
									</form>
								</div>
								<div class="yith-wcwl-add-to-wishlist">
									<a href="#" class="add_to_wishlist">
										Add to Wishlist
									</a>
								</div>


								<div class="product_meta">
									<!-- <span class="sku_wrapper">SKU: <span class="sku">N/A</span></span> -->

									<!-- Category -->


									<span class="posted_in">Category: <a href="#">Aliquam</a></span>
									<!-- <span class="tagged_as">Tags: <a href="#">Men</a>, <a href="#">Women</a></span> -->
									<!-- <span class="posted_in">Brand: <a href="#">Adesso</a>, <a href="#">Carvela</a>.</span> -->
								</div>
								<div class="share-links">



									<div class="share-icons">
										<span class="facebook-share">
											<a href="https://www.facebook.com" title="Share on Facebook"><i class="fa fa-facebook"></i></a>
										</span>
										<span class="twitter-share">
											<a href="https://www.twitter.com" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
										</span>
										<span class="instgram-share">
											<a href="https://www.instgram.com#" title="Share on Instagram "><i class="fa fa-google-plus"></i></a>
										</span>
										<span class="pinterest-share">
											<a href="https://www.pinterest.com" title="Share on Pinterest"><i class="fa fa-linkedin"></i></a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



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



<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->


</body>

</html>