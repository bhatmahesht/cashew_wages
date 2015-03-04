<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DbConnection
 *
 * @author Vinayak
 */
class DbConnection {
    //put your code here

    private $host;
    private $dbname;
    private $username;
    private $password;

    private $CompName;
    private $CompAddress;


    function DbConnection(){

        $CompName="Kaladhar Cashew";
        $CompAddress="Kelaginooru";
        $this->host="localhost";
        $this->dbname="Kaladhar2";
        $this->username="root";
        $this->password="";
    }
    function Connect()
    {
        $connect="mysql: host=".$this->host.";";
        $connect=$connect." dbname=".$this->dbname.";";

        $db=new PDO($connect,$this->username,$this->password);
        return $db;
    }
    function getCompName()
    {
        return $this->CompName;
    }
    function getCompAddress(){
        return $this->CompAddress;
    }
}
?>
