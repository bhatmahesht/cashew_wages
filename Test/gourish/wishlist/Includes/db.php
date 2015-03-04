<?php
  class WishDB {
    var $user = "phpuser";        
    var $pass = "!phpuser";
    var $dbName = "wishlist";
    var $dbHost = "localhost";
    var $con;

    function WishDB() {
        $this->con = mysql_connect($this->dbHost, $this->user, $this->pass) 
               or die ("Could not connect to db: " . mysql_error());

        mysql_select_db($this->dbName, $this->con)
               or die ("Could not select db: " . mysql_error());
    }

    function get_wisher_id_by_name ($name) {
        $result = mysql_query("SELECT id FROM wishers WHERE name = '" 
                              . $name . "'");
        if (mysql_num_rows($result) > 0)
           return mysql_result($result, 0);  
        else
           return null;
    }

    function get_wishes_by_wisher_id($id) {
        return mysql_query("SELECT * FROM wishes WHERE wisher_id=" . $id);
    }

    function create_wisher ($name, $password){
       mysql_query("INSERT INTO wishers (name, password) VALUES ('" . $name 
                   . "', '" . $password . "')");
    }                                                                                    
  }
?>