<?php 
	include('partials.php'); 
	require('db_info.php');
	
	$partials = new Partials();

	if (!isset($_GET["pid"])) {
		header("Location: ".$url_scheme."home.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="header.css">
		<link rel="stylesheet" href="form.css">
		<link rel="stylesheet" href="button.css">
	</head>

	<style>
		@font-face {
			font-family: 'BigJohn';
			src: url('assets/BIG_JOHN.otf') format('opentype');
		}

		@font-face {
			font-family: 'SlimJoe';
			src: url('assets/Slim_Joe.otf') format('opentype'); 
		}

		body {
			margin: 0;
			padding: 0;
		}
	</style>

	<body>
		<?php echo $partials->getHeader(); ?>

		<form action="create.php" enctype="multipart/form-data" method="post">
  			<h1>Exclusive Entry</h1>
  			<div class="question">
    			<input type="text" name="code" required/>
    			<label>Your Code</label>
  			</div>
  			
  			<button class="btn btn-1 btn-1e" type="submit">Submit</button>
		</form>
	</body>

</html>