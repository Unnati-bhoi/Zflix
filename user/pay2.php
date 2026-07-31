<?php
include("config.php");
// include('db.php');
if(isset($_POST['pay_id'])&& isset($_POST['amount'])&& isset($_POST['email_id'])){
$pay_id=$_POST['pay_id'];	
$amount=$_POST['amount'];	
$email_id=$_POST['email_id'];	
$plan_name=$_POST['plan_name'];

$query="INSERT INTO tbl_razorpay(`email_id`,`amount`,`pay_id`,`pay_status`,`plan_name`)
VALUES('$email_id','$amount','$pay_id','Success','$plan_name')";
mysqli_query($con,$query);
}
?>
