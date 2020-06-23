<?php 

	// Allow the config
	 define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php"; 

?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Page Title</title>

    <base href="/" />

	<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/css/uikit.min.css" />

<!-- UIkit JS -->

</head>
<body>
	<div class="uk-section uk-container">
  	
		<?php echo "Hello World. Today is: "; 

		echo date("d m Y"); ?>
		<p>
			<a href="login.php">Login</a>
			<a href="register.php">Register</a>
		</p>

  	</div>

  	


<?php require_once "inc/footer.php"; ?> 



</body>
</html>