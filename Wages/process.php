<?php
/*
 *
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("Wages.class.php");
include("../DbConnection/DbConnection.class.php");
include("../Error/Error.class.php");
$Con=new DbConnection();
$db=$Con->Connect();
$WagesObj=new Wages();

//$EmpTypeObj->setEMpType($_GET['Emp_Type']);
//$EmpTypeObj->setEMpDa($_GET['Emp_DA']);
//$EmpTypeObj->setEMpRateWholes($_GET['Emp_Rate_Wholes']);

//print $EmpTypeObj->getEMpType();
//print $EmpTypeObj->getEMpDa();
$a= $_GET['submit'];
//print $_GET['Act'];
//print $_GET['CalByDays'];
$WagesObj->assignByHash($_GET);
//$a = print "This is action '$a'";
switch($_GET['submit'])
{
    case 'ADD':
        /*if($WagesObj->getPReDays()>$_GET['WorkDays']){
        $s="Present days ".$WagesObj->getPReDays()." cannot be more than Workdays:".$_GET['WorkDays'];
            $Er=new Error();
            $Er->setError($error);
            $Er->setErrorTime(date('Y-m-d'));
            $Er->insertIntoDatabase($db);
            header("Location:../Error/ErrorDisplay.php");
        }*/
        $WagesObj->insertIntoDatabase($db);
        insertToWages($db, $WagesObj->getEMpId(), $WagesObj->getWeekId(), $WagesObj->getNoOfKgSWhole(), $WagesObj->getPReDays());
        $str="Addwages.php?EmpID=".($_GET['Emp_ID']+1)."&WeekID=".$_GET['WeekID'];
        header("Location:".$str);
        exit();
//      
//print $EmpTypeObj->getEMpType();
        break;
    case 'MODIFY':
        $WagesObj->updateToDatabase($db);
        insertToWages($db, $WagesObj->getEMpId(), $WagesObj->getWeekId(), $WagesObj->getNoOfKgSWhole(), $WagesObj->getPReDays());
      
        break;
    case 'DELETE':
        $WagesObj->deleteFromDatabase($db);

}
header("Location: display.php?WeekID=".$_GET['WeekID']);

function insertToWages(PDO $db, $empid, $weekid, $kgs, $otherday){
    $emp = new Employees();
    $emp->SetById($db, $empid);
    
    $sql = "Select minimum_kg "
            . " from employee_type"
            . " WHERE ID=".$emp->getTypeId()."";
    $result =$db->query($sql)->fetch();
    $minimum_kg = $result['minimum_kg'];
    if($minimum_kg !=0){
        $num_days = intval($kgs / $minimum_kg) + 1;
        $sql = "update wages"
                . " set PreDays = $num_days, other_preday = $otherday "
                . " WHERE EMP_ID=$empid and WeekID=$weekid";
        $stmt =$db->query($sql);
        $result = $stmt->execute();
    }
}
?>
