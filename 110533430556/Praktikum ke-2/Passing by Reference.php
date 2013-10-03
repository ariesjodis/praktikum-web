<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><title>Passing by Reference</title></head>
<body><h2>Passing by Reference</h2>
<?php
	function jumlah(&$b){
	$b++; //8
	}
	
	$a = 7;
	jumlah($a);
	echo $a;
?>
</body>
</html>