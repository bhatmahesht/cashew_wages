<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Kaladhar Cashew</title>
    </head>
    <body>
        <?php
        include ("WagesGlobal.php");
        ?>
        <form name="Wage" action="SubmitWage.php">
        <?php
        displayWageEntry($_GET['ID']);
        ?>
        </form>
    </body>
</html>
