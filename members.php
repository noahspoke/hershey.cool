<?php include('partials.php'); 
	
	$partials = new Partials();

	if(isset($_COOKIE["current_user"])) {
		header("Location: http://localhost/showcase/home.php");
	}
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="fonts.css">
	<link rel="stylesheet" href="form.css">
	<link rel="stylesheet" href="button.css">

	<style type="text/css">
		h2 {
			font-family: 'SlimJoe', sans-serif;
			color:#c43235;
			font-size: 18px;
		}
	</style>
</head>

<body>
	<?php echo $partials->getHeader(); ?>

	<form action="login.php" method="post">
  			<h1>We Welcome You With Open Arms, Friend</h1>
  			<div class="question">
    			<input type="text" name="name" required max-length="254"/>
    			<label>Username</label>
  			</div>
  			<div class="question">
    			<input type="password" name="password" required max-length="16"/>
    			<label>Password</label>
  			</div>
  			
  		<button class="btn btn-1 btn-1e" type="submit">Submit</button>

  		<h2>If you don't have an account, we'll create you one right now.</h2>
	</form>
</body>

</html>