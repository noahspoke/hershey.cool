<?php
	include('partials.php');

	$partials = new Partials();
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="form.css">
	<link rel="stylesheet" href="button.css">

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
			background-color: #c43235;
		}

		body p {
			color:white;
		}

		.headline {
			margin: 0;
			width:50%;
			text-align: right;
			font-family: 'BigJohn', sans-serif;
			font-size: 24px;
		}

		.detail {
			margin-left:50%;
			width:50%;
			font-family: 'SlimJoe', sans-serif;
		}
	</style>
</head>

<body>

	<?php echo $partials->getHeader(); ?>

	<p class="headline">What Is this?</p><p class="detail">hershey.cool is a website that curates community cards to show what is trending in Hershey Pennsylvania right now.</p>

</body>

</html>