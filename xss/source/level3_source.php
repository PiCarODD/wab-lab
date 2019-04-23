<?php
$var=$_GET['input'];
$var=trim($var,'"<>\'');
echo "result=".$var;
?>