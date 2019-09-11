<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css"/>
</head>
</html>
<?php
	
	$search=ucfirst($_POST['search']);
	$conn=pg_connect("host=192.168.100.253 port=5432 dbname=tydb34 user=ty34 password=null") or die("could not connect to server");

	$query="select * from word where wordname='$search'";
	$result=pg_query($conn,$query);
	
	$num=pg_num_rows($result);
	
	if($num==0)
	{
		echo "WORD NOT FOUND ";
		
	}
	
	else
	{
		$row=pg_fetch_assoc($result);
		//echo "<center>";
		echo "<h1>WORD :</h1><h2> "."<b>".$row['wordname']."</b>"."<br> </h2>";
		echo "<h1>MEANING :</h1> <h2> "."<b>". $row['wordmeaning']."</b>"."<br></h2>";
		echo "<h1>SYNONYM :</h1> <h2>"."<b>".$row['wordsynonym']."</b>"."<br></h2>";
		echo "<h1>ANTONYM :</h1> <h2>"."<b>".$row['wordantonym']."</b>"."<br></h2>";	
		//echo "</center>";
	}


//we wouldhave to suggest user if he wants to send email to admin for his NOT FOUND WORD.THIS WOULD BE DONE IN IF SECTION. WE MIGHT HAVE TO TAKE SEARCH WORD IN SESSION VARIABLE:

?>
