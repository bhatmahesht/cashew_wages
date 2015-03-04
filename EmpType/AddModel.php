        <form  class="AddForm" name="EmpType" action="process.php">
            <table cellpadding="10%">
                <tr>
                    <th width="200">

                    </th>
                    <th width="200">

                    </th>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee Type</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="Emp_Type" value="" size="20" /><br>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee DA</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="Emp_DA" value="" size="20" /><br>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee Rate(Wholes)</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="Emp_Rate_Wholes" value="" size="20" /><br>
                    </td>

                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee Rate(Pieces)</label>
                    </td>
                    <td >
                        <input class="textfield" type="text" name="Emp_Rate_Pieces" value="" size="20" /><br>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="labelfield">Employee Rate(Day)</label>
                    </td>
                    <td>
                        <input class="textfield" type="text" name="Emp_Rate_Day" value="" size="20" /><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="labelfield">Wage depends on days only? (not by no of kgs)</label>
                    </td>
                    <td>
                        <input class="textfield" type="checkbox" name="CalbyDays" value="1" size="20" /><br>
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

