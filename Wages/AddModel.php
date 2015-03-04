        <?php
        include("../DbConnection/DbConnection.class.php");
        include("Wages.class.php");
        $Con=new DbConnection();
        $db=$Con->Connect();
        $EmpID=$_GET['EmpID'];
        $WeekID=$_GET['WeekID'];
        $WagesObj=new Wages();

        //print "Emp=".$EmpID;
        //print "Week=".$WeekID;
        $EmpObj=new Employees();
        $EmpObj->SetById($db,$EmpID);
        $WageWeeksObj=new WageWeeks();
        $WageWeeksObj->SetById($db,$WeekID);
        $EmpTypeID=$EmpObj->getTypeId();
        $dt=new DateTime($WageWeeksObj->getStartDate());
        print "Date=".$dt->format("M d, Y");
        // put your code here
        ?>
<form  class="AddForm" name="Wages" action="process.php" >
    <table cellpadding="10%">
        <tr>
            <th width="200">

            </th>
            <th width="200">

            </th>
            <th width="200">

            </th>
            <th width="200">

            </th>
        </tr>
        <tr>

            <td >
                <input class="textfield" id="EmpID "type="hidden" name="Emp_ID"
                       value=<?php print $EmpID?> size="20" />

            </td>
            <td >
                <input class="textfield" id="WeekID "type="hidden" name="WeekID"
                       value=<?php print $WeekID?> size="20" />

            </td>


        </tr>
        <tr>
            <td >
                <label class="labelfield">Start Date</label>
            </td>
            <td >
                <input class="textfield" type="text" name="StartDate" disabled="disabled"
                       value=<?php
                               $dt=new DateTime($WageWeeksObj->getStartDate());
                               print "'".$dt->format("M d, Y")."'"; ?> size="20" /><br>
            </td>
            <td >
                <label class="labelfield">End Date</label>
            </td>
            <td >
                <input class="textfield" type="text" name="EndDate" disabled="disabled"
                       value=<?php
                               $dt=new DateTime($WageWeeksObj->getEndDate());
                               print "'".$dt->format("M d, Y")."'";
                               ?> size="20" /><br>
            </td>
        </tr>
        <tr>
            <td >
                <label class="labelfield">National Holidays</label>
            </td>
            <td >
                <input class="textfield" type="text" name="NationalHolidays" disabled="disabled" size="20"
                       value=<?php print "'".$WageWeeksObj->getNationalHolidays()."'"?>  ><br>
            </td>
            <td >
                <label class="labelfield">Total Work Days</label>
            </td>
            <td >
                <input class="textfield" type="text" name="WorkDays" disabled="disabled" size="20"
                       value=<?php print "'".$WageWeeksObj->getWorkDays()."'"?>  ><br>
            </td>

        </tr>
        <tr>
            <td >
                <label class="labelfield">Employee Name</label>
            </td>
            <td >
                <input class="textfield" type="text" name="EmpName" 
                       disabled="disabled" size="20"
                       value=<?php print "'".$EmpObj->getName()."'"?>  /><br>
            </td>
            <td >
                <label class="labelfield">Employee Type</label>
            </td>
            <td >
                <input class="textfield" type="text" name="EmpType" 
                       disabled="disabled" size="20"
                       value=<?php print "'".$EmpObj->EmployeeTypeObj->getEMpType()."'"?>  /><br>
            </td>
        </tr>
        <tr>
            <td>
                <label class="labelfield">Other Deduction</label>
            </td>
            <td>
                <input class="textfield" type="text" name="OtherDed" value="0" size="20"
                       onblur="return validateNumber(this)" /><br>
            </td>

            <td>
                <label class="labelfield">Description</label>
            </td>
            <td>
                <input class="textfield" type="text" name="Description" value="" size="20" /><br>
            </td>
        </tr>
        <tr>


            <td >
                <label class="labelfield">Present Days</label>
            </td>
            <td >
                <input class="textfield" type="text" name="PreDays" id="PreDays"
                       onblur="return validatePreDays(this)" onmouseout="return validatePreDays(this)"

                       value="" size="20" /><br>
            </td>
            <td>

            </td>
            <td>
                <input class="textfield" type="hidden" name="Act" value="Add" size="20" /><br>
            </td>
        </tr>
        <tr>
                    <?php
                    if($EmpObj->EmployeeTypeObj->getCalByDays()!=1 || isset_minimum_wages($db, $EmpTypeID)) {
                        ?>
            <td >
                <label class="labelfield">Wholes Quantity</label>
            </td>
            <td >
                <input class="textfield" type="text" name="NoOfKgsWhole"
                       value="" size="20"
                       onblur="return validateWholes(this)" /><br>
            </td>
                        <?php
                        if($EmpObj->EmployeeTypeObj->getEmpType()=="Peeler") {
                            ?>
            <td >
                <label class="labelfield">Pieces Quantity</label>
            </td>
            <td >
                <input class="textfield" type="text" name="NoOfKgsPieces"
                       value="" size="20"
                       onblur="return validatePieces(this)"
                       /><br>
            </td>
                        <?php
                        }
                    }
                    ?>
        </tr>

        <tr>
            <td>
                <label class="labelfield"></label>
            </td>
            <td>
                <input class="buttonfield" type="reset" name="reset" value="RESET" size="20" /><br>
            </td>

            <td>
                <label class="labelfield"></label>
            </td>
            <td>
                <input class="buttonfield" type="submit" name="submit" value="ADD" size="20" /><br>
            </td>
        </tr>

    </table>


