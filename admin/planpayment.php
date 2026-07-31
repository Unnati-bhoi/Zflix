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
if(isset($_POST['pay']))
{
    $email=$_POST['email'];
	$amount=$_POST['amount'];
	$pay_id=$_POST['pay_id'];
	$pay_status=$_POST['pay_status'];
	$date_added=$_POST['date_added'];
	$plan_name=$_POST['plan_name'];
    $sql="insert into tbl_razorpay(email,amount,pay_id,pay_status,date_added,plan_name) value('$email','$amount','$pay_id','$pay_status','$date_added','$plan_name')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "payment inserted";
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
		<div class="table-agile-info" style="margin-left:-19%">
 <div class="panel panel-default">
    <div class="panel-heading">
     Payment table
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
            
            <th>Email</th>
            
            <th>Amount</th>
            <th>Pay Id</th>
            <th>Pay Status</th>
            
            <th>Date Added</th>
            <th>Plan Name</th>
           

          
        </thead>
<tbody>
  <tr>
    <?php
  $sql="select * from tbl_razorpay";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
    ?>
    <td><?php echo $row['email_id'];?></td>
    <td><?php echo $row['amount'];?></td>
    <td><?php echo $row['pay_id'];?></td>
    <td><?php echo $row['pay_status'];?></td>
    <td><?php echo $row['date_added'];?></td>
    <td><?php echo $row['plan_name'];?></td>
    
    <td><a href="planpayment.php?id=<?php echo $row['id']?>"></td>
     
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
