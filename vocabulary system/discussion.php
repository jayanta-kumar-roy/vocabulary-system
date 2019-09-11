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

<?php	$conn=pg_connect("host=192.168.100.253 port=5432 dbname=tydb34 user=ty34 password=null") or die("could not connect to server");

	/*$query="select count(*) from discussion ";
	
	$result=pg_query($conn,$query);
	
	$row=pg_fetch_assoc($result);
	
	$count=$row['count']; // to check number of messages in discussion table
	*/
		

	?>

<body>
	<center><h1>discussion here</h1>
	<form method="post" action="DiscussionProcess.php">
	<input type="text" placeholder="type your message here" name="message">
	<input type="submit" value="send">
	</form>
	<!--<textarea rows="10" cols="50"> -->
	<?php
		
		$query2="select * from discussion"; // query to get all the discussion details such as user name and his messages
		
		$result=pg_query($conn,$query2);	
		
		$num=pg_num_rows($result);		
		
		echo"<table>";
		for($i=1;$i<=$num;$i++)
		{
			$row=pg_fetch_assoc($result);
		
			echo"<tr>";
			echo "<td><b>".$row['name']."</b> :</td>";			
			echo "<td>".$row['message']."</td>";	
			echo"<br>";
			echo"</tr>";				
		
		}	
		echo"</table>";
		

	?>		
	
	<!--</textarea> -->
	</center>
</body>

</html>
