        <?php
        include("../DbConnection/DbConnection.class.php");
        include("Wages.class.php");
        $Con=new DbConnection();
        $db=$Con->Connect();

        //$EmpID=$_GET['EmpID'];
        //$WeekID=$_GET['WeekID'];
        $WagesObj=new Wages();
        $WagesObj->setById($db,$_GET['ID']);
        $EmpID=$WagesObj->getEMpId();
        $WeekID=$WagesObj->getWeekId();

        //print "Emp=".$EmpID;
        //print "Week=".$WeekID;
        $EmpObj=new Employees();
        $EmpObj=$WagesObj->EmployeesObj;
        $WageWeeksObj=new WageWeeks();
        $WageWeeksObj=$WagesObj->WageWeeksObj;
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
            <td >
                <input class="textfield" id="WageID "type="hidden" name="ID"
                       value=<?php print $WagesObj->getId() ?> size="20" />

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
                       value=<?php print "".$WageWeeksObj->getNationalHolidays().""?>  ><br>
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
                <input class="textfield" type="text" name="EmpName" disabled="disabled"
                       value=<?php print $EmpObj->getName()?> size="20" /><br>
            </td>
            <td >
                <label class="labelfield">Employee Type</label>
            </td>
            <td >
                <input class="textfield" type="text" name="EmpType" disabled="disabled"
                       value=<?php print $EmpObj->EmployeeTypeObj->getEMpType()?> size="20" /><br>
            </td>
        </tr>
        <tr>
            <td>
                <label class="labelfield">Other Deduction</label>
            </td>
            <td>
                <input class="textfield" type="text" name="OtherDed" size="20"
                       disabled="disabled"
                       value=<?php print $WagesObj->getOtHerded()?>
                       /><br>
            </td>

            <td>
                <label class="labelfield">Description</label>
            </td>
            <td>
                <input class="textfield" type="text" name="Description" size="20"
                       disabled="disabled"
                       value=<?php print $WagesObj->getDescription()?>
                       /><br>
            </td>
        </tr>
        <tr>


            <td >
                <label class="labelfield">Present Days</label>
            </td>
            <td >
                <input class="textfield" type="text" name="PreDays" id="PreDays"
                       onblur="return validatePreDays(this)"
                       size="20"
                       disabled="disabled"
                       value=<?php print $WagesObj->getPReDays()?>
                       /><br>
            </td>
            <td>

            </td>
            <td>
                <input class="textfield" type="hidden" name="Act" value="Add" size="20" /><br>
            </td>
        </tr>
        <tr>
                    <?php
                    if($EmpObj->EmployeeTypeObj->getCalByDays()!=1) {
                        ?>
            <td >
                <label class="labelfield">Wholes Quantity</label>
            </td>
            <td >
                <input class="textfield" type="text" name="NoOfKgsWhole"
                       size="20"
                       disabled="disabled"
                       value=<?php print $WagesObj->getNoOfKgSWhole()?>
                       /><br>
            </td>
                        <?php
                        if($EmpObj->EmployeeTypeObj->getEmpType()=="Peeler") {
                            ?>
            <td >
                <label class="labelfield">Pieces Quantity</label>
            </td>
            <td >
                <input class="textfield" type="text" name="NoOfKgsPieces"
                       size="20"
                       disabled="disabled"
                       value=<?php print $WagesObj->getNoOfKgSPieces()?>
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
                <input class="buttonfield" type="submit" name="submit" value="DELETE" size="20" /><br>
            </td>
        </tr>

    </table>


</form>
<script type="text/javascript" >
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
            if(a>diff)
            {
                alert("Present Days cannot be more than "+diff+" Days");
                Object.focus();
            }
            if(a<0)
            {
                alert("Present Days Cannot be negetive");
                Object.focus();
            }
        }

    }
</script>

