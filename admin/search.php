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

<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
    <section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info" style="margin-left:-30%">
 <div class="panel panel-default">
    <div class="panel-heading">
     Basic table
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
            

          
        </thead>
<tbody>
  <tr>
    <?php
    if(isset($_GET['search']))
    {
        $search=$_GET['search'];
  $sql="select * from tbl_movies where status=0 and name like '$search'";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
    ?>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['id'];?></td>
    <td><img src="movies/<?php echo $row['image'];?>" width="80px" height="80px"></td>
    <td><a href="movies.php?id=<?php echo $row['id']?>">
    
    
  </tr>
  <?php
  }}
    ?>
</tbody>
      </table>
      <?php
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $sql="update tbl_movies set status=1 where id='$id'";
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
