<?php
 session_start();
 $user =$_SESSION['user'];
 session_destroy();
 echo "<script language='javascript'>window.location.href='../index.php';</script>"

?>