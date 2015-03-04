<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Kaladhar Cashew</title>
        <link rel="printer.css" rel="stylesheet" type="text/css" >
    </head>
    <body>
          <?php
include("WeeklyReport.class.php");
include("../DbConnection/DbConnection.class.php");

$Con=new DbConnection();
$db=$Con->Connect();

        $StartDate=$_GET['StartDate'];
        $WeeklyReportObj=new WeeklyReport();
        $WeeklyReportObj->ShowWagesTransReport($db,$StartDate);
        
        ?>

    </body>
</html>
