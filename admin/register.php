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
    $user_name=$_POST['user_name'];
    $gender=$_POST['gender'];
     $email_id=$_POST['email_id'];
    $password=$_POST['password'];
    $id_proof=$_FILES['id_proof']['name'];
    $contact_no=$_POST['contact_no'];
	$address=$_POST['address'];
    $sql="insert into tbl_user(user_name,gender,email_id,password,id_proof,contact_no,address) value('$user_name','$gender','$email_id','$password','$id_proof','$contact_no','$address')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "detail register";
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
     Register table
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
            
            <th>User Name</th>
            <th>Gender</th>
            
            <th>Email_Id</th>
            <th>Password</th>
            
            <th>Id Proof</th>
            <th>Contact_no</th>
            <th>Adderss</th>
            
            
            <th>Delete</th>
           

          
        </thead>
<tbody>
  <tr>
    <?php
  $sql="select * from tbl_user where status=0";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
    ?>
    <td><?php echo $row['user_name'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><?php echo $row['email_id'];?></td>
    <td><?php echo $row['password'];?></td>
    <td><img src="../register/<?php echo $row['id_proof'];?>" style="width:50px;height:50px"></td>
    <td><?php echo $row['contact_no'];?></td>
    <td><?php echo $row['address'];?></td>
    
    <td><a href="register.php?user_id=<?php echo $row['user_id']?>">
    
    <img src="images/delete.png" style="width: 50px; height:50px"></a></td>
    
  </tr>
  <?php
  }
    ?>
</tbody>
      </table>
      <?php
    if(isset($_GET['user_id']))
    {
        $user_id=$_GET['user_id'];
        $sql="update tbl_user set status=1 where user_id='$user_id'";
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
