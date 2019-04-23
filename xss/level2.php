<a href="https://www.geeksforgeeks.org/php-str_replace-function/"><h1>PHP str_replace</h1></a>
<?php
if(isset($_GET['ok']))
{
$var=$_GET['input'];
$var=str_replace('script', "", $var);
$var=str_replace('SCRIPT', "", $var);
$var=str_replace('svg', "", $var);
$var=str_replace('onload', "", $var);
$var=str_replace('alert', "", $var);
echo "Your Name is <b>".$var."</b>";
}
if(isset($_GET['sc']))
{
	highlight_file("source/level2_source.php");
}
?>
<form action="" method="get" name="input">
	<input type="text" name="input" placeholder="Enter Your Name">
	<input type="submit" value="ok" name="ok">
	<input type="submit" name="sc" value="source code">
</form>
<a href="level1.php">level1</a>
<a href="level2.php">level2</a>
<a href="level3.php">level3</a>
<a href="level4.php">level4</a>
<a href="level5.php">level5</a>
<a href="level6.php">level6</a>