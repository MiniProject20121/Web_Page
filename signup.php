<?php
session_start();
// error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$contactno=$_POST['mobile_no'];
$password=md5($_POST['pass']);
$query=mysqli_query($con,"insert into users(name,email,contactno,password) values('$name','$email','$contactno','$password')");
if($query)
{
	echo "<script>alert('You are successfully register');</script>";
    header("location:login.php");
}
else{
    echo "<script>alert('Not register something went worng');</script>";
    // header("location:signup.php");
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page </title>
<style>
    html{
        overflow: hidden;
    }
    body{
        margin: 0px;
        padding: 0px;
        background: url(https://images.unsplash.com/photo-1516321497487-e288fb19713f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80);
        background-size: cover;
        background-position:center;
        background-repeat: no-repeat;
        height: 106vh;
        font-family: sans-serif;
        justify-content:space-evenly;
    }
    .loginbox{
        width: 350px;
        height:575px;
        background: rgb(253, 206, 206);
        color: rgb(179, 48, 48);
        top:1.7% ;
        left:40%;
        position:absolute;
        translate: translate(-50%,-50%);
       text-align: center;
       padding: 70px 30px;
       border-radius: 50px;



    }
     .avatar{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position:relative;
            top: -50px;
            left:calc(-150% -150px);

   }
   h1{
       margin: 0px;
       text-align: center;
       font-size: 20px;
   }
   .loginbox p{
       margin: 0px;
       padding: 0px;
       font-weight: bold;

   }
   .loginbox input{
       width: 80%;
       margin-bottom: 20px;

   }

   .loginbox input[type="text"], input[type="password"]{
       border:none;
       border-bottom:1px solid #fff;
       background:transparent;
       outline:none;
       height:40px;
       font-size:16px;
   }
   .loginbox input[type="text"], input[type="email"]{
       border:none;
       border-bottom:1px solid #fff;
       background:transparent;
       outline:none;
       height:40px;
       font-size:20px;
   }
   .loginbox input[type="submit"]{
       border : none;
       outline: none;
       height: 25px;
       background: #fb2525;
       color: #fff;
       font-size: 20px;
       border-radius: 20px;
   }
   .loginbox input[type="submit"]:hover{
       cursor: pointer;
       background: #f7f5f1;
       color:#000;

   }
   .loginbox a {
       text-decoration: none;
       font-size: 15px;
       line-height: 25px;
       color:rgb(0, 0, 0);
   }
   .loginbox a:hover {
       color: #631ac2;

   }

</style>
<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
</head>
<body>
    
    <div class="loginbox">
      <form action="signup.php" method="POST">
      <img src="https://static.thenounproject.com/png/6478-200.png" alt="" class="avatar">
      <h1>SIGN-UP</h1><br><br>

          <p>Name</p>
          <input type="text" name="name" placeholder="Enter Your Name" required>
          <p>Email</p>
          <input type="email" name="email" placeholder="Enter Your Email" onBlur="userAvailability()" required>
          <span id="user-availability-status1" style="font-size:12px;"></span>
          <p>Mobile Number</p>
          <input type="text" name="mobile_no" placeholder="Enter Your Mobile Number" required>
          <p>Password</p>
          <input type="password" name="pass" placeholder="Enter Password" required>
          <br><br>
          <input type="submit" name="submit" value="SIGN-UP">
        </form>
        <div>
            <a href="index.php">HOME PAGE</a><br><br>
            <a href="signin.html">SIGN-IN</a><br>
        </div>
        </div>

</body>
</html>
