<html>
<head>
<title>booked ticket</title>
</head>
<body>
<?php
$uname=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$state=$_POST['state'];
$ddate=$_POST['ddate'];
$rdate=$_POST['rdate'];
$ac=$_POST['AC'];
$verification=$_POST['verification_id'];
?>
<table>
<tr>
 <td> User name:</td>
<td><?php
 echo $uname; ?></td> 
 <tr>
<td> email </td>
<td><?php echo $email ?></td>
echo "<br>";

 echo $phone;
echo "<br>";

 echo $state;
echo "<br>";

 echo $ddate;
echo "<br>";

 echo $rdate;
echo "<br>";

 echo $ac;
echo "<br>";
 
 echo $verification;
echo "<br>";
?>
</body>
</html>