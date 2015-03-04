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
        include("Employees.class.php");
        $Con=new DbConnection();
        $db=$Con->Connect();

        $EmployeeObj=new Employees();
        $result=$EmployeeObj->GetAll($db);


        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>PF ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Type</th>
                    <th>Action</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $tmp=new EmployeesModel();
                foreach($result as $tmp)
                {
                    print "<tr>";
                    print "<td> ".$tmp->getPFID()."</td>";
                    print "<td> ".$tmp->getName()."</td>";
                    print "<td> ".$tmp->getAddress()."</td>";
                    print "<td> ".$tmp->getPhone()."</td>";
                    $EmpTypeObj=new EmployeeType();
                    $EmpTypeObj=$EmpTypeObj->findById($db, $tmp->getTypeId());
                    print "<td> ".$EmpTypeObj->getEMpType()."</td>";
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
