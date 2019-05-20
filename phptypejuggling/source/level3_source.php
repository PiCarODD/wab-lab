<!--
 * @Author: Hein Htet Aung
 * @Date:   2019-05-20 10:30:11
 * @Last Modified by:  PiCarODD
 * @Last Modified time: 2019-05-20 10:56:09
-->
<?php
$var=$_GET['input'];
if($var=="0e234" && strlen($var)<4){
	echo "You Win!";
}
else{
	echo "Dude! you lost!";
}
?>