<?php
	require('db_info.php');

	define('DATABASE_NAME', $name);
	define('DATABASE_USER', $user);
	define('DATABASE_PASS', $pass);
	define('DATABASE_HOST', $host);
	include_once('class.DBPDO.php');
	
	class Place {

		function findPlace($id) {
			$DB = new DBPDO();
			$place = $DB->fetch("SELECT * FROM places WHERE id = ?", $id);
			return $place;
		}

		function findRecords($id) {
			$DB = new DBPDO();
			$records = $DB->fetchAll("SELECT * FROM records WHERE place_id = ?", $id);
			return $records;
		}

		function currentUser() {
			if (isset($_COOKIE["current_user"])) {
				$DB = new DBPDO();
				$user = $DB->fetch("SELECT * FROM users WHERE id = ?", $_COOKIE["current_user"]);
				return $user;
			}
			else {
				return false;
			}
		}
	}
	
	$place = new Place();
	$current_place = $place->findPlace($_GET['id']);
	$records = $place->findRecords($_GET['id']);
	$current_user = $place->currentUser();
?>
<!DOCTYPE html>
<html>
<head>

	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<script src="jquery-2.1.4.min.js"></script>
	<script src="assets/jquery.popupoverlay.js"></script>

	<script type="text/javascript">
		$(window).load(function() {
			$("video.place_video").each(function() {
				$(this).click(function() {
					var domVideo = $(this).get(0);

					if (domVideo.paused == true) {
						domVideo.play();
					}
					else {
						domVideo.pause();
					}
				});
			});

			$(".record").each(function() {

				var textH = $(this).find(".image_text");

				textH.css({"padding-right":$(this).width() - textH.width() + "px"});

				$(this).hover(function() {
					$(this).find(".image_text_background").fadeToggle(300);
					//$(this).find(".record_data").css({"-webkit-filter":"blur(0px)", "filter": "blur(0px)"});
				});
				$(this).on({
					mouseleave: function() {
						//$(this).find(".record_data").css({"-webkit-filter":"blur(2px)", "filter": "blur(2px)"});
					}
				});

				var dataId = $(this).attr("data-id");
				$("#fadeandscale"+dataId).popup({
					transition: 'all 0.3s'
				});
			});
		});
	</script>

	<style type="text/css">
		@font-face {
			font-family: 'BigJohn';
			src: url('assets/BIG_JOHN.otf') format('opentype');
		}

		@font-face {
			font-family: 'SlimJoe';
			src: url('assets/Slim_Joe.otf') format('opentype'); 
		}

		html, body {
			width: 100%;
			margin:0;
			padding:0;
		}

		body {
			background-color: #2C0B0C;
			/*background-image: url('assets/dwntwn_hershey.JPG');*/
			color:white;
			overflow-x:hidden;
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
			line-height: 150%;
		}

		#header_font {
			width: initial;
		}

		.average_text {
			width: 100%;
			text-align: center;
			font-family: 'SlimJoe', sans-serif;
			padding: 2% 0;
			z-index: 1;
		}

		p {
			padding:0;
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

		.record {
			padding: 0;
			position: relative;
			text-align: center;
			overflow: hidden;
		}

		.well {
			display: none;
			background-color: #c43235;
		}

		.image_text {
			position: absolute;
			bottom: 0;
			left: 0;
			text-align: left;
			color:#c43235;
			font-family: 'BigJohn', sans-serif;
			z-index: 100;
			/*color:#c43235; */
			color: white;
			max-width: 40%;
			font-size:2.5vh;
			padding: 3%;
    		letter-spacing: .05em;
    		text-shadow: 
      			4px 4px 0px #c43235, 
      			7px 7px 0px rgba(0, 0, 0, 0.2);
      		background-image: linear-gradient(to bottom, transparent, rgba(0,0,0,0.9));
		}

		.column { float: left; }
		.size-1of1 { width: 100%; }
		.size-1of2 { width: 50%; }
		.size-1of3 { width: 33.333%; }

		#grid {
			/*margin: 1% 1% 0;*/
			margin-bottom: 64px;
			/*margin-right:8%;*/
			/*margin-left:8%;*/
			overflow: auto;
		}

		#grid:after {
			display: block;
    		clear: both;
		}

		.record:hover {
			display: block;
		}

		img, video {
			width: 100%;
			display: block;
		}

		.first_half, .second_half {
			width: 50%;
			height: 100%;
		}

		.second_half {
			margin-left: 50%;
		}

		svg {
			width: 16px;
			height: 16px;
			margin-top:8px;
			margin-left: 8px;
		}

		h4, .popup_p {
			color: white;
			margin:0;
		}

		h4 {
			font-family: 'BigJohn', sans-serif;
			text-align: right;
			font-size: 32px;
			margin-left: 16px;
		}

		.popup_p {
			font-family: 'SlimJoe', sans-serif;
			margin-right: 16px;
			padding: 10px 0;
		}

		footer {
			height: 64px;
			width: 100%;
			color: white;
			text-align: center;
			font-family: 'BigJohn', sans-serif;
			vertical-align: middle;
			letter-spacing: .05em;
		}

		.active_link {
			font-family: 'BigJohn', sans-serif;
			text-shadow: none;
			padding: 12px;
			background-color:#c43235;
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


		@media screen and (max-width: 480px){
			#grid[data-columns]::before {
				content: '1 .column.size-1of1';
			}
		}

		@media screen and (min-width: 481px) and (max-width: 768px) {
			#grid[data-columns]::before {
				content: '2 .column.size-1of2';
			}
		}

		@media screen and (min-width: 769px) {
			#grid[data-columns]::before {
				content: '3 .column.size-1of3';
			}
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

			p a {
				font-family: 'BigJohn', sans-serif;
			}

			p a .btn {
				color: white;
				padding: 16px 16px;
			}
	</style>

	<body>
		<!--<header>
			<div class="header_cover">
				<p><img id="header_font" src="<//?php echo $current_place["text_source"]; ?>"></p>
			</div>
		</header>-->

		<header>	
			<a href="home.php" style="text-shadow: 
            	4px 4px 0px #c43235, 
            	7px 7px 0px rgba(0, 0, 0, 0.2);">Hershey.cool</a><br>
			<a><?php echo $current_place["name"]; ?></a>
		</header>

		<div id="grid" data-columns>
			<?php foreach($records as $record) { ?>

				<div class="well" id="fadeandscale<?php echo $record['id']; ?>">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 					viewBox="0 0 212.982 212.982" style="enable-background:new 0 0 212.982 212.982;" xml:space="preserve" class="fadeandscale<?php echo $record['id']; ?>_close">
						<g id="Close">
							<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312
								c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937
								c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>	
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
					</svg>
					<div class="first_half">
    					<h4><?php echo $record['attributions']; ?></h4>
    				</div>
    				<div class="second_half">
   	 					<p class="popup_p"><?php echo $record['highlight']; ?></p>
    					<p class="popup_p"><?php echo $record['description']; ?></p>
    				</div>
				</div>

			<?php
				if ($record["type"] == "video") {
			?>
					<div class="record fadeandscale<?php echo $record['id']; ?>_open" data-id="<?php echo $record['id']; ?>">
						<video class="place_video record_data" src="<?php echo $record["url"]; ?>" loop muted></video>
						
						<div class="image_attr">
							<p class="image_text"><?php echo $record["attributions"]; ?></p>
						</div>
					</div>
			<?php
				}
				else if ($record["type"] == "image") {
			?>
					<div class="record fadeandscale<?php echo $record['id']; ?>_open" data-id="<?php echo $record['id']; ?>">
						<img class="record_data" src="<?php echo $record["url"]; ?>">

							<p class="image_text"><?php echo $record["attributions"]; ?></p>
					</div>
			<?php
				}
				}
			?>
		</div>

		<script type="text/javascript" src="salvattore.min.js"></script>

		<p class="average_text">A collection of our favorite <?php echo $current_place["name"]; ?> experiences.</p>

		<footer><button class="btn btn-1 btn-1e"><a href="new.php?pid=<?php echo $current_place["id"]; ?>">Add a new idea.</a></button></footer>

		<?php 
			if (isset($_COOKIE["current_user"])) {
		?>
				<p style="margin: 44px 0;" class="average_text"><?php echo $current_user["name"]; ?>  <a href="logout.php">Log Out.</a></p>
		<?php
			}
		?>

	</body>

</head>
</html>