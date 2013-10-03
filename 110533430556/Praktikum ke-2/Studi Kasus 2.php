<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><title>Generate Table</title></head>
<body bgcolor="green"><center>
<h2>Fungsi Tabel</h2>
<br>
	<?php
	function create_table($baris, $kolom) {
		echo("<table border = \"2.5\">\n");
		for($b = 0; $b < $baris; $b++){	echo("<tr height = \"50px\">\n");
			for ($k = 0; $k < $kolom; $k++) { echo("<td width=\"90px\"></td> \n");
			} echo("</tr>\n");
		} echo("</table>\n");
		echo("<h3>Tabel dengan $baris baris dan $kolom kolom</h3>");
		}
	create_table(3,4);
	?>
</center></body>
</html>
