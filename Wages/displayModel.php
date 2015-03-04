
        <?php
        // put your code here
        include("../DbConnection/DbConnection.class.php");
        include("Wages.class.php");
        $Con=new DbConnection();
        $db=$Con->Connect();

        $WageWeeksObj=new WageWeeks();
        $WageWeeksObj->SetById($db, $_GET['WeekID']);

        print "For the Week Ranging From ".$WageWeeksObj->getStartDate();
        print " To ".$WageWeeksObj->getEndDate();

        $link="Addwages.php?EmpID=1&WeekID=".$_GET['WeekID'];
        print "<a href=".$link.">Add New</a>";
        $WagesObj=new Wages();

        $result=$WagesObj->GetAllForWeekOrdered($db, $_GET['WeekID']);


        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>PF ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Present Days</th>
                    <th>Qty(Wholes)</th>
                    <th>Qty(Pieces)</th>
                    <th>Action</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $tmp=new WagesModel();
                foreach($result as $tmp) {
                    $WagesObj->SetByObj($tmp);
                    $WagesObj->EmployeesObj->SetById($db,$WagesObj->getEMpId());
                    print "<tr>";
                    print "<td> ".$WagesObj->EmployeesObj->getPFID()."</td>";
                    print "<td> ".$WagesObj->EmployeesObj->getName()."</td>";
                    $tp=new EmployeeType();
                    $tp=$WagesObj->EmployeesObj->EmployeeTypeObj;
                    print "<td> ".$tp->getEMpType()."</td>";
                    print "<td> ".$WagesObj->getPReDays()."</td>";
                    print "<td>".$WagesObj->getNoOfKgSWhole()."</td>";
                    print "<td>".$WagesObj->getNoOfKgSPieces()."</td>";
                    //print "<td> ".$EmpTypeObj->getEMpType()."</td>";
                    $Modify="Modify.php?ID=".$tmp->getId();
                    $Delete="Delete.php?ID=".$tmp->getId();
                    print "<td>";
                    print "<a href=".$Modify.">Modify</a> / ";
                    print "<a href=".$Delete.">Delete</a>";
                    print "</td>";

                    print "<td> ".$WagesObj->getDescription()."</td>";
                    print "</tr>";
                }
                ?>

            </tbody>
        </table>

