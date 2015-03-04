<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("Employees.class.php");
include("../DbConnection/DbConnection.class.php");

$Con=new DbConnection();
$db=$Con->Connect();
$EmpObj=new Employees();

$EmpObj->setId($_GET['ID']);
$EmpObj->setName($_GET['Name']);
$EmpObj->setAddress($_GET['Address']);
$EmpObj->setPfId($_GET['PF_ID']);
$EmpObj->setPhone($_GET['Phone']);
$type=$_GET['EmpType'];


$EmpObj->setDescription($_GET['Description']);

$a= $_GET['submit'];
if($a!='DELETE'){
$EmpObj->SetTypeByName($db, $type[0]);
}
//$EmpObj->assignByHash($_GET);


//$a = print "This is action '$a'";
switch($_GET['submit']) {
    case 'ADD':
        $type=$_GET['EmpType'];
        //print $_GET['Name'];
        //print $type[0];
        $EmpObj->SetTypeByName($db, $type[0]);
        //print $EmpObj->getTypeID();
        //print $EmpObj->getName();
        //print $EmpObj->getAddress();
        $EmpObj->insertIntoDatabase($db);

        //      print $EmpTypeObj->getEMpType();
        break;
    case 'MODIFY':

        $EmpObj->updateToDatabase($db);
        break;
    case 'DELETE':
        //print $_GET['ID'];
        //print $EmpObj->getId();
if(Employees::isExistsUntransfered($db, $EmpObj->getId())!=0){


    
}
        $EmpObj->deleteFromDatabase($db);

}
header("Location: index.php");
?>
