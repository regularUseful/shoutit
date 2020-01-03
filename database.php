<?php 
//connect to MySQL
$con = mysqli_connect("localhost", "root", "", "shoutit");

//Test Con
if(mysqli_connect_errno()){
    echo "failed to connect" . mysqli_connect_error();
}