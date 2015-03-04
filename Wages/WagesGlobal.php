<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function displayWageEntry($ID)
{
	$id=$ID;
	$con=mysql_connect("localhost","root");
	$db=mysql_select_db("Kaladhara");
	$query="Select * from Employees where ID=$id";
	$result=mysql_query($query);
	$n=mysql_num_rows($result);
	$a_row=Null;
	if($n==0)
	{
		print "All are finished";
	}
	else
	{
		$a_row=mysql_fetch_row($result);

		// put your code here
		?>
ID <input type="text" name="ID" value=<?php print $a_row[0] ?> /><br>
Name <input type="text" name="name" value= <?php print $a_row[1] ?>  size="20" readonly="readonly" /><br>
Start date <input type="text" name="StartDate" value="" /><br>
End Date <input type="text" name="EndDate" value="" /><br>
Wages Per day <input type="text" name="PDay" value="" /><br>
No Of Kgs <input type="text" name="NoOfKgs" value="" /><br>
Abscent Days <input type="text" name="AbDays" value="" /><br>
<input type="reset" value="reset" /><br>
<input type="submit" value="Submit" />

		<?php
		mysql_close($con);
	}

}
function displayWageEntryForWeek($ID,$weekID)
{
	$id=$ID;
	$con=mysql_connect("localhost","root");
	$db=mysql_select_db("Kaladhara");
	$query="Select * from Employees where ID=$id";
	$result=mysql_query($query);
	$n=mysql_num_rows($result);
	$a_row=Null;


	if($n==0)
	{
		print "All are finished";
	}
	else
	{
		$a_row=mysql_fetch_row($result);

		$query="Select * from wageweeks where ID=$weekID";
		$result=mysql_query($query);
		$b_row=mysql_fetch_row($result);

		$query="Select * from Employee_Type where ID=$a_row[5]";
		$result=mysql_query($query);
		$c_row=mysql_fetch_row($result);
		// put your code here
		?>
ID <input type="text" name="ID" value=<?php print $a_row[0] ?> /><br>
Name <input type="text" name="name" value= <?php print $a_row[2] ?>  size="20" readonly="readonly" /><br>
Week ID	<input type="text" name="WeekID" value=<?php print $b_row[0] ?> size="20" readonly="readonly" /><br>
Start date <input type="text" name="StartDate" value= <?php print $b_row[1] ?>  size="20" readonly="readonly" /><br>
End Date <input type="text" name="EndDate" value= <?php print $b_row[2] ?>  size="20" readonly="readonly"/><br>
National Holidays <input type="text" name="NatHol" value=<?php print $b_row[3] ?>  size="20" readonly="readonly" /><br>
Employee Type <input type="text" name="EmpType" value=<?php print $c_row[1] ?> size="20" readonly="readonly" /><br>
Employee DA <input type="text" name="EmpDA" value=<?php print $c_row[2] ?> size="20" readonly="readonly" /><br>
Wages Per day <input type="text" name="PDay" value=<?php print $c_row[3] ?> size="20" readonly="readonly"  /><br>
No Of Kgs Wholes<input type="text" name="NoOfKgsWhole" value="" /><br>
No Of Kgs Pieces<input type="text" name="NoOfKgsPieces" value="" /><br>
Present Days <input type="text" name="PreDays" value="" /><br>
<input type="reset" value="reset" /><br>
<input type="submit" value="Submit" />

		<?php
		mysql_close($con);
	}
}
?>
<?php

function AddDataToWages($id,$Sdate,$Edate,$Wpr,$Nkg,$AbDays,$Descr)
{
	$query="Insert into Wages (Emp_ID,StartDate,EndDate,WagePerDay,NoOfKgs,AbsDays,Description)
values ($id,'$Sdate','$Edate',$Wpr,$Nkg,$AbDays,'$Descr')";
	$con=mysql_connect("localhost","root");
	$db=mysql_select_db("Kaladhara");
	mysql_query($query);
	mysql_close($con);
}
function AddWeekDataToWages($id,$WeekID,$NkgW,$NkgP,$PreDays,$Descr)
{
	if($NkgP==Null)
        $NkgP=0;
    if ($NkgW==Null)
        $NkgW=0;
    if ($PreDays==Null)
        $PreDays=0;
    $query="Insert into Wages (Emp_ID,WeekID,NoOfKgsWhole,NoOfKgsPieces,PreDays,Description)
values ($id,$WeekID,$NkgW,$NkgP,$PreDays,'$Descr')";
	//print $query;
    //print $NkgP;
    $con=mysql_connect("localhost","root");
	$db=mysql_select_db("Kaladhara");
	mysql_query($query);
    //die (mysql_error());
	mysql_close($con);
}

