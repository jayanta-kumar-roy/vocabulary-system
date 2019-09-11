<?php

	$size=sizeof($_POST);
	$records=$size/5;	
	
	echo $records;

	for($i=1;$i<=$records;$i++)
	{
		$index1="wid".$i;
		$wid[$i]=$_POST[$index1];
		
		$index2="wordname".$i;
		$wordname[$i]=$_POST[$index2];
		
		$index3="wordmeaning".$i;
		$wordmeaning[$i]=$_POST[$index3];
		
		$index4="wordsynonym".$i;
		$wordsynonym[$i]=$_POST[$index4];
		
		$index5="wordantonym".$i;
		$wordantonym[$i]=$_POST[$index5];

	}

	/*for($i=1;$i<=$records;$i++)
	{
		//echo $i."<br>";
		
		echo $wid[$i]."<br>";
		
		echo $wordname[$i]."<br>";

		echo $wordmeaning[$i]."<br>";
	
		echo $wordsynonym[$i]."<br>";
		
		echo $wordantonym[$i]."<br>";
		
		echo"<br>";
	}*/

	$conn=pg_connect("host=192.168.100.253 port=5432 dbname=tydb34 user=ty34 password=null") or die("could not connect to server");
		
	for($i=1;$i<=$records;$i++)	
	{
	$query="update word SET wordname='$wordname[$i]',wordmeaning='$wordmeaning[$i]',wordsynonym='$wordsynonym[$i]',wordantonym='$wordantonym[$i]' where wid=$wid[$i] ";
	pg_query($conn,$query);
	
	}

	//after UpdateProcess go to update page
	header('location:update.php');	
	
?>
