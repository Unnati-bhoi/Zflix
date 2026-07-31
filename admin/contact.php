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
     $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $duration=$_POST['duration'];
    $image=$_FILES['image']['name'];

    $sql="insert into tbl_plan(name,start_date,end_date,duration,image) value('$name','$start_date','$end_date','$duration','$image')";
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
	 
    </div>
  </section>
  </div>
  
      <br>
    <section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info" style="margin-left:-19%">
 <div class="panel panel-default">
    <div class="panel-heading">
     Contact table
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
            
            <th>Email</th>
            <th>Subject</th>
            <th>message</th>
            
            <th>Delete</th>
           

          
        </thead>
<tbody>
  <tr>
    <?php
  $sql="select * from tbl_contact where status=0";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
    ?>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['subject'];?></td>
    <td><?php echo $row['message'];?></td>
    
    <td><a href="contact.php?contact_id=<?php echo $row['contact_id']?>">
    
    <img src="images/delete.png" style="width: 50px; height:50px"></a></td>
    
  </tr>
  <?php
  }
    ?>
</tbody>
      </table>
      <?php
    if(isset($_GET['contact_id']))
    {
        $contact_id=$_GET['contact_id'];
        $sql="update tbl_contact set status=1 where contact_id='$contact_id'";
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
