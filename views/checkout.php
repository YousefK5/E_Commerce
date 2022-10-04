<?php require_once 'connection.php'; ?>
<?php
$total = isset($_GET['price']);
$coupon = isset($_GET['c']);
$userid = 13; //$_SESSION['userid'];
if (isset($_POST['Chekout'])) {
    $date = date('Y/m/d');
    $q = "INSERT INTO orders(total_price,user_id,order_date,order_address, order_phone, postal_code, order_city,coupon_id) 
    VALUES (:total1,:user_id1,:date1,:address1,:phone1,:postal_code1,:city1,:c)"; // INSERT INTO `orders` (`total_price`, `user_id`, `date`, `address`, `phone`, `postal_code`, `coupon_id`, `city`) VALUES (:total, '9', '2022-10-02 21:10:10.000000', 'مم', '655', '666', NULL, 'sssvv');
    $stmt = $connect->prepare($q);
    $stmt->bindParam(':user_id1', $userid);
    $stmt->bindParam(':total1', $_REQUEST['price']);
    $stmt->bindParam(':date1', $date);
    $stmt->bindParam(':address1', $_REQUEST['address']);
    $stmt->bindParam(':phone1', $_REQUEST['phone']);
    $stmt->bindParam(':postal_code1', $_REQUEST['postal_code']);
    $stmt->bindParam(':city1', $_REQUEST['city']);
    $stmt->bindParam(':c', $_REQUEST['c']); //  $stmt->execute();
    $stmt->execute();
    header('location:order_history.php'); //    header('Refresh:0');
}
$query = 'SELECT * from `users` where user_id=?';
$query = $connect->prepare($query);
$query->execute([$userid]);
$user = $query->fetch(PDO::FETCH_OBJ);
?>

<?php require 'header2.php'; ?>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->



               <div class="heading-container">
				<div class="container heading-standar">
					<div class="page-breadcrumb">
						<ul class="breadcrumb">
							<li><span><a href="/views/profile.php" class="home"><span>Cart</span></a></span></li>
							<li><span>Checkout</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="content-container">
				<div class="container">
					<div class="row">
						<div class="col-md-8 main-wrap">
							<div class="main-content">
								<div class="shop">
                                <h2>ADD YOUR INFORMATION</h2>
									<form method="post" action="checkout.php">
										



<div class="row">
    <div class="col-sm-12">
        <div>
            <p class="form-control-wrap your-name">
                <LAbel> Full Name </LAbel>
                <input type="text" name="address"  size="40"  class="form-control text validates-as-required" style="width:50%" />
            </p>
        </div>
    </div>
    <div class="col-sm-12">
    <div>
            <p class="form-control-wrap your-name">
            <LAbel>Phone </LAbel>
                <input type="text" name="phone" value="<?php echo $user->phone; ?>" size="40" class="form-control text validates-as-required" style="width:50%"/>
            </p>
        </div>
    </div>
    <div class="col-sm-12">
   <div>
            <p class="form-control-wrap your-name">
            <LAbel>Address </LAbel>
                <input type="text" name="address" value="<?php echo $user->address; ?>" size="40" class="form-control text validates-as-required" style="width:50%"/>
            </p>
        </div>
    </div>
    <div class="col-sm-12">
  <div>
            <p class="form-control-wrap your-name">
            <LAbel>City </LAbel>
                <input type="text" name="city" value="<?php echo $user->city; ?>" size="40" class="form-control text validates-as-required" style="width:50%"/>
            </p>
        </div>
    </div>
    <div class="col-sm-12">
        <div>

            <p class="form-control-wrap your-name">
            <LAbel>Postal Code </LAbel>
            <input type="hidden" name="price" value="<?php echo $total; ?>" size="40" class="form-control text validates-as-required" style="width:50%"/>
            <input type="hidden" name="c" value="<?php echo $coupon; ?>" size="40" class="form-control text validates-as-required" style="width:50%"/>
                <input type="text" name="postal_code" value="" size="40" class="form-control text validates-as-required" style="width:50%"/>
            </p>
        </div>
    </div>

</div>

<div class="row">












</div>

















<input type="submit" name="Chekout" value="Chekout"  class="form-control submit" />
</form>
					</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php require_once 'footer.php'; ?>

