
<?php
session_start();
?>
<?php 
    if($_SESSION["user"]=="")
    {
     header("location:index2.php");
    }
    else
    {    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>
<body>
<div><?php include("header.php") ?></div>
    <div>
        <h1 align="center" >VIEW EVENTS</h1>
        <form>
            <table height="100%" class="table table-bordered">
                <tr>
                    <th>Sr No.</th>
                    <th>Event Title</th>
                    <th>Event Date</th>
                    <th>Image</th>
                    <th>Show Description</th>
                    <th>Manage</th>
                </tr>
        <?php
     include("connection.php");
      $sql= "select * from event_mst";
      $query1=mysql_query($sql);
        while($row=mysql_fetch_array($query1))
        {
            echo "<tr>";

            echo "<td>".$row['eid']."</td>";
            echo "<td>".$row['e_title']."</td>";
            echo "<td>".$row['e_date']."</td>";
            echo "<td><img src=../img/".$row['e_img']." width=200px></td>";
            echo "<td><i class='fa fa-eye' title='".$row['e_info']."'/></td>";
           echo "<td><a href='my_event.php?eid=".$row['eid']."' class='btn btn-outline-success'>Take Me In</a></td>";
           //echo "<td><input type='submit' name='take' value='Take Me In' ></td>"
            echo "</tr>";
        }
       
      ?>
    
      </table>        
        </form>
    </div>
    <div><?php include("footer.php") ?></div>
    <?php 
    }

    

    ?>
</body>
</html>