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
    $price=$_POST['price'];
     $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $duration=$_POST['duration'];
    
    $image=$_FILES['image']['name'];

    $sql="insert into tbl_plan(name,price,start_date,end_date,duration,image) value('$name','$price','$start_date','$end_date','$duration','$image')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "Plan inserted";
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
             PLAN FORM
       </header>
  <div class="panel-body">
  <div class="position-center">
        <form role="form" method="POST" enctype="multipart/form-data">
  <div class="form-group" >
      <label for="exampleInputname">Plan Name </label>
      <input type="text"   name="name" class="form-control" id="exampleInputname" placeholder="Enter name">
  </div>
  <div class="form-group" >
      <label for="exampleInputname">Price</label>
      <input type="text"   name="price" class="form-control" id="exampleInputprice" placeholder="Enter price">
</div>
  <div class="form-group" >
      <label for="exampleInputname">Start-Date </label>
      <input type="text" id="TextBox1"  name="start_date" class="form-control" id="exampleInputstart_date" placeholder="Enter start_date">
  </div>
  <div class="form-group" >
      <label for="exampleInputname">End-Date </label>
      <input type="text" id="TextBox2"   name="end_date" class="form-control" id="exampleInputend_date" placeholder="Enter end_date">
  </div>
  <div class="form-group" >
      <label for="exampleInputname">Duration</label>
      <input type="text" id="TextBox3"  name="duration" class="form-control" id="exampleInputduration" placeholder="Enter duraton">
</div>
<!-- image set code write in up on image label-->
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
         if(move_uploaded_file($file_tmp,'plan/'.$file_name))
		 { 
			
		 }}
 }
 ?>                    
    <div class="form-group" >
      <label for="exampleInputimage">Image </label>
      <input type="file"   name="image" class="form-control" id="exampleInputimage" placeholder="Enter image">
    </div>                       
  
      <input type="submit" name="submit" class="btn btn-info"></button>
    </form>
    </div>
    </div>
  </section>
  </div>
  
      <br>
    <section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info" style="margin-left:-19%">
 <div class="panel panel-default">
    <div class="panel-heading">
     Plan table
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
            
            <th>Plan</th>
            <th>Price</th>
            <th>start_date</th>
            <th>end_date</th>
            <th>duration</th>
            <th>Image</th>
            <th>Delete</th>
            <th>Edit</th>

          
        </thead>
<tbody>
  <tr>
    <?php
  $sql="select * from tbl_plan where status=0";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
    ?>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['price'];?></td>
    <td><?php echo $row['start_date'];?></td>
    <td><?php echo $row['end_date'];?></td>
    <td><?php echo $row['duration'];?>Days</td>
    <td><img src="plan/<?php echo $row['image'];?>" width="80px" height="80px"></td>
    <td><a href="plan.php?plan_id=<?php echo $row['plan_id']?>">
    
    <img src="images/delete.png" style="width: 50px; height:50px"></a></td>
    <td><a href="editplan.php?plan_id=<?php echo $row['plan_id']?>">
    <img src="images/edit.png" style="width: 50px; height:50px"></a></td>
  </tr>
  <?php
  }
    ?>
</tbody>
      </table>
      <?php
    if(isset($_GET['plan_id']))
    {
        $plan_id=$_GET['plan_id'];
        $sql="update tbl_plan set status=1 where plan_id='$plan_id'";
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
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
$("#TextBox2").datepicker({
	dateFormat: 'yy-mm-dd',
    minDate: '0',
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var max = $(this).datepicker('getDate'); // Get selected date
        $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
        var start = $("#TextBox1").datepicker("getDate");
        var end = $("#TextBox2").datepicker("getDate");
        var days = (end - start) / (1000 * 60 * 60 * 24);
        $("#TextBox3").val(days);
    }
});
</script>
