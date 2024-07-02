<?php  // Start a PHP session

include("connect.php");       // Include the database connection file

if (isset($_POST["SUBMIT"])) {
    $IndexNO = $_POST["index"];
    $NICNO = $_POST["nic"];
	  $TIME = $_POST["time"];
    $LOCATION = $_POST["location"];
	

    
	// Prepare the SQL statement
    $insert = "INSERT INTO examdetails (IndexNo, NIC, Time, Location) VALUES ('$IndexNO', '$NICNO', '$TIME', '$LOCATION')";


    if (mysqli_query($conn, $insert)) {
		// Login successful
        echo "Successful";
    } else {
		// Login failed
        echo "Error: " . mysqli_error($conn);
    }
}

?>









<!-- Start a html session-->
<html>
<head>
    <link rel="stylesheet" href="css/ex.css">
	<link rel="stylesheet" href="css/Navigetion.css">   <!--  Link css sheet -->
    <title>exam</title>
    
    <style>
        .container {
  width: fit-content;
  margin: 0 auto;
  padding: 20px;
  border: 2px solid #000;
  border-radius: 60px;
  background-color: #F5EEC8;
  box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.1);
}

.description {
  text-align: center;
}

.form {
  font-family: 'Your Font Family', sans-serif;
}

.form h2 {
  font-weight: bold;
}

.form-field {
  text-align: left;
  margin: 20px 0;
}

label {
  font-weight: bold;
  display: block;
}

input[type="text"] {
  width: 100%;
  padding: 10px;
  border: 2px solid #000;
  border-radius: 20px;
}

.form-actions {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.subutton {
  margin: 0 10px;
}

#resetButton {
  cursor: pointer;
}
</style>
</head>



<body style="background-color:#EEE0C9;">
    

<!--Create Navigarion bar-->
<ul class="menu">
     <li class="menu"><a href="HOME.php" target="_top">HOME</a></li>
     <li class="menu"><a href="Edu-Exam home.php" target="_top">EXAMS</a></li>
     <li class="menu"><a href="exam.php" target="_top">RESULTS</a></li>
	 <li class="menu"><a href="contact us.php"target="_top">CONTACT US</a></li>
	 <li class="menu"><a href="contact us2.php" target="_top">ABOUT US</a></li>


	 <li class="licl"><a href="LOGIN.php" target="_top"><img src="../mycode/Image/login.png" width="30px" height="30px"></a></li> 
	 <li class="licl"><a href="Signup.php" target="_top"><img src="../mycode/Image/sign.png" width="30px" height="30px"></a></li>
</ul>





<!-- header section  -->
    <div class="description">
	    <center><img src="../mycode/Image/edu.png" width="100px" height="100px" class="logo"></center><br><br>
        <center style="font-family: 'Your Font Family', sans-serif; letter-spacing:10px;"><b>EXAM RESULTS</b></center><br><br>
    </div>
    <!-- container section  -->
	
	
<div>
     <div>
       <p style="text-align:center;font-family: 'Your Font Family', sans-serif;">This form is a prerequisite for all aspirants planning to participate in the prestigious Toraghtah exam. It is a crucial step in the registration process, ensuring that your details are accurately recorded for a seamless examination experience.

By filling out this form, you provide us with essential information necessary to facilitate your exam participation. Your index number, NIC number, preferred exam time, and location preferences are all crucial details that help us cater to your specific needs.

We understand that every candidate's circumstances are unique, and this form allows us to accommodate those requirements effectively. Your cooperation in completing this form is not only beneficial for your own experience but also helps us organize the Toraghtah exam efficiently.

Your success is our priority, and this form is a vital part of that commitment. Please ensure that you provide accurate and complete information. We look forward to welcoming you to the Toraghtah exam, and we're here to support you throughout your journey.</p><br><br><br>
    
       


<form action="exam.php" method="post" >	   
<div class="container">
  <div class="description">
    <div class="form">
      <h2>Enter Your Details</h2>
      <hr>
      <form>
        <div class="form-field">
          <label for="index">Index Number</label>
          <input type="text" name="index" id="index">
        </div>

        <div class="form-field">
          <label for="nic">NIC Number</label>
          <input type="text" name="nic" id="nic">
        </div>

        <div class="form-field">
  <label for="time" style="font-weight: bold; display: block; margin-bottom: 5px;">Time</label>
  <select name="time" id="time" style="width: 100%; padding: 10px; border: 2px solid #000; border-radius: 20px;">
    <option value="08:00 AM" style="background-color: #f5eecc;">08:00 AM</option>
    <option value="10:00 AM" style="background-color: #f5eecc;">10:00 AM</option>
    <option value="12:00 PM" style="background-color: #f5eecc;">12:00 PM</option>
    <option value="02:00 PM" style="background-color: #f5eecc;">02:00 PM</option>
    <option value="04:00 PM" style="background-color: #f5eecc;">04:00 PM</option>
  </select>
</div>

        <div class="form-field">
          <label for="location">Location</label>
          <input type="text" name="location" id="location">
        </div>

        <div class="form-actions">
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

        </div>
      </form>
    </div>
  </div>
</div>
<br><br><br>
	 
	 </div>
     <div class="right">
        <img src="main.avif" alt="">
      </div>
</form>	  
	  
  
	  
	  
	  
	  
	  
	  
<!--Start footer section-->
<footer><p><h3>About ExamProNet</h3>
        <p>ExamProNet is dedicated to revolutionizing online education methods worldwide.</p>
        <p>Join us in shaping the future of learning.</p>
        <p>  &copy; 2023 ExamProNet</p>
            <table width="100%">
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