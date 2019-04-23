<?php
$var=$_GET['input'];
$var=str_replace('some js script tags', "", $var);
$var=str_replace('some DOM', "", $var);
echo "result=".$var;
?>