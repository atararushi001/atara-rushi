<?php

if(isset($_POST['submit'])){
include('include/config.php');
    $data['email'] = $_POST['email'];
    $data['name'] = $_POST['name'];
    $data['age'] = $_POST['age'];
    $data['birthdate'] = $_POST['birthdate'];
    $data['state'] = $_POST['state'];
    $data['city'] = $_POST['city'];
    $data['Country'] = $_POST['Country'];
    $data['password'] = $_POST['password'];


    
	 echo $sql="INSERT INTO `user`(`email`, `name`, `age`, `birthdate`, `state`, `city`, `Country`, `password`) 
     VALUES ('{$data['email']}','{$data['name']}','{$data['age']}','{$data['birthdate']}','{$data['state']}','{$data['city']}','{$data['Country']}','{$data['password']}')"; 
	 $result = $con->query($sql);
     if($result == true){
        header("location: login.php");
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

    <title>register</title>
</head>

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

<body>
    <div class="">
        <h3 class="text-center text-primary " style="margin-top: 60px;">welcome to register page</h3>
        <div class="row">

            <div class="col-md-6  text-aglin-center" style="margin-top: 80px;">
                <img src="img/loginimg.jpg" alt="" srcset="" class="loginimg w-75 m-auto d-block ">
            </div>
            <div class="col-md-6 text-aglin-center">

                <form action="" method="post" class="loginform center-block   border  border-primary p-2"
                    style="margin-top:100px !important; border-radius: 50px;  " id="signupform">
                    <h3 class="text-center text-primary " style="margin-bottom: 40px; ">Enter you details here</h3>
                    <div class="row">
                        <div class="col-md-6 text-aglin-center">
                            <div class="form-group  justify-content-center">
                                <input type="email" class="form-control w-75" name="email" id="email"
                                    placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="col-md-6 text-aglin-center">
                            <div class="form-group  justify-content-center">
                                <input type="name" class="form-control w-75 " name="name" id="name"
                                    placeholder="Enter full name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 text-aglin-center">
                            <div class="form-group  justify-content-center">
                                <input type="text" class="form-control w-75" name="age" id="age"
                                    placeholder="Enter your age">
                            </div>
                        </div>
                        <div class="col-md-6 text-aglin-center">
                            <div class="form-group  justify-content-center">
                                <input type="date" class="form-control w-75 " name="birthdate" id="birth date"
                                    placeholder="Enter your birth date">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 text-aglin-center">
                            <div class="form-group  justify-content-center">
                                <input type="text" class="form-control w-75" name="state" id="state"
                                    placeholder="Enter state">
                            </div>
                        </div>
                        <div class="col-md-6 text-aglin-center">
                            <div class="form-group  justify-content-center">
                                <input type="text" class="form-control w-75 " name="city" id="city"
                                    placeholder="Enter city">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 text-aglin-center">
                            <div class="form-groupx  justify-content-center">
                                <input type="text" class="form-control w-75" name="Country" id="Country"
                                    placeholder="Enter Country">
                            </div>
                        </div>
                       
                    </div>

                    <div class="row">
                        <div class="col-md-6 text-aglin-center">
                            <div class="form-group  justify-content-center">
                                <input type="password" class="form-control w-75" name="password" id="password"
                                    placeholder="Enter password">
                            </div>
                        </div>
                        <div class="col-md-6 text-aglin-center">
                            <div class="form-group  justify-content-center">
                                <input type="password" class="form-control w-75 " name="cpassword" id="cpassword"
                                    placeholder="Enter conformpassword">
                            </div>
                        </div>
                    </div>

                    <div class="form-group  justify-content-center w-100">
                        <input type="submit" class="btn btn-primary rounded-pill w-25 " name="submit" id="submit"
                            value="register">
                    </div>
                    <div class="form-group  justify-content-center w-100 mt-5">
                        <p>click if you already registered  <a href="login.html">here </a> to login</p>
                    </div>

                </form>
            </div>

        </div>
    </div>

</body>
<script src="js/jquery.validate.min.js"></script>
<script src="js/app.js"></script>
</html>