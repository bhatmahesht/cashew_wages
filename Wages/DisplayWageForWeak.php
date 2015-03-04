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
$id=$_GET['ID'];
$ref="WageEntryForWeak.php?ID=$id";
		include ("WagesGlobal.php");
		?>
	<a href=<?php print $ref ?> >Enter Wages for This Weak</a><br>
	<?php
		
		WagesDisplayForWeak($id);
        // put your code here
        ?>
    </body>
</html>
