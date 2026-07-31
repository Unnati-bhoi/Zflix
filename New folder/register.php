<?php
include("header.php");
?>
<?php
include("config.php");
if(isset($_POST['submit']))
{
    $user_name=$_POST['user_name'];
	$gender=$_POST['gender'];
	$email_id=$_POST['email_id'];
	$password=$_POST['password'];
	$id_proof=$_FILES['id_proof']['name'];
	$contact_no=$_POST['contact_no'];
	$address=$_POST['address'];
	$sql = "select * from tbl_login where email_id = '$email_id' and status = 0";
					$result = mysqli_query($con,$sql);
					$count = mysqli_num_rows($result);
									if($count >= 1)
															{
																echo "<script language='javascript'>alert('This email id is already registered here.');</script>";
																echo "<script language='javascript'>window.location.href='index.php';</script>";
															}
															else
															{
																
		$sql1 = "insert into tbl_user(user_name,gender,email_id,password,contact_no,address,id_proof) value('$user_name','$gender','$email_id','$password','$contact_no','$address','$id_proof')";
																$result1 = mysqli_query($con,$sql1);
																if($result1)
																{
																	echo "<script language='javascript'>alert('You have Register Successfully');</script>";
																	
																	echo "<script language='javascript'>window.location.href='index.php';</script>";
																}
															
							  							
													
											


		$sql2 = "insert into tbl_login(email_id,password,type)
		value('$email_id','$password','user')";
																$result2 = mysqli_query($con,$sql2);
																if($result2)
																{
																	
																}

	else
											  	{
											  		echo "<script language='javascript'>alert('Invalid file');</script>";
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

	<h2>Register</h2>
</div>
		<!---->
		<div class="container">
		<div class="register">
		<h3>PERSONAL INFORMATION</h3>
		  	  <form method="post" enctype="multipart/form-data"> 
				
					
					<div class="mation">
					<div>
						<span>User Name</span>
						<!-- for reqire field insert code -->
						<input type="text" name="user_name" value=""  placeholder="User Name(input only alphabets)"
						onKeyPress="return onlyAlphabets(event,this);" required> 
					</div>
					<div>
						<span>Gender</span>
						<input type="radio" name="gender" value="male">male 
                        <input type="radio" name="gender" value="female">female
                        
					 </div>
					 <div>
						 <span>Email Id</span>
						 <input type="text" name="email_id" value="">
						 </div>
						 <div>
							<span>Password</span>
								<input type="text" name="password" value="">						 
					</div>
                    <div>
					<?php
 if(isset($_FILES['id_proof']))
 {
	 $file_name=$_FILES['id_proof']['name'];
	 $file_tmp=$_FILES['id_proof']['tmp_name'];
	 $file_size=$_FILES['id_proof']['size'];
     if($_FILES['id_proof']['size'] > 10526552)
	 {
         echo "<br>image size is greater";
	 }
	 else
	 {
         if(move_uploaded_file($file_tmp,'register/'.$file_name))
		 { 
			
		 }}
 }
 ?>     
							<span>Id Proof</span>
								<input type="file" name="id_proof" >						 
					</div>
                    <div>
							<span>Contact No</span>
							<!-- for reqire field insert code -->
								<input type="text" name="contact_no" value=""placeholder="Contact(input only 0-9 digits)"
 minlength="10" maxlength="10" onkeypress="return IsNumeric(event);" ondrop="return false;"
 onpaste="return false;" required>						 
					</div>
                    <div>
							<span>Address</span>
								<input type="text" name="address" value="">						 
					</div>
					 </div>
				     <input type="submit" name="submit" value="submit">
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