<html>
<head>
<title>LogIn</title>
</head>
<body>
<a href="welcome.html">Homepage</a> 
<center>
<br>
<br>
<br>
<br>
<br>
<style type="text/css">
html { 
background-image: url('login.jpg');
background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
-o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
}
</style>
<form name="form1" method="post" action="check_login.php">
Login<br>
<table border="3" style="width: 300px">
<tbody>
<tr>
<td> &nbsp;Username</td>
<td>
<input name="txtUsername" type="text" id="txtUsername">
</td>
</tr>
<tr>
<td> &nbsp;Password</td>
<td><input name="txtPassword" type="password" id="txtPassword">
</td>
</tr>
</tbody>
</table>
<br>
<input type="submit" name="Submit" value="Login">
</form>
<center>
</body>
</html>