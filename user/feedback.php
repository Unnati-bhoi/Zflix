<?php
include("header.php");
?>
<?php
include("config.php");
if(isset($_POST['send']))
{
	$user_id=$_POST['user_id'];
	$feedback_msg=$_POST['feedback_msg'];
	
			$sql= "select * from tbl_user where email_id = '$user' and status = 0";
				$result=mysqli_query($con,$sql);
				$count = mysqli_num_rows($result);
				while($row = mysqli_fetch_array($result))
					{
					
					$user_id = $row['user_id'];
					
					}

	$sql1="insert into tbl_feedback(user_id,feedback_msg,date)value('$user_id',
	'$feedback_msg',now())";
$result1=mysqli_query($con,$sql1);
if($result1)
{
	 echo "<script language='javascript'>alert('Thank you for feedback to us');</script>";
}
}
   ?> 


  <span id="error" class="ss-icon" style="color: Red; display: none" ></span>
<div class="clearfix"> </div>
					<!---->
				</div>
			<div class="clearfix"> </div>
		</div>
		</div>	
 				<div class="clearfix"> </div>	
			</div>
<!---->

	<h2>FeedBack</h2>
</div>
		<!---->
		<div class="container">
		<div class="register">
		<h3>Give FeedBack </h3>
		  	  <form method="post" enctype="multipart/form-data"> 
				
					
					<div class="mation">
					<div>
						<span>Email Id</span>
						<!-- for reqire field insert code -->
						<input type="text" placeholder="Email" name="user_id" value="<?php echo $user; ?>" > 
					</div>
					
					</div>
                    <div>
							<span>FeedBack Message</span>
							<!-- for reqire field insert code -->
								<input type="text"  placeholder="Feedback Message" name="feedback_msg">						 
					</div>
                    
					 </div>
				     <input type="submit" name="send" value="send" style="background:#ff5d56;color:white;">
				</form>
				
				
		   </div>
			
			<!---->
					
	<!---->
	
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

<?php
include("footer.php");
?>
</body>
</html>