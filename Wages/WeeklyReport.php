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
        include("../DbConnection/DbConnection.class.php");
        include("Wages.class.php");

        $con=new DbConnection();
        $db=$con->Connect();

        $WagesObj=new Wages();
        $WeeksObj=new WageWeeks();

        $WeekId=$_GET['WeekID'];



        $WeeksObj->SetById($db,$WeekID);

        $total=$WagesObj->GetTotalRecords($db, $WeekID);
        $i=0;
        While($i<=($total/10))
        {
            $WageObj=new Wages();
            $start=$i*10;
            $end=$i*10+10;
    $wageObs=$WageObj->GetRangeforWeek($db, $WeekID, $start, $end);

            PrintPage($wageObs);
        }
function PrintPage($wageObs)
{
    

    ?>
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
		$tmp=new Wages();
		foreach($wageObs as $tmp)
		{
			$tmp->EmployeesObj->setById($tmp->getEMpId());

                        print "<tr>\n";

			print "\t<td align=left>$tmp->EmployeeObj->getId()</td>\n";
			$Ename=$tmp->EmployeesObj->getName();
			print "\t<td>$Ename</td>\n";

			$Etype=$tmp->EmployeesObj->EmployeeTypeObj->getEmpType();
			print "\t<td align=left>$Etype</td>\n";

			//print "\t<td>$a_row[3]</td>\n";
			$EmpPreDays=$tmp->getPReDays();
			print "\t<td>$EmpPreDays</td>\n";

			$EmpBasic=$tmp->getEmpBasic();
			print "\t<td>$EmpBasic</td>\n";

			$EmpDA=$tmp->getEmpDA();
			print "\t<td>$EmpDA</td>\n";

			$NatHol=$tmp->WageWeeksObj->getNationalHolidays();
			print "\t<td>$NatHol</td>\n";

			$EmpPFDed=$tmp->getEmpPF();
			print "\t<td>$EmpPFDed</td>\n";

			$EmpOtherDed=$tmp->getOtHerded();
			print "\t<td>$EmpOtherDed</td>\n";

			$TotalDed=$tmp->getEmpTotalDeductions();
			print "\t<td>$TotalDed</td>\n";

			$TotalGross=$tmp->getTotalGross();
			print "\t<td>$TotalGross</td>\n";

			$NetPay=$tmp->getEmpNetPay();
			print "\t<td>$NetPay</td>\n";

			//$EmpEarnings=GetEmpEarningPerWeek($a_row[1],$weekID);
			//print "\t<td>$EmpEarnings</td>\n";
			print "\t<td></td>\n";
			print"</tr>\n";


		}




}
        // put your code here
        ?>
               

    </body>
</html>
