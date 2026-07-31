<?php
include("header.php");
?>
<!---->
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"> </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> </span>)</div>
							<img src="images/cart2-2.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					

 </div>
					
</div>
<!---->
<!---->
<?php
include("config.php");
// plan_id='".$_REQUEST['plan_id']."'" for single photo take
$sql="select * from tbl_plan where status=0 and plan_id='".$_REQUEST['plan_id']."'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
        
        $path="plan/".$row['image'];
    
    ?>
		<!---->
		<div class="product">
			
		 
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
<!---->
	
		
					

				<!---->
				
<div class=" per1">
				
			</div>
				</div>
				<!---->
				<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">	




						<div class="flexslider">
							<ul class="slides">
								<li>
								<!-- $row[6] which row image has set on database that number row write -->
								<?php echo"<img  src='./admin/plan/$row[6]'
                            alt='Awesome Image' style='height:420px;width:480px;margin-top:-50px;margin-left:-60px;'>"?>
					
		</li>
		
					
							</ul>
						</div>
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

		</div>	
					<div class="col-md-7 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
					
							<div class="star-on">
								
								<div class="review">
									
								<h4>Name-<?php echo $row['name'];?></h4>
							
								</div>
							<div class="clearfix"> </div>
							</div>
							<h4>Price: ₹<?php echo $row['price'];?></h4>
							
								<div class="clearfix"> </div>
							</ul>
						</div>
							<ul class="tag-men">
								<li><span>START-DATE</span>
								<span class="women1"><?php echo $row['start_date'];?></span></li>
								<li><span>END-DATE</span>
								<span class="women1"><?php echo $row['end_date'];?></span></li>
							</ul>
								<a href="login.php" onclick="alert('plzz login first')" class="add-cart item_add" >BOOK NOW</a>
								
						</div>
					</div>
				<div class="clearfix"> </div>
			<!---->
					
	
	</div>
				 <!---->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
<!---->
</body>
</html>
<?php
					}
					?>
<?php
include("footer.php");
?>