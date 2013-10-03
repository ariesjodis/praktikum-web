<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head><title>Greeting</title></head>

<body bgcolor="yellow">
<center>

<?php 
$d=date("G"); 
if ($d > "4" && $d < "10") {
echo "<h1>Selamat pagi</h1>";
echo date("l") . " , " . date("d-m-Y") . " . " . date("H:i") . " WIB";
}


elseif ($d > "10" && $d < "14"){
echo "<h1>Selamat Siang</h1>";
echo date("l") . " , " . date("d-m-Y") . " . " . date("H:i") . " WIB";
}

elseif ($d > "14" && $d < "18"){
echo "<h1>Selamat Sore</h1>";
echo date("l") . " , " . date("d-m-Y") . " . " . date("H:i") . " WIB";
}

else {
echo "<h1>Selamat Malam</h1>";
echo date("l") . " , " . date("d-m-Y") . " . " . date("H:i") . " WIB";
}

?>

</center> 
</body>
</html>