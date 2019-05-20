<!--
 * @Author: Hein Htet Aung
 * @Date:   2019-05-20 10:27:01
 * @Last Modified by:  PiCarODD
 * @Last Modified time: 2019-05-20 10:27:31
-->
<?php
$var=$_GET['input'];
	if($var!=1 && $var==True){
		echo "You Win!";
	}
	else{
		echo "Dude! you lost!";
	}
?>
