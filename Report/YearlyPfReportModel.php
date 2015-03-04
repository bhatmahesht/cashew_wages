<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("../DbConnection/DbConnection.class.php");
include("../WagesArchive/WagesArchive.class.php");
$Con=new DbConnection();
$db=$Con->Connect();

$result=WagesArchive::getAllYears($db);

?>
<table border="1">
    <thead>
        <tr>
            <th>Year Name</th>
	    <th>Start Date</th>
	    <th>End Date</th>
            <th>Report</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($result as $tmp)
        {


	    print "<tr>";
            $dt=new DateTime($tmp->getStartDate());
            print "<td>".$dt->format(" Y")."</td>";
	    $Start=$dt->format("Y")."-03-01";
	    $End=($dt->format("Y")+1)."-02-28";
	    print "<td>".$Start."</td>";
	    print "<td>".$End."</td>";
            $str="YearlyPfReportShow.php?StartDate=".$tmp->getStartDate();
            print "<td>";
            print "<a href=".$str." target=_blank>View Report</a>";
            print "</td>";
            print "</tr>";
        }

        ?>

    </tbody>
</table>