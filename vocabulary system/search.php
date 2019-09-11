<?php
	session_start();

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css"/>
<style type="text/css">
#header #logout
{
	position:relative;
	left:1200px;

}

</style>
</head>
<div id="header" style="background-color:aqua">

<center><h1 id="heading">VOCABULARY SYSTEM</h1></center>

<a href="logout.php"><button id="logout" >log out</button></a>

</div>

<center>
<nav>
<a href="profile.php" size=20>profile</a>|
<a href="dictionary.php">dictionary</a>|
<a href="search.php">search</a>|
<a href="discussion.php">discussion</a>|
<?php if($_SESSION['type']=="admin")
	{
?>
	<a href="update.php">update</a>
<?php }

?>
</nav>
</center>

<body>
	<center><h1>search your element here</h1>
	<form action="SearchProcess.php " method="post">
	<input type="text" placeholder="search for your word" name="search">
	<input type="submit" value="send">
	</form>
	</center>
</body>
</html>
</html>




