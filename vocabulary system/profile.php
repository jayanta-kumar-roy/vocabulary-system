<?php 
	session_start();
		
	if(!isset($_SESSION['name']))
		header('location:signin.php');
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

h2
{
	color:black;
}

#profile
{
	color:black;

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

<body style="background-color:Bisque">
<center>
<table> 
<h1 id="profile"> YOUR PROFILE</h1>
<tr><td><h2> name:</h2></td><td><h2><?php echo $_SESSION['name']?> </h2></td></tr>
<tr><td><h2>Age:</h2></td> <td><h2><?php echo $_SESSION['age']?></h2></td></tr>
<tr><td><h2>Email-id:</h2></td> <td><h2><?php echo $_SESSION['emailid']?></h2></td></tr>
<tr><td><h2>user name:</h2></td> <td><h2><?php echo $_SESSION['username'] ?></h2></td></tr>
<tr><td><h2>user type:</h2></td> <td><h2><?php echo $_SESSION['type'] ?></h2></td></tr>

</table>
</center>

</body>

</html>
