<?php
    include'../connect.php';
    $mail = $_GET['mail'];

    $sql1 = "DELETE FROM signup WHERE Email = '$mail'";

    if($conn->query($sql1)){
        header("Location:customer.php");
    }
    else{
        echo "error ";
    }
?>