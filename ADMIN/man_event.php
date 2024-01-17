<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>

</head>
<body>
    <div><?php include("header.php") ?></div>
    <div>
        
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
            echo "<td><a href='update.php?eid=".$row['eid']."' class='btn btn-outline-primary'>Edit</a>&nbsp;&nbsp;";
            echo "<a href='delete.php?eid=".$row['eid']."' class='btn btn-outline-danger'>Delete</a></td>";
            echo "</tr>";
        }
      ?>
    
      </table>


            
        
        </form>
    </div>
    <div><?php include("footer.php") ?></div>
</body>
</html>