<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("EmployeeType.class.php");
include("../DbConnection/DbConnection.class.php");

$Con=new DbConnection();
$db=$Con->Connect();
$EmpTypeObj=new EmployeeType();
$EmpTypeObj->SetId($_GET['ID']);
$EmpTypeObj->setEMpType($_GET['Emp_Type']);
$EmpTypeObj->setEMpDa($_GET['Emp_DA']);
$EmpTypeObj->setEMpRateWholes($_GET['Emp_Rate_Wholes']);
$EmpTypeObj->setEMpRatePieces($_GET['Emp_Rate_Pieces']);
$EmpTypeObj->setEMpRateDay($_GET['Emp_Rate_Day']);
$EmpTypeObj->setMinimumKg($_GET['minimum_kg']);
if ($_GET['CalbyDays']==on) {
    $EmpTypeObj->setCalByDays(1);
}
 else {
    $EmpTypeObj->setCalByDays(0);
}
$EmpTypeObj->setDescription($_GET['Description']);
//print $EmpTypeObj->getEMpType();
//print $EmpTypeObj->getEMpDa();
$a= $_GET['submit'];
//print $_GET['Act'];
//print $_GET['CalByDays'];
//$EmpTypeObj->assignByHash($_GET);
if ($_GET['CalbyDays']==on) {
    $EmpTypeObj->setCalByDays(1);
}
 else {
    $EmpTypeObj->setCalByDays(0);
}
//$a = print "This is action '$a'";
switch($_GET['submit'])
{
    case 'ADD':
        //print $EmpTypeObj->getCalByDays();
        $EmpTypeObj->insertIntoDatabase($db);
        
  //      print $EmpTypeObj->getEMpType();
        break;
    case 'MODIFY':
        $EmpTypeObj->updateToDatabase($db);
        break;
    case 'DELETE':
        $EmpTypeObj->deleteFromDatabase($db);

}
header("Location: index.php");
?>
