<?php
	session_start();		
	
	$name=$_SESSION['name'];
	$message=$_POST['message'];
	
	$conn=pg_connect("host=192.168.100.253 port=5432 dbname=tydb34 user=ty34 password=null") or die("could not connect to server");	


	if(strlen($message)!=0)
	{
	$query="insert into discussion values('$name','$message')";
	
	pg_query($conn,$query); 
	}	
	
	header('location:discussion.php');	

?>
