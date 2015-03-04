<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("../DbConnection/DbConnection.class.php");
include("../WagesArchive/WagesArchive.class.php");

$Con=new DbConnection();
$db=$Con->Connect();

$result=WagesArchive::getAlltWeeks($db);
?>
<table border="1">
    <thead>
        <tr>
            <th>StartDate</th>
            <th>EndDate</th>
            <th>Report</th>
            <th>Wager's Copy</th>
            <th>Account Report</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($result as $tmp)
        {
            print "<tr>";
            print "<td>".$tmp->getStartDate()."</td>";
            print "<td>".$tmp->getEndDate()."</td>";
            $str="<a href=weeklyreportTrans.php?StartDate=".$tmp->getStartDate()." target=_blank>View</a>";
            print "<td>".$str."</td>";
            $str1="<a href=weeklyreportTransAckn.php?StartDate=".$tmp->getStartDate()."&WeekID=".$tmp->getWeekID()." target=_blank>View</a>";
            print "<td>".$str1."</td>";
            $str1="<a href=WeeklyAccountReport.php?WeekID=".$tmp->getWeekID()." target=_blank>View</a>";
            print "<td>".$str1."</td>";
            print "</tr>";
        }
        ?>

    </tbody>
</table>
