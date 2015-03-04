<script type="text/javascript" src="../datepickercontrol/datepickercontrol.js"></script>

<script language="JavaScript">
    if (navigator.platform.toString().toLowerCase().indexOf("linux") != -1){
        document.write('<link type="text/css" rel="stylesheet" href="datepickercontrol_lnx.css">');
    }
    else{
        document.write('<link type="text/css" rel="stylesheet" href="datepickercontrol.css">');
    }
</script>
<?php
// put your code here
include("WageWeeks.class.php");
include("../DbConnection/DbConnection.class.php");

$Con = new DbConnection();
$db = $Con->Connect();

$maxdate = WageWeeks::getMaxDate($db);
?>
<input type="hidden" id="DPC_TODAY_TEXT" value="today">
<input type="hidden" id="DPC_BUTTON_TITLE" value="Open calendar...">
<input type="hidden" id="DPC_MONTH_NAMES" value="['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']">
<input type="hidden" id="DPC_DAY_NAMES" value="['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']">

<form  class="AddForm" name="WageWeeks" action="process.php">
    <table cellpadding="10%">
        <tr>
            <th width="200">

            </th>
            <th width="200">

            </th>
        </tr>
        <tr>

            <td >
                <label class="labelfield">Start Date</label>
            </td>
            <td >
                <input class="textfield" type="text" name="StartDate" value="" size="20"
                       onblur="" /><br>
                YYYY-MM-DD format only

            </td>
        </tr>
        <tr>
            <td >
                <label class="labelfield">End Date</label>
            </td>
            <td >
                <input class="textfield" type="text" name="EndDate" value="" size="20"
                       onblur="" /><br>
                YYYY-MM-DD format only
            </td>
        </tr>
        <tr>
            <td >
                <label class="labelfield">Total Working days in Week(Including National Holidays)</label>
            </td>
            <td >
                <input class="textfield" type="text" name="WorkDays" value="" size="20" /><br>
            </td>

        </tr>
        <tr>
            <td >
                <label class="labelfield">National Holidays</label>
            </td>
            <td >
                <input class="textfield" type="text" name="NationalHolidays" value="" size="20" /><br>
            </td>

        </tr>
        <tr>
            <td>
                <label class="labelfield">Description</label>
            </td>
            <td>
                <input class="textfield" type="text" name="Description" value="" size="20" /><br>
            </td>
        </tr>
        <tr>
            <td>
                <input class="textfield" type="hidden" name="Act" value="Add" size="20" /><br>
            </td>
        </tr>
        <tr>
            <td>
                <label class="labelfield"></label>
            </td>
            <td>
                <input class="buttonfield" type="reset" name="reset" value="RESET" size="20" /><br>
            </td>
        </tr>
        <tr>
            <td>
                <label class="labelfield"></label>
            </td>
            <td>
                <input class="buttonfield" type="submit" name="submit" value="ADD" size="20" /><br>
            </td>
        </tr>

    </table>


</form>

