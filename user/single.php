<?php
include("header.php");
?>
<!---->
					
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
								<?php echo"<img  src='../admin/plan/$row[6]'
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
							</ul><br>
							<form method="post">
	<input type="hidden" name="plan_name" value="<?php echo $row['name']; ?>">
    <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
    <input type="hidden" name="email_id" value="<?php echo $user;?>">
    <input type="submit" name="submit" value="submit" style="background-color:#ff5d56;
	color:#fff; border:#FFF; width:90px;height:40px">
							</form>
								
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
include("config.php");
if(isset($_POST['submit']))
{
    $plan_name=$_POST['plan_name'];
    $price=$_POST['price'];
    $user=$_POST['email_id'];
	 $sql="insert into plan_booking(plan_name,price,email_id,status)
    value('$plan_name','$price','$email_id','pending')";
$result=mysqli_query($con,$sql);
if($result)
{
  echo "<script>alert('booking successfully');</script>";
   echo "<script language='javascript'>window.location.href='payment.php';</script>";

}
}
?>



<?php
include("footer.php");
?>