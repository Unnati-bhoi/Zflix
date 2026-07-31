<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include("header.php");
include("sidebar.php");

?>
<?php
include("config.php");
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="select * from tbl_movies where status=0 and id='$id'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
        $name =$row['name'];
        $image=$row['image'];
        
    }
}
    ?>

<!DOCTYPE html>
<head>
<title>Zflix</title>


<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Basic Forms
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="POST" enctype="multipart/form-data">
                                <div class="form-group" >
      <label for="exampleInputname">Name </label>
      <input type="text" value="<?php echo $name; ?>"  name="name" class="form-control" id="exampleInputname" placeholder="Enter name">
  </div>
  <div class="form-group" >
      <label for="exampleInputlanguage">Language </label>
      <select name="lan_id" class="form-control" ><option value="----select---">---select---</option>
  <?php
        include("config.php");
  ?>
  <?php
      $sql="select *from tbl_language where status=0";
      $result=mysqli_query($con,$sql);
      while ($row=mysqli_fetch_array($result)){ ?>
      <option value=<?php echo $row['lan_id']?>><?php echo $row['name']?></option>
  <?php 

      } ?>
  </select>
  </div> 
            
  
                                <div class="form-group" >
      <label for="exampleInputimage">Image </label>
      <img src="movies/<?php echo $image; ?>" style="height:100px;width:120px;display:inline;margin-right:20px;float:left;" /><br /><br />
                                   <input type="file" name="image" id="image" style="float:left;" />
<input type="hidden" name="image" id="image"  
value="<?php if(isset($_SERVER['PHP_SELF']))
		// {echo $image;} ?>"/>
    </div>                            
                                </div>
                                <button type="submit" name="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    <br>
                    <section id="main-content">
                    <tr>
      <!-- edit coding -->
                    <?php
include("config.php");
if(isset($_POST['submit']))
{
    if(isset($_FILES['image']))
    {
    
      $image = trim($_FILES['image']['name']);

    $name=$_POST['name'];
    $lan_id=$_POST['lan_id'];

	
	if($_FILES["image"]["name"] == ''){
		 $image = $_POST['image'];
	}
	else{
		 $image = $_FILES['image']['name'];
	}

 
 move_uploaded_file($_FILES['image']['tmp_name'], "movies/".$_FILES['image']['name']);

    $sql="update tbl_movies set image='$image',name='$name',lan_id='$lan_id' where status=0 and id='$id'";
$result=mysqli_query($con,$sql);
if($result)
{
    echo "<script>alert('movies updated successfully');</script>";
    echo "<script>window.location.href='movies.php';</script>";
}
}}
?>
	                        
<?php
include("footer.php");
?>
 </body>
</html>
