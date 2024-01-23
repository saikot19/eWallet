<?php

$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname= "ewallet";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed Connection ");
};