<div  class="callbacks_container">
					<ul class="rslides" id="slider4">
					       <li>
							  <img src="images/1.jpg" class="img-responsive" alt="" />

							</li>
							<li>
								 <img src="images/2.jpg" class="img-responsive" alt="" />


							</li>
							<li>
							 <img src="images/3.jpg" class="img-responsive" alt="" />

							
							</li>
							<li>
							 <img src="images/3.jpg" class="img-responsive" alt="" />


							</li>
						</ul>
						</div>


						<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>


			   <div class="clearfix"> </div>
			    <div class="b-bottom"> 
			      <h5 class="top"><a href="single.html">What turn out consetetur sadipscing elit</a></h5>
			      <p>On Aug 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
				</div>