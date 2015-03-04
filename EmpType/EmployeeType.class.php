<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmployeeType
 *
 * @author Vinayak
 */
include("EmployeeTypeModel.class.php");
class EmployeeType extends EmployeeTypeModel {
//put your code here

    function ListTypes(PDO $db) {
        $sql="SELECT EMP_TYPE FROM EMPLOYEE_TYPE";
        $result=$this->findBySql($db, $sql);


        return $result;
        

    }

    function GetAll(PDO $db)
    {
        $sql="SELECT * FROM EMPLOYEE_TYPE";

        $result=$this->findBySql($db, $sql);
        return $result;
    }
    function SetById(PDO $db,$id)
    {
     //   print $TypeID;
        $tmp=new EmployeeTypeModel();
        $tmp=$this->findById($db, $id);
//print $tmp->getEMpType();
        $result=$tmp->toHash();
        $this->assignByHash($result);
       //print  $this->getEMpType();
    }

}
?>
