<?php require_once "connection.php";?>
<?php require 'header.php'; ?>








			<!-- //////////////////////////////////////////////////// -->
			
            <!-- banner -->
            <div class="heading-container heading-resize heading-button">
				<div class="heading-background heading-parallax bg-4">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="heading-wrap">
									<div class="page-title">
										<h1>Nunc interdum</h1>
										<span class="subtitle">Women</span>
										<a class="btn btn-white-outline heading-button-btn" href="#" title="Buy Now">Buy Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


<!-- fillter -->


			<div class="content-container">
				<div class="container">
					<div class="row">




                    <div class="col-md-3 sidebar-wrap">
							<div class="main-sidebar">
								<div class="widget shop widget_price_filter">
                                <h4 class="widget-title"><span>Price</span></h4>
									<form>
										<div class="price_slider_wrapper">
											<div class="price_slider"></div>
											<div class="price_slider_amount">
												<input type="text" id="min_price" name="min_price" value="" data-min="10" placeholder="Min price"/>
												<input type="text" id="max_price" name="max_price" value="" data-max="23" placeholder="Max price"/>
												<button type="submit" class="button">Filter</button>
												<div class="price_label">
													Price: <span class="from"></span> &mdash; <span class="to"></span>
												</div>
												<div class="clear"></div>
											</div>
										</div>
									</form>









								</div>
								<div class="widget shop widget_swatches">
									<h4 class="widget-title"><span>Sizes</span></h4>
									<ul class="swatches-options clearfix">
										<li>
											<a title="Extra Large (3)" href="#">
												<img src="../images/sizes/XL.jpg" alt="Extra Large" width="32" height="32"/>
											</a>
										</li>
										<li>
											<a title="Extra Extra Large (3)" href="#">
												<img src="../images/sizes/XXL.jpg" alt="Extra Extra Large" width="32" height="32"/>
											</a>
										</li>
										<li>
											<a title="Large (3)" href="#">
												<img src="../images/sizes/L.jpg" alt="Large" width="32" height="32"/>
											</a>
										</li>
										<li>
											<a title="Medium (3)" href="#">
												<img src="../images/sizes/M.jpg" alt="Medium" width="32" height="32"/>
											</a>
										</li>
										<li>
											<a title="Small (3)" href="#">
												<img src="../images/sizes/S.jpg" alt="Small" width="32" height="32"/>
											</a>
										</li>
									</ul>
								</div>
						
								<div class="widget shop widget_products">
									<h4 class="widget-title"><span>Best Sellers</span></h4>
									<ul class="product_list_widget">
										<li>
											<a href="#" title="Donec tincidunt justo">
												<img width="100" height="150" src="../images/product/product-13.jpg" alt="Product-13"/> 
												<span class="product-title">Donec tincidunt justo</span>
											</a>
											<del><span class="amount">&#36;20.50</span></del> 
											<ins><span class="amount">&#36;19.00</span></ins>
										</li>
										<li>
											<a href="#" title="Nunc lacus sem">
												<img width="100" height="150" src="../images/product/product-11.jpg" alt="Product-11"/> 
												<span class="product-title">Nunc lacus sem</span>
											</a>
											<span class="amount">&#36;10.95</span>
										</li>
										<li>
											<a href="#" title="Mauris egestas">
												<img width="100" height="150" src="../images/product/product-10.jpg" alt="Product-10"/> 
												<span class="product-title">Mauris egestas</span>
											</a>
											<span class="amount">&#36;14.95</span>
										</li>
										<li>
											<a href="#" title="Morbi fermentum">
												<img width="100" height="150" src="../images/product/product-9.jpg" alt="Product-9"/> 
												<span class="product-title">Morbi fermentum</span>
											</a>
											<span class="amount">&#36;17.45</span>
										</li>
										<li>
											<a href="#" title="Morbi fermentum">
												<img width="100" height="150" src="../images/product/product-8.jpg" alt="Product-8"/> 
												<span class="product-title">Morbi fermentum</span>
											</a>
											<span class="amount">&#36;23.00</span>
										</li>
									</ul>
								</div>
		
							</div>
						</div>
			



































						<div class="col-md-9 main-wrap" main-wrap class="main-content  ">
							<div data-itemselector=".product.infinite-scroll-item" data-layout="masonry" data-paginate="infinite_scroll" data-masonry-column="4" class="shop products-masonry  infinite-scroll masonry">
								<div class="masonry-filter">
									<div class="filter-action filter-action-center">
										<ul data-filter-key="filter">
											<li>
												<a class="selected" href="#" data-filter-value="*">All</a>
											</li>
											<li>
												<a href="#" data-filter-value=".aliquam">Aliquam</a>
											</li>
											<li>
												<a href="#" data-filter-value=".donec">Donec</a>
											</li>
											<li>
												<a href="#" data-filter-value=".maecenas">Maecenas</a>
											</li>
											<li>
												<a href="#" data-filter-value=".nulla">Nulla</a>
											</li>
										</ul>
									</div>
								</div>



								<div class="products-masonry-wrap">

									<ul class="products masonry-products row masonry-wrap">
										<li class="product masonry-item col-md-3 col-sm-6 maecenas nulla">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
																<img width="300" height="350" src="../images/product/product-14.jpg" alt="Product-14"/>
															</div>
															<div class="yith-wcwl-add-to-wishlist">
																<div class="yith-wcwl-add-button">
																	<a href="#" class="add_to_wishlist">
																		Add to Wishlist
																	</a>
																</div>
															</div>
															<div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">WAAD</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;14.95</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>








