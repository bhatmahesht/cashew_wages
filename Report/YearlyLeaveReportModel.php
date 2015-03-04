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
            $str="YearlyLeaveReportShow.php?StartDate=".$tmp->getStartDate();
            print "<td>";
            print "<a href=".$str." target=_blank>View Report</a>";
            print "</td>";
            print "</tr>";
        }

        ?>

    </tbody>
</table>