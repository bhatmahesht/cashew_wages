        <?php
        // put your code here
        include("../DbConnection/DbConnection.class.php");
        include("Employees.class.php");
        $Con=new DbConnection();
        $db=$Con->Connect();
        $EmpTypeObj=new EmployeeType();
        $EmpObj=new Employees();
        $EmpObj=$EmpObj->findById($db, $_GET['ID']);

        ?>
        <form  class="DeleteForm" name="Employee"  action="process.php">
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
                               value="<?php print $EmpObj->getId() ?>"  /><br>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee PF ID</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="PF_ID" disabled="disabled" size="20"
                               value="<?php print $EmpObj->getPfId() ?>"  /><br>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee Name</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="Name" disabled="disabled" size="20"
                               value="<?php print $EmpObj->getName()?>"  /><br>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee Address</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="Address" disabled="disabled" size="20"
                               value="<?php print $EmpObj->getAddress()?>"  /><br>
                    </td>

                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee Phone</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="Phone" disabled="disabled" size="20"
                               value="<?php print $EmpObj->getPhone()?>"  /><br>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee Type</label>
                    </td>
                    <td>
                        <select  class="textfield" name="EmpType[]" size="1" disabled="disabled" >
                            
                            <?php

                            $result=$EmpTypeObj->GetAll($db);
                            foreach($result as $tmp)
                            {
                                if($EmpObj->getTypeId()==$tmp->getId())
                                {
                                    print "<option selected=true>";
                                }
                                else
                                {
                                    print "<option>";
                                }
                                print $tmp->getEMpType();
                                print "</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label class="labelfield">Description</label>
                    </td>
                    <td>
                        <input class="textfield" type="text" name="Description" disabled="disabled" size="20"
                               value="<?php print $EmpObj->getDescription()?>"  /><br>
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

