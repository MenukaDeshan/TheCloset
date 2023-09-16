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
                  <h3 class="login-heading mb-4">Search Cloths</h3>
<?php
      if(isset($_POST['search']))
      { 
         include("../connection.php");
	 
				
		$b=$_POST['Cloths_Name'];
	
            $sql = 'SELECT * FROM mclothes WHERE name = "'.$b.'"';

            $update = mysqli_query($conn,$sql);
					
  		  while($row = mysqli_fetch_assoc($update)) {
            $id = $row['id'];
            $Name = $row['name'];
            $Discription = $row['discription'];
            $price = $row['price'];
            $Size = $row['size'];
            $Metirial = $row['metirial'];
            $img = $row['file'];
           }
?>
                  <!-- ADD ITEMS Form -->
                  <form action="" method="post" name="form1" >
                    <div class="form-floating mb-3">
                      <input class="form-control  mb-2" type="text" name="Cloths_Name"  required>
                      <div class="d-grid">
				              <input class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" class="form-control" type="submit" class="achr regClass btn" id="search" name="search" placeholder="Search Cource Name" >
                    </div>

                    <div class="form-floating mb-3">
                      <input class="form-control" id="floatingInput" type="text" name="Cloths_Name" value="" placeholder="Enter Cloth Name" required>
                      <label for="floatingInput">Cloth Name</label>
                    </div>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control"  name="Discription" value="" placeholder="Description" required>
                      <label for="floatingPassword">Description</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="Price" value="" placeholder="Price">
                      <label>Price</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" type="text" name="Metirial" value="" placeholder="Material">
                      <label for="floatingPassword">Material</label>
                    </div>
    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
	
		
}


    
?>
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