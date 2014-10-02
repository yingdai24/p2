<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Password Generator</title>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="password.css" />
</head>

<body>
<?php require('logic.php');?>

<div>
	<h1>xkcd Password Generator</h1>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;This app can be used to generate an xkcd style password consisting of 1~10 random words 
	with or without an additional number and/or symbol.<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;An xkcd password is a string of commonly used words in a random order. The xkcd password
	is easy to recall from memory but difficult to guess. Therefore it is generally more secure than the 
	one generated by other algorithms.
	</p>


	<?php if ($password): ?>
		<div>
		<h2>The xkcd password you generated is:</h2> 
		<h3><?php echo $password; ?></h3>
		</div>
	<?php endif; ?>
	
	<form method='POST' action='index.php'>

	<div> 
    	<fieldset>
      	<legend>Creat a New Password</legend>
      	<lable> How many words to use (1~10)？</lable>
		<input type="text" id="wordcount" name="wordcount"/>
		<br/> <br/>
		
      	<lable> Include a number? </lable>
		<input type="checkbox" name="number" value="number"/>
		<br/> <br/>

      	<lable> Include a symbol (e.g. @)? </lable>
		<input type="checkbox" name="symbol" value="symbol"/>
		<br/> <br/>
    	</fieldset>
	</div> 
		<input type="submit" name="submit" value="submit"/>
	</form>
</div>

</body>
</html>




