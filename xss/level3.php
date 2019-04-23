<a href="https://www.geeksforgeeks.org/php-trim-function/"><h1>PHP trims</h1></a>
<?php
if(isset($_GET['ok']))
{
$var=$_GET['input'];
$var=trim($var,'"<>\'');
echo "Your Commented <b>".$var."</b>";
}
if(isset($_GET['sc']))
{
	highlight_file('source/level3_source.php');
}
?>
<form action="" method="get" name="input">
	<p>Write a comment if you like my tweet</p>
	<textarea rows="4" cols="50" placeholder="Write a comment here.." name="input"></textarea>
	<input type="submit" value="ok" name="ok">
	<input type="submit" name="sc" value="source code">
</form>
<a href="level1.php">level1</a>
<a href="level2.php">level2</a>
<a href="level3.php">level3</a>
<a href="level4.php">level4</a>
<a href="level5.php">level5</a>
<a href="level6.php">level6</a>
