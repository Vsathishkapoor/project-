<?php
$uname=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$state=$_POST['state'];
$ddate=$_POST['ddate'];
$rdate=$_POST['rdate'];
$ac=$_POST['AC'];
$verification=$_POST['verification_id'];
$con=mysqli_connect("localhost","root","","bus");
$query= "INSERT INTO BOOKING "."(username,email,phone ,state,ddate,rdate,AC,verification_id)"."VALUES('$uname','$email','$phone','$state','$ddate','$rdate','$ac','$verification')";
$result=mysqli_query($con,$query);
if($result)
{
echo "inserted";
}
else
{
echo "not inserted";
}
?>

