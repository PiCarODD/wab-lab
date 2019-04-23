<a href="https://brutelogic.com.br/"><h1>Image Upload</h1></a>
<?php
if(isset($_POST['ok']))
{
echo "Your Image <b>".$_POST['img']."</b> is uploaded";
}
if(isset($_POST['sc']))
{
	highlight_file("source/level5_source.php");
}
?>
<form action="" method="POST" name="input">
	<input type="file" name="img" value="input">
	<input type="submit" value="Upload" name="ok">
	<input type="submit" name="sc" value="source code">
</form>
<a href="level1.php">level1</a>
<a href="level2.php">level2</a>
<a href="level3.php">level3</a>
<a href="level4.php">level4</a>
<a href="level5.php">level5</a>
<a href="level6.php">level6</a>