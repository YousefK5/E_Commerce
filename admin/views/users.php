<?php
require_once '../../views/connection.php';

$users = $connect->query('SELECT * FROM users');
$users = $users->fetchAll();
?>


<?php require 'header.php'; ?>
<div class="container-fluid page-body-wrapper">
<?php require 'sidebar.php'; ?>

<div class="main-panel">
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
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>User <b>Management</b></h2>
                    </div>
                    <div class="col-sm-7">
                        <a href="../control/addUser.php" class="btn btn-secondary bttn"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>					
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>						
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>Orders</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) { ?>
                    <tr>
                        <td><?php echo $user['user_id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user[
                            'email'
                        ]; ?></td>                        
                        <td><?php echo $user[
                            'phone'
                        ]; ?></td>                        
                        <td><?php echo $user['city']; ?> , <?php echo $user[
     'address'
 ]; ?></td>
                        <td><?php echo $user['is_admin']
                            ? 'Admin'
                            : 'Memeber'; ?></td>
                        <td>
                            <a href="#" class="settings" title="View Orders" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                        </td>
                        <td>
                            <a href="../control/editUser.php?id=<?php echo $user[
                                'user_id'
                            ]; ?>" class="settings" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>  
</div>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>

<?php require 'footer.php'; ?>
