
<?php
require_once '../../views/connection.php';

$categories = $connect->query('SELECT * FROM categories');
$categories = $categories->fetchAll();

try {
    $success = 0;
    if (isset($_POST['addProduct'])) {
        $filename1 = $_FILES['uploadimg1']['name'];
        $tempname1 = $_FILES['uploadimg1']['tmp_name'];
        $filename2 = $_FILES['uploadimg2']['name']
            ? $_FILES['uploadimg2']['name']
            : null;
        $tempname2 = $_FILES['uploadimg2']['tmp_name']
            ? $_FILES['uploadimg2']['tmp_name']
            : null;
        $filename3 = $_FILES['uploadimg3']['name']
            ? $_FILES['uploadimg3']['name']
            : null;
        $tempname3 = $_FILES['uploadimg3']['tmp_name']
            ? $_FILES['uploadimg3']['tmp_name']
            : null;
        $folder1 = '../../imgs/' . $filename1;
        $folder2 = '../../imgs/' . $filename2;
        $folder3 = '../../imgs/' . $filename3;
        $name = $_POST['name'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];
        $categoryID = $_POST['category'];

        $sql = $connect->query("INSERT INTO products (product_name,price,description,image1,image2,image3,category_id)
        VALUES ('$name','$price' ,'$desc','$filename1','$filename2','$filename3','$categoryID')");

        if ($sql) {
            move_uploaded_file($tempname1, $folder1);
            if ($filename2) {
                move_uploaded_file($tempname2, $folder2);
            }
            if ($filename3) {
                move_uploaded_file($tempname3, $folder3);
            }
            $success = 1;
            header('Refresh: 3; url=../views/products.php');
        }
    }
} catch (Exception $e) {
}
?>

<?php require '../views/header.php'; ?>
<div class="container-fluid page-body-wrapper">
<?php require 'sidebar.php'; ?>

<div class="main-panel">

          <?php if ($success) {
              echo "<div class='alert alert-success' role='alert'>
            Success , You Added New Product
            </div>";
          } ?>
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-contacts menu-icon"></i>
                </span> Products
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
                <h3>Add New Product</h3>
                <hr>
            <form class="form" method='post' enctype="multipart/form-data">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Mastressess" name='name' required>
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" placeholder="50$" name='price' required>
                    <label for="floatingInput">Price</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Write Description About Product Here"
                    name="desc" id="floatingTextarea2" style="height: 100px" required></textarea>
                    <label for="floatingTextarea2">Description</label>
                </div>
                <label for="floatingInput">Image 1</label>
                <div class="form-floating mb-3">
                    <input type="file" class="form-control" id="floatingInput" name='uploadimg1' required>
                </div>
                <label for="floatingInput">Image 2</label>
                <div class="form-floating mb-3">
                    <input type="file" class="form-control" id="floatingInput" name='uploadimg2'>
                </div>
                <label for="floatingInput">Image 3</label>
                <div class="form-floating mb-3">
                    <input type="file" class="form-control" id="floatingInput" name='uploadimg3'>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" name='category'>
                    <?php foreach ($categories as $category) { ?>
                        <option value="<?php echo $category[
                            'category_id'
                        ]; ?>"><?php echo $category[
    'category_name'
]; ?></option>
                    <?php } ?>
                    </select>
                    <label for="floatingSelect">Category Name</label>
                </div>
                <div>
                    <input type="submit" class="btn btn-lg btn-outline-primary" value="Add Product" name='addProduct'>
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
