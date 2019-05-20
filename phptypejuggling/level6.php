<!-- 
 * @Author: Hein Htet Aung
 * @Date:   2019-05-20 10:03:40
 * @Last Modified by:  PiCarODD
 * @Last Modified time: 2019-05-20 10:37:21
 -->
 <a href="https://www.owasp.org/images/6/6b/PHPMagicTricks-TypeJuggling.pdf"><h1>PHP level 6</h1></a>
<small>Get Win</small><br>
<?php
if(isset($_GET['ok']))
{
	$var=$_GET['input'];
	if (is_numeric($var)){
		echo "Nice keep going!<br>";
      if (strlen($var) < 4){
      	echo "So close<br>";
          if ($var > 10000){
          	echo "You are the best hacker I've even seen.YOu WIn now.";
          }
          else{
          	echo "Damn you fail dude!wtf<br>";
          }
      }
      else{
      	echo "Nice Try!but fail<br>";
      }
  }
	else{
		echo "Dude! you lost!";
	}
}
if(isset($_GET['sc']))
{
  highlight_file('source/level6_source.php');
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