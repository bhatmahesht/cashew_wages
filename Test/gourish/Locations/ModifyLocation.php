
<?php
    function TypeValue(){
        $Id=$_REQUEST["id"];
        mysql_connect("localhost","gourish","gourish");
        mysql_select_db("gourish");
        $result=mysql_query("Select * from Types where ID='$Id'");
        $a_row=$Id;
        while($a_row=mysql_fetch_row($result))
        {

        }
        mysql_close();
        return $a_row[1];
    }
    $a=TypeValue();
    echo "$a";
?>


<form name="SEARCH" action="DisplayTypes.php">
    Enter the Type here <input type="text" name="ID" value=<?php TypeValue()?>" size="40" /> <br>
    <input type="submit" value="MODIFY" name="MODIFYBUTT" />
    <input type="reset" value="RESET" name="RESETBUTT" />
</form>

