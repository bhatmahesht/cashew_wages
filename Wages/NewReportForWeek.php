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
		include ("../Classes/Employee.php");

		$weekID=$_GET['ID'];
		$con=mysql_connect("localhost","root");
		$db=mysql_selectdb("Kaladhara");
		$query="Select Emp_ID from Wages where WeekID=$weekID";
		$result=mysql_query($query);

		$query2="Select * from Wageweeks where ID=$weekID";
		$result2=mysql_query($query2);
		$b_row=mysql_fetch_row($result2);
		$sdate=date("l  d F Y",$b_row[1]);

		print $sdate;
		print mysql_num_rows($result);
		//print "There are currently $num_rows Wages Entered <P>";?>




		<P align="Center"> <font size=18> Kaladhar Cashew</font></P><br>
		<P align="Center"> Salary Bill for the Period <?php print $b_row[1] ?> to
		<?php print $b_row[2]?>
		<table  border=1  rules=rows cellpadding="20%" cellspacing="0" >
		<thead style="font-size:16; color:BLUE">
                    <tr>
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
                    </tr>
		</thead>


		<?php
		while($a_row=mysql_fetch_row($result))
		{
			$Emp=new Employee();
			//print $a_row[0];
			$Emp->GenerateReport($a_row[0], $weekID);
			print "<tr>\n";

			print "\t<td align=left>$Emp->ID</td>\n";
			$Ename=$Emp->Name;
			print "\t<td>$Ename</td>\n";

			$Etype=$Emp->TP->Type;
			print "\t<td align=left>$Etype</td>\n";

			//print "\t<td>$a_row[3]</td>\n";
			$EmpPreDays=$Emp->Wage->PresentDays;
			print "\t<td>$EmpPreDays</td>\n";

			$EmpBasic=$Emp->Report->Basic;
			print "\t<td>$EmpBasic</td>\n";

			$EmpDA=$Emp->Report->TotalDA;
			print "\t<td>$EmpDA</td>\n";

			$NatHol=$Emp->Wage->NationalHolidays;
			print "\t<td>$NatHol</td>\n";

			$EmpPFDed=$Emp->Report->PF;
			print "\t<td>$EmpPFDed</td>\n";

			$EmpOtherDed=$Emp->Wage->OtherDeduction;
			print "\t<td>$EmpOtherDed</td>\n";

			$TotalDed=$Emp->Report->TotalDeductions;
			print "\t<td>$TotalDed</td>\n";

			$TotalGross=$Emp->Report->TotalGross;
			print "\t<td>$TotalGross</td>\n";

			$NetPay=$Emp->Report->TotalGross;
			print "\t<td>$NetPay</td>\n";

			//$EmpEarnings=GetEmpEarningPerWeek($a_row[1],$weekID);
			//print "\t<td>$EmpEarnings</td>\n";
			print "\t<td></td>\n";
			print"</tr>\n";


		}
		// put your code here
		?>
                </table>
	</body>
</html>
