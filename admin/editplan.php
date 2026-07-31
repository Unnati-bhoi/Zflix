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
if(isset($_GET['plan_id']))
{
    $plan_id=$_GET['plan_id'];
    $sql="select * from tbl_plan where status=0 and plan_id='$plan_id'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
        $name =$row['name'];
        $price =$row['price'];
        $start_date=$row['start_date'];
        $end_date=$row['end_date'];
        $duration =$row['duration'];
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
                            Plan Forms
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="POST" enctype="multipart/form-data">
                                <div class="form-group" >
      <label for="exampleInputname">Plan</label>
      <input type="text" value="<?php echo $name; ?>"  name="name" class="form-control" id="exampleInputname" placeholder="Enter name">
  </div>
  <div class="form-group" >
      <label for="exampleInputname">Price</label>
      <input type="text"  value="<?php echo $price; ?>"  name="price" class="form-control" id="exampleInputprice" placeholder="Enter price">
</div>
  <div class="form-group" >
      <label for="exampleInputname">Start-Date </label>
      <input type="text" id="TextBox2" value="<?php echo $start_date; ?>"  name="start_date" class="form-control" id="exampleInputstart_date" placeholder="Enter start_date">
  </div>
  <div class="form-group" >
      <label for="exampleInputname">End-Date </label>
      <input type="text" id="TextBox3" value="<?php echo $end_date; ?>"  name="end_date" class="form-control" id="exampleInputend_date" placeholder="Enter end_date">
  </div>
  <div class="form-group" >
      <label for="exampleInputname">Duration</label>
      <input type="text" id="TextBox4" value="<?php echo $duration; ?>"  name="duration" class="form-control" id="exampleInputduration" placeholder="Enter duraton">
</div>
  <div class="form-group" >
      <label for="exampleInputimage">Image </label>
      <img src="plan/<?php echo $image; ?>" style="height:100px;width:120px;display:inline;margin-right:20px;float:left;" /><br /><br />
                                   <input type="file" value="<?php echo $image; ?>" name="image" id="image" style="float:left;" />
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
    $price=$_POST['price'];
    $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $duration=$_POST['duration'];

	
	if($_FILES["image"]["name"] == ''){
		 $image = $_POST['image'];
	}
	else{
		 $image = $_FILES['image']['name'];
	}

 
 move_uploaded_file($_FILES['image']['tmp_name'], "plan/".$_FILES['image']['name']);

    $sql="update tbl_plan set image='$image',name='$name',start_date='$start_date', end_date='$end_date',duration='$duration' where status=0 and plan_id='$plan_id'";
$result=mysqli_query($con,$sql);
if($result)
{
    echo "<script>alert('plan updated successfully');</script>";
    echo "<script>window.location.href='plan.php';</script>";
}
}}
?>
	                        
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