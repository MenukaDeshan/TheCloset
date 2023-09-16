<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="../img/cwhite.png">
    <title>The Closet</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='../framework/bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' href='../framework/fontawesome/css/all.min.cs'>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/color.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../framework/fontawesome/css/all.css">
    <link rel="stylesheet" href="../framework/fontawesome/css/all.min.css">
    
</head>
<body>
<?php include("Admin-navigation-bar.php");?>
<section  class="container" id="login">
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4">Add Male Cloths</h3>
      
                    <!-- ADD ITEMS Form -->
                    <form action="#" method="post" enctype="multipart/form-data">
                      <div class="form-floating mb-3">
                        <input class="form-control" id="floatingInput" type="text" name="Cloths_Name" value="" placeholder="Enter Cloth Name" required>
                        <label for="floatingInput">Cloth Name</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input class="form-control"  name="Discription" value="" placeholder="Description" required>
                        <label for="floatingPassword">Description</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="Price" value="" placeholder="Price"required>
                        <label>Price</label>
                      </div>
                      <div class="form-group mb-3">
                        <label>Size</label>
                        <select class="form-control" name="Size">
                                <option value="Small">Small</option>
                                <option value="Medium">Medium</option>
                                <option value="Large">Large</option>
                        </select>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" type="text" name="Metirial" value="" placeholder="Material" required>
                        <label for="floatingPassword">Material</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control"  type="text" name="Qty" value="" placeholder="Quantity" required>
                        <label for="floatingPassword">Quantity</label>
                      </div>
                        <div class="form-group mb-3">
                            <label class="labelGrp">File</label>
                            <input class="achr" type="file" name="img">
                        </div>
                      <div class="d-grid">
                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="submit">ADD</button>
                      </div>
      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

</section>

<script src="js/dark.js"></script>
    <script src="js/snav.js"></script>
    <script src="js/product.js"></script>
    <script src="js/navdropdown.js"></script>
    <script src='framework/bootstrap/js/bootstrap.min.js'></script>
    <script src='framework/jquery/jquery.js'></script>
<script src="framework/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php 
if (isset($_POST['submit'])) {  
   include("../connection.php");
   
   $ClothesName = $_POST['Cloths_Name']; 
   $Discription = $_POST['Discription'];  
   $Price = $_POST['Price'];
   $Size = $_POST['Size'];
   $Metirial = $_POST['Metirial'];
   $img = $_FILES['img']['name'];
   $Qty = $_POST['Qty'];
   $img_temp = $_FILES['img']['tmp_name'];
  
   move_uploaded_file($img_temp, "../img/$img");
  
    
        if ($ClothesName==""||$Discription==""||$Price==""||$Size==""||$Metirial==""||$img=="")
        {
            $msg = "Clothes Details fields cant be empty.";
            echo "<script type='text/javascript'>alert('$msg');</script>";
            header("refresh:1; url=Admin-male-Add.php");
        }
    else
    {
    
	$sql = "INSERT INTO mclothes ". "(name,discription,price,size,metirial,file,qty) ". "VALUES('$ClothesName','$Discription','$Price','$Size','$Metirial','$img','$Qty')";

  
	$results = mysqli_query($conn, $sql);
            
            if(!$results) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
            else
			{
           $msg = "Successfully Entered";
            echo "<script type='text/javascript'>alert('$msg');</script>";
            header("refresh:1; url=Admin-male-Add.php");
			}
   }}  
?>