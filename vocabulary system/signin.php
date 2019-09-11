<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css"/>

<style type="text/css">
#heading
{
	position:relative;
	top:10px;
	height:80px;
	text-decoration:underline;

}

#login
{
	font-family:"georgia";

}
</style>
</head>

<div id="header" style="background-color:aqua">

<center><h1 id="heading">VOCABULARY SYSTEM</h1></center>
</div>
<body style="background-color:Bisque">
<h1 id="login" align="center">LOGIN HERE</h1>

<center>
<table>
<form action="signinvalidation.php" method="post">
<tr><td><b>USERNAME</b></td><td> <input type="text" name="uname" required></td></tr>

<tr><td><b>PASSWORD</b></td><td><input type="password" name="password" required></td></tr>

<tr><td><b>ADMIN</b></td> <td><input type="radio" name="type" value="admin"> </td></tr>

<tr><td><b>USER</b></td> <td><input type="radio" name="type" value="user"> </td></tr>


<tr><td><input type="submit"></td></tr>
</form>
</table>
</center>

</body>

</html>
