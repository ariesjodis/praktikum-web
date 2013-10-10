<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<html>

<head><title>Aplikasi Form Login Sederhana</title></head>
<body onLoad="document.form1.user.focus();">
<style type="text/css">
#area1 {
    position:absolute;
    width:300px;
    height:150px;
    z-index:1;
    left: 530px;
    top: 62px;
    background-color: yellow;
    border: 2px solid Black;
}
#area2 {
    position:absolute;
    width:412px;
    height:115px;
    z-index:2;
    top: 0px;
    left: 2px;
}
#area3 {
    position:absolute;
    width:300px;
    height:50px;
    z-index:3;
    top: 220px;
    left: 530px;
	background-color: white;
	border: 2px solid Black;
	text-align: center;
}
.style3 {
    font-size: 10px;
    font-weight: bold;
}
#header{
    width:373px;
    height:98px;  
}
#footer{
    width:373px;
    height:40px;
}
body {
    background-color: blue;
}
</style>
	
	<script type="text/javascript">
		function check()
		{
			if(form1.user.value == "")
			{
				alert('Username tidak boleh kosong');
				document.form1.user.focus();
				return false;
			}
			else if(form1.pass.value=="")
			{    
				alert('Password tidak boleh kosong');
				document.form1.pass.focus();
				return false;
			}    
		return true;
		}

		function Huruf(evt) 
		{
			evt = (evt) ? evt : window.event	
			var charCode = (evt.which) ? evt.which : evt.keyCode
			if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
				alert('Username dan Password Harus Berupa Huruf ');
				return false;
			}
			return true;
		}
	</script>
	
<center><h1>FORM LOGIN SEDERHANA</h1></center>
<form name="form1" action="<?php $_SERVER['PHP_SELF'];?>"  method="post" onsubmit="return check(this)">
	<div id="area1">
			<div align="center"><strong><br>Username :</strong><br>
			<input type="text" name="user" size="35" value="" title="Input harus huruf" autocomplete="off" onKeyPress="return Huruf(event)"><br>
			<strong>Password : </strong><br>
			<input type="password" name="pass" size="35" title="Input harus huruf" autocomplete="off" onKeyPress="return Huruf(event)"><br>
			<center><input type="submit" name="submit" value="Masuk" ></div><br></center>
			</div> <br>
	</div>
</form>
	<div id="area3">
		<?php
		if(is_string($_POST['user']) AND ($_POST['pass'])) 
		{    
			if (($_POST['user']=='username')AND($_POST['pass']=='password'))
			{ echo 'Log In Sukses!<br>Selamat Datang'; }
			else 
			{ 
				echo "<script>alert ('Username dan Password tidak sesuai');</script>"; 
				echo 'Username dan Password tidak sesuai';
			}
		}
		?>
	</div>
</body>
</html>