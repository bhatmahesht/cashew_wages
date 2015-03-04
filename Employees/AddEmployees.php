<?php
$name=$_GET['name'];
$PFID=$_GET['PFID'];
$address=$_GET['address'];
$phone=$_GET['phone'];
$type=$_GET['type'];
$desc=$_GET['descr'];

include "../globals.php";
//$con=mysql_connect("localhost","root","");
//$db=mysql_select_db("Kaladhara",$con);
openDatabase();
$query="insert into Employees (PF_ID,name, address, phone, typeID,Description)
        values ('$PFID','$name','$address','$phone',2,'$desc');";
mysql_query($query) or
die("couldant add".mysql_error());
// put your code here
//mysql_close($con);
/*include "Employee.php";
$Emp=new Employee();
$Emp->PF_ID=$_GET['PFID'];
$Emp->Name=$_GET['Name'];
$Emp->Address=$_GET['Address'];
$Emp->Phone=$_GET['Phone'];
$Emp->Type=$_GET['type'];
$Emp->Description=$_GET['descr'];

$Emp->AddNewEmployee();*/

header("Location: index.php");

?>
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
    </body>
</html>
