<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<form name="userlogin" action="process.php" method="POST" enctype="multipart/form-data">

    <table border="0" align="center" cellpadding="20%">
        <thead>
            <tr>
                <th width="200"></th>
                <th width="200"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <label>User Name</label>
                </td>
                <td>
                    <input type="text" name="name" value="" size="20" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Password</label>
                </td>
                <td>
                    <input type="password" name="pwd" value="" size="20" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="reset" value="RESET" name="RESET" />
                </td>
                <td>
                    <input type="submit" value="LOGIN" name="submit" />
                </td>
            </tr>
        </tbody>
    </table>


</form>