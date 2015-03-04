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
        include("../DbConnection/DbConnection.class.php");
        include("WageWeeks.class.php");

        $Con=new DbConnection();
        $db=$Con->Connect();
//print $_GET['ID'];
$WageWeeksObj=new WageWeeks();
        $WageWeeksObj=WageWeeks::findById($db, $_GET['ID']);

        ?>
        <form  class="Delete" name="WageWeeks" action="process.php">
            <table cellpadding="10%">
                <tr>
                    <th width="200">

                    </th>
                    <th width="200">

                    </th>
                </tr>
                <tr>
                     <td >
                        <input class="textfield" type="hidden" name="ID" size="20"
                               value=<?php print $WageWeeksObj->getId()?>  /><br>
                    </td>

                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Start Date</label>
                    </td>
                    <td >
                        <input class="textfield" id="DPC_Date1 "type="text" name="StartDate" disabled="disabled"
                            size="20"   value=<?php print $WageWeeksObj->getStartDate()?>  />
                        
                        <br>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">End Date</label>
                    </td>
                    <td >
                        <input class="textfield" id="DPC_Date2" type="text" name="EndDate" disabled="disabled" size="20"
                               value=<?php print $WageWeeksObj->getEndDate()?>  /><br>
                    </td>
                </tr>
                <tr>
            <td >
                <label class="labelfield">Total Working days in Week(Including National Holidays)</label>
            </td>
            <td >
                <input class="textfield" type="text" name="WorkDays" size="20" disabled="disabled"
                       value=<?php print "'".$WageWeeksObj->getWorkDays()."'" ?> /><br>
            </td>

        </tr>
                <tr>
                    <td >
                        <label class="labelfield">National Holidays</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="NationalHolidays" disabled="disabled" size="20"
                               value=<?php print $WageWeeksObj->getNationalHolidays()?>  /><br>
                    </td>

                </tr>
                <tr>
                    <td>
                        <label class="labelfield">Description</label>
                    </td>
                    <td>
                        <input class="textfield" type="text" name="Description" size="20" disabled="disabled"
                               value=<?php print $WageWeeksObj->getDescription() ?>  /><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="textfield" type="hidden" name="Act" value="Delete" size="20" /><br>
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
                        <input class="buttonfield" type="submit" name="submit" value="DELETE" size="20" /><br>
                    </td>
                </tr>

            </table>


        </form>