function DisplayName($id)
{
	$con=mysql_connect("localhost","root");
	mysql_select_db("Kaladhara");
	$query="Select Name from Employees where ID=$id";
	$result=mysql_query($query);
	$a_row=mysql_fetch_row($result);
	return $a_row[0];
	mysql_close($con);
}
function WagesDisplay()
{
	$con=mysql_connect("localhost","root");
	$db=mysql_selectdb("Kaladhara");
	$query="Select * from Wages";
	$result=mysql_query($query);
	$num_rows=mysql_num_rows($result);

	print "There are currently $num_rows Wages Entered <P>";
	print "<table border=1>\n";?>
<thead style="font-size:24; color:BLUE">
	<th> ID </th>
	<th>Employee ID</th>
	<th>StartDate</th>
	<th>EndDate</th>
	<th>Wage Per Day</th>
	<th>Number of Kgs</th>
	<th>Abscent Days</th>
	<th>Description</th>
</thead>
<?php
while($a_row=mysql_fetch_row($result))
{
	print "<tr>\n";
	$changeq="wageentry.php?ID=$a_row[0]";
	foreach ($a_row as $field)
	{

		print "\t<td>$field</td>\n";
	}
	print "\t<td><A href=$changeq target=_blank>Change</A></td>\n";
	print"</tr>\n";

}
print "</table>";



// put your code here

}
function WagesDisplayForWeak($WeekID)
{
$con=mysql_connect("localhost","root");
$db=mysql_selectdb("Kaladhara");
$query="Select * from wages where WeekID=$WeekID";
$result=mysql_query($query);
$num_rows=mysql_num_rows($result);

print "There are currently $num_rows Wages Entered <P>";
print "<table border=1>\n";?>
<thead style="font-size:24; color:BLUE">
	<th> ID </th>
	<th>Employee ID</th>
	<th>WeekID</th>
	<th>Number of Kgs</th>
	<th>Abscent Days</th>
	<th>Description</th>
</thead>
<?php
while($a_row=mysql_fetch_row($result))
{
	print "<tr>\n";
	$changeq="wageentry.php?ID=$a_row[0]";
	foreach ($a_row as $field)
	{

		print "\t<td>$field</td>\n";
	}
	print "\t<td><A href=$changeq target=_blank>Change</A></td>\n";
	print"</tr>\n";

}
print "</table>";
}
function GetEmpName($EmpID)
{
$con=mysql_connect("localhost","root");
mysql_select_db("Kaladhara");
$query="SELECT Name from Employees where ID=$EmpID";
$result=mysql_query($query);
$a_row=mysql_fetch_row($result);
return $a_row[0];

}

