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
$n=$_POST["name"];
$e = $_POST["email"];
$mob = $_POST["no"];
$s = $_POST["subject"];
$m = $_POST["message"];
?>
 <table border="1" align="center">
<th colspan="2"> tour and travel </th>
<tr> 
<td> NAME :</td>
<td><?php echo $n ?></td>
</tr>
<tr> 
<td> EMAIL :</td>
<td><?php echo $e ?></td>
</tr>
<tr> 
<td> PHONE :</td>
<td><?php echo $mob ?></td>
</tr>
<tr> 
<td> SUBJECT :</td>
<td><?php echo $s ?></td>
</tr>
<tr>
<td> MESSAGE: </td>
<td> <?php echo $m ?></td>
</tr>
<tr> 
</tr>
</table>
</head>
</html>