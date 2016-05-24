<?php 
	include('partials.php'); 
	require('db_info.php');
	
	$partials = new Partials();

	if (!isset($_GET["pid"])) {
		header("Location: ".$url_scheme."home.php");
	}

	if (!isset($_COOKIE["current_user"])) {
		header("Location: ".$url_scheme."members.php");
	}
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="header.css">
	<script type="text/javascript">
		var inputs = document.querySelectorAll( '.inputfile' );
		Array.prototype.forEach.call( inputs, function( input )
		{
			var label	 = input.nextElementSibling,
				labelVal = label.innerHTML;

			input.addEventListener( 'change', function( e )
			{
				var fileName = '';
				if( this.files && this.files.length > 1 )
					fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
				else
					fileName = e.target.value.split( '\\' ).pop();

				if( fileName )
					label.querySelector( 'span' ).innerHTML = fileName;
				else
					label.innerHTML = labelVal;
			});
		});
	</script>
	
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
	<link rel="stylesheet" href="form.css">
	<link rel="stylesheet" href="button.css">

	<body>	

		<?php echo $partials->getHeader(); ?>

		<form action="create.php" enctype="multipart/form-data" method="post">
  			<h1>Oh Yay New Ideas</h1>
  			<div class="question">
    			<input type="text" name="name" required/>
    			<label>Name of this establishment</label>
  			</div>
  			<div class="question">
    			<input type="text" name="highlight" required/>
    			<label>Your favorite thing</label>
  			</div>
  			<div class="question">
    			<input type="textarea" name="description" required/>
    			<label>Description</label>
  			</div>

  			<div class="question">
    			<input type="text" name="link" required/>
    			<label>Link</label>
  			</div>
  
  			<input type="file" name="file" id="file" class="inputfile"/>
  			<label for="file">The thousand words (picture)</label><br>

  			<input type="hidden" name="pid" value="<?php echo $_GET['pid']; ?>">
  			
  			<button class="btn btn-1 btn-1e" type="submit">Submit</button>
		</form>
	</body>
</head>
</html>