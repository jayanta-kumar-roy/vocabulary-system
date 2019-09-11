<html>
<?php
$name=$_POST['name'];
$age=$_POST['age'];
$emailid=$_POST['emailid'];
$uname=$_POST['uname'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];


//echo " $name $age $emailid $uname $password $repassword";


	if(strcmp($password,$repassword)==0)
	{	
		$conn=pg_connect("host=192.168.100.253 port=5432 dbname=tydb34 user=ty34 password=null") or die("could not connect to server");
		$query="insert into userdetails(name,age,emailid,username,password) values('$name',$age,'$emailid','$uname','$password');";
		$result=pg_query($conn,$query);
	
		echo "registration sucessfull";?>
		<br><a href="signin.php">sign in</a>
	
<?php	} 

	else
	      {
		echo "password did not match";?>
		<br><a href="signup.php">click here to register again</a>
	<?php } ?>

</html>
