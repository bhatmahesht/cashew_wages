<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Error
 *
 * @author Vinayak
 */
include ("ErrorModel.class.php");
class Error extends ErrorModel{
    public static function LastSavedError(PDO $db){
        $sql="SELECT *
FROM ERROR
WHERE ID = (
SELECT MAX( ID )
FROM ERROR ) ";
        $result=self::findBySql($db,$sql);
        return $result;

    }
    //put your code here
}
?>
