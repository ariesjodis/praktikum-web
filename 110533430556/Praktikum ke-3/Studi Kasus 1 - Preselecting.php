<!DOCTYPE html 
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
	<title>Data Seleksi Prefilling</title> 
</head> 
<center>
<body>

	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
		Grup band Favorit
		<select name="band"> 
			<option value="My Chemical R"
			<?php
				if ($_POST['band'] == 'My Chemical R'){
				echo 'selected="selected"';
				}
			?>/>My Chemical R 
			
			<option value="Coldplay"
			<?php
				if ($_POST['band'] == 'Coldplay'){
				echo 'selected="selected"';
				}
			?>/>Coldplay
			
			<option value="Flow"
			<?php
				if ($_POST['band'] == 'Flow'){
				echo 'selected="selected"';
				}
			?>/>Flow
			
			<option value="Noah"
			<?php
				if ($_POST['band'] == 'Noah'){
				echo 'selected="selected"';
				}
			?>/>Noah
			
			<option value="Queen"
			<?php
				if ($_POST['band'] == 'Queen'){
				echo 'selected="selected"';
				}
			?>/>Queen
		</select>
		
		<input type="submit" name="Pilih" value="Pilih" /> 
	</form> 
 
	<?php 
		if (isset($_POST['Pilih'])) {
			$Grup = $_POST['band'];
			echo "<br>";
			echo "Grup band Favorit Anda adalah: 
				<font color = red><b>$Grup</b></font>"; 
	} 
	?> 
</body>
</center>
</html>