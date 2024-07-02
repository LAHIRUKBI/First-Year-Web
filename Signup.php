<?php  // Start a PHP session

include("connect.php");                // Include the database connection file

if (isset($_POST["SUBMIT"])) {
  $firstName = $_POST["first_name"];
	$lastName = $_POST["last_name"];
	$fullname = $_POST["Full_name"];
	$dob = $_POST["date_of_birth"];
	$nic = $_POST["nic_no"];
	$sex = $_POST["gender"];
	$type = $_POST["role"];
	$Address = $_POST["address"];
	$city = $_POST["city_town"];
	$no = $_POST["mobile_no"];
	$fix = $_POST["fix_no"];
	$Email = $_POST["email"];
	$PassWord = $_POST["password"];
    $cpassWord = $_POST["confirm_password"];

    
	// Prepare the SQL statement
    $insert = "INSERT INTO signup (FirstName, LastName, FullName, Year, NIC, Gender, Type, Address, City, Mobile, FixNo, Email, Password, ConformPassword ) 
	VALUES ('$firstName', '$lastName', '$fullname', '$dob', '$nic', '$sex', '$type', '$Address', '$city', '$no', '$fix', '$Email', '$PassWord', '$cpassWord')";

    if (mysqli_query($conn, $insert)) {
		// Login successful
        echo "Successful";
    } else {
		// Login failed
        echo "Error: " . mysqli_error($conn);
    }
}

?>







<!-- Start a HTML session-->

<html>   
<head>
  <title>Edu-Sign Up</title>
  <link rel="stylesheet" href="css/sign.css">
  <link rel="stylesheet" href="css/Navigetion.css">
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




<center>
    <img src="../mycode/Image/edu.png" alt="Logo" width="200px" height="200px">
    <h1 style="font-family: 'DM Sans', sans-serif;">SIGN UP</h1>
</center>






	
<form action="Signup.php" method="post" >

	
<div class="card-container">
    <div class="card1">
	    <div style="display:flex; justify-content:space-between; border-radius: 30px;">
               <input type="text" name="first_name" placeholder="First Name"  class="textbox">
               <input type="text" name="last_name"  placeholder="Last Name"   class="textbox" style="margin-left:90px;">
        </div>
               <input type="text" name="Full_name" placeholder="Full Name" class="textbox"><hr><br>
               <input type="text" name="date_of_birth" placeholder="register year" class="textbox">
               <input type="text" name="nic_no" placeholder="NIC No" class="textbox">
               <select name="gender" class="textbox" style="margin-right: 200px;">
                   <option value="male">Male</option>
                   <option value="female">Female</option>
               </select>
               <select name="role" class="textbox" style="margin-right: 20px;">
                   <option value="employee">Employee</option>
                   <option value="student">Student</option>
              </select>
	</div>
	



	
	<div class="card1">
    <div style="display: flex; flex-direction: column; align-items: center; border-radius: 30px;">
        <input type="text" name="address" placeholder="Address" class="textbox">
        <input type="text" name="city_town" placeholder="City, Town" class="textbox">
		<div style="display:flex; justify-content:space-between; border-radius: 30px;">
               <input type="text" name="mobile_no" placeholder="Mobile No"  class="textbox">
               <input type="text" name="fix_no"  placeholder="Fix No"   class="textbox" style="margin-left:200px;">
        </div>

        <input type="email" name="email" placeholder="E-mail" class="textbox"><br>
    </div>


	
      <input type="password" name="password" placeholder="Password******" class="textbox">
      <input type="password" name="confirm_password" placeholder="Conform Password ******" class="textbox"><br><br>

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
</div>	  

</form>



</body>
</html>