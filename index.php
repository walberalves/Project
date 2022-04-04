<!DOCTYPE html>
<html lang="PT-BR">

<head>
	<meta charset="utf-8">
   	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   	<title>Server</title>


</head>


<body>

    
   <main class="container">
       <h2>Login</h2>
	
	<form method="POST" action="index1.php">
		<div class="input-field">
			<input type="text" name="username" id="username" placeholder="Enter Your Username">
		  <div class="underline"></div>	
		</div>

		<div class="input-field">
			<input type="password" name="password" id="password" placeholder="Enter Your Password">
			<div class="underline"></div>
		</div>
         
         <input type="submit" value="Continue">

		
	</form>


	<div class="footer">
	    <span>Or Connect With Social</span>
		<div class="social-fields">
			<div class="social-field twitter">
				<a href="#">
					<i class="fab fa-twitter"></i>
					Sign in with Twitter
					

				</a>
			</div>

			<div class="social-field facebook">
				<a href="#">
					<i class="fab fa-facebook"></i>
					Sign in with Facebook
					

				</a>
			</div>

			
		</div>
	</div>


</main>
   






</body>
</html>