<?php
 include("connection.php");
     
 if(isset($_GET['pid']))
 {
 $pid=$_GET['pid'];
 mysql_query("delete from part_mst where pid='$pid'");
 header('location:my_event.php');
 }
?>