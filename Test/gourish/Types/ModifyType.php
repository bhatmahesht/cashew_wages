<script language="javascript">
    function callbyname()
    {
        document.write("It is within the function");
    }
    document.write("Written By Javascript");
           
</script>
<?php
    mysql_connect("localhost","gourish","gourish");
    mysql_select_db("gourish");
    function TypeValue(){
        $Id=$_REQUEST["ID"];
            
        $query="Select TYPE from Types where ID=$Id";
        $result=mysql_query($query);
                        
        while($a_row=mysql_fetch_row($result))
        {
                                /*foreach($a_row as $field)
                                {
                                    print "\t$field";
                                }*/
            $Id=$a_row;
        }
            
        $a=$Id[0];
                        
        return $a;
    }
    function DescrValue()
    {
        $Id=$_REQUEST["ID"];
            
        $query="Select DESCR from Types where ID=$Id";
        $result=mysql_query($query);
                        
        while($a_row=mysql_fetch_row($result))
        {
                                /*foreach($a_row as $field)
                                {
                                    print "\t$field";
                                }*/
            $Id=$a_row;
        }
            
        $a=$Id[0];
                        
        return $a;  
    }
    $a=DescrValue();
    print $a;
?>
<form name="SEARCH" action="DisplayTypes.php">
    Enter the Type here <input type="text" name="Type" size ="40" value=<?php 
    $a=TypeValue();
    print "\"".$a."\"";
?> /> <br>
    Enter the Description here <input type="text" name="Descr" size ="60" value=<?php 
    $b=DescrValue();
    print "\"".$b."\"";
?> /> <br>
    <input type="submit" value="MODIFY" name="MODIFYBUTT" />
    <input type="reset" value="RESET" name="RESETBUTT" />
</form>
<?php 
                
    print DescrValue();
    print TypeValue();
    mysql_close();
?>