<a href="https://brutelogic.com.br/"><h1>Javascript</h1></a>
<?php
if(isset($_GET['ok']))
{
$var=htmlspecialchars($_GET['input']);
echo "result=".$var;
}
if(isset($_GET['sc']))
{
	highlight_file("source/level6_source.php");
}
?>
<script src="text/javascript">
	var input="<?php echo $_GET['input']?>";
</script>
<form action="" method="get" name="input">
	<input type="text" name="input" placeholder="Enter Somethings">
	<input type="submit" value="ok" name="ok">
	<input type="submit" name="sc" value="source code">
</form>
<a href="level1.php">level1</a>
<a href="level2.php">level2</a>
<a href="level3.php">level3</a>
<a href="level4.php">level4</a>
<a href="level5.php">level5</a>
<a href="level6.php">level6</a>