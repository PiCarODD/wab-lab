<a href="https://www.google.com/search?source=hp&ei=i9W-XJ3yIcH9vgSAj7rYDg&q=openredirect+to+xss&btnK=Google+Search"><h1>PHP Redirect</h1></a>
<?php
if(isset($_GET['ok']))
{
$var=$_GET['input'];
echo '<script>window.location = "'.$var.'";</script>';  
exit;
}
if(isset($_GET['sc']))
{
	highlight_file("source/level4_source.php");
}
?>
<form action="" method="get" name="input">
	<input type="text" name="input" placeholder="Enter Url to Redirect">
	<input type="submit" value="ok" name="ok">
	<input type="submit" name="sc" value="source code">
</form>
<a href="level1.php">level1</a>
<a href="level2.php">level2</a>
<a href="level3.php">level3</a>
<a href="level4.php">level4</a>
<a href="level5.php">level5</a>
<a href="level6.php">level6</a>