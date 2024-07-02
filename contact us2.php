<?php
session_start(); // Start a PHP session

include("connect.php"); // Include the database connection file

if (isset($_POST["SUBMIT"])) {
    $firstName = $_POST["name"];
    $EMAIL = $_POST["email"];
    $CONTACT = $_POST["Contact"];
    $PROBLEM = $_POST["problem"];

    // Prepare the SQL statement
    $insert = "INSERT INTO contactus (Name, Email, Contact_Number, Problem) 
               VALUES ('$firstName', '$EMAIL', '$CONTACT', '$PROBLEM')";

    if (mysqli_query($conn, $insert)) {
        // Insertion successful
        echo "Successful";
    } else {
        // Insertion failed
        echo "Error: " . mysqli_error($conn);
    }
}
?>







<!-- start HTML session -->
<!DOCTYPE html>
<html>
<head>
<title>EDU stage</title>
<link rel="stylesheet" href="css/CON_2.css">


<style>
   .subutton {
    background-color: #4CAF50; /* Green background color */
    color: white; /* White text color */
    border: none; /* Remove the button border */
    padding: 10px 20px; /* Add some padding for better appearance */
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 5px; /* Add rounded corners */
}

.subutton:hover {
   background-color: red;
   transform: scale(1.05);
   transition: background-color 0.9s, transform 0.3s;
   color:white
}
</style>
</head>
<body style="background-color:#EEE0C9;">
<script src="../new.js"></script>



<hr id="test"/>
<!--Create Navigarion bar-->
<ul class="menu">
     <li class="menu"><a href="HOME.php" target="_top">HOME</a></li>
     <li class="menu"><a href="Edu-Exam home.php" target="_top">EXAMS</a></li>
     <li class="menu"><a href="exam.php" target="_top">REGISTATION</a></li>
	  <li class="menu"><a href="contact us.php"target="_top">CONTACT US</a></li>
	  <li class="menu"><a href="contact us2.php" target="_top">ABOUT US</a></li>


	 <li class="licl"><a href="LOGIN.php" target="_top"><img src="../mycode/Image/login.png" width="30px" height="30px"></a></li> 
	 <li class="licl"><a href="Signup.php" target="_top"><img src="../mycode/Image/sign.png" width="30px" height="30px"></a></li>
	<div class="searchbox">
         <form> 
              <input type="text" placeholder=" Search...." name="search" style="margin-left:400px;  border-radius: 10px; background-color: E4F1FF;transition: background-color 0.9s ease;"> 
              <button type="submit" style="color:white;">Search</button> 
         </form>
     </div>
</ul>


	 <h1>Contact Us</h1>
	 <br>






    <p style="font-size: 18px; line-height: 1.6; text-align: justify; color: #333;">At ExamProNet, we welcome the opportunity to connect with you and foster an open line of communication. Your feedback, inquiries, and interactions are of great importance to us. It's our aim to provide exceptional service and support to our users, and your engagement is vital in achieving that goal.

To facilitate this, we've provided a user-friendly form below. You can use this form to reach out to us, sharing your name, email address, contact number, and a detailed description of any issues, questions, or concerns you may have. We value every message and take your input seriously. Whether it's about your experience with our services, a technical issue, or simply a question about how we can assist you better, we're here to listen and respond.

Our dedicated team is ready to address your inquiries and assist you promptly. Your satisfaction and success are our top priorities. By contacting us, you enable us to work together in ensuring that your experience with ExamProNet is the best it can be. We're excited to hear from you, and we look forward to helping you achieve your goals through our platform.
</p><br><br>

<div class="contact-form">

<form action="contact us2.php" method="post" >	

        <div class="form-field">
           <label for="name">Name</label>
           <input type="message" id="name" name="name" placeholder=" Your name">
        </div>

       <div class="form-field">
         <label for="email">Email</label>
         <input type="email" id="email" name="email" placeholder=" Your email">
      </div>

      <div class="form-field">
         <label for="0728667319">Contact number</label>
         <textarea id="message" name="Contact" placeholder=" +94xxxxxxxxxx"></textarea>
      </div>
  
      <div class="form-field">
       <label for="I cannot view my result">Enter your problem</label>
       <textarea id="message" name="problem" placeholder=" eg:-  I cannot view my result"></textarea>
      </div>  


    <center>
      <input type="submit" value="SUBMIT" name="SUBMIT" class="subutton">
      <input type="reset" value="RESET" name="RESET" id="resetButton" class="subutton">
      <script>
             document.getElementById("resetButton").addEventListener("click", function (event) {
            // Use the "confirm" method to show a confirmation dialog
             var resetConfirmed = confirm("Are you sure you want to reset the form?");
    
            // If the user clicks "OK" in the confirmation dialog, the form will reset.
            // If the user clicks "Cancel," the form won't reset.
            if (!resetConfirmed) {
                    event.preventDefault(); // Prevent the form from resetting.
                  }
  });
</script>


    </center>
    
	 
</div>
</form>

<br><br>






	  <hr id="test"/>
     <ul type="disc" class="menu">
	 
<!--Start footer section-->
<footer><p><h3>About ExamProNet</h3>
<div>
        <p>ExamProNet is dedicated to revolutionizing online education methods worldwide.</p>
        <p>Join us in shaping the future of learning.</p>
        <p>  &copy; 2023 ExamProNet</p>
            <table width="100%">
               <tr>
                  <td><a href="https://www.google.com/"><img src="../mycode/Image/bipasha/Google.png" width="30px" height="30px" ></a></td>
                  <td><a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="../mycode/Image/bipasha/facebook.jpeg" width="30px" height="30px"></a></td>
                  <td><a href="https://www.linkedin.com/feed/"><img src="../mycode/Image/bipasha/linkedin.png" width="30px" height="30px"></a></td>
                  <td><a href="https://twitter.com/home"><img src="../mycode/Image/bipasha/twitter.png" width="30px" height="30px"></a></td>
                  <td><a href="mailto:your.email@example.com"><img src="../mycode/Image/bipasha/gmail.png" width="30px" height="30px"></a></td>
               </tr>
            </table>
</div>
</footer>


</body>
</html>