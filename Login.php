<?php
session_start();
include("connect.php");
include("functions.php");
$user_data = check_login($con);
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$phone_num= $_POST['num'];
$password= $_POST['pass'];
$nid= $_POST['nid'];
}
if(!empty($phone_num) && !empty($password) && !empty($nid))
{
$query = "SELECT * from customer where phn_num = '$phone_num'";
$result = mysqli_query($con, $query);
if($result)
{

if($result && mysqli_num_rows($result) > 0)
{
        $user_data = mysqli_fetch_assoc($result);
        if($user_data['pass']==$password)
        {
        header("Location: Dash.php");
        die;
        }
        }

}

}

?>

<html>
<script src="nav-bar.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
    <a href="#home" class="active">    Home   </a> <!-- copy paste this line & edit the name for more features -->
    <a href="#news">     Agent Locator       </a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
</html>
<style> .topnav {
    background-color: white;
    overflow: hidden;
}


.topnav a {
    float: left;
    display: block;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}


.topnav a:hover {
    background-color: #ddd;
    color: black;
}


.topnav a.active {
    background-color: #04AA6D;
    color: white;
}


.topnav .icon {
    display: none;
}
</style>





<html lang="en">
<head>
    <meta name="viewport" content= "width-device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Login/Signup</title>
    <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <img src="eWallet.png">
    <form method="POST">
    <div class="login-page">
        <div class="form">
            <h1 style="font-family: 'Poppins SemiBold'; color: #474488; text-align:center"> LOGIN </h1>
            <form class="login-form"></form>
            <input type="text" placeholder="Phone Number" name="num">
            <input type="password" placeholder="Password" name="pass">
            <input type="ID" placeholder="NID" name="nid">
            <button type="submit" name="login"> LOGIN </button>
            <p style="font-family: 'Poppins Medium'; font-size: 13px; color: #474488">Haven't Signed up yet? <a href="Signup.php"> Sign Up </a></p>
        </div>
    </div>
    </form>
</body>
</html>