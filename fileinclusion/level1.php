<!DOCTYPE html>
<html>
<head>
	<title>Level 1</title>
</head>
<?php 
if(isset($_GET['page']))
{
	$page=$_GET['page'];
	include($page);
}
?>
<body>
<h1><a href="https://en.wikipedia.org/wiki/File_inclusion_vulnerability">File Inclusion</a></h1>
<p>The goal is to read flag.txt in flags folder</p>
<form action="" method="get">
<label>Image Gallery v0.1</label>
<br>
<a href="level1.php?page=album1.html" >Album1</a>
<a href="level1.php?page=Album2" >Album2</a><!--Hay PiCarO dont forget to add album2.html here-->
</form>
</body>
</html>