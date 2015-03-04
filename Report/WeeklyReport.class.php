<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WeeklyReport
 *
 * @author Vinayak
 */
include("../Wages/Wages.class.php");
include("../WagesArchive/WagesArchive.class.php");

class WeeklyReport {

//put your code here

    function ShowWagesReport(PDO $db, $WeekId) {


        $WeeksObj = new WageWeeks();


        $WagesObj = new Wages();


        $WeeksObj->SetById($db, $WeekId);

        $total = $WagesObj->GetTotalRecords($db, $WeekId);
        $i = 0;
        $max = $total / 8;
        While ($i <= $max) {

            $start = $i * 9;
            $end = $i * 9 + 9;

            $this->PrintEachPage($db, $WeekId, $start, $end);
            $i = $i + 1;
        }
    }

    function ShowWagesTransReport(PDO $db, $StartDate) {



        $WagesObj = new WagesArchive();


        //$WeeksObj->SetById($db, $WeekId);

        $total = $WagesObj->GetWeekTotalRecords($db, $StartDate);
        $i = 0;
        $max = $total / 9;
        While ($i <= $max) {

            $start = $i * 9;
            $end = $i * 9 + 9;

            $this->PrintEachTransPage($db, $StartDate, $start, $end);
            $i = $i + 1;
        }
    }

    function ShowWagesTransAcknReport(PDO $db, $StartDate) {



        $WagesObj = new WagesArchive();


        //$WeeksObj->SetById($db, $WeekId);

        $total = $WagesObj->GetWeekTotalRecords($db, $StartDate);
        $i = 0;
        $max = $total / 4;
        While ($i <= $max) {

            $start = $i * 9;
            $end = $i * 9 + 9;

            $this->PrintEachTransAcknPage($db, $StartDate, $start, $end);
            $i = $i + 1;
        }
    }

    function PrintEachPage(PDO $db, $WeekId, $start, $end) {
        $WagesObj = new Wages();

        $WeeksObj = new WageWeeks();
        $WeeksObj->SetById($db, $WeekId);
        $wageObs = $WagesObj->GetRangeforWeek($db, $WeekId, $start, $end);
?>

        <P align="Center"> <font size=18> Kaladhar Cashew</font></P><br>
        <P align="Center"> Salary Bill for the Period <?php print $WeeksObj->getStartDate() ?> to
    <?php print $WeeksObj->getEndDate() ?>
    <table  border=1  rules=rows cellpadding="25%" cellspacing="10%" >
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
        $tmp = new Wages();
        foreach ($wageObs as $tmpob) {
            $tmp->SetByObj($tmpob);
            $tmp->EmployeesObj->setById($db, $tmp->getEMpId());
            $tmp->WageWeeksObj->setById($db,$tmp->getWeekId());
            print "<tr>\n";
            $EmpId = $tmp->EmployeesObj->getId();
            print "\t<td align=left>$EmpId</td>\n";

            $Ename = $tmp->EmployeesObj->getName();
            print "\t<td>$Ename</td>\n";

            $Etype = $tmp->EmployeesObj->EmployeeTypeObj->getEmpType();
            print "\t<td align=left>$Etype</td>\n";

            //print "\t<td>$a_row[3]</td>\n";
            $EmpPreDays = $tmp->getPReDays();
            print "\t<td>$EmpPreDays</td>\n";

            $EmpBasic = $tmp->getEmpBasic();
            print "\t<td>$EmpBasic</td>\n";

            $EmpDA = $tmp->getEmpDAforWeek();
            print "\t<td>$EmpDA</td>\n";

            $NatHol = $tmp->WageWeeksObj->getNationalHolidays();
            print "\t<td>$NatHol</td>\n";

            $EmpPFDed = $tmp->getEmpPF();
            print "\t<td>$EmpPFDed</td>\n";

            $EmpOtherDed = $tmp->getOtHerded();
            print "\t<td>$EmpOtherDed</td>\n";

            $TotalDed = $tmp->getEmpTotalDeduction();
            print "\t<td>$TotalDed</td>\n";

            $TotalGross = $tmp->getEmpGross();
            print "\t<td>$TotalGross</td>\n";

            $NetPay = $tmp->getEmpNetPay();
            print "\t<td>$NetPay</td>\n";

            //$EmpEarnings=GetEmpEarningPerWeek($a_row[1],$weekID);
            //print "\t<td>$EmpEarnings</td>\n";
            print "\t<td></td>\n";
            print"</tr>\n";
        }//end of for
    ?>
    </table>
    </div>
<?php
    }

