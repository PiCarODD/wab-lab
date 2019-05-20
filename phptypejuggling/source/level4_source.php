<!--
 * @Author: Hein Htet Aung
 * @Date:   2019-05-20 10:31:48
 * @Last Modified by:  PiCarODD
 * @Last Modified time: 2019-05-20 10:32:10
-->
<?php
$var=$_GET['input'];
if(strlen($var)>1 && $var==0){
	echo "You Win!";
}
else{
	echo "Dude! you lost!";
}
?>
