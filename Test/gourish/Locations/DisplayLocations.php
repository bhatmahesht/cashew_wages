<?php
    mysql_connect("localhost", "gourish", "gourish");
    mysql_select_db("gourish");
    $result=mysql_query("SELECT * from Types");
?>
    <table border=1 style=font-size:20;color:RGB(50,200,100);>
    <thead style="font-size:24;color:BLUE">
    <th> ID </th>
    <th>TYPE</th>
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
            $mod_page="<a href=TestPage.php?ID=$a_row[0]> Modify </a>";
            $del_page="<a href=deltypepage.php?ID=$a_row[0]> Delete </a>";
            print "\t<td>$mod_page/$del_page</td>";
        }
        // put your code here
    ?>
    </table>
