<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><title>Praktikum 2a</title></head>
<body><center>
<h1> GENERATE TABLE </h1>
	<?php
	function tabel($baris, $kolom) {
		$a = 1;
		echo("<table border = \"2.5\">\n");
		for(; ;){ echo("<tr height = \"50px\">\n");
		for ($k = 0; $k < $kolom; $k++) { echo("<td width=\"80px\">$a</td>\n");
			if ($baris == $a) { return 0; }
		$a++;
		} echo("</tr>\n");
		} echo("</table>\n");
		echo("<h4>Tabel dengan $baris baris dan $kolom kolom</h4>");
		}
	tabel(12,3);
	?>
</center></body>
</html>
