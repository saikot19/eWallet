<html>
<script src="nav-bar.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
    <a href="Dash.php" class="active">    Home   </a> <!-- copy paste this line & edit the name for more features -->
    <a href="payment.php">     Payment       </a>
    <a href="#news">     Cash-Out       </a>
    <a href="#news">     Recharge       </a>
    <a href="#news">     Agent Locator       </a>
    <a href="#news">     Statement      </a>
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
    <title>Account Dash</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<img src="eWallet.png" class="center">



<table class="table" style="background-color: white">
<h1 style="font-family: 'Poppins SemiBold'; color: white; text-align:center"> Your Account </h1>
<thead>
<tr style="font-family: Poppins SemiBold">
<th> Name </th>
<th> Phone Number </th>
<th> NID </th>
</tr>
</thead>
<tbody style="font-family: 'Poppins Medium';">
<?php
session_start();
include("connect.php");
$query= "SELECT * from customer";
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0) {

while ($Row = mysqli_fetch_assoc($result)) {


echo "<tr>
<td>" .$Row['name']. "</td>
<td>" .$Row['phn_num']. "</td>
<td>" .$Row['NID']. "</td>
</tr>";
}
}

?>
</tobdy>
</table>
</body>
</html>




