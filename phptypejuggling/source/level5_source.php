<!--
 * @Author: Hein Htet Aung
 * @Date:   2019-05-20 10:32:46
 * @Last Modified by:  PiCarODD
 * @Last Modified time: 2019-05-20 10:33:10
-->
<?php
$var=$_GET['input'];
if(md5($var)=="0e231094320434324324149127654309"){
	echo "You Win!";
}
else{
	echo "Dude! you lost!";
}
?>
