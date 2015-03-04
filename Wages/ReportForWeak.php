<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<link rel="stylesheet" type="text/css" href="../styles/styles.css"><link>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Kaladhar Cashew</title>
	</head>
	<body>
		<?php
		
		include ("WagesGlobal.php");
		$weekID=$_GET['ID'];
		$con=mysql_connect("localhost","root");
		$db=mysql_selectdb("Kaladhara");
		$query="Select * from Wages where WeekID=$weekID order by Emp_ID";
		$result=mysql_query($query);
		$num_rows=mysql_num_rows($result);

		$query2="Select * from Wageweeks where ID=$weekID";
		$result2=mysql_query($query2);
		$b_row=mysql_fetch_row($result2);
		$sdate=date("l  d F Y",$b_row[1]);

		print $sdate;
		//print "There are currently $num_rows Wages Entered <P>";?>
		



		<P align="Center"> <font size=18> Kaladhar Cashew</font></P><br>
		<P align="Center"> Salary Bill for the Period <?php print $b_row[1] ?> to
		<?php print $b_row[2]?>
		<table  border=1  rules=rows cellpadding="20%" cellspacing="0" >
		<thead style="font-size:16; color:BLUE">
			<th>Sl.No. </th>
			<th>Name of the Employee</th>
			<th>Designation</th>
			<th width="50">Days Present</th>
			<th width="50">Basic</th>
			<th width="50">D.A.</th>
			<th width="50">Holiday (Nat)</th>
			<th width="50">PF </th>
			<th width="50">Other Ded.</th>
			<th width="50">Total Ded</th>
			<th width="50">Total (Gross)</th>
			<th width="50">Net Pay</th>
			<th>Signature</th>
		</thead>
		

		<?php
		while($a_row=mysql_fetch_row($result))
		{
			print "<tr>\n";
			
			print "\t<td align=left>$a_row[1]</td>\n";
			$Ename=GetEmpName($a_row[1]);
			print "\t<td>$Ename</td>\n";
			$Etype=GetEmpType($a_row[1]);
			print "\t<td align=left>$Etype</td>\n";
			
			//print "\t<td>$a_row[3]</td>\n";
			
			print "\t<td>$a_row[4]</td>\n";
			
			$EmpBasic=GetEmpBasicForWeek($a_row[1],$weekID);
			print "\t<td>$EmpBasic</td>\n";
			$EmpDA=GetEmpDAforWeek($a_row[1],$weekID);
			print "\t<td>$EmpDA</td>\n";

			$NatHol=GetNatHolForWeek($weekID);
			print "\t<td>$NatHol</td>\n";
			
			$EmpPFDed=GetEmpPfDedutionWeek($a_row[1],$weekID);
			print "\t<td>$EmpPFDed</td>\n";

			print "\t<td>$a_row[5]</td>\n";
			
			$TotalDed=$EmpPFDed+$a_row[5];
			print "\t<td>$TotalDed</td>\n";

			$TotalGross=$EmpBasic+$EmpDA;
			print "\t<td>$TotalGross</td>\n";

			$NetPay=$TotalGross-$TotalDed;
			print "\t<td>$NetPay</td>\n";
			
			//$EmpEarnings=GetEmpEarningPerWeek($a_row[1],$weekID);
			//print "\t<td>$EmpEarnings</td>\n";
			print "\t<td></td>\n";
			print"</tr>\n";
			

		}
		?>
		</table>

		
		
	</body>
</html>
