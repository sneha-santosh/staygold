<?php 

	session_start();
	
	if(isset($_SESSION['userlogin'])){
		header("Location: index1.html");
	}


?>
<!DOCTYPE html>
<html>
<head>
<style>
  
  h1{
  
	   background: url("https://playinonpurple.files.wordpress.com/2016/08/download.png?w=640") ;
  background-repeat: no-repeat;
  background-size: 25% 100%;
  background-position: center;
	  font-family: 'Pacifico';
	}
   h2{
	  
	  padding-left: 28px;
	font-family: 'Sofia';
	font-size: 150px;
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
	  background-color:lightgrey;
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


	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

</head>
<body>
<header>
  <h1 align="center">
	  <img src="https://playinonpurple.files.wordpress.com/2016/08/download.png?w=640" alt="img">
  </h1>
  <hr>
</header>
<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center">
			</div>	
			<div class="d-flex justify-content-center form_container">
				<form>
					<h2 style="font-size:50px;">Login</h2>
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>					
						</div>
						<input type="text" name="username" id="username" class="form-control input_user"placeholder="Email/username" required>
					</div>
					<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>					
						</div>
						<input type="password" name="password" id="password" class="form-control input_pass"placeholder="Password" required>
					</div>
					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
							<label class="custom-control-label" for="customControlInline">Remember me</label>
						</div>
					</div>
				
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<button type="button" name="button" id="login" class="btn login_btn">Login</button> 
			</div>
			</form>
			<div class="mt-4">
				<div class="d-flex justify-content-center links">
					Don't have an account? <a href="../register.php" class="ml-2">Sign Up</a>
				</div>
				
			</div>
		</div>
	</div>
</div>

<script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
	$(function(){
		$('#login').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
				var username = $('#username').val();
				var password = $('#password').val();
			}

			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'jslogin.php',
				data:  {username: username, password: password},
				success: function(data){
					alert(data);
					if($.trim(data) === "Successfully logged in"){
						setTimeout(' window.location.href =  "../index1.html"', 500);
					}
				},
				error: function(data){
					alert('there were erros while doing the operation.');
				}
			});

		});
	});
</script>
</body>
</html>