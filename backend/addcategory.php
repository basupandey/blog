<?php
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $description=$_POST['description'];
 
  $status=$_POST['status'];


  //Sql Statement
  $sql="INSERT INTO category (name, description, status) VALUES ('$name', '$description', '$status')";

  //making connection
  include('connection.php');

  //INserting Data
  $qry=mysqli_query($conn, $sql);

  //Messaging to user
  if($qry)

  {   

header('Location: displaycategory.php');
//echo "Data Inserted"; 
}
  else
  {echo "Data not Inserted";  }

  //Closing Connection
  mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Dashboard</title>
  <?php include('inc_head.php');?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('inc_menu.php');?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-md-12">


          <form method="POST" action="" name="frmAddUser" enctype="multipart/form-data">
    <fieldset>
      <legend>Add Category</legend>
      <input type="text" name="name" placeholder="name">
      <br/>
      <input type="text" name="description" placeholder="description">
      
      <br/>
      <input type="radio" name="status" value="1" checked>Active
      <input type="radio" name="status" value="0">Deactive
      <br/>
      <input type="submit" name="submit" value="Add Category">
     

    </fieldset>
  </form>
        </div>
      </div>

      <!-- Example DataTables Card-->
     
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
  <?php include('inc_footer.php');
  ?>
  </div>
</body>

</html>