</form>
<script type="text/javascript" >
    function validateNumber(Object)
{
    a=Object.value;
    if(isNaN(a)==true)
    {
        alert("Not a number");
        Object.focus();
        return;
        
    }
    else
    {
        if(a<0)
        {
            alert("value Cannot be negetive");
            Object.focus();
            return;
        }
    }
}

function validatePreDays(Object)
{

    a=Object.value;

    var str=new Date(document.Wages.StartDate.value);
    var end=new Date(document.Wages.EndDate.value);

    var oneMinute = 60 * 1000;
    var oneHour = oneMinute * 60;
    var oneDay = oneHour * 24;
    diff=(end-str)/oneDay;
    //alert("difference="+diff);
    if(isNaN(a)==true)
    {
        alert("Not a number");
        Object.focus();
    }
    else
    {
        if(a>(diff+1))
        {
            alert("Present Days cannot be more than "+(diff+1)+" Days");
            Object.focus();
        }
        if(a<0)
        {
            alert("Present Days Cannot be negetive");
            Object.focus();
        }
    }

}

function validateWholes(Object)
{
    validateNumber(Object);
    a=Object.value;
    b=document.Wages.PreDays.value;
    if(b==0 && a!=0)
        {
            Alert("if not present Wholes must be zero too")
            Object.value=0;
            Object.focus();
            return;
        }
    if(b!=0 && a==0)
        {
            Alert("if present Wholes must be greater than zero")
            Object.value=0;
            Object.focus();
            return;
        }
}
function validatePieces(Object)
{
    validateNumber(Object);
    a=Object.value;
    b=document.Wages.PreDays.value;
    if(b==0 && a!=0)
        {
            Alert("if not present Pieces must be zero too")
            Object.value=0;
            Object.focus();
            return;
        }
    if(b!=0 && a==0)
        {
            Alert("if present Pieces must be greater than zero")
            Object.value=0;
            Object.focus();
            return;
        }
}
</script>
<?php

function isset_minimum_wages(PDO $db, $emptypeid){
    $sql = "select minimum_kg from employee_type where ID=$emptypeid";
    $result = $db->query($sql)->fetch();
    $minimum_kg = $result['minimum_kg'];
    if($minimum_kg > 0){
        return TRUE;
    }else{
        return FALSE;
    }
}
?>
