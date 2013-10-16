<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<html>
<head><title>Kalkulator</title></head>

<body bgcolor="yellow">
<h2>Kalkulator Sederhana</h2>
<form method = "post">

<table>
<tr>

	<td><input type = "number" name ="x" value="<?php
		echo isset($_POST['x']) ? $_POST['x'] : '';
		?>" placeholder ="Masukkan angka" required></td> 

	<td><select name="operator" value="<?php
		echo isset($_POST['operator']) ? $_POST['operator'] : '';
		?>" required>
			<option></option>
			<option value="+" <?php 
				if (isset($_POST['operator']) && $_POST['operator']=='+')
                { echo "selected"; } ?>>+
			</option>
			<option value="-" <?php 
				if (isset($_POST['operator']) && $_POST['operator']=='-')
                { echo "selected"; } ?>>-
			</option>
			<option value="*" <?php 
				if (isset($_POST['operator']) && $_POST['operator']=='*')
                { echo "selected"; } ?>>*
			</option>
			<option value="/" <?php 
				if (isset($_POST['operator']) && $_POST['operator']=='/') 
                { echo "selected"; } ?>>/
			</option>
			</select></td>

	<td><input type = "number" name = "y" value="<?php
		echo isset($_POST['y']) ? $_POST['y'] : '';
		?>" placeholder = "input bilangan" required></td>
			
		<?php
			if(isset($_POST['x']) or isset($_POST['y']) ){
				$x = $_POST['x'];
				$y = $_POST['y'];
				}
				else{
					$x = "0";
					$y = "0";
				}
				if(isset($_POST['operator'])){
				$operator =$_POST['operator'];
				}
				else{ $operator =""; }

				switch($operator){
					case "+":
					$result = $_POST["x"] + $_POST["y"];
				break;

				case "-":
					$result = $_POST["x"] - $_POST["y"];
				break;

				case "*":
					$result = $_POST["x"] * $_POST["y"];
				break;

				case "/":
					$result = $_POST["x"] / $_POST["y"];
				break;
				}
			?>
	<td><input type="submit" name="submit" value=" = "></td>
	<td><input type="number" name="result" disabled value="<?php echo $result;?>"></td>
</tr>
</table>
</body>
</html>