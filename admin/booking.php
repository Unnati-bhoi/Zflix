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
if(isset($_POST['book']))
{
    $plan_name=$_POST['plan_name'];
    $price=$_POST['price'];
    $email=$_POST['email'];
    $sql="insert into plan_booking(plan_name,price,email) value('$plan_name','$price','$email',)";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "booking inserted";
    }
}
?>
<!DOCTYPE html>
<head>
<title>Zflix</title>


<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	 
    </div>
  </section>
  </div>
  
      <br>
    <section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info" style="margin-left:-11%">
 <div class="panel panel-default">
    <div class="panel-heading">
     Booking table
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
          <th>Plan Name</th>
          <th>Price</th>
          <th>Email</th>
          <th>Approved</th>
    </thead>
<tbody>
  <tr>
    <?php
  $sql="select * from plan_booking where status='pending' ";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
    ?>
    <td><?php echo $row['plan_name'];?></td>
    <td><?php echo $row['price'];?></td>
    <td><?php echo $row['email_id'];?></td>
    
    <td><a href="booking.php?book_id=<?php echo $row['book_id']?>">
     <img src="images/right.jpeg" style="width: 50px; height:48px"></a></td>
  </tr>
  <?php
  }
    ?>
</tbody>
      </table>

    </div>
  </div>
</div>
</section>
</div></div></div></div>
                     
      <?php
    if(isset($_GET['book_id']))
    {
        $book_id=$_GET['book_id'];
        $sql="update plan_booking set status='approve' where book_id='$book_id'";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "approved";
        }
    }
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