    function PrintEachTransPage(PDO $db, $StartDate, $start, $end) {
        $WagesObj = new WagesArchive();

        //$WeeksObj=new WageWeeks();
        //$WeeksObj->SetById($db, $WeekId);
        $wageObs = $WagesObj->GetRangeforWeek($db, $StartDate, $start, $end);
?>
        <div class="A3Page">
            <P align="Center"> <font size=18> Kaladhar Cashew</font></P><br>
            <P align="Center"> Salary Bill for the Period <?php print $StartDate ?> to
        <?php print WagesArchive::getEndDateFor($db, $StartDate) ?>
    <table  border=1  rules=rows cellpadding="25%" cellspacing="10%" >
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
        $tmp = new WagesArchive();
        foreach ($wageObs as $tmpob) {
            $tmp->SetByObj($tmpob);

            $tmp->getEmPiD();

            print "<tr>\n";
            $EmpId = $tmp->getPfId();
            print "\t<td align=left>$EmpId</td>\n";

            $Ename = $tmp->getName();
            print "\t<td>$Ename</td>\n";

            $Etype = $tmp->getType();
            print "\t<td align=left>$Etype</td>\n";

            //print "\t<td>$a_row[3]</td>\n";
            $EmpPreDays = $tmp->getPReDays();
            print "\t<td>$EmpPreDays</td>\n";

            $EmpBasic = $tmp->getBasic();
            print "\t<td>$EmpBasic</td>\n";

            $EmpDA = $tmp->getDaPErdaY() * $tmp->getPReDays();
            print "\t<td>$EmpDA</td>\n";

            $NatHol = $tmp->getNationalHolidays();
            print "\t<td>$NatHol</td>\n";

            $EmpPFDed = $tmp->getPf();
            print "\t<td>$EmpPFDed</td>\n";

            $EmpOtherDed = $tmp->getOtHerded();
            print "\t<td>$EmpOtherDed</td>\n";

            $TotalDed = $tmp->getOtHerded() + $tmp->getPf();
            print "\t<td>$TotalDed</td>\n";

            $TotalGross = $tmp->getGross();
            print "\t<td>$TotalGross</td>\n";

            $NetPay = $tmp->getGross() - $TotalDed;
            print "\t<td>$NetPay</td>\n";

            //$EmpEarnings=GetEmpEarningPerWeek($a_row[1],$weekID);
            //print "\t<td>$EmpEarnings</td>\n";
            print "\t<td></td>\n";
            print"</tr>\n";
        }//end of for
        ?>
    </table>
</div>

<?php
    }

    function PrintEachTransAcknPage(PDO $db, $StartDate, $start, $end) {
        $WagesObj = new WagesArchive();

        //$WeeksObj=new WageWeeks();
        //$WeeksObj->SetById($db, $WeekId);
        $wageObs = $WagesObj->GetRangeforWeek($db, $StartDate, $start, $end);
?>
        <div class="A3Page">
    <?php
        foreach ($wageObs as $tmp) {
            $WgObj = new WagesArchive();
            $WgObj->SetByObj($tmp);
            $this->printEachTransAckn($WgObj);
        }
    ?>
    </div>
<?php
    }

    function printEachTransAckn(WagesArchive $tmp) {
?>
        <br>


        <table width="800" border=1 rules="groups" cellpadding="0%" cellspacing="2%" >
            <thead style="font-size:16; color:BLUE">
            </thead>
            <tr>
                <td colspan="14">
                    M/s Kaladhar Cashew From VI rule 29(2) wage slip for the period
            <?php print $tmp->getStartDate() . " to " . $tmp->getEndDate(); ?>
        </td>
    </tr>
    <tr>
        <td>Sl.No. </td>
        <td>Name</td>
        <td>Designation</td>
        <td width="50">Days Present</td>
        <td width="50">Basic</td>
        <td width="50">D.A.</td>
        <td width="50">Holiday (Nat)</td>
        <td width="50">PF </td>
        <td width="50">Other Ded.</td>
        <td width="50">Total Ded</td>
        <td width="50">Total (Gross)</td>
        <td width="50">Net Pay</td>
        <td>Signature</td>
    </tr>



    <?php
            $tmp->getEmPiD();

            print "<tr>\n";
            $EmpId = $tmp->getPfId();
            print "\t<td align=left>$EmpId</td>\n";

            $Ename = $tmp->getName();
            print "\t<td>$Ename</td>\n";

            $Etype = $tmp->getType();
            print "\t<td align=left>$Etype</td>\n";

            //print "\t<td>$a_row[3]</td>\n";
            $EmpPreDays = $tmp->getPReDays();
            print "\t<td>$EmpPreDays</td>\n";

            /* print "\t<td>".$tmp->getNoOfKgWholes()."</td>";
              print "\t<td>".$tmp->getNoOfKgPieces()."</td>"; */

            $EmpBasic = $tmp->getBasic();
            print "\t<td>$EmpBasic</td>\n";

            $EmpDA = $tmp->getDaPErdaY() * $tmp->getPReDays();
            print "\t<td>$EmpDA</td>\n";

            $NatHol = $tmp->getNationalHolidays();
            print "\t<td>$NatHol</td>\n";

            $EmpPFDed = $tmp->getPf();
            print "\t<td>$EmpPFDed</td>\n";

            $EmpOtherDed = $tmp->getOtHerded();
            print "\t<td>$EmpOtherDed</td>\n";

            $TotalDed = $tmp->getOtHerded() + $tmp->getPf();
            print "\t<td>$TotalDed</td>\n";

            $TotalGross = $tmp->getGross();
            print "\t<td>$TotalGross</td>\n";

            $NetPay = $tmp->getGross() - $TotalDed;
            print "\t<td>$NetPay</td>\n";

            //$EmpEarnings=GetEmpEarningPerWeek($a_row[1],$weekID);
            //print "\t<td>$EmpEarnings</td>\n";
            print "\t<td></td>\n";
            print"</tr>\n";
    ?>
            <tr>
                <td colspan="5" align="left">Pay Incharge_____</td>
                <td colspan="10" align="right">Copy Recieved </td>
            </tr>
        </table>

<?php
        }

