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
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $lan_id=$_POST['lan_id'];
    $image=$_FILES['image']['name'];

    $sql="insert into tbl_tvshows(name,lan_id,image) value('$name','$lan_id','$image')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "language inserted";
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
             TvShows Forms
       </header>
  <div class="panel-body">
  <div class="position-center">
        <form role="form" method="POST" enctype="multipart/form-data">
  <div class="form-group" >
      <label for="exampleInputname">Name </label>
      <input type="text"   name="name" class="form-control" id="exampleInputname" placeholder="Enter name">
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
  <?php
 if(isset($_FILES['image']))
 {
	 $file_name=$_FILES['image']['name'];
	 $file_tmp=$_FILES['image']['tmp_name'];
	 $file_size=$_FILES['image']['size'];
     if($_FILES['image']['size'] > 10526552)
	 {
         echo "<br>image size is greater";
	 }
	 else
	 {
         if(move_uploaded_file($file_tmp,'tvshows/'.$file_name))
		 { 
			
		 }}
 }
 ?>                    
    <div class="form-group" >
      <label for="exampleInputimage">Image </label>
      <input type="file"   name="image" class="form-control" id="exampleInputimage" placeholder="Enter image">
    </div>                       
    </div>
      <button type="submit" name="submit" class="btn btn-info">Submit</button>
    </form>
    </div>
    </div>
  </section>
  </div>
    <section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info" style="margin-left:-19%">
 <div class="panel panel-default">
    <div class="panel-heading">
     TvShows table
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            
            <th>Name</th>
            
            <th>Language</th>
            <th>Image</th>
            <th>Delete</th>
            <th>Edit</th>

          
        </thead>
<tbody>
  <tr>
    <?php
  $sql="select * from tbl_tvshows where status=0";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
    ?>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['lan_id'];?></td>
    <td><img src="tvshows/<?php echo $row['image'];?>" width="80px" height="80px"></td>
    <td><a href="tvshows.php?id=<?php echo $row['id']?>">
    
    <img src="images/delete.png" style="width: 50px; height:50px"></a></td>
    <td><a href="edittvshows.php?id=<?php echo $row['id']?>">
    <img src="images/edit.png" style="width: 50px; height:50px"></a></td>
  </tr>
  <?php
  }
    ?>
</tbody>
      </table>
      <?php
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $sql="update tbl_tvshows set status=1 where id='$id'";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "record deleted";
        }
    }
    ?>
    </div>
  </div>
</div>
</section>
</div></div></div></div>
                        
<?php
include("footer.php");
?>
 </body>
</html>
