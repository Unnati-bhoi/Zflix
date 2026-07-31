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
			<h2>Movies</h2>
			<div class="product-one">
			<?php
include("config.php");
if(isset($_GET['search']))
    {
        $search=$_GET['search'];
$sql="select * from tbl_movies where status=0 and name like '$search'";
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
					}}
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