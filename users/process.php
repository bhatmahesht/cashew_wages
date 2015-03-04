<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("../DbConnection/DbConnection.class.php");
//Print "To be processed soon";

switch($_POST['submit']) {

    case 'LOGIN':
        session_start();
        if($_POST['name']!='kaladhar2'){
            header("Location:login.php");
            exit();
        }
        if($_POST['pwd']=='password') {
            if(!isset($_SESSION['user'])) {
                $_SESSION['user']=$_POST['name'];

            }
            header("Location: ../index.php");
        }
        else {
            header("Location: login.php");
            exit();
        }
        break;
    case 'TRANSFER':
        if($_POST['pwd']!='transfer') {
            header("Location: transferlogin.php?WeekID=".$_POST['WeekID']);
            exit();
        }

        include("../wages/wages.class.php");
        include("../WagesArchive/WagesArchive.class.php");
        $Con=new DbConnection();
        $db=$Con->Connect();
        $WagesObj=new Wages();


        $WageObjs=$WagesObj->GetAllforWeek($db, $_POST['WeekID']);
        foreach($WageObjs as $tmp) {
            $WagesObj->SetByObj($tmp);
            $WagesObj->EmployeesObj=new Employees();
            $WagesObj->EmployeesObj->SetById($db, $WagesObj->getEMpId());
            $WagesObj->WageWeeksObj=new WageWeeks();
            $WagesObj->WageWeeksObj->SetById($db, $WagesObj->getWeekId());
            $WageArchiveObj=new WagesArchive();
            $WageArchiveObj->SetWages($db, $WagesObj);
            if($WageArchiveObj->isExists($db, $WagesObj->getId())) {
                $WageArchiveObj->updateToDatabase($db);
            }
            else {
                $WageArchiveObj->insertIntoDatabase($db);
            }


        }

        $WagesObj->WageWeeksObj->SetIsTransfered(true);
        $WagesObj->WageWeeksObj->updateToDatabase($db);
        header("location: ../Wages/index.php");

}
?>
