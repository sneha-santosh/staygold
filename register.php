
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link rel="stylesheet" href="home.css">
<style>
  
h1{

	 background: url("https://playinonpurple.files.wordpress.com/2016/08/download.png?w=640") ;
background-repeat: no-repeat;
background-size: 25% 100%;
background-position: center;
	font-family: 'Pacifico';
  }
 h2{
	padding-left: 35px;
  font-family: "Sofia";
  font-size: 50px;
text-align: center;
}

header{
  padding:10px;
  text-align: center;
  background: url("https://media.istockphoto.com/photos/blue-abstract-background-or-texture-picture-id1138395421?k=6&m=1138395421&s=612x612&w=0&h=bJ1SRWujCgg3QWzkGPgaRiArNYohPl7-Wc4p_Fa_cyA=") ;
  background-repeat: no-repeat;
background-size: cover;
}

footer{
	margin-top:10px;
   font-size: 120%;
   background: url("https://media.istockphoto.com/photos/blue-abstract-background-or-texture-picture-id1138395421?k=6&m=1138395421&s=612x612&w=0&h=bJ1SRWujCgg3QWzkGPgaRiArNYohPl7-Wc4p_Fa_cyA=") ;
  background-repeat: no-repeat;
background-size: cover;
color: white;

padding-left: 3px;
}
body{
	margin: 0;
	padding: 0;
	background-color:gray;
}

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
  


.signup_btn{
margin-top:5px;
padding:10px;
	width:50%;
	background-color:rgb(199, 30, 30);
	color:white;
}

.card {
    float: center;
    height:50%;
    width: 70%;
    box-shadow: 4px 4px 8px 4px rgba(0, 0, 0, 0.2);
    padding: 5px;
    text-align: center;
    background-color:goldenrod;
  }
  .column {
      padding-left: 540px;
    float: center;
    width: 40%;
  }

  .column.side {
    margin:0px;
    float: center;
    width: 20%;
    flex: 60%;
    background-color:black;
    color: white;
  padding: 20px;0
  column-fill: auto;
  height: 80%;
  column-gap: 2px;
  }
  .row:after {
  
    content: "";
    display: table;
    clear: both;
  }
	</style>
</head>
<header>
<h1 align="center">
	<img src="https://playinonpurple.files.wordpress.com/2016/08/download.png?w=640" alt="img">
</h1>
<hr>
</header>
<body style="background:lightgrey";>
<div class="row">
    <div class="column">
      <div class="card">
        <form action="process.php" method="post">
            <form>
                <h2 > Sign Up </h2>
                <hr>  
                
				    <div class="col-xs-4 m-1">
                        <label for="firstname"><b>First Name</b></label><br>
                        <input class="form-control" id="firstname" maxlength="10" type="text" name="firstname" required>
                        </div>
                        <div class="col-xs-4 m-1">
                        <label for="lastname"><b>Last Name</b></label><br>
                        <input class="form-control" id="lastname" maxlength="10" type="text" name="lastname" required>
                        </div>
                        <div class="col-xs-4 m-1">
                        <label for="email"><b>Email ID</b></label><br>
                        <input class="form-control" id="email"  type="email" name="email" required>
                        </div>
                        <div class="col-xs-4 m-1">
                        <label for="phonenumber"><b>Phone Number</b></label><br>
                        <input class="form-control" type="tel" id="phonenumber"  pattern="[789][0-9]{9}"  name="phonenumber" required>
                 
                        </div>
                        <div class="col-xs-4 m-1">
                        <label for="password"><b>Password</b></label><br>
                        <input class="form-control" id="password"  type="password" name="password" required>
                        </div>
                        <hr class="mb-5">
                        <input class="btn signup_btn" type="submit" id="register" name="create" value="Sign Up">
                    </div>
                    </div>
                </form>
      </div>
    </div>	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
 </script>
		
</div>
</body>
</html>