<!--
 * @Author: Hein Htet Aung
 * @Date:   2019-05-20 09:09:46
 * @Last Modified by:  PiCarODD
 * @Last Modified time: 2019-05-20 10:28:21
-->
<a href="https://www.owasp.org/images/6/6b/PHPMagicTricks-TypeJuggling.pdf"><h1>PHP type Juggg</h1></a>
<small>Get Win</small><br>
<?php
if(isset($_GET['ok']))
{
	$var=$_GET['input'];
	if($var!=1 && $var==True){
		echo "You Win!";
	}
	else{
		echo "Dude! you lost!";
	}
}
if(isset($_GET['sc']))
{
	highlight_file('source/level1_source.php');
}
?>
<form action="" method="get" name="input">
	<input type="text" name="input" value="" placeholder="Check for victory">
	<input type="submit" value="Check" name="ok">
	<input type="submit" name="sc" value="source code">
</form>
<a href="level1.php">level1</a>
<a href="level2.php">level2</a>
<a href="level3.php">level3</a>
<a href="level4.php">level4</a>
<a href="level5.php">level5</a>
<a href="level6.php">level6</a>