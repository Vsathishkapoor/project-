<html>
<head>
<style>
table {
	 width: 50%;
    border-collapse: collapse;
     table-align:center;
 
}
th {
    background-color:pink;
    color: white;
    text-align:center;

}
table, td,tr {
    border: 10px lite blue;
	text-align:left;
       
}
</style>
<br><br><br><br><br>
<?php
$n = $_POST["Name"];
$e = $_POST["Email"];
$p = $_POST["phone"];
$s = $_POST["state"];
$d = $_POST["DEPARTURE DATE"];
$r = $_POST["RETURN DATE"];
$n = $_POST["Number of Passenger"];
$p = $_POST["preference"];
$v = $_POST["Verification"];
?>
 <table border="1" align="center">
<th colspan="2"> tour and travel </th>
<tr> 
<td> NAME :</td>
<td><?php echo $n ?></td>
</tr>
<tr> 
<td> EMAIL :  :</td>
<td><?php echo $e ?></td>
</tr>
<tr> 
<td> PHONE :</td>
<td><?php echo $P ?></td>
</tr>
<tr> 
<td> STATE :</td>
<td><?php echo $s ?></td>
</tr>
<tr> 
<td> DEPARTURE DATE :</td>
<td><?php echo $d ?></td>
</tr>
<tr> 
<td> RETURN DATE :</td>
<td><?php echo $r ?></td>
</tr>
<tr> 
<td> Number of Passenger:</td>
<td><?php echo $n ?></td>
<td> PREFERENCE AC OR N\AC:</td>
<td><?php echo $p ?></td>
<td> VERIFICATION: </td>
<td> <?php echo $v ?></td>
</tr>
<tr> 
</tr>

</table>
</head>
</html>