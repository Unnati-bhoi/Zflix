<?php
	ob_start();
	session_start();
	?>

<?php
include("header.php");
?>
<!---->
<!-- admin login detail code -->
<?php
include('config.php');
	if(isset($_POST['submit']))
	{
	
		$user = $_POST['email_id'];
		$pass = $_POST['password'];
		$sql = "select * from tbl_login where email_id = '$user'
		 and password = '$pass' 
        and status =0";
		$result = mysqli_query($con,$sql);
		$count = mysqli_num_rows($result);
		if($count > 0)
		{
			while($row = mysqli_fetch_array($result))
			{
					$type= $row['type'];
			}
			if(($type=="admin")||($type=='Admin'))
			{
			$_SESSION['user'] = $user;								
	echo "<script language='javascript'>window.location.href='admin/index.php';</script>";
			}
			elseif(($type=="user")||($type=='User'))
			{
			$_SESSION['user'] = $user;
			echo "<script language='javascript'>window.location.href='user/index.php';</script>";
			}
			}
		else
		{
	echo "<script language='javascript'>alert('Enter correct Email-Id  or Password.');</script>";
			
		}
		}
	?>

</div>
		<!---->
		<div class="container">
		<div class="account_grid">
		<h2 >Login</h2>
			   <div class=" login-right">
			  	<h3 >REGISTERED CUSTOMERS</h3>
				<p >If you have an account with us, please log in.</p>
				<form method="post">
				  <div>
					<span >Email Address</span>
					<input type="text" name="email_id" value=""> 
				  </div>
				  <div>
					<span >Password</span>
					<input type="text" name="password" value=""> 
				  </div>
				  <a class="forgot" href="forgot.php" >Forgot Your Password?</a>
				  <input type="submit" name="submit" value="Login">
			    </form>
			   </div>	
			    <div class=" login-left">
			  	 <h3 >NEW CUSTOMERS</h3>
				 
				 <a class="acount-btn" href="register.php">Create an Account</a>
			   </div>
			
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