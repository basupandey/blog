<?php
//include('inc_session.php');
include('functions.php');
if(isset($_POST['submit']))
{
	$cid=$_POST['cid'];
	$uid=1;
	$title=$_POST['title'];
	$keyword=$_POST['keyword'];
	$description=$_POST['description'];
	$heading=$_POST['heading'];
	$story=$_POST['story'];
	$date=date('Y-m-d h:i:s');
	$status=$_POST['status'];


$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$fimage='uploads/'. basename($_FILES["fileToUpload"]["name"]);

//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);


//exit;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "pdf") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        

//Sql Statement
	$sql="INSERT INTO blog (cid, uid, title, keyword, description, heading, story, fimage, `date`, status) VALUES ('$cid', '$uid' ,'$title', '$keyword' , '$description' , '$heading' , '$story', '$fimage', '$date', '$status')";

	//making connection
	include('connection.php');

	//INserting Data
	$qry=mysqli_query($conn, $sql);

	//Messaging to user
	if($qry)
{
		header('Location: displayblog.php');
			echo "Data Inserted";	}
	else
	{echo "Data not Inserted";	}




    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


	

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
        <li class="breadcrumb-item active">Add Blog</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-md-12">


          <form method="POST" action="" name="frmAddUser" enctype="multipart/form-data">
		<fieldset>
			<legend>Category</legend>
			<select name="cid">
				
				<?php category(); ?>

			</select>
			<br/>
			<input type="text" name="title" placeholder="title">
			<br/>
			<input type="text" name="keyword" placeholder="keywords">
			<br/>
			<input type="text" name="description" placeholder="description">
			<br/>
			<input type="text" name="heading" placeholder="heading">
			<br/>
<textarea name="story" rows=5 cols=60 placeholder="story">
</textarea>
<br/>
<input type="file" name="fileToUpload">
<br/>

		<input type="radio" name="status" value="1" selected>Active
			<input type="radio" name="status" value="0">Deactive
			<br/>
			<input type="submit" name="submit" value="Add Blog">
			<br>
			

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