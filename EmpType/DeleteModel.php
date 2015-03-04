        <?php
        // put your code here

        include("EmployeeType.class.php");
        include("../DbConnection/DbConnection.class.php");
        $id=$_GET['ID'];
        $Con=new DbConnection();
        $db=$Con->Connect();
        $EmpTypeObj=new EmployeeType();
        $EmpTypeObj=$EmpTypeObj->findById($db, $id);
        

        ?>
        <form  class="DeleteForm" name="EmpType" action="process.php">
            <table cellpadding="10%">
                <tr>
                    <th width="200">

                    </th>
                    <th width="200">

                    </th>
                </tr>
                <tr>
                     <td >
                        <input class="textfield" type="hidden" name="ID"
                               value= <?php print $EmpTypeObj->getId() ?> size="20"  /><br>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee Type</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="Emp_Type" disabled="disabled"
                               value= <?php print $EmpTypeObj->getEMpType() ?> size="20"  /><br>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee DA</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="Emp_DA" disabled="disabled"
                               value=<?php print $EmpTypeObj->getEMpDa() ?> size="20" /><br>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee Rate(Wholes)</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="Emp_Rate_Wholes" disabled="disabled"
                               value=<?php print $EmpTypeObj->getEMpRateWholes() ?> size="20" /><br>
                    </td>

                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee Rate(Pieces)</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="Emp_Rate_Pieces" disabled="disabled"
                               value=<?php print $EmpTypeObj->getEMpRatePieces() ?> size="20" /><br>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee Rate(Day)</label>
                    </td>
                    <td>
                        <input class="textfield" type="text" name="Emp_Rate_Day" disabled="disabled"
                               value=<?php print $EmpTypeObj->getEMpRateDay() ?> size="20" /><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="labelfield">Wage depends on days only? (not by no of kgs)</label>
                    </td>
                    <td>
                        <input class="textfield" type="checkbox" name="CalbyDays"  disabled="disabled"
                               
                               <?php if ($EmpTypeObj->getCalByDays()==1) {
                                   
                                   print "checked=true";
                               }
                              
                               ?>
                               size="20" /><br>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label class ="labelfield"> Minimum Kgs desired </label>
                    </td>
                    <td>
                        <input class="textfield" type="text" name="minimum_kg" disabled="diabled"
                               value=<?php print $EmpTypeObj->getMinimumKg() ?> size="20" /><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="labelfield">Description</label>
                    </td>
                    <td>
                        <input class="textfield" type="text" name="Description" disabled="disabled"
                               value=<?php print "'".$EmpTypeObj->getDescription()."'" ?> size="20" /><br>
                    </td
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

