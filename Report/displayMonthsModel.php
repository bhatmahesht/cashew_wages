<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("../DbConnection/DbConnection.class.php");
include("../WagesArchive/WagesArchive.class.php");
$Con=new DbConnection();
$db=$Con->Connect();

$result=WagesArchive::getAllMonths($db);

?>
<table border="1">
    <thead>
        <tr>
            <th>Month Name</th>
            <th>Report</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($result as $tmp)
        {
            print "<tr>";
            $dt=new DateTime($tmp->getEndDate());
            print "<td>".$dt->format("M Y")."</td>";
            $str="MonthlyReportShow.php?EndDate=".$tmp->getEndDate();
            print "<td>";
            print "<a href=".$str." target=_blank>View Report</a>";
            print "</td>";
            print "</tr>";
        }

        ?>

    </tbody>
</table>
