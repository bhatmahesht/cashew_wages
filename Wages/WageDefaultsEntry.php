<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Kaladhar Cashew</title>
	</head>
	<body>
		<?php
		$Sdate=$_GET['SDate'];
		$Edate=$_GET['Edate'];
		$NatHol=$_GET['NatHol'];
		$Desc=$_GET['Desc'];
		$con=mysql_connect("localhost","root");
		mysql_select_db("Kaladhara");
		$query="insert into wageweeks (StartDate,EndDate,NationalHolidays,Description)
		values ('$Sdate','$Edate',$NatHol,'$Desc')";
		mysql_query($query);
		die( mysql_error());
		// put your code here
		print "Are you ready to Enter the Wages for the Week '$Sdate' to '$Edate'?<br>";
		?>
		
	</body>
</html>
