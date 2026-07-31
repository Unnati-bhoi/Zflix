<?php
include("header.php");
?>
	
	
 				<div class="clearfix"> </div>	
			</div>
<!---->
		<!---->
		
		
 				<div class="clearfix"> </div>	
			</div>
<!---->
		<!---->
		<div class="sap_tabs">
											 
												 
	<!--start-shoes--> 
	<div class="goggles"> 
		<div class="container"> 
			<h2>Movies</h2>
			<div class="product-one">
			<?php
include("config.php");
$sql="select * from tbl_movies where status=0 ";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
        
        $path="movies/".$row['image'];
    
    ?>
				<div class="col-md-3 product-left"> 
					<div class="p-one simpleCart_shelfItem">							
							
							<?php echo"<img  src='./admin/movies/$row[3]'
                            alt='Awesome Image' style='height:230px;width:250px;'>"?>
					
								
						
						<h4><?php echo $row['name'];?></h4>
						
					<br>
					<br>
					</div>
					
				</div>
				
				<?php
					}
					?>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-movies-->
	<!---->
</body>
</html>
		
	<!--end-movies-->
	<!---->
	
	<!-- tvshows start	 -->
	

		
											 
												 
	<!--start-shoes--> 
	<div class="goggles"> 
		<div class="container"> 
			<h2>TV-Shows</h2>
			<div class="product-one">
			<?php
include("config.php");
$sql="select * from tbl_tvshows where status=0 ";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
        
        $path="tvshows/".$row['image'];
    
    ?>
				<div class="col-md-3 product-left"> 
					<div class="p-one simpleCart_shelfItem">							
							
							<?php echo"<img  src='./admin/tvshows/$row[3]'
                            alt='Awesome Image' style='height:230px;width:250px;'>"?>
					
								
							
						<h4><?php echo $row['name'];?></h4>
						
					<br>
					<br>
					</div>
					
				</div>
				
				<?php
					}
					?>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-shoes-->
	<!---->
	<div class="footer">
		<div class="container">
			

</body>
</html>
			
<?php
include("footer.php");

?>
</body>
</html>