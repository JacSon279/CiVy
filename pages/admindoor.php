<?php

echo "
<html>
<head>
</head>
<body style='background:lightblue;' >
<center>
<div style='background:red;width:40%;height:40%;border-radius:15px;position:absolute;top:30%;left:30%;opacity:0.6;'>
<form action='adminloginpro.php' method='post'>
<table style='padding:5px;position:absolute;top:10%;left:15%;' cellspacing='0'>
<tr>
<td colspan='2'>
<center>
<h1>Civy Administrator Login</h1>
</center>
</td>
</tr>

<tr>
	<td>
		<h2>Username : </h2>
	</td>
	<td>
		<input type='password' name='usrnme' style='font-size:15px;' autofocus required>
	</td>
</tr>
<tr>
	<td>
		<h2>Password : </h2>
	</td>
	<td>
		<input type='password' name='usrpas' style='font-size:15px;' required>
	</td>
</tr>
<tr>
<td colspan='2'>
<center><input type='submit' value='Log In' style='font-size:20px;border-radius:10px;'></center>
</td>
</tr>
</table>
</div>
</form>
<center>
</body>
</html>
";

?>