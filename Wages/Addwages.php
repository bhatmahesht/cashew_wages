<?php
include("../DbConnection/DbConnection.class.php");
include("Wages.class.php");
$Con=new DbConnection();
$db=$Con->Connect();
$EmpID=$_GET['EmpID'];
$WeekID=$_GET['WeekID'];
$WagesObj=new Wages();
$EmpObj=new Employees();
if($EmpID>$EmpObj->MaxID($db)) {
    header("Location: index.php");
    exit();
}
if($EmpObj->isExists($db, $EmpID)) {


    if($WagesObj->isExists($db,$EmpID,$WeekID)!=1) {
        $str="Add.php?EmpID=".$EmpID."&WeekID=".$WeekID;
        header("Location:".$str);
        exit();
    }
    else {
        $str="Addwages.php?EmpID=".($EmpID+1)."&WeekID=".$WeekID;
        header("Location:".$str);
    }
}
else {
    $str="Addwages.php?EmpID=".($EmpID+1)."&WeekID=".$WeekID;
    header("Location:".$str);
}


?>