<!-- 
										<li class="product masonry-item col-md-3 col-sm-6 maecenas nulla">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<span class="onsale">Sale!</span>
															<div class="shop-loop-thumbnail">
																<img width="300" height="350" src="../images/product/product-13.jpg" alt="Product-13"/>
															</div>
															<div class="yith-wcwl-add-to-wishlist">
																<div class="yith-wcwl-add-button">
																	<a href="#" class="add_to_wishlist">
																		Add to Wishlist
																	</a>
																</div>
															</div>
															<div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Donec tincidunt justo</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<del><span class="amount">&#36;20.50</span></del> <ins><span class="amount">&#36;19.00</span></ins>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product masonry-item col-md-3 col-sm-6 donec maecenas">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
																<img width="300" height="350" src="../images/product/product-12.jpg" alt="Product-12"/>
															</div>
															<div class="yith-wcwl-add-to-wishlist">
																<div class="yith-wcwl-add-button">
																	<a href="#" class="add_to_wishlist">
																		Add to Wishlist
																	</a>
																</div>
															</div>
															<div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Quisque libero sagittis</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;17.50</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product masonry-item col-md-3 col-sm-6 aliquam nulla">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
																<img width="300" height="350" src="../images/product/product-11.jpg" alt="Product-11"/>
															</div>
															<div class="yith-wcwl-add-to-wishlist">
																<div class="yith-wcwl-add-button">
																	<a href="#" class="add_to_wishlist">
																		Add to Wishlist
																	</a>
																</div>
															</div>
															<div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Nunc lacus sem</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;10.95</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product masonry-item col-md-3 col-sm-6 nulla">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
																<img width="300" height="350" src="../images/product/product-10.jpg" alt="Product-10"/>
															</div>
															<div class="yith-wcwl-add-to-wishlist">
																<div class="yith-wcwl-add-button">
																	<a href="#" class="add_to_wishlist">
																		Add to Wishlist
																	</a>
																</div>
															</div>
															<div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Mauris egestas</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;14.95</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product masonry-item col-md-3 col-sm-6 donec maecenas">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
																<img width="300" height="350" src="../images/product/product-9.jpg" alt="Product-9"/>
															</div>
															<div class="yith-wcwl-add-to-wishlist">
																<div class="yith-wcwl-add-button">
																	<a href="#" class="add_to_wishlist">
																		Add to Wishlist
																	</a>
																</div>
															</div>
															<div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Morbi fermentum</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;17.45</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product masonry-item col-md-3 col-sm-6 aliquam nulla">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
																<img width="300" height="350" src="../images/product/product-8.jpg" alt="Product-8"/>
															</div>
															<div class="yith-wcwl-add-to-wishlist">
																<div class="yith-wcwl-add-button">
																	<a href="#" class="add_to_wishlist">
																		Add to Wishlist
																	</a>
																</div>
															</div>
															<div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Morbi fermentum</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;23.00</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product masonry-item col-md-3 col-sm-6 donec maecenas">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
																<img width="300" height="350" src="../images/product/product-7.jpg" alt="Product-7"/>
															</div>
															<div class="yith-wcwl-add-to-wishlist">
																<div class="yith-wcwl-add-button">
																	<a href="#" class="add_to_wishlist">
																		Add to Wishlist
																	</a>
																</div>
															</div>
															<div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Ut quis Aenean</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;10.95</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li> -->
									</ul>
								</div>
							</div>
						</div>








                        </div>

                        </div>
				</div>
		
































































						<!-- <div class="col-md-9 main-wrap">
							<div class="main-content">
								<div class="shop-loop grid">
									<ul class="products">
										<li class="product">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
                                                                <img width="300" height="350" src="../images/product/product-1.jpg" alt="Product-1"/>
                                                            </div>
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        Add to Wishlist
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Cras rhoncus duis viverra</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;23.00</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
															<div class="info-excerpt">
																Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id&hellip;
															</div>
															<div class="list-info-meta clearfix">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;23.00</span>
																	</span>
																</div>
																<div class="list-action clearfix">
																	<div class="loop-add-to-cart">
																		<a href="#">Select options</a>
																	</div>
																	<div class="yith-wcwl-add-to-wishlist">
																		<div class="yith-wcwl-add-button">
																			<a href="#" class="add_to_wishlist">
																				Add to Wishlist
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
                                                                <img width="300" height="350" src="../images/product/product-3.jpg" alt="Product-3"/>
                                                            </div>
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        Add to Wishlist
                                                                    </a>
                                                                </div>
                                                            </div>
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
																	<a href="#">Select options</a>
																</div>
															</div>
															<div class="info-excerpt">
																Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id&hellip;
															</div>
															<div class="list-info-meta clearfix">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;23.00</span>
																	</span>
																</div>
																<div class="list-action clearfix">
																	<div class="loop-add-to-cart">
																		<a href="#">Select options</a>
																	</div>
																	<div class="yith-wcwl-add-to-wishlist">
																		<div class="yith-wcwl-add-button">
																			<a href="#" class="add_to_wishlist">
																				Add to Wishlist
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<span class="onsale">Sale!</span>
                                                            <div class="shop-loop-thumbnail">
                                                                <img width="300" height="350" src="../images/product/product-13.jpg" alt="Product-13"/>
                                                            </div>
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        Add to Wishlist
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Donec tincidunt justo</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<del><span class="amount">&#36;20.50</span></del> <ins><span class="amount">&#36;19.00</span></ins>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
															<div class="info-excerpt">
																Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id&hellip;
															</div>
															<div class="list-info-meta clearfix">
																<div class="info-price">
																	<span class="price">
																		<del><span class="amount">&#36;20.50</span></del> <ins><span class="amount">&#36;19.00</span></ins>
																	</span>
																</div>
																<div class="list-action clearfix">
																	<div class="loop-add-to-cart">
																		<a href="#">Select options</a>
																	</div>
																	<div class="yith-wcwl-add-to-wishlist">
																		<div class="yith-wcwl-add-button">
																			<a href="#" class="add_to_wishlist">
																				Add to Wishlist
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
                                                                <img width="300" height="350" src="../images/product/product-4.jpg" alt="Product-4"/>
                                                            </div>
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        Add to Wishlist
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Green Chile Burritos</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;10.75</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
															<div class="info-excerpt">
																Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id&hellip;
															</div>
															<div class="list-info-meta clearfix">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;10.75</span>
																	</span>
																</div>
																<div class="list-action clearfix">
																	<div class="loop-add-to-cart">
																		<a href="#">Select options</a>
																	</div>
																	<div class="yith-wcwl-add-to-wishlist">
																		<div class="yith-wcwl-add-button">
																			<a href="#" class="add_to_wishlist">
																				Add to Wishlist
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
                                                                <img width="300" height="350" src="../images/product/product-5.jpg" alt="Product-5"/>
                                                            </div>
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        Add to Wishlist
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Jalapeno Dressing Salad</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;17.75</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
															<div class="info-excerpt">
																Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id&hellip;
															</div>
															<div class="list-info-meta clearfix">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;17.75</span>
																	</span>
																</div>
																<div class="list-action clearfix">
																	<div class="loop-add-to-cart">
																		<a href="#">Select options</a>
																	</div>
																	<div class="yith-wcwl-add-to-wishlist">
																		<div class="yith-wcwl-add-button">
																			<a href="#" class="add_to_wishlist">
																				Add to Wishlist
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
                                                                <img width="300" height="350" src="../images/product/product-10.jpg" alt="Product-10"/>
                                                            </div>
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        Add to Wishlist
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Mauris egestas</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;14.95</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
															<div class="info-excerpt">
																Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id&hellip;
															</div>
															<div class="list-info-meta clearfix">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;14.95</span>
																	</span>
																</div>
																<div class="list-action clearfix">
																	<div class="loop-add-to-cart">
																		<a href="#">Select options</a>
																	</div>
																	<div class="yith-wcwl-add-to-wishlist">
																		<div class="yith-wcwl-add-button">
																			<a href="#" class="add_to_wishlist">
																				Add to Wishlist
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
                                                                <img width="300" height="350" src="../images/product/product-9.jpg" alt="Product-9"/>
                                                            </div>
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        Add to Wishlist
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Morbi fermentum</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;17.45</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
															<div class="info-excerpt">
																Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id&hellip;
															</div>
															<div class="list-info-meta clearfix">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;17.45</span>
																	</span>
																</div>
																<div class="list-action clearfix">
																	<div class="loop-add-to-cart">
																		<a href="#">Select options</a>
																	</div>
																	<div class="yith-wcwl-add-to-wishlist">
																		<div class="yith-wcwl-add-button">
																			<a href="#" class="add_to_wishlist">
																				Add to Wishlist
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
                                                                <img width="300" height="350" src="../images/product/product-8.jpg" alt="Product-8"/>
                                                            </div>
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        Add to Wishlist
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Morbi fermentum</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;23.00</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
															<div class="info-excerpt">
																Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id&hellip;
															</div>
															<div class="list-info-meta clearfix">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;23.00</span>
																	</span>
																</div>
																<div class="list-action clearfix">
																	<div class="loop-add-to-cart">
																		<a href="#">Select options</a>
																	</div>
																	<div class="yith-wcwl-add-to-wishlist">
																		<div class="yith-wcwl-add-button">
																			<a href="#" class="add_to_wishlist">
																				Add to Wishlist
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
                                                                <img width="300" height="350" src="../images/product/product-2.jpg" alt="Product-2"/>
                                                            </div>
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        Add to Wishlist
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Morbi sed egestas</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;23.00</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
															<div class="info-excerpt">
																Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id&hellip;
															</div>
															<div class="list-info-meta clearfix">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;23.00</span>
																	</span>
																</div>
																<div class="list-action clearfix">
																	<div class="loop-add-to-cart">
																		<a href="#">Select options</a>
																	</div>
																	<div class="yith-wcwl-add-to-wishlist">
																		<div class="yith-wcwl-add-button">
																			<a href="#" class="add_to_wishlist">
																				Add to Wishlist
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
                                                                <img width="300" height="350" src="../images/product/product-14.jpg" alt="Product-14"/>
                                                            </div>
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        Add to Wishlist
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Nunc interdum</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;14.95</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
															<div class="info-excerpt">
																Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id&hellip;
															</div>
															<div class="list-info-meta clearfix">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;14.95</span>
																	</span>
																</div>
																<div class="list-action clearfix">
																	<div class="loop-add-to-cart">
																		<a href="#">Select options</a>
																	</div>
																	<div class="yith-wcwl-add-to-wishlist">
																		<div class="yith-wcwl-add-button">
																			<a href="#" class="add_to_wishlist">
																				Add to Wishlist
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
                                                                <img width="300" height="350" src="../images/product/product-11.jpg" alt="Product-11"/>
                                                            </div>
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        Add to Wishlist
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Nunc lacus sem</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;10.95</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
															<div class="info-excerpt">
																Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id&hellip;
															</div>
															<div class="list-info-meta clearfix">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;10.95</span>
																	</span>
																</div>
																<div class="list-action clearfix">
																	<div class="loop-add-to-cart">
																		<a href="#">Select options</a>
																	</div>
																	<div class="yith-wcwl-add-to-wishlist">
																		<div class="yith-wcwl-add-button">
																			<a href="#" class="add_to_wishlist">
																				Add to Wishlist
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
										<li class="product">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
                                                                <img width="300" height="350" src="../images/product/product-6.jpg" alt="Product-6"/>
                                                            </div>
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        Add to Wishlist
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
															<div class="shop-loop-quickview">
																<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="#">Pesto Cauliflower</a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;15.05</span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="#">Select options</a>
																</div>
															</div>
															<div class="info-excerpt">
																Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id&hellip;
															</div>
															<div class="list-info-meta clearfix">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">&#36;15.05</span>
																	</span>
																</div>
																<div class="list-action clearfix">
																	<div class="loop-add-to-cart">
																		<a href="#">Select options</a>
																	</div>
																	<div class="yith-wcwl-add-to-wishlist">
																		<div class="yith-wcwl-add-button">
																			<a href="#" class="add_to_wishlist">
																				Add to Wishlist
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
									</ul>
								</div>
								<nav class="shop-pagination">
									<p class="shop-result-count">
										Showing 1&ndash;12 of 14 results
									</p>
									<div class="paginate">
										<div class="paginate_links">
											<span class='page-numbers current'>1</span>
											<a class='page-numbers' href='#'>2</a>
											<a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
										</div>
									</div>
								</nav>
							</div>
						</div> -->
		










<script>
document.body.classList.add("shop","page-layout-left-sidebar")
</script>










<?php require 'footer.php'; ?>