<?php
include("header.php");
?>
<!---->
<!-- admin login detail code -->
<?php
include("config.php");

                            if(isset($_POST['submit']))
                            {
								global $email_id;
								global $pass;
								
								$email_id=$_GET['email_id'];
								
								$newp = $_POST['newpass'];
								
								$sql = "select * from tbl_login where email_id='$email_id'  and status = 0";
								$result = mysqli_query($con,$sql);
								$count = mysqli_num_rows($result);
								if($count > 0)
								{
									while($row = mysqli_fetch_array($result))
									
										if($newp)
										{
											$sql1 = "update tbl_login set password = '$newp' where email_id='$email_id'
											  and status = 0";
											$result1 = mysqli_query($con,$sql1);
											$sql5 = "update tbl_user set password = '$newp' where email_id='$email_id'
											  and status = 0";
											$result5 = mysqli_query($con,$sql5);
											if($result1 && $result5)
											{
												echo "<script language='javascript'>alert('Your Password is successfully Changed');</script>";
                                                echo "<script language='javascript'>window.location.href='index.php';</script>";
												
												$sql2 = "select * from tbl_login where email_id='$email_id'  and status=0";
												$result2 = mysqli_query($con,$sql2);
												$count2 = mysqli_num_rows($result2);
												if($count2 > 0)
												{
													while($row2 = mysqli_fetch_array($result2))
													{
														$passnew= $row2['password'];
													}
												
												}
											}
										}
										else
										{
											echo "<script language='javascript'>alert('please enter same password is not match');</script>";
										}
									}
									else
									{
										echo "<script language='javascript'>alert('Please enter your Current Password');</script>";
									}
								
							}
						?>

</div>
		<!---->
		<div class="container">
		<div class="account_grid">
		<h2 >Reset</h2>
			   <div class=" login-right">
			  	
				<form method="post">
				  <div>
					<span >Password</span>
					<input type="text" name="newpass" value=""> 
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