<?php
include("header.php");
?>
<!---->
<!-- admin login detail code -->
<?php
include("config.php");
		if(isset($_POST['submit']))
					{
			include('config.php');
		$email_id = $_POST['email_id'];
	$sql = "select * from tbl_login where email_id = '$email_id' and status = 0";
					$result = mysqli_query($con,$sql);
						$count = mysqli_num_rows($result);
						if($count > 0)
						{
				while($row = mysqli_fetch_array($result))
					  		{
						$pass= $row['password'];
						}
					
									if($pass)
												{
													echo "<script language='javascript'>window.location.href='reset.php?email_id=".$email_id."';</script>";
												}
												
											}
											else
											{
												echo "<script language='javascript'>alert('User Name  or Password is wrong');</script>";
											}
										}
									?>
</div>
		<!---->
		<div class="container">
		<div class="account_grid">
		<h2 >Forgot</h2>
			   <div class=" login-right">
			  	
				<form method="post">
				  <div>
					<span >Email Address</span>
					<input type="text" name="email_id" value=""> 
				  </div>
				  
				  
				  <input type="submit" name="submit" value="Send">
			    </form>
			   </div>	
			    <div class=" login-left">
			  	 
			   </div>
			
			 </div>
		
			
			<!---->
				
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