<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MonthlyReport
 *
 * @author kck
 */
 include("../WagesArchive/WagesArchive.class.php");
class MonthlyReport {
    //put your code here

    function getMonthNames(PDO $db)
    {
        $sql="select Distinct(Month(StartDate)) from WageWeeks order by StartDate desc";
        $stmt=$db->query($sql);
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function printMonthly(PDO $db,$EndDate)
    {
       $dt=new DateTime($EndDate);
        print "For ".$dt->format("M Y")."<br>";
        ?>

<table border="1">
    <thead>
        <tr>
            <th>Sl.No</th>
            <th>Employee Name</th>
            <th>Gross</th>
            <th>Employee @8.33%</th>
            <th>Employee @3.67%</th>
            <th>Employee @12%</th>
        </tr>
    </thead>
    <tbody>
    

<?php
$i=1;
$result=WagesArchive::getEmployeesMonthly($db, $EndDate);
$sumGross=0;
$sumEmpMaj=0;
$sumEmpMin=0;
$sumEmpPf=0;

foreach($result as $tmp)
{
    
    print "<tr>";
    print "<td>".$i."</td>";
    print "<td>".$tmp['Name']."</td>";
    print "<td>".round($tmp['sgr'],0)."</td>";
    print "<td>".round(($tmp['sgr']*0.0833),0)."</td>";
    print "<td>".round(($tmp['spf']-($tmp['sgr']*.0833)),0)."</td>";
    print "<td>".round(($tmp['spf']),0)."</td>";
    print "</tr>";
    $i++;
    $sumGross=$sumGross+round($tmp['sgr'],0);
    $sumEmpMaj=$sumEmpMaj+round(($tmp['sgr']*0.0833),0);
    $sumEmpMin=$sumEmpMin+round(($tmp['spf']-($tmp['sgr']*.0833)),0);
    $sumEmpPf=$sumEmpPf+round(($tmp['spf']),0);
}

    print "<tr>";
    print "<td>".$i."</td>";
    print "<td>"."Sum"."</td>";
    print "<td>".$sumGross."</td>";
    print "<td>".$sumEmpMaj."</td>";
    print "<td>".$sumEmpMin."</td>";
    print "<td>".$sumEmpPf."</td>";
    print "</tr>";
    ?>
        </tbody>
</table>
        <?php
    }
}
?>
