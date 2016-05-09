<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/normalize.css">
	<link rel="stylesheet" href="skeleton.css">

	<style>
		@font-face {
			font-family: 'BigJohn';
			src: url('assets/BIG_JOHN.otf') format('opentype');
		}

    @font-face {
      font-family: 'SlimJoe';
      src: url('assets/Slim_Joe.otf') format('opentype'); 
    }

		html {
      height: 100%;
		}

		body {
			background-image: url('assets/dwntwn_hershey.JPG');
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      overflow: auto;
		}

		header {
			text-align: center;
			width: 100%;
			height: 128px;
      background-color: #411112;
			background-position: center;
			background-size: 100% auto;
			line-height: 128px;
			font-family: 'BigJohn', sans-serif;
			font-size: 32px;
			color: white;
			letter-spacing: .15em;
      text-shadow: 
            4px 4px 0px #c43235, 
            7px 7px 0px rgba(0, 0, 0, 0.2);
		}

    .row p {
      margin: 0;
      text-align: center;
      line-height: 100%;
      max-width: 100%;
    }

    .grad {
      overflow: hidden;
      height: calc(100% - 128px);
      background-image: linear-gradient(to bottom, transparent, rgba(0,0,0,0.9));
    }

		.container {
			margin-top: 64px;
      font-family: 'SlimJoe', sans-serif;
		}

		.column {
			position: relative;
			color: #f7f7f7;
			background-color: #c43235;
			margin-bottom: 32px;
			line-height: 100%;
			padding: 40px 20px;
		}

		svg {
			width: 100%;
			/*background-color:#2E2D29; */
		}

    footer {
      margin-top:5%;
      width: 100%;
      text-align: center;
      font-family: 'SlimJoe', sans-serif;
      color: white;
      font-size:12px;
    }

    footer p {
      margin: 2.5em;
    }

    a {
      cursor: pointer;
      text-decoration: none;
    }

    a:visted {
      text-decoration: none;
    }

    .active_link {
      color: white;
      padding: 12px;
      margin: 0 6px;
      background-color: #c43235;
      line-height: 220%;
    }

    .active_link:hover {
      color: white;
    }

		.hvr-outline-out {
  			display: inline-block;
  			vertical-align: middle;
  			-webkit-transform: translateZ(0);
  			transform: translateZ(0);
  			box-shadow: 0 0 1px #2E2D29;
  			-webkit-backface-visibility: hidden;
 			backface-visibility: hidden;
  			-moz-osx-font-smoothing: grayscale;
  			position: relative;
		}

		.hvr-outline-out:before {
  			content: '';
  			position: absolute;
  			border: white solid 4px;
  			top: 0;
  			right: 0;
  			bottom: 0;
  			left: 0;
  			-webkit-transition-duration: 0.3s;
  			transition-duration: 0.3s;
  			-webkit-transition-property: top, right, bottom, left;
 			transition-property: top, right, bottom, left;
		}

		.hvr-outline-out:hover:before, .hvr-outline-out:focus:before, .hvr-outline-out:active:before {
  			top: -8px;
  			right: -8px;
  			bottom: -8px;
  			left: -8px;
		}

    @media screen and (max-width: 551px) {
      html {
        height: initial;
      }

      body {
        height: initial;
      }
    }

    @media screen and (max-width:  765px) {
      body {
        font-size: 1.5em;
      }
    }

    @media screen and (max-width: 620px) {
      body {
        font-size: 1em;
      }
    }

    @media screen and (max-width: 550px) {
      body {
        font-size: 2em;
      }

      footer {
        font-size: 12px;
      }
  }
	</style>

</head>

	<body>
		<header>hershey.cool</header>

    <div class="grad">
    
		<div class="container">
			<div class="row">
				<a href="place.php?id=3"><div class="one-third column hvr-outline-out">
					<p>Downtown</p><p style="font-family:'BigJohn', sans-serif;">The Square</p>
				</div></a>

				<div class="one-third column hvr-outline-out">
					<p>Fun</p><p style="font-family:'BigJohn', sans-serif;">Glee</p>
				</div>

				<div class="one-third column hvr-outline-out">
					<p>Shopping</p><p style="font-family:'BigJohn', sans-serif;">Attire and such</p>		
				</div>
			</div>

			<div class="row">
				<div class="one-third column hvr-outline-out">
					<p>Dining</p><p style="font-family:'BigJohn', sans-serif;">Consume</p>
				</div>

				<div class="one-third column hvr-outline-out">
					<p>Misc</p><p style="font-family:'BigJohn', sans-serif;">Adventurous</p>
				</div>

				<div class="one-third column hvr-outline-out">
					<p>Help</p><p style="font-family:'BigJohn', sans-serif;">What is this</p>
				</div>
			</div>
		</div>

    <footer>
      <p>Made by <a class="active_link hvr-outline-out" href="https://twitter.com/spochart">spochart</a> and <a class="active_link hvr-outline-out" href="http://tsunamictech.com">tsunamic</a></p>
    </footer>

  </div>

	</body>
</html>