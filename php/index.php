<?php
$servername = "sql8.freesqldatabase.com";
$username='sql8531478';
$password='gEmIUCxI7a';
$db='sql8531478';
$portNo = 3306;

//Connecting to database
$con = mysqli_connect($servername,$username,$password,$db,$portNo);

//Checking Connection
if(!$con)
{
    echo 'Please check database connection';
}

?>