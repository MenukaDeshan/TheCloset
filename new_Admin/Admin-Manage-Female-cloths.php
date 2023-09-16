<!DOCTYPE html>
<?php include("../connection.php");?>
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
<section id="table" class="container">
<h3 class="login-heading mb-4">Female Cloths Manage</h3>
<table class="table">
  <tr>
    <th>Clothes Name</th>
    <th>Discription</th>
    <th>Price</th>
    <th>Size</th>
    <th>Metirial</th>
    <th>Image</th>
    <th>Action</th>
  </tr>
  <?php
        {
          $query = "select * from fclothes";
          $select_cloths = mysqli_query($conn, $query);

          while ($row = mysqli_fetch_assoc($select_cloths)) {
            $id = $row['id'];
            $Name = $row['name'];
            $Discription = $row['discription'];
            $price = $row['price'];
            $Size = $row['size'];
            $Metirial = $row['metirial'];
            $Image = $row['file'];


            echo "<tr>";
            echo "<td>$Name</td>";
            echo "<td>$Discription</td>";
            echo "<td>$price</td>";
            echo "<td>$Size</td>";
            echo "<td>$Metirial</td>";
            echo "<td>$Image</td>";
            echo "<td><a href='Admin-Female-Update.php?edit={$id}'>Update</a><br>
                      <a href='Admin-Manage-Female-cloths.php?delete={$id}'>Delete</a></td>";
            echo "</tr>";
          }
        }
        ?>
      <?php 
        
        if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            $query = "delete from fclothes where id = {$id}";
            $delete_query = mysqli_query($conn, $query);
            
        }
        ?>
</table>
</section>

</body>
</html>


