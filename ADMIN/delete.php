<?php
 include("connection.php");
     
 if(isset($_GET['eid']))
 {
 $eid=$_GET['eid'];
 mysql_query("delete from event_mst where eid='$eid'");
 header('location:man_event.php');
 }
?>