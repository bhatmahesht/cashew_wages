<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("WageWeeks.class.php");
include("../DbConnection/DbConnection.class.php");
include("../Error/Error.class.php");

$Con = new DbConnection();
$db = $Con->Connect();
$WageWeeksObj = new WageWeeks();

//$EmpTypeObj->setEMpType($_GET['Emp_Type']);
//$EmpTypeObj->setEMpDa($_GET['Emp_DA']);
//$EmpTypeObj->setEMpRateWholes($_GET['Emp_Rate_Wholes']);
//print $EmpTypeObj->getEMpType();
//print $EmpTypeObj->getEMpDa();
$a = $_GET['submit'];
//print $_GET['Act'];
//print $_GET['CalByDays'];
$WageWeeksObj->assignByHash($_GET);
//$a = print "This is action '$a'";
$WageWeeksObj->setIsTransferEd(0);
switch ($_GET['submit']) {
    case 'ADD':
        if ($WageWeeksObj->getEndDate() <= $WageWeeksObj->getStartDate()) {
            $s = "End Date " . $WageWeeksObj->getEndDate() . " Cannot be
                    earlier than StartDate " . $WageWeeksObj->getStartDate();
            $Er = new Error();
            $Er->setError($s);
            $Er->setErrorTime(date("Y-m-d"));
            $Er->insertIntoDatabase($db);
            header("Location:../Error/ErrorDisplay.php");

            exit();
        }
        /* $maxworkdays = WageWeeks::MaxWorkDays($db, $_GET['StartDate'], $_GET['EndDate']);
          if ($maxworkdays < $WageWeeksObj->getWorkDays()) {
          $s = "WorkDays " . $WageWeeksObj->getWorkDays() . " Cannot be
          greater than Maximum Work Days " . $maxworkdays;
          $Er = new Error();
          $Er->setError($s);
          $Er->setErrorTime(date("Y-m-d"));
          $Er->insertIntoDatabase($db);
          header("Location:../Error/ErrorDisplay.php");

          exit();
          } */
        if (WageWeeks::IsDescrete($db, $_GET['StartDate'], $_GET['EndDate']) == 0) {
            $WageWeeksObj->insertIntoDatabase($db);
        } else {
            $s = "The week is no descrete<br> Already another week in this
                    range from " . $WageWeeksObj->getStartDate() . " to" . $WageWeeksObj->getEndDate();
            $Er = new Error();
            $Er->setError($s);
            $Er->setErrorTime(date("Y-m-d"));
            $Er->insertIntoDatabase($db);
            header("Location:../Error/ErrorDisplay.php");
            exit();
        }
        //      print $EmpTypeObj->getEMpType();
        break;
    case 'MODIFY':
        if ($WageWeeksObj->getEndDate() <= $WageWeeksObj->getStartDate()) {
            $s = "End Date " . $WageWeeksObj->getEndDate() . " Cannot be
                    earlier than StartDate " . $WageWeeksObj->getStartDate();
            $Er = new Error();
            $Er->setError($s);
            $Er->setErrorTime(date("Y-m-d"));
            $Er->insertIntoDatabase($db);
            header("Location:../Error/ErrorDisplay.php");

            exit();
        }
        $maxworkdays = WageWeeks::MaxWorkDays($db, $WageWeeksObj->getStartDate(), $WageWeeksObj->getEndDate());
        if ($maxworkdays < $WageWeeksObj->getWorkDays()) {
            $s = "WorkDays " . $WageWeeksObj->getWorkDays() . " Cannot be
                    greater than Maximum Work Days " . $maxworkdays;
            $Er = new Error();
            $Er->setError($s);
            $Er->setErrorTime(date("Y-m-d"));
            $Er->insertIntoDatabase($db);
            header("Location:../Error/ErrorDisplay.php");

            exit();
        }
        if (WageWeeks::IsDescreteToModify($db, $_GET['StartDate'], $_GET['EndDate'], $WageWeeksObj->getId()) == 0) {
            $WageWeeksObj->updateToDatabase($db);
        } else {
            $s = "The week is no descrete<br> Already another week in this
                    range from " . $WageWeeksObj->getStartDate() . " to" . $WageWeeksObj->getEndDate();
            $Er = new Error();
            $Er->setError($s);
            $Er->setErrorTime(date("Y-m-d"));
            $Er->insertIntoDatabase($db);
            header("Location:../Error/ErrorDisplay.php");
            exit();
        }
        //      print $EmpTypeObj->getEMpType();
        break;
    case 'DELETE':
if(WageWeeks::NoOfEmployeesForWeek($db, $WageWeeksObj->getId())!=0){
    $s = "There are Wages Entry for this week
                    range from " . $WageWeeksObj->getStartDate() . " to" . $WageWeeksObj->getEndDate();
            $Er = new Error();
            $Er->setError($s);
            $Er->setErrorTime(date("Y-m-d"));
            $Er->insertIntoDatabase($db);
            header("Location:../Error/ErrorDisplay.php");
            exit();
}
        $WageWeeksObj->deleteFromDatabase($db);
}
header("Location: index.php");
?>
