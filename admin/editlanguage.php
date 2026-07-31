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
if(isset($_GET['lan_id']))
{
    $lan_id=$_GET['lan_id'];
    $sql="select * from tbl_language where status=0 and lan_id='$lan_id'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
        $name =$row['name'];
        
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
                            Basic Forms
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="POST">
                                <div class="form-group" >
                                    <label for="exampleInputlanguage">Language </label>
                                    <input type="text"   name="name" class="form-control" id="exampleInputlanguage" placeholder="Enter language" value="<?php echo $name; ?>">
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

                    <?php
include("config.php");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    
    $sql="update tbl_language set name='$name' where status=0 and lan_id='$lan_id'";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<script>alert('record update')</script>" ;
        echo "<script>window.location.href='language.php'</script>";
    }
}

?>
	                        
<?php
include("footer.php");
?>
 </body>
</html>
