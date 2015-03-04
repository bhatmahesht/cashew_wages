        <?php
        // put your code here
        include("../DbConnection/DbConnection.class.php");
        include("Wages.class.php");
        $Con=new DbConnection();
        $db=$Con->Connect();

        $WageWeeksObj=new WageWeeks();
        $result=$WageWeeksObj->getUnfinished($db);

        $WagesObj=new Wages();

        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>N.H</th>
                    <th>Wages Entry Status</th>
                    <th>Action </th>
                    <th>WeeklyReport</th>
                    <th>Discription</th>
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
                    
                    $status=$WagesObj->getWeekWageStatus($db, $tmp->getId());
                    if($status==1)
                    {
                        print "<td>Finished</td>";
                    }
                    else
                    {
                        print "<td>Unfinished</td>";
                    }
                    print "<td>";
                    $str="../users/transferlogin.php?WeekID=".$tmp->getId();
                    print "<a href=".$str.">Transfer</a>";
                    print "</td>";

                    $Display="Display.php?WeekID=".$tmp->getId();
                    $add="Add.php?WeekID=".$tmp->getId().
                    print "<td>";
                    print "<a href=".$Display."> Display</a> / ";
                    $report="../Report/WeeklyReport.php?WeekID=".$tmp->getId();
                    print "<a href=".$report." target=_blank>View Report</a>";
                    print "<td> ".$tmp->getDescription()."</td>";
                    print "</tr>";
                }
                ?>
            
            </tbody>
        </table>

