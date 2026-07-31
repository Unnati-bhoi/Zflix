<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include("header.php");
include("sidebar.php");
include("config.php");

?>
<?php
$sql="select * from tbl_movies where status=0";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

$sql="select *from tbl_user where status=0";
$result=mysqli_query($con,$sql);
$count1=mysqli_num_rows($result);

$sql="select *from tbl_tvshows where status=0";
$result=mysqli_query($con,$sql);
$count2=mysqli_num_rows($result);

$sql="select *from tbl_plan where status=0";
$result=mysqli_query($con,$sql);
$count3=mysqli_num_rows($result);
?>
<body>
<section id="container">


<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
					<i class="fa fa-television" style="font-size:40px;color:white"></i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Movies </h4>
					<h3><?php echo "$count" ?></h3>
					
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Users </h4>
						<h3><?php echo "$count1" ?></h3>
						
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
					<i class="fa fa-television" style="font-size:40px;color:white"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>TV-Shows</h4>
						<h3> <?php echo "$count2" ?></h3>
						
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
					<i class="fa fa-inr" style="font-size:60px;color:white"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Plan </h4>
						<h3><?php echo "$count3" ?></h3>
						
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
        <br>
        <img src ="images/zphoto.png" style=" width:1070px;height:230px">
		<br>
		<br>	
		<?php
include("footer.php");
?>
 </body>
</html>
