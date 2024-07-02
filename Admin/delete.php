<?php
    include'../connect.php';
    $mail = $_GET['mail'];

    $sql = "DELETE FROM payment WHERE Email = '$mail'";

    if($conn->query($sql)){
        header("Location:payment.php");
    }

    else{
        echo "error ";
    }
?>