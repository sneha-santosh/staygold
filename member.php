<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Membership Form</title>
   <link rel="stylesheet" type="text/css" href="mb.css">  
<script type="text/javascript" src="mb.js"></script>
</head>
<body>
	<h1>Membership Form</h1>
	<div class="container">
 <form name="myForm" autocomplete="off" action="member.php" onsubmit="return validateForm()" method="POST">
 	<label for="fn"><b>First Name</b></label>
	<input type="text" id="fn" name="fn" placeholder="First Name"><br><br>
    <label for="ln"><b>Last Name</b></label>
    <input type="text" id="ln" name="ln" placeholder="Last Name" ><br><br>
	<label for="email"><b>Email</b></label>
    <input type="email" id="email" name="email" placeholder="abc@gmail.com"><br><br>
    <label for="phone"><b>Contact number</b></label>
    <input type="tel" id="phone" name="phone" placeholder="9123456789" ><br><br>
    <input type="checkbox" id="ds" name="ds" value="ds" checked>
    <label for="ds">I agree to the <a href="#">Terms &amp;Conditions</a></label><br>
    <input type="submit" name="submit" value="Submit"> 
 <?php
require 'connect.php';
if(isset($_POST['submit'])) {
    
$firstname=$_POST['fn'];
$lastname=$_POST['ln'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$done=mysqli_query($conn, "INSERT INTO membership VALUES ('','$firstname','$lastname','$email','$phone') ");
if ($done) {
    echo "success";
}
else{
    echo "not inserted";
}
}
?>   
  </form>
 </div>
 </body>
 </html>
