<?php

							$sql="SELECT * FROM blog WHERE status=1";
							include('backend/connection.php');

							$qry=mysqli_query($conn, $sql);

							while($row=mysqli_fetch_array($qry))
							{

								$image=$row['fimage'];
								$heading=$row['heading'];
								$story=substr($row['story'],0,100);


								
							?>

<div class="col-md-6 top-text">
						 <a href="blog.php"><img src="<?php echo $image;?> " class="img-responsive" alt=""></a>
						    <h5 class="top"><a href="single.html"><?php echo $heading;?></a></h5>
							<p><?php echo $story;?></p>
						    <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="blog.php"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
					 </div>

					 <?php
					}
					?>