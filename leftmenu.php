<div class="col-md-3 top-nav">
				     <div class="logo">
						<a href="index.html"><h1>Blogger</h1></a>
					</div>
					<div class="top-menu">
					 <span class="menu"> </span>

					<ul class="cl-effect-16">
						<li><a class="active" href="index.php" data-hover="HOME">Home</a></li> 
						<li><a href="about.html" data-hover="About">About</a></li>
						
							<?php

							$sql="SELECT * FROM category WHERE status=1";
							include('backend/connection.php');

							$qry=mysqli_query($conn, $sql);

							while($row=mysqli_fetch_array($qry))
							{


								echo "<a href='#'><li data-hover='".$row['name']."'>".strtoupper($row['name'])."</li></a>";
							}
							?>



						<li><a href="gallery.html" data-hover="Gallery">Gallery</a></li>
						<li><a href="contact.html" data-hover="CONTACT">Contact</a></li>
					</ul>
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".top-menu ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav --> 	
					<ul class="side-icons">
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
					   </ul>
			    </div>
			</div>