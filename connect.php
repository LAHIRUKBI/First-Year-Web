<?php

$serverName="localhost";
$dbUser="root";
$dbPassword="";
$dbName="online_examination";

$conn= new mysqli($serverName,$dbUser,$dbPassword,$dbName);

if(!$conn){
    die("Connection Faild");
}
?>