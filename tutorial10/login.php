<?php

if(isset($_POST['submit'])){
include('include/config.php');
    $data['email'] = $_POST['lemail'];
    $data['password'] = $_POST['lpassword'];


    
     $sql="SELECT * FROM `user` WHERE email = '{$data['email']}'  and password =  '{$data['password']}'"; 
	
    $result = $con->query($sql);
     if($result->num_rows){
        
        $result =  $result->fetch_assoc();
        $_SESSION['uid'] = $result['id'];
        header("location: index.html");
     }
     else{
      header("location: login.php?check");
     }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

   <style>
@media only screen and (max-width:500px) {
    .loginimg{
        display: none !important;

    }
    .loginform{
        margin-top:0px  !important;
        margin:22px !important;
        padding:0px !important;
    }
}
</style>
</head>

<body>
 <div class="">
 <h3 class="text-center text-primary " style="margin-top: 60px;">welcome to login page</h3>
    <div class="row">
        
         <div class="col-md-6  text-aglin-center" style="margin-top: 80px;">
            <img src="img/loginimg.jpg" alt="" srcset="" class=" loginimg w-75 m-auto d-block">
         </div>
         <div class="col-md-6 text-aglin-center " >
         <div class="row">
         
           <form action="" method="post" class="loginform center-block col-md-6 ml-auto mr-auto  border  border-primary p-2 " id="signupform" style="margin-top:120px ; border-radius: 50px; padding: 3% !important; ">
           <h3 class="text-center text-primary " style="margin-bottom: 40px; ">Enter you details here</h3>
          
          <div class="form-groupjustify-content-center">
            <input type="email" class="form-control w-100" name="lemail" id="lemail" placeholder="Enter email">
           </div>
            <div class="form-group justify-content-center">
            <input type="password" class="form-control w-100 " name="lpassword" id="lpassword" placeholder="Enter password">
            </div>
            <div class="form-group justify-content-center w-100">
            <input type="submit" class="btn btn-primary rounded-pill w-25 " name="submit" id="submit" value="login">
            </div>
            <div class="form-group d-flex justify-content-center w-100 mt-5">
            <p>click if you don't have account <a href="register.html">here </a> to register</p>
            </div>
            </form>
          
           
         </div>

     </div>
 </div>
 <script src="js/jquery.validate.min.js"></script>
 <script src="js/app.js"></script>
</body>
</html>