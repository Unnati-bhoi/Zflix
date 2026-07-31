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
    $sql="insert into tbl_language(name) value('$name')";
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
                            Languge Forms
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="POST">
                                <div class="form-group" >
                                    <label for="exampleInputcatagory">Language </label>
                                    <input type="text"   name="name" class="form-control" id="exampleInputlanguage" placeholder="Enter language">
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
     Languge table
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
            
            <th>Language</th>
            
            <th>Delete</th>
            <th>Edit</th>

          
        </thead>
<tbody>
  <tr>
    <?php
  $sql="select * from tbl_language where status=0";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
    ?>
    <td><?php echo $row['name'];?></td>
    <td><a href="language.php?lan_id=<?php echo $row['lan_id']?>">
    <img src="images/delete.png" style="width: 50px; height:50px"></a></td>
    <td><a href="editlanguage.php?lan_id=<?php echo $row['lan_id']?>">
    <img src="images/edit.png" style="width: 50px; height:50px"></a></td>
  </tr>
  <?php
  }
    ?>
</tbody>
      </table>
      <?php
    if(isset($_GET['lan_id']))
    {
        $lan_id=$_GET['lan_id'];
        $sql="update tbl_language set status=1 where lan_id='$lan_id'";
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
