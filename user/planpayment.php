<?php
include("header.php");
include("config.php")
?>
<?php
if(isset($_POST['pay']))
{
    $email=$_POST['email'];
	$amount=$_POST['amount'];
	$pay_id=$_POST['pay_id'];
	$pay_status=$_POST['pay_status'];
	$date_added=$_POST['date_added'];
	$plan_name=$_POST['plan_name'];
    $sql="insert into tbl_razorpay(email,amount,pay_id,pay_status,date_added,plan_name) value('$email','$amount','$pay_id','$pay_status','$date_added','$plan_name')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "payment inserted";
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

	<h2>Plan Payment</h2>
</div>
		<!---->
		<div class="container">
		<div class="register">
		<h3>Payment INFORMATION</h3>
		  	  <form method="post" enctype="multipart/form-data"> 
				
					
					<div class="mation">
					<div>
						<span>Email Id</span>
						<!-- for reqire field insert code -->
						<input type="text" placeholder="Email" name="email"> 
					</div>
					
					</div>
                    <div>
							<span>Amount</span>
							<!-- for reqire field insert code -->
								<input type="text" placeholder="amount" name="amount" >						 
					</div>
                    <div>
							<span>Pay Id</span>
								<input type="text" placeholder="pay id" name="pay_id" >						 
					</div>
					<div>
							<span>Pay status</span>
								<input type="text" placeholder="pay status" name="pay_status" >						 
					</div>
					<div>
							<span>Date Added</span>
								<input type="date" placeholder="date added" name="date_added" >						 
					</div>
					<div>
							<span>Plan Name</span>
								<input type="text" placeholder="plan name" name="plan_name" >						 
					</div>
					 </div>

				     <input type="submit" name="pay" value="pay"style="background:#ff5d56;color:white;">
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
<script>

$("#TextBox1").datepicker({
	dateFormat: 'yy-mm-dd',
    minDate: 0,
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var min = $(this).datepicker('getDate'); // Get selected date
        $("#TextBox2").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
    }
});