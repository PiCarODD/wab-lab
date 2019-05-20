<!--
 * @Author: Hein Htet Aung
 * @Date:   2019-05-20 10:33:41
 * @Last Modified by:  PiCarODD
 * @Last Modified time: 2019-05-20 10:34:04
-->
<?php
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
?>
