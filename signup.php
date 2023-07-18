 <?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <!----<title>Login Form Design | CodeLab</title>---->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
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
  background: #f2f2f2;
  /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
}
::selection{
  background: #DC143C;
  color: #fff;
}
.wrapper{
  width: 380px;
  background: #fff;
  border-radius: 15px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: #fff;
  user-select: none;
  border-radius: 15px 15px 0 0;
  background: linear-gradient(-135deg, #DC143C ,#CD5C5C);
}
.wrapper form{
  padding: 10px 30px 50px 30px;
}
.wrapper form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  position: relative;
}
.wrapper form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
.wrapper form .field input:focus,
form .field input:valid{
  border-color: #4158d0;
}
.wrapper form .field label{
  position: absolute;
  top: 50%;
  left: 20px;
  color: #999999;
  font-weight: 400;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;
}
form .field input:focus ~ label,
form .field input:valid ~ label{
  top: 0%;
  font-size: 16px;
  color: #DC143C;
  background: #fff;
  transform: translateY(-50%);
}
form .content{
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}
form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}
form .content input{
  width: 15px;
  height: 15px;
  background: red;
}
form .content label{
  color: #DC143C;
  user-select: none;
  padding-left: 5px;
}
form .content .pass-link{
  color: "";
}
form .field input[type="submit"]{
  color: #fff;
  border: none;
  padding-left: 0;
  margin-top: -10px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  background: linear-gradient(-135deg,#DC143C ,#CD5C5C);
  transition: all 0.3s ease;
}
form .field input[type="submit"]:active{
  transform: scale(0.95);
}
form .signup-link{
  color: #DC143C;
  margin-top: 20px;
  text-align: center;
}
form .pass-link a,
form .signup-link a{
  color: #DC143C;
  text-decoration: none;
}
form .pass-link a:hover,
form .signup-link a:hover{
  text-decoration: underline;
}

    </style>
    <div class="wrapper">
      <div class="title">Sign Up Form</div>
      <form action="" method="POST">
        <div class="field">
          <input type="text" name="full-name" required>
          <label>Full Name</label>
        </div>
        <div class="field">
          <input type="text" name="phone" required>
          <label>Mobile No</label>
        </div>
        
        <div class="field">
          <input type="text" name="email" required>
          <label>Email Id</label>
        </div>
        <div class="field">
          <input type="Address" name="address" required>
          <label>Address</label>
        </div>
        <div class="field">
          <input type="password" name="pass" required>
          <label>Password</label>
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
          <div class="pass-link"><!-- <a href="#">Forgot password?</a> --></div>
        </div>
        <div class="field">
          <input type="submit" value="Sign Up" name="sign">
        </div>
        <div class="signup-link">Not a member? <a href="signup.php">Signup now</a></div>
      </form>
    </div>
  </body>
</html>
 <?php
include 'admin/connect.php';
@session_start();
@ $name = $_POST['full-name'];
@ $mobile = $_POST['phone'];
   @ $email = $_POST['email'];
    @$pass = $_POST['pass'];
    $address=$_POST['address'];

    if(isset($_POST['sign']))
    {
        if(empty($email) && empty($pass) && empty($name))
        {
            echo "please fill the fields";
        }
        else
        {
            $sql= "INSERT INTO tbl_user VALUES (NULL, '$name', '$mobile','$address', '$email', '$pass');";
            $result= mysqli_query($con,$sql);

            if($result)
            {
               
          
                header('location:login.php');
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
 