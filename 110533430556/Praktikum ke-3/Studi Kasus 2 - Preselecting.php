<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Preselecting Checkbox</title>
</head>

<body>
	<p>Apa Hobbymu?</p>
	<p>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="checkbox" name="hobby[]" value="Membaca" 
		<?php 
		if (isset($_POST['hobby']))
		 {
			foreach ($_POST['hobby'] as $key => $value) 
			{
				if ($value=='Membaca') 
				{
					echo "checked";
				}
			}
			
		} 
		?>
		>Membaca<br>
        
		<input type="checkbox" name="hobby[]" value="Belanja" 
		<?php 
		if (isset($_POST['hobby']))
		 {
			foreach ($_POST['hobby'] as $key => $value) 
			{
				if ($value=='Belanja') 
				{
					echo "checked";
				}
		}	
		} ?>
        
		>Belanja<br>
		<input type="checkbox" name="hobby[]" value="Olahraga"
		<?php 
		if (isset($_POST['hobby'])) 
		{
			foreach ($_POST['hobby'] as $key => $value) 
			{
				if ($value=='Olahraga') 
				{
					echo "checked";
				}
		}
			
		} ?>
		>Olahraga<br>
        
		<input type="checkbox" name="hobby[]" value="Memancing"
		<?php 
		if (isset($_POST['hobby'])) 
		{

			foreach ($_POST['hobby'] as $key => $value) 
			{
				if ($value=='Memancing') 
				{
					echo "checked";
				}
		}
			
		} ?>
		>Memancing<br>
        
        		<input type="checkbox" name="hobby[]" value="Dolan"
		<?php 
		if (isset($_POST['hobby'])) 
		{

			foreach ($_POST['hobby'] as $key => $value) 
			{
				if ($value=='Dolan') 
				{
					echo "checked";
				}
		}
			
		} ?>
		>Dolan<br>
		<input type="submit" value="OK">
	</form>
    
	<?php 
	if (isset($_POST['hobby'])) 
	{
		echo '<br>Hobbymu adalah:';
		foreach ($_POST['hobby'] as $key => $value) 
		{
			echo "<li>".$value."</li>";
		}
	}
	?>

</body>
</html>
