        <?php
        // put your code here
        include("../DbConnection/DbConnection.class.php");
        include("../EmpType/EmployeeType.class.php");

        $Con=new DbConnection();
        $db=$Con->Connect();
        $EmpTypeObj=new EmployeeType();

        ?>
        <form  class="AddForm" name="Employee" action="process.php">
            <table cellpadding="10%">
                <tr>
                    <th width="200">

                    </th>
                    <th width="200">

                    </th>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee PF ID</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="PF_ID" value="" size="20" /><br>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee Name</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="Name" value="" size="20" /><br>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee Address</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="Address" value="" size="20" /><br>
                    </td>

                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee Phone</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="Phone" value="" size="20" /><br>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee Type</label>
                    </td>
                    <td>
                        <select  class="textfield" name="EmpType[]" size="1"  >
                            <?php
                            $result=$EmpTypeObj->GetAll($db);
                            foreach($result as $tmp)
                            {
                                print "<option>";
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

