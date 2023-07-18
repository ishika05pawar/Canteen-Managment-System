 <?php
ob_start();
session_start();
?>
<html>
   <head>
      <meta charset="utf-8">
      <title>Login and Registration Form in HTML | CodingNepal</title>
       <link rel="stylesheet" href="css/login.css"> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
   	<h1>Canteen Automation System</h1>
   	<style type="text/css">
   		*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  /*background: -webkit-linear-gradient(left, #a445b2, #fa4299);*/
   background: -webkit-linear-gradient(left, #00FFFF ,#3BB9FF);
}
::selection{
  background: #fa4299;
  color: #fff;
}
.wrapper{
  overflow: hidden;
  max-width: 390px;
  background: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title-text{
  display: flex;
  width: 200%;
}
.wrapper .title{
  width: 50%;
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.wrapper .slide-controls{
  position: relative;
  display: flex;
  height: 50px;
  width: 100%;
  overflow: hidden;
  margin: 30px 0 10px 0;
  justify-content: space-between;
  border: 1px solid lightgrey;
  border-radius: 5px;
}
.slide-controls .slide{
  height: 100%;
  width: 100%;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-align: center;
  line-height: 48px;
  cursor: pointer;
  z-index: 1;
  transition: all 0.6s ease;
}
.slide-controls label.signup{
  color: #000;
}
.slide-controls .slider-tab{
  position: absolute;
  height: 100%;
  width: 50%;
  left: 0;
  z-index: 0;	
  border-radius: 5px;
  background: -webkit-linear-gradient(left,#00FFFF ,#3BB9FF);
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
input[type="radio"]{
  display: none;
}
#signup:checked ~ .slider-tab{
  left: 50%;
}
#signup:checked ~ label.signup{
  color: #fff;
  cursor: default;
  user-select: none;
}
#signup:checked ~ label.login{
  color: #000;
}
#login:checked ~ label.signup{
  color: #000;
}
#login:checked ~ label.login{
  cursor: default;
  user-select: none;
}
.wrapper .form-container{
  width: 100%;
  overflow: hidden;
}
.form-container .form-inner{
  display: flex;
  width: 200%;
}
.form-container .form-inner form{
  width: 50%;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.form-inner form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
}
.form-inner form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 15px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  border-bottom-width: 2px;
  font-size: 17px;
  transition: all 0.3s ease;
}
.form-inner form .field input:focus{
  border-color: #3BB9FF;
  /* box-shadow: inset 0 0 3px #fb6aae; */
}
.form-inner form .field input::placeholder{
  color: #999;
  transition: all 0.3s ease;
}
form .field input:focus::placeholder{
  color: #b3b3b3;
}
.form-inner form .pass-link{
  margin-top: 5px;
}
.form-inner form .signup-link{
  text-align: center;
  margin-top: 30px;
}
.form-inner form .pass-link a,
.form-inner form .signup-link a{
  color: #3BB9FF;
  text-decoration: none;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
  text-decoration: underline;
}
form .btn{
  height: 50px;
  width: 100%;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
}
form .btn .btn-layer{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: -webkit-linear-gradient(right,#00FFFF ,#3BB9FF,#00FFFF ,#3BB9FF);
  border-radius: 5px;
  transition: all 0.4s ease;;
}
form .btn:hover .btn-layer{
  left: 0;
}
form .btn input[type="submit"]{
  height: 100%;
  width: 100%;
  z-index: 1;
  position: relative;
  background: none;
  border: none;
  color: #fff;
  padding-left: 0;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
}
   	</style>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="" class="login" method="POST">
                  <div class="field">
                     <input type="text" name="log_email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" name="log_pass" placeholder="Password" required>
                  </div>
                   <!-- <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div> --> 
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login" name="login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
               <form action="#" class="signup" method="POST">
               	<div class="field">
                     <input type="text" placeholder="Full Name" name="res_name" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Mobile No." name="res_mob" required>
                  </div>
                  <div class="field">
                     <input type="text" name="res_email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" name="res_pass" placeholder="Password" required>
                  </div>
                  
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup" name="res">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>
 <?php
include 'admin/connect.php';
@session_start();
@ $name = $_POST['res_name'];
@ $mobile = $_POST['res_mob'];
   @ $email = $_POST['res_email'];
    @$pass = $_POST['res_pass'];

    if(isset($_POST['res']))
    {
        if(empty($email) && empty($pass) && empty($name))
        {
            echo "please fill the fields";
        }
        else
        {
            $sql= "INSERT INTO `tbl_user` (`id`, `full_name`, `mobile_no`, `email`, `password`) VALUES (NULL, '$name', '$mobile', '$email', '$pass');";
            $result= mysqli_query($con,$sql);

            if($result)
            {
               
          
                echo "<script>alert('insert successfuly');</script>";
            }
            else
            {
                echo "<br>not inserted";
                //header('location:index.php');

            }
        }
        //header('location:index.php');
    }
?>
<?php
include 'admin/connect.php';
//@session_start();

    @$email = $_POST['log_email'];
    @$pass = $_POST['log_pass'];

    if(isset($_POST['login']))
    {
        if(empty($email) && empty($pass))
        {
            echo "please fill the fields";
        }
        else
        {
            $q= "select * from tbl_user where email ='$email'and password ='$pass' ";
            $result= mysqli_query($con,$q);

            if(mysqli_fetch_assoc($result))
            {
                //$_SESSION['uemail'] = $email;
                header("location:index.php");
            }
            else
            {
                echo "<br>email or password doesn't exists.";
            }
        }
    }
?>



 