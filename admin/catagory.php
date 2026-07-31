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
    $cat_name=$_POST['cat_name'];
    $sql="insert into tbl_catagory(cat_name) value('$cat_name')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "catagory inserted";
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
                            Category
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="POST">
                                <div class="form-group" >
                                    <label for="exampleInputcatagory">Catagory </label>
                                    <input type="text"   name="cat_name" class="form-control" id="exampleInputcatagory" placeholder="Enter catagory">
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
	<section class="wrapper">
		<div class="table-agile-info" style="margin-left:-15%">
 <div class="panel panel-default">
    <div class="panel-heading">
     Category table
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
            
            <th>Catagory name</th>
            
            <th>Delete</th>
            <th>Edit</th>

          
        </thead>
<tbody>
  <tr>
    <?php
  $sql="select * from tbl_catagory where status=0";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
    ?>
    <td><?php echo $row['cat_name'];?></td>
    <td><a href="catagory.php?cat_id=<?php echo $row['cat_id']?>">
    <img src="images/delete.png" style="width: 50px; height:50px"></a></td>
    <td><a href="editcatagory.php?cat_id=<?php echo $row['cat_id']?>">
    <img src="images/edit.png" style="width: 50px; height:50px"></a></td>
  </tr>
  <?php
  }
    ?>
</tbody>
      </table>
      <?php
    if(isset($_GET['cat_id']))
    {
        $cat_id=$_GET['cat_id'];
        $sql="update tbl_catagory set status=1 where cat_id='$cat_id'";
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
