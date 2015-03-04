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

        include("WagesGlobal.php");
        $id=$_GET['ID'];
        $WeekID=$_GET['WeekID'];
		$NkgW=$_GET['NoOfKgsWhole'];
        $NkgP=$_GET['NoOfKgsPieces'];
        //print "Pieces=$NkgP";
        //print "Wholes=$NkgW";
        //print "WeekID=$WeekID";
        $PreDays=$_GET['PreDays'];
        //print "Present Days=$PreDays";
        $Descr="GOod";
        AddWeekDataToWages($id,$WeekID,$NkgW,$NkgP,$PreDays,$Descr);
		//AddDataToWages($id,$Sdate,$Edate,$Wpr,$Nkg,$AbDays,$Descr);
		$id=$id+1;
        ?>
		<form name="Wage" action="SubmitWageForWeek.php">
        <?php
        displayWageEntryForWeek($id,$WeekID);
        ?>
        </form>
        
    </body>
</html>