        function AccountReport(PDO $db, $WeekID) {
            $WeeksObj = new WageWeeks();
            $WeeksObj->SetById($db, $WeekID);

            $totalgross = WagesArchive::GetTotalGross($db, $WeekID);
            $totalOthDed = WagesArchive::GetTotalOtherDed($db, $WeekID);
            $totalPf = WagesArchive::GetTotalPF($db, $WeekID);
?>
            <br>


            <table width="800" border=1 rules="groups" cellpadding="0%" cellspacing="2%" >
                <thead style="font-size:16; color:BLUE">
                </thead>
                <tr>
                    <td colspan="14">
                        M/s Kaladhar Cashew Account Report for the Week of period
            <?php print $WeeksObj->getStartDate() . " to " . $WeeksObj->getEndDate(); ?>
        </td>
    </tr>
    <tr>
        <td>Total Gross </td>
        <td>Total PF </td>
        <td>Total Other Ded</td>
        <td>Total Ded</td>
        <td>Total NetPay</td>

    </tr>



    <?php
            print "\t<td align=left>$totalgross</td>\n";

            print "\t<td>$totalPf</td>\n";

            print "\t<td align=left>$totaOthDed</td>\n";
            $totalDed = $totalPf + $totaOthDed;
            print "\t<td>$totalDed</td>\n";
            $totalNetPay = $totalgross - $totalDed;
            /* print "\t<td>".$tmp->getNoOfKgWholes()."</td>";
              print "\t<td>".$tmp->getNoOfKgPieces()."</td>"; */

            print "\t<td>$totalNetPay</td>\n";

            print"</tr>\n";
    ?>

        </table>
<?php
            /* print "Total Gross: ".WagesArchive::GetTotalGross($db, $WeekID)."<br>";
              print "Total PF: ".WagesArchive::GetTotalPF($db, $WeekID)."<br>";
              print "Total NetPay: ".WagesArchive::GetTotalGross($db, $WeekID)-WagesArchive::GetTotalPF($db, $WeekID);
             */
        }

        function AccountReportByType(PDO $db, $WeekID) {
?>
            <br>


            <table width="800" border=1 rules="groups" cellpadding="0%" cellspacing="2%" >
                <thead style="font-size:16; color:BLUE">
                    <tr>
                        <th>Employee Type </th>
                        <th>Employee Count </th>
                        <th>Total Present Days</th>
                        <th>Total Kgs Produced</th>
                        <th>Total Pay Given</th>


                    </tr>
                </thead>





    <?php
            $result = WagesArchive::GetTotalByType($db, $WeekID);
            foreach ($result as $tmp) {
                $str1 = $tmp['Type'];
                print "<tr> \t<td align=left>$str1</td>\n";
                $str1 = $tmp['TotalEmployees'];
                print "\t<td align=right>$str1</td>\n";
                $str1 = $tmp['TotalpresentDays'];
                print "\t<td align=right>$str1</td>\n";
                $str1 = $tmp['TotalKgs'];
                print "\t<td align=right>$str1</td>\n";
                $str1 = $tmp['netpay'];
                print "\t<td align=right>$str1</td>\n";


                print"</tr>\n";
            }
    ?>

        </table>
<?php
        }

    }
?>
