<!DOCTYPE html>

<!--
Edit Question Page for Aeroapps Technology
-->

<html lang ="en">
  	
  <head>
    <!-- Meta tag -->
    <meta name="robots" content="noindex,nofollow" />
    <meta charset = "utf-8"> 

    <!-- Link tag for CSS -->
	<link type="text/css" rel="stylesheet" href="stylesheets/style.css" />

    <!-- Web Page Title -->
    <title></title>

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
		<center>
		<p id="title">Add a Question</p>
		
		<form id="questionform" action="questionprocess.php" method="post">
			<h2>Enter Question Information Below</h2>
			<label for="test">Test</label> <input type="text" name="test"><br />
			<label for="qID">Question ID</label> <input type="text" name="qID"><br /> 
  			<label for="qText">Question Text:</label>
  			<textarea name="qText" rows="5" cols="30"></textarea><br />
  			<label for="qImg1">Question Image 1:</label> <input type="file" name="qImg1">
  			<label for="qImg2">Question Image 2:</label> <input type="file" name="qImg2">
  			<label for="qImg3">Question Image 3:</label> <input type="file" name="qImg3">
  			<label for="qImg4">Question Image 4:</label> <input type="file" name="qImg4">
  			<label for="qImg5">Question Image 5:</label> <input type="file" name="qImg5">
  			<label for="aText">Answer Choice A</label> <input type="text" name="aText"><br />
  			<label for="bText">Answer Choice B</label> <input type="text" name="bText"><br />
  			<label for="cText">Answer Choice C</label> <input type="text" name="cText"><br />
  			<label>Correct Answer:</label>
  			<SELECT name="Single-line ListBox example">
			<OPTION selected value="A">A</OPTION>
			<OPTION value="B">B</OPTION>
			<OPTION value="C">C</OPTION>
			</SELECT><br />
			<label for="ls_code">LS Code</label> <input type="text" name="ls_code"><br />
			<label for="refName">Reference Name</label> <input type="text" name="refName"><br />
			<label for="refPincite">Reference Pincite</label> <input type="text" name="refPincite"><br />
  			<label>Select Existing Image:</label>
  			<SELECT name="Single-line ListBox example">
			<OPTION selected value="1">1</OPTION>
			<OPTION value="2">2</OPTION>
			<OPTION value="3">3</OPTION>
			</SELECT><br />
 			
  			<p class="submit">
			<input type ="submit" value="Submit Question" />
			
			<span class="reset">
				<input type="reset" value="Clear Everything" onclick="history.go(0)" />
			</span>
		</p>
		</form>	
		</center>
	</div>
  </body>

</html>