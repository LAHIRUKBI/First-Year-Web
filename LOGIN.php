<?php
session_start(); // Start a PHP session

include("connect.php"); // Include the database connection file

if (isset($_POST["LOGIN"])) {
    $Email = $_POST["username"];
    $Password = $_POST["password"];

    // Prepare the SQL statement with the correct column names
    $selectSql = "SELECT * FROM signup WHERE email = '$Email' AND password = '$Password'";
    $result = mysqli_query($conn, $selectSql);

    //check admin
    $selectSql1 = "SELECT * FROM admin WHERE name = '$Email' AND password = '$Password'";
    $result1 = mysqli_query($conn, $selectSql1);

    if($result1 && mysqli_num_rows($result1) > 0){
        // Login successful
        $_SESSION["username"] = $Email;  // Store the username in a session variable
        echo "Login is successful";     // Display a success message
        header("Location: Admin/home.php");  // Redirect to the dashboard or homepage
        exit();
    }

    else if ($result && mysqli_num_rows($result) > 0) {
        // Login successful
        $_SESSION["username"] = $Email;  // Store the username in a session variable
        echo "Login is successful";     // Display a success message
        header("Location: HOME.php");  // Redirect to the dashboard or homepage
        exit();
    } else {
        // Login failed
        echo "...Login failed... Please check your Email and Password.";
    }
}
?>







<!--Strat HTML session-->
<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/kavi.css">         <!--Link css sheet-->
	<link rel="stylesheet" href="css/Navigetion.css">  <!--Link css sheet-->
    <link rel="stylesheet" href="css/Footer.css">      <!--Link css sheet-->
</head>

<body style="background-color:#EEE0C9;">


<!--Create Navigarion bar-->
<ul class="menu">
     <li class="menu"><a href="HOME.php" target="_top">HOME</a></li>
     <li class="menu"><a href="Edu-Exam home.php" target="_top">EXAMS</a></li>
     <li class="menu"><a href="exam.php" target="_top">REGISTATION</a></li>
	 <li class="menu"><a href="contact us.php"target="_top">CONTACT US</a></li>
	 <li class="menu"><a href="contact us2.php" target="_top">ABOUT US</a></li>


	 <li class="licl"><a href="LOGIN.php" target="_top"><img src="../mycode/Image/login.png" width="30px" height="30px"></a></li> 
	 <li class="licl"><a href="Signup.php" target="_top"><img src="../mycode/Image/sign.png" width="30px" height="30px"></a></li>
	
</ul>





<!--Create Head section-->
<div class="container">
        <h1>ExamProNet</h1>
        <h2>Discover your future</h2>



<!-- The 'action' attribute specifies where the form data will be sent when submitted (to LOGIN.php in this case) -->
<!-- The 'method' attribute specifies the HTTP request method (POST in this case) -->
<form class="loginform" action="LOGIN.php" method="POST">
            <center><img src="../mycode/Image/Login.png" width="70px" height="70px" alt="Login Icon"></center>
            <hr class="hrsize">
            <h2>USER LOGIN</h2><hr>
            <label for="username">Email</label>
            <input type="text" id="username" name="username" value="" placeholder="Enter your username"><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" value="" placeholder="Enter Your Password">
			
            <p>Forgot Username? <button id="forgotUsernameButton">Click Here</button></p>
            <!--start JS part-->
            <script>
                   var forgotUsernameButton = document.getElementById("forgotUsernameButton");
                   forgotUsernameButton.addEventListener("click", function() {
                          alert("Username has been forgotten!");
                    });
            </script>

            <p>Forgot Password? <button id="forgotPasswordButton">Click Here</button></p>
            <script>
                   var forgotPasswordButton = document.getElementById("forgotPasswordButton");
                   forgotPasswordButton.addEventListener("click", function() {
                         alert("Password has been forgotten!");
                    });
            </script>
			
            <input type="submit" name="LOGIN" class="login-button" value="Log In">
        </form>

</div>



    <!--Start footer section-->
<footer><p><h3>About ExamProNet</h3>
        <p>ExamProNet is dedicated to revolutionizing online education methods worldwide.</p>
        <p>Join us in shaping the future of learning.</p>
        <p>  &copy; 2023 ExamProNet</p>
            <table height="100%" width="100%" >
               <tr>
                  <td><a href="https://www.google.com/"><img src="../mycode/Image/SocialKit/Google.png" width="30px" height="30px" ></a></td>
                  <td><a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="../mycode/Image/SocialKit/facebook.jpeg" width="30px" height="30px"></a></td>
                  <td><a href="https://www.linkedin.com/feed/"><img src="../mycode/Image/SocialKit/linkedin.png" width="30px" height="30px"></a></td>
                  <td><a href="https://twitter.com/home"><img src="../mycode/Image/SocialKit/twitter.png" width="30px" height="30px"></a></td>
                  <td><a href="mailto:your.email@example.com"><img src="../mycode/Image/SocialKit/gmail.png" width="30px" height="30px"></a><td>
               </tr>
            </table>
</div>
</footer>

</body>

</html>
