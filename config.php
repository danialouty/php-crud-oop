<?php

$conn=mysqli_connect("localhost","root","","oopscrud");

if(!$conn){
    die("connection failed".mysqli_connect_error());
}