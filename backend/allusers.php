<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>All Users</title>
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
        <li class="breadcrumb-item active">All Users</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-md-12">
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Display All Users</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Uid</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th></th>
                 
                </tr>
              </thead>
              <tfoot>
                <tr>
                 <th>Uid</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </tfoot>
              <tbody>
                <?php

                $sql="SELECT * FROM users ORDER BY id DESC";

include('connection.php');

$qry=mysqli_query($conn, $sql);

//Displaying all Data 
while($row=mysqli_fetch_array($qry))

{
  echo "<tr>";
  echo "<td>". $row['id'] ."</td>";
  echo "<td>". $row['uname'] ."</td>";
   echo "<td>". $row['uemail'] ."</td>";
  echo "<td>". $row['ustatus'] ."</td>";
  echo "<td><a href='editdelete.php?id=".$row['id']."&&action=edit'>Edit</a> | <a href='editdelete.php?id=".$row['id']."&&action=delete'>Delete</a></td>";
  echo "</tr>";
}

                ?>
              
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
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
