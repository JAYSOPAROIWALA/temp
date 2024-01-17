<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
    <title>Document</title>
    
</head>
<body>
    
</br>
    <div class="b" >
<section class="vh-100" style="background-color: #ffffff;">
  <div class="container h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100" >
      <div class="col-lg-12 col-xl-11" >
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registration!!</p>
                <form class="mx-1 mx-md-4">



                <div class="d-flex flex-row align-items-center mb-4">
            
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="u_name" class="form-control"  />
                      <label class="form-label" for="u_name">User Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
            
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="u_email" class="form-control"  />
                      <label class="form-label" for="u_email">User Email</label>
                    </div>
                  </div>

                  <div class="form-outline flex-fill mb-0">

                    <select class="form-control" name="u_cate">
                    <option value="0" >select course</option>
                    <option value="1" >BCA</option>
                    <option value="2">BCOM</option>
                    <option value="3">BBA</option>
                    <option value="4">BSCIT</option>
                    <option value="5">BSC(COM)</option>
                    <option value="6">BA</option>
                    <option value="7">DIPLOMA</option>
                    <option value="8">OTHERS</option>
                    </select>
                    <label class="form-label" for="u_cate">Select Course</label>


                </div><br>
          <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                  <input type="password" name="u_pass" class="form-control" />
              <label class="form-label" for="u_pass">User Password</label>
            
                    </div>

                </div>
                <div class="col-md-6 mb-4">

                    <div class="form-outline datepicker">
                    <input type="password" name="u_cpass" class="form-control" />
                    <label class="form-label" for="u_cpass">Confirm Password</label>

                </div>

                </div>
              </div>




                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <input name="u_add" values="ADD EVENT" type="submit" class="btn btn-primary btn-lg" >
                </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../img/draw1.webp"
                  class="img-fluid" alt="Sample image">

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

</body>
<?php
include("connection.php");
  if(isset($_REQUEST['u_add']))
  {
    $name=$_REQUEST['u_name'];
    $email=$_REQUEST['u_email'];
    $course=$_REQUEST['u_cate'];
    $pass=$_REQUEST['u_pass'];
   // $cpass=$_REQUEST['u_cpass'];

    $sql= "insert into user_mst (u_name,u_course,u_email,u_password) values ('$name','$course','$email','$pass')";
      //echo $c;
      $a=mysql_query($sql);

      if($a)
      {
    header('location:index2.php');
      }
      


  }
?>


</html>