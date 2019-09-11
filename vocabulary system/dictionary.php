<?php session_start();
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
	<center><h1>view in dictionary</h1></center>

<?php

$conn=pg_connect("host=192.168.100.253 port=5432 dbname=tydb34 user=ty34 password=null") or die("could not connect to server");

$query="select * from word ORDER BY wid ";

$result=pg_query($conn,$query);

$num=pg_num_rows($result);

?>
<table>
<tr bgcolor="pink">
<td>WORD ID</td>
<td>WORD</td>
<td>MEANING</td>
<td>SYNONYM</td>
<td>ANTONYM</td>
</tr>
<?php
	for($i=0;$i<$num;$i++)	
	{
		
		$row=pg_fetch_assoc($result);

?>

<tr bgcolor="pink">
<td> <?php echo $row['wid'] ?>  </td>
<td> <?php echo $row['wordname'] ?>  </td>
<td> <?php echo $row['wordmeaning'] ?>  </td>
<td> <?php echo $row['wordsynonym'] ?>  </td>
<td> <?php echo $row['wordantonym'] ?>  </td>

</tr>

	<?php
	}
	?>
</table>



</body>
</html>
