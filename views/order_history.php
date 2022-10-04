<?php require 'header2.php'; ?>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php
$delevery = 0;
$sub = 0;

//get cart info

$query = 'SELECT * from `orders` where user_id =?';
$query = $connect->prepare($query);
$query->execute([$_SESSION['userid']]);
$orders = $query->fetchAll(PDO::FETCH_OBJ);
print_r($_SESSION);
?>


               <div class="heading-container">
				<div class="container heading-standar">
					<div class="page-breadcrumb">
						<ul class="breadcrumb">
							<li><span><a href="/views/profile.php" class="home"><span>Profile</span></a></span></li>
							<li><span>Order History</span></li>
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
									<form method="post" action="order_history.php">
										<table class="table shop_table cart">
											<thead>
												<tr>	

													<th class="product-thumbnail hidden-xs">&nbsp;</th>
													<th class="product-name"> Order Number </th>
													<th class="product-price text-center">Date </th>
													<th class="product-quantity text-center">Total Price </th>
													<th class="product-subtotal text-center hidden-xs">phone</th>
													<th class="product-subtotal text-center hidden-xs">Address / Postal code</th>
													<th class="product-subtotal text-center hidden-xs">Used coupon</th>
													<th class="product-subtotal text-center hidden-xs">Details</th>



												</tr>
											</thead>
											<tbody>
                                                    <?php foreach (
                                                        $orders
                                                        as $order
                                                    ) {

                                                        //product
                                                        $query =
                                                            'SELECT * from `order_details` where order_id=? ';
                                                        $query = $connect->prepare(
                                                            $query
                                                        );
                                                        $query->execute([
                                                            $order->order_id,
                                                        ]);
                                                        $details = $query->fetchAll(
                                                            PDO::FETCH_OBJ
                                                        );
                                                        foreach (
                                                            $details
                                                            as $detail
                                                        ) {
                                                            $query =
                                                                'SELECT * from `products` where product_id=? ';
                                                            $query = $connect->prepare(
                                                                $query
                                                            );
                                                            $query->execute([
                                                                @$detail->product_id,
                                                            ]);
                                                            $products = [
                                                                $query->fetch(
                                                                    PDO::FETCH_OBJ
                                                                ),
                                                            ];
                                                        }
                                                        $query =
                                                            'SELECT coupon_name from `coupons` where coupon_id=? ';
                                                        $query = $connect->prepare(
                                                            $query
                                                        );
                                                        $query->execute([
                                                            $order->coupon_id,
                                                        ]);
                                                        $coupon_name = $query->fetch(
                                                            PDO::FETCH_OBJ
                                                        );

                                                        //
                                                        // $qunatity =$details->quantity;
                                                        // $unitPrice=$product->price;
                                                        ?>
                                                        <tr class="cart_item">
													<td class="product-remove hidden-xs">
													<span class="amount" id="subTotal"></span>

													</td>
													<td class="product-thumbnail hidden-xs">
													# <?php echo $order->order_id; ?>
					
													</td>

													<td class="product-price text-center">
                                                    <span class="amount"><?php echo $order->order_date; ?></span>
													</td>

													<td class="product-price text-center">
                                                    <span class="amount"> <?php echo $order->total_price; ?> JD </span>
													</td>
													<td class="product-price text-center">
                                                    <span class="amount"><?php echo $order->order_phone; ?></span>
													</td>
													<td class="product-price text-center">
														
														<span class="amount"><?php echo $order->order_address .
                  ',' .
                  $order->order_city .
                  '/' .
                  $order->postal_code; ?></span>
													</td>
													<td class="product-price text-center">
													<span class="amount"><<?php echo $coupon_name->coupon_name; ?></span>
													</td><td class="product-name">
													<?php foreach ($details as $detail) { ?>
<?php foreach ($products as $product) { ?>			
														<?php echo $product->product_name; ?></a>
												
														<dl class="variation">
															<dt class="variation-Size">unit_price:</dt>
															<dd class="variation-Size"><p><?php echo $detail->unit_price; ?></p></dd>
														</dl>
														<dl class="variation">
															<dt class="variation-Size">quantity:</dt>
															<dd class="variation-Size"><p><?php echo $detail->quantity; ?></p></dd>
														</dl>
												
														<hr>										
	<?php } ?>							<?php } ?>			</td>		
											</tr>

										<?php
                                                    } ?>
											</tbody>
										</table>
									</form>
									
		

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php require_once 'footer.php'; ?>


		<script src="cart.js"></script>