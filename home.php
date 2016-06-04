<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/normalize.css">
	<link rel="stylesheet" href="skeleton.css">
  <link rel="stylesheet" href="fonts.css">

	<style>
		html {
      height: 100%;
		}

		body {
			background-image: url('http://tsunamic-cdn.bitballoon.com/dwntwn_hershey.JPG');
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

    header p {
      width:90%;
      margin-left:5%;
    }

    @media screen and (max-width: 400px) {
      header p {
        font-size:24px;
      }
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
      border: 1px solid #fff;
		}

    .column:hover {
      color:#fff;
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

    p a {
      font-family: 'BigJohn', sans-serif;
      color: white;
    }

    p a:hover {
      color: white;
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
		<header><p>hershey.cool</p></header>

    <div class="grad">
    
		<div class="container">
			<div class="row">
				<a href="place.php?id=3" class="one-third column">
					<p>Downtown</p><p style="font-family:'BigJohn', sans-serif;">The Square</p>
				</a>

				<a href="place.php?id=4" class="one-third column">
					<p>Fun</p><p style="font-family:'BigJohn', sans-serif;">Glee</p>
				</a>

				<a href="place.php?id=5" class="one-third column">
					<p>Shopping</p><p style="font-family:'BigJohn', sans-serif;">Attire and such</p>		
				</a>
			</div>

			<div class="row">
				<a href="place.php?id=6" class="one-third column">
					<p>Dining</p><p style="font-family:'BigJohn', sans-serif;">Consume</p>
				</a>

				<a href="place.php?id=7" class="one-third column">
					<p>Pop Culture</p><p style="font-family:'BigJohn', sans-serif;">Adventurous</p>
				</a>

				<a href="place.php?id=8" class="one-third column">
					<p>Help</p><p style="font-family:'BigJohn', sans-serif;">What is this</p>
				</a>
			</div>
		</div>

    <footer>
      <p>Made by <a href="https://twitter.com/spochart">spochart</a> and <a href="http://tsunamictech.com">tsunamic</a></p>
    </footer>

  </div>

	</body>
</html>