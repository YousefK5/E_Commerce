<?php require_once("../connection.php");




?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="icon" type="image/png" href="Images/carts.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>

<?php
 $stmt = $connect->query("SELECT * FROM users Where user_id=user_id");
 
 $user = $stmt->fetch();
 
 ?>
    <header>
     

        <!-- Start of Bottom Header -->
        <div class="bottom-header" id="bottom-head">
            <div class="sticky-bar-wrapper bg-white" id="sticky-section">
                <nav class="navbar navbar-expand-lg navbar-light bg-white" id="bottom-header-navbar">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.html"><img id="logo_img" src="Images/logo.png" alt="logo" role="img"
                                aria-label=" website logo"></a>
                        <div class="input-group d-xl-none d-lg-none" id="search-box-container">
                            <input type="search" id="search-box-hidden" class="form-control"
                                placeholder="Search products and Brands" aria-label="search box"
                                aria-describedby="basic-addon1">
                            <span id="basic-addon1"><img src="Images/magglass.png" alt="search-icon" role="icon"
                                    aria-labelledby="magnifying glass icon"></span>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav mr-auto mt-2 ml-xl-5 ml-lg-5 ml-md-0 mt-lg-0 text-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link drop-btn" href="Product-list.html">Categories</a>
                                    <div class="dropdown-content mt-2">
                                        <a href="Product-list.html">Men</a>
                                        <a href="Product-list.html">Women</a>
                                        <a href="Product-list.html">Ethnic</a>
                                      </div>
                                </li>
                                <li class="nav-item dropdown2">
                                    <a class="nav-link drop-btn2" href="my-order.html">Orders</a>
                                    <div class="dropdown-content2 mt-2">
                                        <a href="my-order.html">My Orders</a>
                                        <a href="Track-order.html">Track Orders</a>
                                        <a href="Return-order.html">Return Orders</a>
                                      </div>
                                </li>
                                <li class="nav-item wishlist">
                                    <a class="nav-link" href="Wishlist.html">Wishlist</a>
                                    <span class="badge" id="wishlist-badge">0</span>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active ml-xl-3 ml-md-0" href="My-profile.html">Profile</a>
                                </li>
                                <li class="nav-item notification">
                                    <a class="nav-link" href="Cart-page.html">Cart</a>
                                    <span class="badge" id="cart-badge">0</span>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0 d-flex flex-column align-items-stretch justify-content-start">
                                <button class="btn btn-orange my-2 my-sm-0" id="signin" type="button" data-toggle="modal"
                                data-target="#exampleModalCenter" aria-labelledby='sign-in-btn'>SIGN IN</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- LOGIN MODAL -->
           
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
                <label class="form-label"> Name</label>
           
                <input type="text"  class="form-control" name="name" value=<?php  print_r($user['name']) ?> class="form-control">
            </div>
         
    
     <div class="mb-3">
                <label class="form-label">address</label>
                <input type="text"  class="form-control" name="address"  value=<?php  print_r($user['address']);?>  
            </div>
        
     
     
    <div class="mb-3">
         
                <label class="form-label">phone</label>
                <input type="text"  class="form-control" name="phone" value=<?php  print_r($user['phone']);?>>
             </div>
        
    <div class="mb-3">
     
         
                <label class="form-label">Email</label>
                <input type="text"  class="form-control"  name="Email" value=<?php  print_r($user['email']);
 ?> >
            </div>
          <div class="mb-3">
                <label class="form-label">password</label>
                <input type="text"   class="form-control" name="password"  value=<?php  print_r($user['password']);
 ?>>
            </div>
         <div class="mb-3">

                <label class="form-label">City</label>
                <input type="text"   class="form-control" name="city" value=<?php  print_r($user['city']);
 ?> >
            </div>
         

      <div class="form-group">





           <div class="row">
           
            <div class="col-sm-6">


            <!-- $sql="update tblusers set FirstName=:fn,LastName=:ln,EmailId=:eml,ContactNumber=:cno,Address=:adrss where id=:uid"; -->

            </div>
           </div>
               </div>

               <div class="button-group d-flex flex-column mt-3" id="btn-group">
                        <button  class="btn btn-success" class="btn mb-3" name="update_profile"> Save Profile</button>

                    </div>
                </form>
            </main>


<?php if (isset($_POST['update_profile'])) {


    $stmt =  $connect->prepare("UPDATE users SET name=:name, address=:address, phone=:phone, Email=:Email, password=:password,city=:city WHERE user_id= user_id");
    // $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':Email', $Email);
     $stmt->bindParam(':password', $password);
                $stmt->bindParam(':city', $city);



   
    

       $name=$_POST['name'];
// $user_id=$_POST['user_id'];
 $address=$_POST['address'];  
 $phone=$_POST['phone']; 
$Email=$_POST['Email'];
$password=$_POST['password'];
$city=$_POST['city'];
$userimg=Null;
   
    $stmt->execute();
    // header("location:profile.php");
   
}





?>



    <!-- Start of Payment and Help -->

    <br><br>
    <section class='payment-help mt-5' aria-label='payments and help section'>
        <div class="container-fluid w-75">
            <div class="row">
                <div
                    class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 d-flex flex-column align-items-center justify-content-center text-center">
                    <img src="Images/secure-pay.png" alt="securepay" role="img" aria-label='secure pay image'>
                    <h2>free delivery</h2>
                    <p>Free delivery for our special customers</p>
                </div>
                <div
                    class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 d-flex flex-column align-items-center justify-content-center text-center">
                    <img src="Images/trust-pay.png" alt="trustpay" role="img" aria-label='trust pay image'>
                    <h2>TRUST PAY</h2>
                    <p>The safest way to pay and get a tax exemption for submitting an order</p>
                </div>
                <div
                    class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 d-flex flex-column align-items-center justify-content-center text-center">
                    <img src="Images/help-center.png" alt="helpcenter" role="img" aria-label='help center image'>
                    <h2>HELP CENTER</h2>
                    <p>Get fast technical support at all times</p>
                </div>
                <div
                    class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 d-flex flex-column align-items-center justify-content-center text-center">
                    <img src="Images/shop-on-go.png" alt="shopongo" role="img" aria-label='shop on go image'>
                    <h2>SHOP ON THE GO</h2>
                    <p>Shop freely and get the best benefits in terms of convenience and ease, in addition to tax exemptions</p>
                </div>
            </div>
        </div>
    </section>

    


    <!-- End of Payments and Help -->

    <!-- Start of Footer -->
    <br><br>
    
        <?php require_once("../footer.php");?> 

        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="Javascript/index.js"></script>
    <script src="Javascript/jQuery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>





<br><br><br>
            <?php require_once("../footer.php");?> 
























</body>

</html>