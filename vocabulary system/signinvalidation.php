
<?php
session_start();
$conn=pg_connect("host=192.168.100.253 port=5432 dbname=tydb34 user=ty34 password=null") or die("could not connect to server");
/*if(!conn)
	echo "connection failed";
else
	echo "connection successfull";
*/

$type=$_POST['type'];

if($type=="user")
{
$uname=$_POST['uname'];
$password=$_POST['password'];

//echo "1234";

$query="select * from userdetails where username='$uname' and password='$password'";

$result=pg_query($conn,$query);

$num=pg_num_rows($result);

$row=pg_fetch_assoc($result);

//echo "$num";
	if($num==1)
	{
		$_SESSION['name']=$row['name'];
		$_SESSION['age']=$row['age'];
		$_SESSION['emailid']=$row['emailid'];
		$_SESSION['username']=$row['username'];
		$_SESSION['type']=$type;		
		
		header('location:profile.php');	
	}
	if($num==0)
		header('location:signin.php');

}

else if($type=="admin")
{
	$aname=$_POST['uname'];
	$password=$_POST['password'];
	
	$query="select * from admindetails where adminname='$aname' and password='$password'";
		
	$result=pg_query($conn,$query);
		
	$num=pg_num_rows($result);
	
	$row=pg_fetch_assoc($result);

	if($num==1)
	{
		$_SESSION['name']=$row['name'];
                $_SESSION['age']=$row['age'];
                $_SESSION['emailid']=$row['emailid'];
                $_SESSION['username']=$row['adminname'];
		$_SESSION['type']=$type;		
		
		header('location:profile.php');
	}
	
	if($num==0)
	{
		header('location:signin.php');
	}
	
}

else
{
	header('location:profile.php');
}


?>
