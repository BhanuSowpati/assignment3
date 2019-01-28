<html>
<head>
<style>
      table, th, td
       {
			border: 1px solid black;

			border-collapse: collapse;
		}
</style>
</head>
<body>
<?php
		$cname=$_GET["cname"];
		$cgender=$_GET["cgender"];
		$caddress=$_GET["caddress"];
		$cphno=$_GET["cphno"];
		$cpaymenttype=$_GET["cpaymenttype"];
		$que1=$_GET["q1"];
		$que2=$_GET["q2"];
		$que3=$_GET["q3"];
                $que4=$_GET["q4"];
?>
<?php echo "Name:".$cname;?><br>
<?php echo"Gender:". $cgender;?><br>
<?php echo"Address:".$caddress;?><br>
<?php echo"phonenumber:".$cphno;?><br>
<?php echo"Type of payment you opted:".$cpaymenttype;?><br>
<table>
<tr>
	<th>ITEM</th>
	<th>QUANTITY</th>
	<th>COST</th>
</tr>

<tr>

	<td>USB pendrive</td>

	<td><?php echo $que1;?></td>

	<td><?php echo $que1*500;?></td>

</tr>

<tr>

	<td>wireless mouse</td>

	<td><?php echo $que2;?></td>

	<td><?php echo $que2*1200;?></td>
</tr>

<tr>

	<td>keyboard</td>

	<td><?php echo $que3;?></td>

	<td><?php echo $que3*900;?></td>

</tr>

<tr>

	<td>laptop</td>

	<td><?php echo $que4;?></td>

	<td><?php echo $que4*35000;?></td>

</tr>
<tr>
	<td>Total cost:$q1**500+$q2*1200+$q3*900+$q4*35000;</td>
</tr>
</table>
echo"THANKS FOR YOUR ORDER";
</body>
</html>