function GetEmpType($EmpID)
{
mysql_select_db("Kaladhara");
$query="SELECT Emp_Type"
. " FROM Employee_Type"
. " WHERE ID = ( "
. " SELECT TypeID"
. " FROM Employees"
. " WHERE Employees.ID =$EmpID ) ";
$result=mysql_query($query);
$a_row=mysql_fetch_row($result);
return $a_row[0];
}
function GetEmpDAforWeek($EmpID,$weekID)
{
$eda=GetEmpDA($EmpID);
//print "Eda=$eda";
$nhl=GetNatHolForWeek($weekID);
//print "nhl=$nhl";
$pbd=GetPresentDaysForWeek($EmpID,$weekID);
$tda=0;
$tda=$pbd*$eda;
return $tda;
}
function GetEmpDA($EmpID)
{
mysql_connect("localhost","root");
mysql_select_db("Kaladhara");
$query="SELECT Emp_DA"
. " FROM Employee_Type"
. " WHERE ID = ( "
. " SELECT TypeID"
. " FROM Employees"
. " WHERE Employees.ID =$EmpID ) ";
$result=mysql_query($query);
$a_row=mysql_fetch_row($result);
return $a_row[0];
}
function GetNatHolForWeek($weekID)
{
mysql_connect("localhost","root");
mysql_select_db("Kaladhara");
$query="SELECT NationalHolidays from wageweeks where ID=$weekID";
$result=mysql_query($query);
$a_row=mysql_fetch_row($result);
return $a_row[0];
}
function GetPresentDaysForWeek($EmpID,$weekID)
{
mysql_connect("localhost","root");
mysql_select_db("Kaladhara");
$query="SELECT PreDays from wages where weekID=$weekID and Emp_ID=$EmpID";
$result=mysql_query($query);
$a_row=mysql_fetch_row($result);
return $a_row[0];

}

function GetEmpEarningPerWeek($EmpID,$weekID)
{

$etda=GetEmpDAforWeek($EmpID, $weekID);
$eTotalEarn=$etda;
if(IsEmpCalByDays($EmpID)==1)
{
	$empRate=GetEmpRatePerDay($EmpID);

	$eTotalEarn=$eTotalEarn+(6-GetAbscentDaysForWeek($EmpID, $weekID))*$empRate;
}
else
{
	$empRate=GetEmpRatePerKg($EmpID);
	$eTotalEarn=$eTotalEarn+GetEmpRatePerKg($EmpID)*GetNoOfKgsPerWeek($EmpID, $weekID);
}
return $eTotalEarn;
}
function IsEmpCalByDays($EmpID)
{
mysql_select_db("Kaladhara");
$query="SELECT CalByDays"
. " FROM Employee_Type"
. " WHERE ID = ( "
. " SELECT TypeID"
. " FROM Employees"
. " WHERE Employees.ID =$EmpID ) ";
$result=mysql_query($query);
$a_row=mysql_fetch_row($result);
return $a_row[0];
}

function GetEmpRatePerDay($EmpID)
{
mysql_select_db("Kaladhara");
$query="SELECT Emp_Rate_Days"
. " FROM Employee_Type"
. " WHERE ID = ( "
. " SELECT TypeID"
. " FROM Employees"
. " WHERE Employees.ID =$EmpID ) ";
$result=mysql_query($query);
$a_row=mysql_fetch_row($result);
return $a_row[0];
}
function GetEmpRatePerKg($EmpID)
{
mysql_select_db("Kaladhara");
$query="SELECT Emp_Rate_Kg"
. " FROM Employee_Type"
. " WHERE ID = ( "
. " SELECT TypeID"
. " FROM Employees"
. " WHERE Employees.ID =$EmpID ) ";
$result=mysql_query($query);
$a_row=mysql_fetch_row($result);
return $a_row[0];
}

function GetNoOfKgsPerWeek($EmpID,$weekID)
{
$con=mysql_connect("localhost","root");
mysql_select_db("Kaladhara");
$query="SELECT NoOfKgs from wages where weekID=$weekID and Emp_ID=$EmpID";
$result=mysql_query($query);
$a_row=mysql_fetch_row($result);
return $a_row[0];
}
function GetEmpPfDedutionWeek($EmpID,$weekID)
{
$PfDed=GetEmpEarningPerWeek($EmpID, $weekID)*0.12;
return $PfDed;
}
function GetEmpBasicForWeek($EmpID,$weekID)
{

$eTotalEarn=0;
if(IsEmpCalByDays($EmpID)==1)
{
	$empRate=GetEmpRatePerDay($EmpID);

	$eTotalEarn=$eTotalEarn+GetPresentDaysForWeek($EmpID, $weekID)*$empRate;
}
else
{
	$empRate=GetEmpRatePerKg($EmpID);
	$eTotalEarn=$eTotalEarn+GetEmpRatePerKg($EmpID)*GetNoOfKgsPerWeek($EmpID, $weekID);
}
return $eTotalEarn;
}
function SetDefaultWeak($WeekID)
{




}

?>

