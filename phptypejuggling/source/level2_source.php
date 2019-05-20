<!--
 * @Author: Hein Htet Aung
 * @Date:   2019-05-20 10:29:22
 * @Last Modified by:  PiCarODD
 * @Last Modified time: 2019-05-20 10:56:25
-->
<?php
$var=$_GET['input'];
if(strcmp($var, "MSF!")==0 && strlen($var)<3){
	echo "You Win!";
}
else{
	echo "Dude! you lost!";
}
?>
