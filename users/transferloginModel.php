<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("../DbConnection/DbConnection.class.php");
include("../Wages/Wages.class.php");

$Con=new DbConnection();
$db=$Con->Connect();

$WagesObj=new Wages();
$WeekID=$_GET['WeekID'];
print "<h3> Once you transfer you cannot edit, It is permanent<h3>";
if($WagesObj->getWeekWageStatus($db, $WeekID)!=1)
        {
           Print "<h2>Warning: For the current week data entry is nof finished</h2><br>";
        }
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
                    <input type="hidden" name="WeekID" size="20"
                           value=<?php print $WeekID ?>  />
               
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
                    <input type="submit" value="TRANSFER" name="submit" />
                </td>
            </tr>
        </tbody>
    </table>


</form>