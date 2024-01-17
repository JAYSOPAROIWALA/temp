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
    
</head>
<body>
    <div class="a"><?php include("header.php") ?></div>
    <div class="b">
    <section class="bg-light">
      <div class="container"> 
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 mt-5">
            <br><br><br><br>
            <h1>Welcome in<br /> Dream Organizer</h1>
            <p class="lead">Proident eu nisi commodo enim deserunt enim duis sunt nostrud anim. Sunt do sit enim veniam nostrud culpa adipisicing do ullamco occaecat et. </p>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 mt-5"><img src="../img/draw2.webp" alt="loading img" class="img-fluid"></div>
        </div>
      </div>
    </section>
</div>
    <div class="c" ><?php include("footer.php") ?></div>
</body>
</html>
<?php  
    }
?>
                