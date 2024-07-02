<?php
    session_start();
    
    if(isset($_SESSION["username"])){
          
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Alpha Life Insurance</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        *{
        margin: 0;
        padding: 0;
        }
        body{
            
            margin: 0 auto;
            background-color:#EEE0C9;
        }

        .left  {
            width: 30%;
            float: left;
            margin-top: 15px;
            margin-left: 15px;
            padding: 10px;
            height: 500px;
            border: 2px solid black;
            border-radius:50px;
            box-shadow: 3px 3px 10px  grey;
            
           
        }
        .right{
            width: 60%;
            float: right;
            
        }
        .logout{
            float: right;
        }
         h1{
            
            font-variant: small-caps;
            padding: 20px;
            font-size: 60px;
            letter-spacing: 5px;
            font-weight: normal;
        }
        #user-photo{
            font-size: 80px;
            margin: 0 auto;
            text-align: center;
            
            
        }
        #welcome{
            font-size: 40px;
            margin-top:10px;
            text-align: center;
            
            
        }
        .left ul {
            margin-top: 30px;
        }
        .left ul li {
            list-style: none;
            margin-top: 50px;
            margin-bottom: 80px;
        }
        .left ul li a{
            text-decoration: none;
            font-size: 30px;
            padding: 10px;
            background-color: #132043;
            color: white;
            border-radius: 10px;
            
            
        }
        .left ul li a:hover{
            color: red;
            
        }

        .right a{
            margin-top: 20px;
            font-size: 50px;
            color: red;
        }

       .top {
        margin-top: 150px;
        
       }
       .same1{
        float: left;
        margin-right: 100px;
       }
       .topleft{
        border: 1px solid black;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 3px 3px 3px  grey;
       }
       .topleft h2{
            font-size: 50px;
       }
       .topleft p{
        font-size: 35px;
        text-align: center;
        margin-top: 10px;
       }

       .topright{
        border: 1px solid black;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 3px 3px 3px  grey;
       }
       .topright h2{
            font-size: 50px;
       }
       .topright p{
        font-size: 35px;
        text-align: center;
        margin-top: 10px;
       }

       .down{
        margin-top: 200px;
    
       }

       .downleft{
        border: 1px solid black;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 3px 3px 3px  grey;
       }
       .downleft h2{
            font-size: 50px;
       }
       .downleft p{
        font-size: 35px;
        text-align: center;
        margin-top: 10px;
       }

       .downright{
        border: 1px solid black;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 3px 3px 3px  grey;
       }
       .downright h2{
            font-size: 50px;
       }
       .downright p{
        font-size: 35px;
        text-align: center;
        margin-top: 10px;
       }

       #middle{
        margin-top: 420px;
        
        color: #000066;
        font-family: sans-serif;
        font-size:20px;
       }
       
    
    </style>
</head>
<body>


    <!-- count eka hadaganna eka -->
    <?php
    include'../connect.php';
    $sql="SELECT COUNT(Email) FROM signup";
    $result=$conn->query($sql);

    if ($result) {
        $row = $result->fetch_row();
        $count = $row[0];

    }

    
    ?>
    
    <div class="left">
        <h1>ExamProNet</h1>
        <p id="user-photo" ><i class="fa-solid fa-user"></i></p>
        <p id="welcome" >Welcome <?php echo $_SESSION["username"]; ?></p><hr>

        
        <?php
            #session_unset();#session unset eka 
        
        ?>
        

        <ul>
            <li><a href="customer.php">Customer</a></li>
            <li><a href="payment.php">customer payment</a></li>
           
        </ul>

        

    </div><!--left-->
    <div class="right">
        <div class="logout">
        <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a><!--logout-->
        </div><!--logout-->

        <div class="top">
            <div class="topleft same1">
                <h2>Total Registers</h2>
                <p><?php echo $count ?></p>  <!--set value get from database -->

            </div><!--top-left-->

        </div><!--top-->

       <h1 id="middle" >The ExamProNet Admin Dashboard is a powerful and user-friendly tool
         designed to streamline the management of your website's content, users, and resources.
          This essential component empowers administrators to efficiently control and monitor 
          various aspects of ExamProNet, ensuring a seamless user experience and effective site
           administration. Here's an overview of its key features and functionalities</h1>

        <div class="down">

        
            


        </div><!--down-->

    </div><!--right-->


</body>
</html>

<?php
    }else{
        header("location:index.php");

    }

?>