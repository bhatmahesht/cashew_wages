<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function OpenDatabase()
{
	mysql_connect("localhost","root");
	mysql_select_db("Kaladhara");
}
?>
