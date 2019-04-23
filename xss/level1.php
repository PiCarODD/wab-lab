<a href="https://excess-xss.com/"><h1>What is XSS?</h1></a>
<?php
if(isset($_GET['ok']))
{
$var=$_GET['input'];
echo "Your Name is <b>".$var."</b>";
}
if(isset($_GET['sc']))
{
	highlight_file('source/level1_source.php');
}
?>
<form action="" method="get" name="input">
	<input type="text" name="input" value="<?php if(isset($_GET['ok'])){ echo $_GET['input'];}?>" placeholder="Enter Your Name">
	<input type="submit" value="ok" name="ok">
	<input type="submit" name="sc" value="source code">
</form>
<a href="level1.php">level1</a>
<a href="level2.php">level2</a>
<a href="level3.php">level3</a>
<a href="level4.php">level4</a>
<a href="level5.php">level5</a>
<a href="level6.php">level6</a>