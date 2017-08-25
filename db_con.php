<?php
include_once("const.php");

$conn = new mysqli($SERVER_NAME, $USER, $PASSWORD, $DB_NAME);

if($conn -> connect_errno){
    echo"Failed to Connect to MySQL: (". $mysqli->connect_errno. ")". $mysqli->connect_errno;
}