<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of YearlyReport
 *
 * @author kck
 */
include("../WagesArchive/WagesArchive.class.php");
class YearlyReport {
//put your code here

    static function printYearlyLeave(PDO $db,$StartDate) {
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
	    <th>Present Days</th>
        </tr>
    </thead>
    <tbody>


	<?php
		$i=1;
		$result=WagesArchive::getEmployeesYearly($db, $StartDate);
		foreach($result as $tmp) {

		    print "<tr>";
		    print "<td>".$i."</td>";
		    print "<td>".$tmp['Name']."</td>";
		    print "<td>".round($tmp['sgr'],2)."</td>";
		    print "<td>".round(($tmp['sgr']*0.0833),2)."</td>";
		    print "<td>".round(($tmp['spf']-($tmp['sgr']*.0833)),2)."</td>";
		    print "<td>".round(($tmp['spf']),2)."</td>";
		    print "<td>".$tmp['sprdays']."</td>";
		    print "</tr>";
		    $i++;
		}
		?>
    </tbody>
</table>
    <?php
    }
    static function printYearlyPf(PDO $db,$StartDate) {
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
	$dt=new DateTime($StartDate);
	$Start=$dt->format("Y")."-03-01";
	$End=($dt->format("Y")+1)."-02-28";
	$i=1;
	$result=WagesArchive::getEmployeesSummary($db, $Start, $End);
	foreach($result as $tmp) {

	    print "<tr>";
	    print "<td>".$i."</td>";
	    print "<td>".$tmp['Name']."</td>";
	    print "<td>".round($tmp['sgr'],2)."</td>";
	    print "<td>".round(($tmp['sgr']*0.0833),2)."</td>";
	    print "<td>".round(($tmp['spf']-($tmp['sgr']*.0833)),2)."</td>";
	    print "<td>".round(($tmp['spf']),2)."</td>";
	    print "</tr>";
	    $i++;
	}
	?>
    </tbody>
</table>
	<?php

    }
        static function printYearlyBonus(PDO $db,$StartDate) {
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
	$dt=new DateTime($StartDate);
	$Start=$dt->format("Y")."-04-01";
	$End=($dt->format("Y")+1)."-03-31";
	$i=1;
	$result=WagesArchive::getEmployeesSummary($db, $Start, $End);
	foreach($result as $tmp) {

	    print "<tr>";
	    print "<td>".$i."</td>";
	    print "<td>".$tmp['Name']."</td>";
	    print "<td>".round($tmp['sgr'],2)."</td>";
	    print "<td>".round(($tmp['sgr']*0.0833),2)."</td>";
	    print "<td>".round(($tmp['spf']-($tmp['sgr']*.0833)),2)."</td>";
	    print "<td>".round(($tmp['spf']),2)."</td>";
	    print "</tr>";
	    $i++;
	}
	?>
    </tbody>
</table>
	<?php

    }
}
?>
