<?php
session_start();
?>
<?php 
    if($_SESSION["user"]=="")
    {
     header("location:index2.php");
    }
    else
    {     include("connection.php");
        
        if(isset($_GET['eid']))
        {
           $a= $_SESSION["user"];
            $x=$_GET['eid'];
            $sql= "select uid from user_mst where u_email = '$a'";
          // echo $sql;
           
            $result =mysql_query($sql);

           $b=0;
               while($row=mysql_fetch_array($result))
               {
                $b=$row['uid'];
               }
              // echo $b;
               $sql= "insert into part_mst (eid,uid) values ('$x','$b')";
               //echo $c;
               mysql_query($sql);
               
           
      
        }
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
    <div class="a"><?php include("header.php") ?></div>
    <div class="b">
    <table height="100%" class="table table-bordered">
                <tr>
                    <th>Event Title</th>
                    <th>Event Date</th>
                    <th>Image</th>
                    <th>Show Description</th>
                    <th>Cancle Participation</th>
                </tr>
        <?php
     include("connection.php");
     $j=$_SESSION["user"];
    $sql="select pid,e_title,e_date,e_img,e_info from part_mst p join event_mst e on p.eid=e.eid join user_mst u on u.uid=p.uid where u_email = '$j'";
    // $sql= "select * from event_mst e ";
      $query1=mysql_query($sql);
        while($row=mysql_fetch_array($query1))
        {
            echo "<tr>";

            echo "<td>".$row['e_title']."</td>";
            echo "<td>".$row['e_date']."</td>";
            echo "<td><img src=../img/".$row['e_img']." width=200px></td>";
            echo "<td><i class='fa fa-eye' title='".$row['e_info']."'/></td>";
            echo "<td><a href='delete_my_event.php?pid=".$row['pid']."' class='btn btn-outline-success'>Take Me Out</a></td>";
           //echo "<td><input type='submit' name='take' value='Take Me Out' ></td>"
            echo "</tr>";
        }
       
      ?>
    
      </table>


            
         
        </form>
    </div>
    <div class="c" ><?php include("footer.php") ?></div>
    <?php 
    }
    ?>
</body>
</html>