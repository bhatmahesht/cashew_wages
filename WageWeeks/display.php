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
        // put your code here
        include("../DbConnection/DbConnection.class.php");
        include("WageWeeks.class.php");
        $Con=new DbConnection();
        $db=$Con->Connect();

        $WageWeeksObj=new WageWeeks();
        $result=$WageWeeksObj->getAll($db);
        

        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>National Holidays</th>
                    
                    <th>Action </th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $tmp=new WageWeeksModel();
                foreach($result as $tmp)
                {
                    print "<tr>";
                    print "<td> ".$tmp->getStartDate()."</td>";
                    print "<td> ".$tmp->getEndDate()."</td>";
                    print "<td> ".$tmp->getNationalHolidays()."</td>";
                    
                    $Modify="Modify.php?ID=".$tmp->getId();
                    $Delete="Delete.php?ID=".$tmp->getId();
                    print "<td>";
                    print "<a href=".$Modify.">Modify</a> / ";
                    print "<a href=".$Delete.">Delete</a>";
                    print "</td>";
                    print "<td> ".$tmp->getDescription()."</td>";
                    print "</tr>";
                }
                ?>

            </tbody>
        </table>

    </body>
</html>
