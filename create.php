<?php
	require 'medoo.php';
	require 'db_info.php';

	$name = $_POST["name"];
	$pid = $_POST["pid"];
	$highlight = $_POST["highlight"];
	$description = $_POST["description"];

	$destination_path = "/Library/WebServer/Documents/showcase/images/";
	$target_file = $destination_path . $_FILES["file"]["name"];


	$DB = new medoo([
			'database_type' => 'mysql',
    		'database_name' => 'showcase',
    		'server' => $host,
    		'username' => $user,
    		'password' => $pass,
    		'charset' => 'utf8'
		]);

	$DB->insert('records', [
			'type' => 'image',
			'attributions' => $name,
			'place_id' => $pid,
			'highlight' => $highlight,
			'description' => $description,
			'url' => $target_file
		]);
		
	if ($_FILES["file"]["error"] > 0) 
    { 
    	echo "Return Code: " . $_FILES["file"]["error"] . "<br />"; 
    } 
  	else 
    { 
	    echo "Upload: " . $_FILES["file"]["name"] . "<br />"; 
	    echo "Type: " . $_FILES["file"]["type"] . "<br />"; 
	    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />"; 
	    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />"; 

	    if (file_exists($destination_path . $_FILES["file"]["name"])) 
	      { 
	      echo $_FILES["file"]["name"] . " already exists. "; 
	      } 
	    else 
	      { 
	      move_uploaded_file($_FILES["file"]["tmp_name"], 
	      $destination_path . $_FILES["file"]["name"]); 
	      echo "Stored in: " . $destination_path . $_FILES["file"]["name"]; 
	      } 
    }
?>