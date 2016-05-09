<?php include('partials.php'); 
	
	$partials = new Partials();
?>
<!DOCTYPE html>
<html>
<head>

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

		header {
			text-align: left;
			font-size: 16px;
			color: white;
			background-color: #411112;
			font-size: 4vh;
			font-family: 'BigJohn', sans-serif;
			z-index: -2;
			padding:2% 2%;
			margin: 0;
		}

		a {
			text-decoration: none;
			color: white;
		}

		a:visted {
			text-decoration: none;
			color: white;
		}

		.transition, form button, form .question label, form .question input[type="text"], form .question input[type="textarea"] {
			  -moz-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
			  -o-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
			  -webkit-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
			  transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
			}

			* {
			  font-family: 'BigJohn', sans-serif;
			  -webkit-font-smoothing: antialiased;
			}

			body {
				background-color: #2C0B0C;
			}

			form {
			  position: relative;
			  display: inline-block;
			  max-width: 700px;
			  min-width: 50%;
			  box-sizing: border-box;
			  padding: 30px 25px;
			  background-color: white;
			  margin: 40px 0;
			  left: 50%;
			  -moz-transform: translate(-50%, 0);
			  -ms-transform: translate(-50%, 0);
			  -webkit-transform: translate(-50%, 0);
			  transform: translate(-50%, 0);
			}

			form h1 {
			  color: #c43235;
			  font-family: 'SlimJoe', sans-serif;
			  font-size: 32px;
			  letter-spacing: 0.01em;
			  margin-left: 15px;
			  margin-bottom: 50px;
			  text-transform: uppercase;
			}

			form .question {
			  position: relative;
			  padding: 10px 0;
			}
			form .question:first-of-type {
			  padding-top: 0;
			}
			form .question:last-of-type {
			  padding-bottom: 0;
			}
			form .question label {
			  transform-origin: left center;
			  color: #c43235;
			  font-family: 'BigJohn', sans-serif;
			  font-weight: 300;
			  letter-spacing: 0.01em;
			  font-size: 17px;
			  box-sizing: border-box;
			  padding: 10px 15px;
			  display: block;
			  position: absolute;
			  margin-top: -40px;
			  z-index: 2;
			  pointer-events: none;
			}
			form .question input[type="text"], form .question input[type="textarea"] {
			  appearance: none;
			  background-color: none;
			  border: 3px solid #c43235;
			  line-height: 0;
			  font-family: 'BigJohn', sans-serif;
			  font-weight: 800;
			  font-size: 17px;
			  width: 100%;
			  display: block;
			  box-sizing: border-box;
			  padding: 10px 15px;
			  color: #c43235;
			  font-weight: 100;
			  letter-spacing: 0.01em;
			  position: relative;
			  z-index: 1;
			}
			form .question input[type="text"]:focus, form .question input[type="textarea"]:focus {
			  outline: none;
			  background: #c43235;
			  color: white;
			  margin-top: 30px;
			}
			form .question input[type="text"]:valid, form .question input[type="textarea"]:valid {
			  margin-top: 30px;
			}
			form .question input[type="text"]:focus ~ label, form .question input[type="textarea"]:focus ~ label {
			  -moz-transform: translate(0, -35px);
			  -ms-transform: translate(0, -35px);
			  -webkit-transform: translate(0, -35px);
			  transform: translate(0, -35px);
			}
			form .question input[type="text"]:valid ~ label, form .question input[type="textarea"]:valid ~ label {
			  text-transform: uppercase;
			  font-style: italic;
			  -moz-transform: translate(5px, -35px) scale(0.6);
			  -ms-transform: translate(5px, -35px) scale(0.6);
			  -webkit-transform: translate(5px, -35px) scale(0.6);
			  transform: translate(5px, -35px) scale(0.6);
			}

			.btn {
				border: none;
				font-family: inherit;
				font-size: inherit;
				color: #c43235;
				background: none;
				cursor: pointer;
				padding: 25px 80px;
				display: inline-block;
				margin: 30px 0;
				text-transform: uppercase;
				letter-spacing: 1px;
				outline: none;
				position: relative;
				-webkit-transition: all 0.3s;
				-moz-transition: all 0.3s;
				transition: all 0.3s;
			}

			.btn:after {
				content: '';
				position: absolute;
				z-index: -1;
				-webkit-transition: all 0.3s;
				-moz-transition: all 0.3s;
				transition: all 0.3s;
			}

			/* Pseudo elements for icons */
			.btn:before {
				font-family: 'icomoon';
				speak: none;
				font-style: normal;
				font-weight: normal;
				font-variant: normal;
				text-transform: none;
				line-height: 1;
				position: relative;
				-webkit-font-smoothing: antialiased;
			}

			.btn-1 {
				border: 3px solid #c43235;
				color: #c43235;
			}


			.btn-1e {
				overflow: hidden;
			}

			.btn-1e:after {
				width: 100%;
				height: 0;
				top: 50%;
				left: 50%;
				background: #c43235;
				opacity: 0;
				-webkit-transform: translateX(-50%) translateY(-50%) rotate(45deg);
				-moz-transform: translateX(-50%) translateY(-50%) rotate(45deg);
				-ms-transform: translateX(-50%) translateY(-50%) rotate(45deg);
				transform: translateX(-50%) translateY(-50%) rotate(45deg);
			}

			.btn-1e:hover,
			.btn-1e:active {
				color: white;
			}

			.btn-1e:hover:after {
				height: 260%;
				opacity: 1;
			}

			.btn-1e:active:after {
				height: 400%;
				opacity: 1;
			}

			.inputfile {
				width: 0.1px;
				height: 0.1px;
				opacity: 0;
				overflow: hidden;
				position: absolute;
				z-index: -1;
			}

			.inputfile + label {
    			font-size: 1.25em;
				font-weight: 700;
				color: white;
				background-color: #c43235;
				display: inline-block;
				cursor: pointer;
				margin: 30px 0;
				padding: 10px 15px;
			}

			.inputfile:focus + label,
			.inputfile + label:hover {
				background-color: #411112;
				cursor: pointer;
			}

	</style>

	<body>	

		<?php echo $partials->getHeader(); ?>

		<form action="create.php" method="post">
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
  
  			<input type="file" name="file" id="file" class="inputfile"/>
  			<label for="file">The thousand words (picture)</label><br>

  			<input type="hidden" name="pid" value="<?php $_GET['pid']; ?>">
  			
  			<button class="btn btn-1 btn-1e" type="submit">Submit</button>
		</form>
	</body>
</head>
</html>