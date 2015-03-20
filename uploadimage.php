<!DOCTYPE html>

<!--
Top Comment
-->

<html lang ="en">
  	
  <head>
    <!-- Meta tag -->
    <meta name="robots" content="noindex,nofollow" />
    <meta charset = "utf-8"> 

    <!-- Link tag for CSS -->
	<link type="text/css" rel="stylesheet" href="stylesheets/style.css" />

    <!-- Web Page Title -->
    <title>Upload File</title>

  </head>

  <body>
	<div id="header">
		<p>
			<span class="left"><a href="menu.php"><img src="images/headerlogo.png" alt="Aeroapps Logo" /></a></span>
			<span class="right">Welcome, Admin</span><br />
			<span class="right"><span class="small"><a href="logout.php">Log Out</a></span></span>
			<br />
		</p>
	</div>
	<div id="navselection">
    	<ul id="navbar">
    		<li><a href="questions.php">Questions</a></li>
    		<li><a href="images.php">Images</a></li>
    		<li><a href="resources.php">Resources</a></li>
      		<li><a href="explanations.php">Explanations</a></li>	
      		<li><a href="aircrafts.php">Aircrafts</a></li>
    	</ul>
    </div>
	<div id="main">
		<p id="title">Upload a file</p>
		
		<form id="uploadform" action="uploadimage.php" method="POST" enctype="multipart/form-data">
			File:
			<input type="file" name="image"> <input type="submit" value="Upload">
		</form>
		<br /><br /><br />
		
		<?php
		
		
		// connect to database
		mysql_connect("localhost","root","root") or die(mysql_error());
		mysql_select_db("aeroapps") or die(mysql_error());
		
		// file properties
		$file = $_FILES['image']['tmp_name'];
		
		if (!isset($file)) 
			echo "Please select an image.";
		else {
			$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name = addslashes($_FILES['image']['name']);
			$image_size = getimagesize($_FILES['image']['tmp_name']);
			
			if ($image_size==FALSE)
				echo "That's not an image.";
			else {
				if (!$insert = mysql_query("INSERT INTO images VALUES ('','$image_name','$image')"))
					echo "Problem uploading image.";
				else
				{
					$lastid = mysql_insert_id();
					echo "Image uploaded.<p />Your image:<p /><img src=get.php?id=$lastid>";
				}
			}
		}
		
		
		?>
		
	</div>
  </body>

</html>