<!DOCTYPE html>
<html>
    <head>
<!-- <link rel="stylesheet" href="home.css" > -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
.fa {
  padding: 7px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-instagram {
  background: #C13584;
  color: white;
}
.img{
  font-size: 120%;
   background: lightblue url("contact.jpg") fixed center;
  background-repeat: no-repeat;
background-size:70% 100%;
background-position: center;
 background-color: lightgrey;
  
}
/*marquee {
    background-color:#eee;
    color: solid black;
    border:5px black;
    text-shadow: 5px 5px 2px silver;
    box-shadow: 5px 5px 10px black;
    border-radius:10px;*/
}
button{
    align:center ;
}
.text{
 border-bottom:2px solid black;
    border-left:2px solid black;
    border-top:0.5px solid black;
    border-right: 0.5px solid black;
    border-radius:5px ;
    box-shadow:2px 2px 2px black;
}
textarea {
    border-bottom:2px solid black;
    border-left:2px solid black;
    border-top:0.5px solid black;
    border-right: 0.5px solid black;
    border-radius:5px ;
    box-shadow:5px 2px 10px black;
}
.link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

        h1{
        	padding: 50px;
        	 background: url("https://playinonpurple.files.wordpress.com/2016/08/download.png?w=640") ;
  background-repeat: no-repeat;
background-size: 25% 100%;
background-position: center;
        	font-family: 'Pacifico';
        }
footer{
   font-size: 120%;
   background: url("https://media.istockphoto.com/photos/blue-abstract-background-or-texture-picture-id1138395421?k=6&m=1138395421&s=612x612&w=0&h=bJ1SRWujCgg3QWzkGPgaRiArNYohPl7-Wc4p_Fa_cyA=") ;
  background-repeat: no-repeat;
background-size: cover;
color: white;
padding-left: 3px;
}

            </style>
 <script>
function validateForm()                                  
{ 
    var firstname = document.forms["myForm"]["fname"]; 
    var lastname = document.forms["myForm"]["lname"]; 
    var phone = document.forms["myForm"]["MNum"];  
     var email = document.forms["myForm"]["Email"];    
    var comments = document.forms["myForm"]["comments"];  
   
    if (firstname.value == "")                                  
    { 
        window.alert("Please enter your first name."); 
        firstname.focus(); 
        return false; 
    } 
   if (lastname.value == "")                                  
    { 
        window.alert("Please enter your last name."); 
        lastname.focus(); 
        return false; 
    }
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (MNum.value == "")                           
    { 
        window.alert("Please enter your telephone number."); 
        MNum.focus(); 
        return false; 
    } 
   
    if (comments.value == "")                               
    { 
        window.alert("Please enter your comment."); 
        comments.focus(); 
        return false; 
    } 
       
  
    return true; 
}
</script>
    </head>
<body> 
<!-- <header> -->
<!-- <h1 align="center"><i></i></h1>
<hr>
<ul class="points">
<li class="sub"><a href="home.html">Home</a></li>
<li class="sub"><a href="aboutus.html">About us</a></li>
<li class="sub"><a href="Two">Get educated</a></li>
<li class="sub"><a href="findhelp.html">Find help</a></li>
<li class="sub"><a class="active" href="contact.html">Contact us</a></li>
<li class="sub"><a href="https://www.w3schools.com/">Login</a></li> 
</ul></header>-->

<img src="contact1.png" width="300" height="100" >
<div class="img">
            <form name="myForm" autocomplete="off" action="contact.php" onsubmit="return validateForm()" method="post">
           <p align="center"/>
     
        <label>First Name:</label><br>
                <input class="text"type="text"Name="fname"id="fname"placeholder="First Name"><br><br>
        <label>Last Name:</label><br>
                <input class="text"type="text"Name="lname"id="lname"placeholder="Last name"><br><br>
          <label>Mobile Number:</label><br>
        <!-- <select id="ph" class="text">
        <option>+91</option>
        <option>+92</option>
        <option>+93</option>
        <option>+94</option>
        <option>+95</option>
        </select> -->
        <input class="text"type="Number"Name="MNum"id="MNum"placeholder="Mobile number"><br><br>
        <label>Email:</label><br>
       <input class="text"type="Email"Name="Email"id="Email"placeholder="abc@gmail.com"><br><br>
        <form>
        <input type="radio"name="gen"value="Male"><span id ="Male">&nbsp; Male</span>&nbsp;&nbsp;
        <input type="radio"name="gen"value="Female"><span id ="Female">&nbsp; Female</span>&nbsp;&nbsp; 
         <input type="radio"name="gen"value="Other"><span id ="Other">&nbsp; Other</span>&nbsp;&nbsp;<br><b><br />
        <p align="center">Write your Query Here </b>
        <br />
        <textarea name="comments" placeholder="Enter your comments... "rows="4" cols="30"></textarea>
        <br /> </a>
       <input class="text" name="submit" type ="Submit"value="Submit"id="Sub" >
       </a> </div>
       <?php
require 'connect.php';
if(isset($_POST['submit'])) {
    
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$phone=$_POST['MNum'];
$email=$_POST['Email'];
$gender=$_POST['gen'];
$comment=$_POST['comments'];
$done=mysqli_query($conn, "INSERT INTO contact VALUES ('','$firstname','$lastname','$phone','$email','$gender','$comment') ");
if ($done) {
    echo "success";
}
else{
    echo "not inserted";
}
}
?>  
  <!-- <footer>
<h3>Subscribe to our newsletter</h3>
<p>For updates about our programming and events, subscribe to our newsletter!</p>
<form autocomplete="off" action="home.html" method="get">
<label for="email">Email:</label>
<input type="email" id="email" name="email"><br><br>
<input type="submit" name="button" value="SIGN UP">  
</form>
  <p>Email us at <a style="text-decoration:none; color: white;" href="#">Help@staygold.in</a></p>
  <p>Contact us at 1800 4500 9888</p>
<div style="text-align: center;">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-instagram"></a>
<p class="text-xs-center">Copyright &copy; 2020 Stay Gold</p>
</div>
</footer> -->
</body>
</html>