<?php
include("header.php");
?>
<?php
 include("config.php");
                            if(isset($_POST['change_password']))
                            {
								global $pass;
								$oldp = $_POST['oldp'];
								$newp = $_POST['newp'];
								$conp = $_POST['conp'];
								$sql = "select * from tbl_login where email_id = '$user' and status = 0";
								$result = mysqli_query($con,$sql);
								$count = mysqli_num_rows($result);
								if($count > 0)
								{
									while($row = mysqli_fetch_array($result))
									{
										$pass = $row['password'];
										
									}
									if($pass == $oldp)
									{
										if($newp == $conp)
										{
											$sql1 = "update tbl_user set password = '$newp' where email_id = '$user' and status = 0";
											$result1 = mysqli_query($con,$sql1);
											if($result1)
											{
												echo "<script language='javascript'>alert('Your Password is successfully Changed');</script>";
												echo "<script language='javascript'>window.location.href='../index.php';</script>";
											}
											
											
											
											
											$sql2 = "update tbl_login set password = '$newp' where email_id= '$user' and status = 0";
											$result2 = mysqli_query($con,$sql2);
											if($result2)
											{
												echo "<script language='javascript'>alert('Your Password is successfully Changed');</script>";
												echo "<script language='javascript'>window.location.href='../index.php';</script>";
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
							}
						?>
		 

<!-- 
     name validation code only character value accept -->

<script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)|| (charCode == 32))
                    return true;
                else
                    return false;

            }
            catch (err) {
                alert(err.Description);
				
            }
        }

    </script>

<!-- contact validation code only put number -->

<script type="text/javascript">
      var specialKeys = new Array();
     specialKeys.push(8); //
     function IsNumeric(e) {
        var keyCode = e.which ? e.which : e.keyCode
     var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>  
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

	<h2>Change Password</h2>
</div>
		<!---->
		<div class="container">
		<div class="register">
		<h3>Password INFORMATION</h3>
		  	  <form method="post" enctype="multipart/form-data"> 
				
					
					<div class="mation">
					<div>
						<span>Old Password</span>
						<!-- for reqire field insert code -->
						<input type="text" placeholder="Old Password" name="oldp" > 
					</div>
					
					</div>
                    <div>
							<span>New Password</span>
							<!-- for reqire field insert code -->
								<input type="text" placeholder="new Password" name="newp">						 
					</div>
                    <div>
							<span>Conferm Password</span>
								<input type="text" placeholder="conferm Password" name="conp">						 
					</div>
					 </div>
					
				     <input type="submit" name="change_password" value="change_password" style="background:#ff5d56;color:white;hight:10px;" >
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