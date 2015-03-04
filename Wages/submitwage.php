<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    
    <body>
        <?php
        include("WagesGlobal.php");
        $id=$_GET['ID'];
        $Sdate=$_GET['StartDate'];
        $Edate=$_GET['EndDate'];
        $Wpr=$_GET['PDay'];
        $Nkg=$_GET['NoOfKgs'];
        $AbDays=$_GET['AbDays'];
        $Descr="GOod";
        AddDataToWages($id,$Sdate,$Edate,$Wpr,$Nkg,$AbDays,$Descr);
		$id=$id+1;
        ?>
		<form name="Wage" action="SubmitWage.php">
        <?php
        displayWageEntry($id);
        ?>
        </form>
		       
		<A href="WageEntry.php?" <?php print "ID" ?> > <?php print DisplayName($id) ?> </A>
    </body>
</html>
