<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "jobsdb";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
    die("Connection failed!");
}