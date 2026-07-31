<?php
include("header.php");
?>
		
 				<div class="clearfix"> </div>	
			</div>
<!---->
		<!---->
		<div class="sap_tabs">
											 
												 
	<!--start-shoes--> 
	<div class="goggles"> 
		<div class="container"> 
			<h2>Plan</h2>
			<div class="product-one">
			<?php
include("config.php");
$sql="select * from tbl_plan where status=0 ";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
        
        $path="plan/".$row['image'];
    
    ?>
				<div class="col-md-3 product-left"> 
					<div class="p-one simpleCart_shelfItem">							
							<a href="single.php?plan_id=<?php echo $row['plan_id'];?>">
							<?php echo"<img  src='./admin/plan/$row[6]'
                            alt='Awesome Image' style='height:240px;width:260px;'>"?>
					
								<div class="mask">
									<span>Quick View</span>
								</div>
							</a>
						<h4><?php echo $row['name'];?></h4>
                        <h4><?php echo $row['price'];?></h4>
						<h4><?php echo $row['duration'];?> Days</h4>
					<br>	
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
			
<?php
include("footer.php");

?>
</body>
</html>