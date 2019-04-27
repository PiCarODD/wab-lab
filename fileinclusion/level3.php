<!DOCTYPE html>
<html>
<head>
	<title>Level 3</title>
</head>
<?php 
if(isset($_GET['submit']))
{
	$name=$_GET['name'];
	echo "Hello ".$name." I wish you all the success, happiness, and joy in life.<br>";
	echo eval($name);  
}
?>
<body>
<h1><a href="https://www.php.net/manual/en/function.eval.php">RCE</a></h1>
<p>The goal is to read flag.txt in flags folder</p>
<form action="" method="get">
<label>What Is your Name</label>
<br>
<input type="text" name="name">
<input type="submit" name="submit" value="OK">
</form>
</body>
</html>