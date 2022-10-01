
<?php
require_once '../../views/connection.php';

try {
    $success = 0;
    if (isset($_POST['addUser'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $role = $_POST['role'];

        $sql = $connect->query("INSERT INTO users (name,address,phone,email,password,is_admin,city)
        VALUES ('$name','$address','$phone','$email','$password','$role','$city')");

        if ($sql) {
            $success = 1;
            header('Refresh: 5; url=../views/users.php');
        }
    }
} catch (Exception $e) {
}
?>

<?php require '../views/header.php'; ?>
<div class="container-fluid page-body-wrapper">
<?php require '../views/sidebar.php'; ?>

<div class="main-panel">
          <?php echo "<div class='alert alert-success' role='alert'>
            Success , You Added New User
            </div>"; ?>
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-contacts menu-icon"></i>
                </span> Users
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="container-xl">
                <h3>Add New User</h3>
                <hr>
            <form class="form" method='post'>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="John Martin" name='name' required>
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="example@gmail.com" name='email' required>
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name='pass' required>
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="0771223322" name='phone' required>
                    <label for="floatingInput">Phone Number</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="City" name='city' required>
                    <label for="floatingPassword">City</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Address" name='address' required>
                    <label for="floatingInput">Address</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" name='role'>
                    <option selected value=0>Member</option>
                    <option value=1>Admin</option>
                    </select>
                    <label for="floatingSelect">Role</label>
                </div>
                <!-- <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                </div> -->
                <div>
                    <input type="submit" class="btn btn-lg btn-outline-primary" value="Add User" name='addUser'>
                </div>
</form>
</div>  
</div>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>

<?php require '../views/footer.php'; ?>
