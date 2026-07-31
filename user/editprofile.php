<?php
include("header.php");
?>
<?php
include("config.php");

		$sql="select * from tbl_user where status=0 and email_id='$user'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$user_name=$row['user_name'];
	$id_proof=$row['id_proof'];
	$contact_no=$row['contact_no'];
    $address=$row['address'];
	
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

	<h2>Edit Profile</h2>
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
						<input type="text" name="user_name" value="<?php echo $user_name;?>"  placeholder="User Name(input only alphabets)"
						onKeyPress="return onlyAlphabets(event,this);" required> 
					</div>
					
					 
                    <div>
					
							<span>Id Proof</span>
                            <img src="../register/<?php echo $id_proof; ?>" style="height:100px;width:120px;display:inline;margin-right:20px;float:left;" /><br /><br />
                                   <input type="file" name="id_proof" id="id_proof" style="float:left;" />
<input type="hidden" name="id_proof" id="id_proof"  
value="<?php if(isset($_SERVER['PHP_SELF']))
		// {echo $id_proof;} ?>"/>		 
					</div><br><br><br><br>
                    <div>
							<span>Contact No</span>
							<!-- for reqire field insert code -->
								<input type="text" name="contact_no" value="<?php echo $contact_no;?>" placeholder="Contact(input only 0-9 digits)"
 minlength="10" maxlength="10" onkeypress="return IsNumeric(event);" ondrop="return false;"
 onpaste="return false;" required>						 
					</div>
                    <div>
							<span>Address</span>
								<input type="text" name="address" value="<?php echo $address;?>">						 
					</div>
					 </div>
				     <input type="submit" name="edit" value="edit">
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
include("config.php");
if(isset($_POST['edit']))
{
    if(isset($_FILES['id_proof']))
    {
    
      $id_proof= trim($_FILES['id_proof']['user_name']);

    $user_name=$_POST['user_name'];
    $contact_no=$_POST['contact_no'];
    $address=$_POST['address'];
  
	if($_FILES["id_proof"]["name"] == ''){
		 $id_proof = $_POST['id_proof'];
	}
	else{
		 $id_proof = $_FILES['id_proof']['name'];
	}

 
 move_uploaded_file($_FILES['id_proof']['tmp_name'], "../register/".$_FILES['id_proof']['name']);

    $sql="update tbl_user set id_proof='$id_proof',user_name='$user_name',contact_no='$contact_no',address='$address' where status=0 and user_id='$user_id'";
$result=mysqli_query($con,$sql);
if($result)
{
    echo "<script>alert('id_proof updated successfully');</script>";
    echo "<script>window.location.href='index.php';</script>";
}
}}
?>
<?php
include("footer.php");
?>
</body>
</html>