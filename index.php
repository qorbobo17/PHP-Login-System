<?php 

//Allow the config
define('__CONFIG__', true);

//Require the config
require_once "inc/config.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login System</title>
	<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css" />

</head>
<body>
	
	<div class="uk-section uk-container">
		
		<?php 
		echo "Hello and welcome! Today is ";
		echo date("d m Y"); 

		 ?>

		<p>
			
			<a href="login.php">Login</a>
			<a href="register.php">Register</a>

		</p>
	
	</div>

<?php require_once "inc/footer.php"; ?>



</body>
</html>