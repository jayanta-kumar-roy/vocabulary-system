<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css"/>

<style type="text/css">

#heading
{
	text-decoration:underline;
}

#header #signin
{
	position:relative;
	left : 1200px;
}

#Registration
{
	font-family:"georgia";

}

</style>

</head>

<div id="header" style="background-color:aqua">

<center><h1 id="heading">VOCABULARY SYSTEM</h1></center>

<a href="signin.php"><button id="signin" >sign in</button></a>

</div>

<body style="background-color:Bisque">

<h1 id="Registration" align="center">Registration</h1>
<center>
<form action="signupvalidation.php" method="POST">
<table>

<tr><td><b>NAME </b></td><td><input type="text" name="name" required></td></tr>

<tr><td><b>AGE</b></td><td><input type="text" name="age" required></td></tr>

<tr><td><b>EMAIL-ID</b></td><td><input type="text" name="emailid" required></td></tr>

<tr><td><b>USERNAME</b></td><td><input type="text" name="uname" required></td></tr>

<tr><td><b>PASSWORD</b></td><td><input type="password" name="password" required></td></tr>
<tr><td><b>RE-ENTER PASSWORD</b></td><td><input type="password" name="repassword" required></td></tr>
<tr colspan="2"><td><input type="submit"></td></tr>
</table>
</form> 
</center>

</body>

</html>
