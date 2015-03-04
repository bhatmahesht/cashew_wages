<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" id="header">
    <tr>
        <td><img src="../css/logo.png" alt="Kaladhar Cashew" width="203" height="118" /></td>
        <td>
            <h1> Kaladhar Cashew</h1>
        </td>
    </tr>
    <tr align="right">
        <td  colspan="2" align="right" >
            <?php if(isset($_SESSION['user'])) {
                print "logged in as ".$_SESSION['user'];
                $str="../users/logout.php";
            print "<a href=".$str.">  : logout</a>";
            }
            else {

                $str="../users/login.php";
                print "<a href=".$str.">Login</a>";
            }
            
            ?>
        </td>
    </tr>
</table>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" id="nav">
    <tr>
        <td height="19" align="center"><a href="../">Home</a></td>
        <td align="center"><a href="#">About</a></td>

        <td align="center"><a href="#">Contact</a></td>

    </tr>
</table>

