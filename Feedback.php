<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Experiment4</title>
<style>

input[type=text] {
width: 40%;
padding: 6px 12px;
margin: 8px 0;
}
input[type=email] {
width: 38.5%;
padding: 6px 12px;
margin: 8px 0;
}
input[type=password] {
width: 38%;
padding: 6px 12px;
margin: 8px 0;
}
textarea {
width: 42%;
height: 84px;
padding: 8px 16px;
resize: none;
}
select {
width: 22%;
padding: 6px 8px;
border-radius: 4px;
}
input[type=submit] {
background-color: #4CAF50;
border: none;
color: white;
padding: 12px 28px;
text-decoration: none;
margin: 4px 2px;
cursor: pointer;
}
.all {
border-radius: 5px;
background-color: #F0F8FF;
border-style: double;
padding: 20px;

}
h1 {
background-color: #AEEE;
padding: 10px 18px;
margin: 4px;
font-family: Helvetica;
}
</style>
<script type="text/javascript">
	function validateForm()
{
var name = document.myForm.name;
var email = document.myForm.email;
var password = document.myForm.password;
var comment = document.myForm.comment;
if(allLetter(name))
{
if(ValidateEmail(email))
{
if(password_validation(password))
{
if(alphanumeric(comment))
{
}
}
}
}
return true;

}
function allLetter(name)
{
var letters = /^[A-Za-z]+$/;
if(name.value.match(letters))
{
return true;
}
else
{
alert('Name must have alphabet characters only');
name.focus();
return false;
}
}
function ValidateEmail(email)
{
var mailformat =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
email.focus();
return false;
}
}
function password_validation(password)
{
var password_len = password.value.length;
if (password_len === 0 )
{
alert("Password should not be empty");
password.focus();
return false;
}
return true;

}
function alphanumeric(comment)
{
var letters = /^[0-9a-zA-Z]+$/;
if(comment.value.match(letters))
{
return true;
}
else
{
alert('Comment must have alphanumeric characters only');
comment.focus();
return false;
}
}
</script>
</head>
<body>
<h1><center>Feedback Form</center></h1>
<div class="all">
<h3>Please provide your feedback below</h3>
<form name="myForm" autocomplete="off" action="Feedback.php" onsubmit="return validateForm()" method="post">
<label for="name">Name:</label>
<input type="text"name="name"id="name" placeholder="Enter your name" pattern=".{1,}[A-Za-z]" title="Must contain alphabets, and at least 2 or more characters"><br><br>
<label for="email">Email:</label>
<input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter your email-id:abc@gmail.com"><br><br>
<label for="password">Password:</label>
<input type="password" name="password" id="password" placeholder="Enter your password"><br><br>
<!--<label for="experience">How was your experience?</label>
<select name="experience" id="experience">
<option value=""></option>
<option value="Amazing">Very Satisfied</option>
<option value="Satisfactory">Satisfied</option>
<option value="Not Satisfactory">Neutral</option>
<option value="Not Satisfactory">Unsatisfied</option>
<option value="Very Bad">Very Unsatisfied</option>
</select><br><br>-->
<label for="experience">How was your experience?</label><br>
<input type="radio"name="experience" value="Very Satisfied">Very Satisfied<br>
<input type="radio"name="experience" value="Satisfied">Satisfied<br>
<input type="radio"name="experience" value="Neutral">Neutral<br>
<input type="radio"name="experience" value="Unsatisfied">Unsatisfied<br>
<input type="radio"name="experience" value="Very Unsatisfied">Very Unsatisfied<br><br>
<label for="recommend">Would you recommend our site to Others?</label><br><br>
<input type="radio"name="recommend" value="Yes">Yes
<input type="radio"name="recommend" value="No">No
<input type="radio"name="recommend" value="Maybe">Maybe<br><br>
<label for="comment">Comment: </label><br>
<!-- <input type="text" cols="60"rows="6" name="comment" id="comment" placeholder="Your Suggestions..."><br><br> -->
<textarea name="comment"cols="60"rows="6" placeholder="Your Suggestions..."></textarea><br>
<input type="submit" name="submit" value="Submit">
<?php
require 'connect.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$experience=$_POST['experience'];
$recommend=$_POST['recommend'];
$comment=$_POST['comment'];
$done=mysqli_query($conn, "INSERT INTO feedback VALUES ('','$name','$email','$password','$experience','$recommend','$comment') ");
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