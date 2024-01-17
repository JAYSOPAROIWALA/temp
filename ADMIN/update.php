
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class="a"><?php include("header.php") ?></div>
</br>
    <div class="b" >
        
<?php

     include("connection.php");
     
        if(isset($_GET['eid']))
        {
        $eid=$_GET['eid'];
        $query1=mysql_query("select * from event_mst where eid='$eid'");
        $row=mysql_fetch_array($query1);
        
        
      

      ?>
<section class="vh-100" style="background-color: #ffffff;">
  <div class="container h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100" >
      <div class="col-lg-12 col-xl-11" >
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update Event!!</p>
                <form class="mx-1 mx-md-4">



                <div class="d-flex flex-row align-items-center mb-4">
            
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="e_name" class="form-control" value="<?php echo $row['e_title']; ?>"/>
                      <label class="form-label" for="e_name">Event Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
            
            <div class="form-outline flex-fill mb-0">
              <textarea name="e_info" class="form-control" ><?php echo $row['e_info']; ?></textarea>
              <label class="form-label" for="e_info">Event Description</label>
            </div>
          </div>
          <div class="d-flex flex-row align-items-center mb-4">
            
            <div class="form-outline flex-fill mb-0">
              <input type="file" name="e_img" class="form-control"/>
              <label class="form-label" for="e_img">Event Image</label>
            </div>
          </div>
          <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                  <input type="date" name="e_date" class="form-control" value="<?php echo $row['e_date']; ?>"/>
              <label class="form-label" for="e_date">Event Date</label>
            
                    </div>

                </div>
                <div class="col-md-6 mb-4">

                  <select class="form-control" name="e_cate">
                    <option value="0" >select caterogry</option>
                    <option value="1" >TECHNICAL & IT</option>
                    <option value="2">SPORTS</option>
                    <option value="3">ARTS & SKILLS</option>
                    <option value="4">MANAGEMENT & FINANCE</option>
                    <option value="5">OTHERS</option>
                  </select>
                  <label class="form-label" for="e_cate">Select Category</label>


                </div>
              </div>




                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <input name="e_add" values="UPDATE EVENT" type="submit" class="btn btn-primary btn-lg" >
                </div>
                <input type="hidden" name="eid" value="<?php echo $eid;?>"/>
                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../img/draw1.webp"
                  class="img-fluid" alt="Sample images">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    </div>
    <br>
   
    <div class="c" ><?php include("footer.php") ?></div>

  <?php
      }
      
      if (isset($_REQUEST['e_add']))
      {
        
        //echo "hello";
        $a=$_REQUEST['e_name'];
        // echo $a;
         $b=$_REQUEST['e_info'];
         $c=$_REQUEST['e_img'];
         $d=$_REQUEST['e_date'];
         $e=$_REQUEST['e_cate'];
      $sql= "update event_mst set e_title='$a',e_info='$b',e_img='$c',e_date='$d',cid='$e' where eid='$eid'";
        echo "<script>alert($sql);</script>";
          mysql_query($sql);
        header('location:man_event.php');
      
     

      }
    
  ?>
</body>


</html>
