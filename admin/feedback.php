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
      $sql="select *from tbl_feedback where status=0";
      $result=mysqli_query($con,$sql);
      while ($row=mysqli_fetch_array($result)){ ?>
      <option value=<?php echo $row['user_id']?>><?php echo $row['feedback_msg']?></option>
  <?php 

      } ?>
  </select>
  </div> 
                
    
    </form>
    </div>
    </div>
  </section>
  </div>
    <section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info" style="margin-left:-1%">
 <div class="panel panel-default">
    <div class="panel-heading">
     Feedback table
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
            
            <th>User Id</th>
            
            <th>Feedback Msg</th>
        
            <th>Delete</th>
          
        </thead>
<tbody>
  <tr>
    <?php
  $sql="select * from tbl_feedback where status=0";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
    ?>
    <td><?php echo $row['user_id'];?></td>
    <td><?php echo $row['feedback_msg'];?></td>
    
    <td><a href="feedback.php?feedback_id=<?php echo $row['feedback_id']?>">
    
    <img src="images/delete.png" style="width: 50px; height:50px"></a></td>
    
  </tr>
  <?php
  }
    ?>
</tbody>
      </table>
      <?php
    if(isset($_GET['feedback_id']))
    {
        $feedback_id=$_GET['feedback_id'];
        $sql="update tbl_feedback set status=1 where feedback_id='$feedback_id'";
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
