<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title></title>
    <style>
      .divider:after,
      .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
      }
      .h-custom {
        height: calc(100% - 73px);
      }
      @media (max-width: 450px) {
        .h-custom {
          height: 100%;
        }
      }
    </style>
</head>
<body>
    <form id="form1" runat="server">
    <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5" style="width:50% ;padding-left:65px">
        <img src="../img/w7.jpeg"  class="img-fluid" alt="Sample image" />
         
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="padding-right:65px">
        <form>
          


            <p class="text-center  fw-bold mx-3  mb-0" style="font-size:30px; color:#021F1D ">USER LOGIN</p><br />
         

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" name="txtem" />
            <label class="form-label" for="txtem">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" name="txtpwd"/>
            <label class="form-label" for="txtpwd">Password</label>
          </div>

          

         

          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" class="btn-lg" name="login" value="Login"
              style="padding-left: 2.5rem; padding-right: 2.5rem;background-color:#021F1D; color:white" >
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="registration.php"
                class="link-danger"  style="color:#021F1D">Register</a></p>
          </div>
          <?php
           
          if(isset($_REQUEST['login']))
          {
           $f=0;
            $uid=$_REQUEST['txtem'];
            $pwd=$_REQUEST['txtpwd'];
           // echo $uid;
            //echo $pwd;
            include('connection.php');
            $query1=mysql_query("select * from user_mst where u_email='$uid' and u_password='$pwd'");
            echo $query1;
            while($row=mysql_fetch_array($query1))
            {
           // echo $row['u_email'];
           // echo $row['u_password'];
              $f++;
              //echo $f;
            }
            if($f==1)
            {
              $_SESSION["user"]= $uid;
               header("location:home.php");
            }
            else{
              echo '<script>
                alert($f);
              </script>';
            }
          }?>



          



        </form>
      </div>
    </div>
  </div>
 
</section>

    </form>


</body>

</html>
