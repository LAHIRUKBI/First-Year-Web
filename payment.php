<?php  // Start a PHP session

include("connect.php");                // Include the database connection file

if (isset($_POST["PAYMENT"])) {
    $FullName = $_POST["Full_name"];
	$CardNumber = $_POST["Card_no"];
	$Month = $_POST["date"];
	$Year = $_POST["year"];
	$CVC = $_POST["cvv"];
	$Amount = $_POST["much"];
	$Date = $_POST["pay_day"];
	$Email = $_POST["nic_no"];
	$Type = $_POST["role"];

    
	// Prepare the SQL statement
    $insert = "INSERT INTO payment (FullName, CardNumber, Month, Year, CVC, Amount, Date, Email, Type) 
VALUES ('$FullName', '$CardNumber', '$Month', '$Year', '$CVC', '$Amount', '$Date', '$Email', '$Type')";


    if (mysqli_query($conn, $insert)) {
		// Login successful
        echo "Successful";
    } else {
		// Login failed
        echo "Error: " . mysqli_error($conn);
    }
}

?>






u

<!-- Start a PHP session-->
<!DOCTYPE html> 
<head>
    <title>Payment</title>
    <link rel="stylesheet" type="text/css" href="../mycode/css/pay.css"> <!-- Link style sheet-->
</head>

<!-- Start a body session-->
<body style="font-family: 'DM Sans', sans-serif;background-color:#EEE0C9;">


<form action="payment.php" method="post" >	
<div class="card-container">
<center><h1>PAYMENT</h1></center>
    <div class="card1">
	<h4>Enter Payment Details : </h4>
               <input type="text" name="Full_name" placeholder="Card Holder Full Name" class="textbox"><br>
			   <input type="text" name="Card_no" placeholder="Card Number" class="textbox">
			   <div style="display:flex; justify-content:space-between; border-radius: 30px;">
                    <input type="text" name="date" placeholder="MONTH"  class="textbox">
                    <input type="text" name="year"  placeholder="EXP"   class="textbox" style="margin-left:90px;">
					<input type="text" name="cvv" placeholder="CVC"  class="textbox"  style="margin-left:90px;">
               </div><hr>
			   <h4>Amount of package you pay :</h4>
			   <select name="much" class="textbox" style="margin-right: 200px;">
                   <option value="150">$ 150</option>
                   <option value="180">$ 180</option>
				   <option value="180">$ 200</option>
				   <option value="180">$ 220</option>
				   <option value="180">$ 250</option>
				   <option value="180">$ 280</option>
				   <option value="180">$ 300</option>
				   <option value="180">$ 350</option>
				   <option value="180">$ 360</option>
				   <option value="180">$ 400</option>
               </select>
               <input type="date" name="pay_day" placeholder="DATE" class="textbox">
               <input type="text" name="nic_no" placeholder="Email" class="textbox" maxlength="1000">
			   <hr>
               <h4>From which position the payment will be made :</h4>
               <select name="role" class="textbox" style="margin-right: 20px;">
                   <option value="employee">Employee</option>
                   <option value="student">Student</option>
              </select>
			  
			  <center><input type="submit" value="PAYMENT" name="PAYMENT" class="subutton"></center>
	</div>
</div>
</form>	







 


</body>
</html>