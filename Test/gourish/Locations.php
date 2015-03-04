<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title>Kaladhar Cashew</title>
</head>
<body>

    <form name="SEARCH" action="DisplayLocations.php" >
        Enter the Location here <input type="text" name="ID" value="" size="40" /> <br>
        <input type="submit" value="SEARCH" name="SEARCHBUTT" />
        <input type="reset" value="RESET" name="RESETBUTT" />
    </form>

<?php
    mysql_connect("localhost", "gourish", "gourish");
    mysql_select_db("gourish");
    $result=mysql_query("SELECT * from Location");
?>
    <table border=1 style=font-size:20;color:RGB(50,200,100);>
    <thead style="font-size:24;color:BLUE">
    <th> ID </th>
    <th>LOCATION</th>
    <th>DESCRIPTION</th>
    <th>ACTION</th>
    </thead>
    <?php
        while($a_row=mysql_fetch_row($result))
        {
            print "<tr>\n";
            foreach($a_row as $field)
            {
                print "\t<td>$field</td>";
            }
            $mod_page="<a href=moditypepage.php?ID=$a_row[0]> Modify </a>";
            $del_page="<a href=deltypepage.php?ID=$a_row[0]> Delete </a>";
            print "\t<td>$mod_page/$del_page</td>";
        }
        // put your code here
    ?>
    </table>

</body>
</html>
