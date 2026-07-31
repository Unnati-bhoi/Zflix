<?php
	ob_start();
	session_start();
	global $user;
	@$user=$_SESSION["user"];			
	if($user == "  ")
	{
		echo "<script language='javascript'>window.location.href='index.php';</script>";							
	}
?>
<?php
	global $email_id,$user_id;
		include("config.php");
		$sql= "select * from tbl_user where email_id = '$user' and status = 0";
				$result=mysqli_query($con,$sql);
				$count = mysqli_num_rows($result);
				while($row = mysqli_fetch_array($result))
					{
					$email_id= $row['email_id'];
					$user_id = $row['user_id'];
					
				
					}
	?>


<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Zflix</title>
<!-- favicon  -->
<link rel="icon" href="images/z.ico" type="image/x-icon">

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="I wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!-- start menu -->
<!--//slider-script-->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>	
		  		 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- js -->
		 <script src="js/bootstrap.js"></script>
	<!-- js -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
</head>
<body> 


<!--header-->
<div class="header-info">
			<div class="container">
					<div class="header-top-in">
						
						<ul class="support">
							<li><i class="glyphicon glyphicon-envelope"> </i><?php echo $email_id ?></a></li>
							<li><span><i class="glyphicon glyphicon-earphone" class="tele-in"> </i>+91 827 979 65 45</span></li>			
						</ul>
						<ul class=" support-right">
							<li><a href="logout.php"><i class="glyphicon glyphicon-user" class="men"> </i>Log Out</a>
						</ul>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>	
<div class="header">
	<div class="header-top" style="background:#ff5d56">

			<div class="header-bottom">
			<div class="container">			
				<div class="logo">
					<h1><a href="index.php" style="color:black">Z-<span>flix</span></a></h1>
				</div>
		 <!---->
		 
			<div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="index.php">Home</a></li>

<li><a href="movie.php">Movie</a></li>
<li><a href="tvshows.php">TV-Shows</a></li>
<li><a href="plan.php">Plan</a></li>
										
							
						
					
<li class="grid"><a href="#">Profile</a>
						<div class="mepanel" style="width:450px;margin-left:52.50%;">
							<div class="row">
								<div class="col1 me-one">
									
									<ul>
										<li><a href="editprofile.php">Edit Profile</a></li>
										<li><a href="changepassword.php">Change password</a></li>
										<li><a href="feedback.php">Feedback</a></li>
										
									</ul>
								</div>
								
								
							</div>
						</div>
					</li>
						
					</li>
					
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The form -->
<li> <form method="get" action="search.php">

  <input type="text" placeholder="Search.." name="search" style="margin-left:30%;margin-top:-60px;"></li>
			</form>
				</ul>
				<div class="clearfix"> </div>
			</div>
					<!---->
					

<div class="clearfix"> </div>
					<!---->
				</div>
			<div class="clearfix"> </div>
		</div>
		</div>