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
        include("EmployeeType.class.php");
        $Con=new DbConnection();
        $db=$Con->Connect();

        $EmpTypeObj=new EmployeeType();
        $result=$EmpTypeObj->GetAll($db);


        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Employee Type</th>
                    <th>DA(Per Day)</th>
                    <th>Wholes Rate(Per KG)</th>
                    <th>Pieces Rate(Per KG)</th>
                    <th>Employee Rate(Per Day)</th>
                    <th>Wage depends on Per Kg?</th>
                    <th>Action </th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $tmp=new EmployeeTypeModel();
                foreach($result as $tmp)
                {
                    print "<tr>";
                    print "<td> ".$tmp->getEmpType()."</td>";
                    print "<td> ".$tmp->getEmpDA()."</td>";
                    print "<td> ".$tmp->getEmpRateWholes()."</td>";
                    print "<td> ".$tmp->getEmpRatePieces()."</td>";
                    print "<td> ".$tmp->getEmpRateDay()."</td>";
                    if($tmp->getCalByDays()==0){
                        
                        print "<td>YES </td>";
                    }
                    else
                    {
                        print "<td>NO</td>";
                    }

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
