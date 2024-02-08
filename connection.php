<?php
session_start();

function localConnection() {
    // Define an array of common localhost hostnames or IP addresses
    $localhosts = array('localhost', '127.0.0.1');

    // Get the server's hostname
    $serverHostname = $_SERVER['SERVER_NAME'];

    // Check if the server's hostname is in the array of localhost values
    return in_array($serverHostname, $localhosts);
}

if(localConnection()){
    $con = mysqli_connect('localhost','root','','ctchicks');
    
    if(!$con){
        die('Not Connected');
    }

}else{
    $con = mysqli_connect('localhost','u231955561_ctchicks','@Ctchicks1','u231955561_ct');
    if(!$con){
        die('Not Connected');
    }
}
?>





