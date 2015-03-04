<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employeesclass
 *
 * @author Vinayak
 */
include ("EmployeesModel.class.php");
include ("../EmpType/EmployeeType.class.php");
class Employees extends EmployeesModel {
//put your code here
    public $EmployeeTypeObj;

    function Employees() {
        
        $this->EmployeeTypeObj=new EmployeeType();
        
    
    }
    function GetAll(PDO $db)
    {
        $sql="SELECT * FROM EMPLOYEES";

        $result=$this->findBySql($db, $sql);
        return $result;
    }
    function SetTypeValues(PDO $db)
    {
        $tmp=$this->EmployeeTypeObj->findById($db, $this->getTypeId());

        print $tmp->getEMpType();
        $this->EmployeeTypeObj=$tmp;

    }
    function SetTypeByName(PDO $db,$type)
    {
        $sql="SELECT * FROM EMPLOYEE_TYPE WHERE EMP_TYPE='".$type."'";
        $tp=new EmployeeTypeModel();
        $tmp=$tp->findBySql($db,$sql);

        $this->SetTypeID($tmp[0]->getId());
    }

    function SetById(PDO $db,$EmpID)
    {
        $tmp=new EmployeeTypeModel();
        $tmp=$this->findById($db, $EmpID);
        $result=$tmp->toHash();
        $this->assignByHash($result);
        //print $this->getTypeId();
        $this->EmployeeTypeObj->SetById($db,$this->getTypeId());
    }
    function isExists(PDO $db,$EmpID)
    {
        $result=$this->findById($db, $EmpID);
        if(is_null($result))
        {
            return 0;
        }
        else
        {
            return 1;
        }

    }
    function MaxID(PDO $db)
    {
        $sql="SELECT MAX(ID) FROM EMPLOYEES";
        $stmt=$db->query($sql);
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        $max=$result['MAX(ID)'];
        return $max;
    }
    static function isExistsUntransfered(PDO $db,$EmpID){
        $sql = "SELECT count(ID) as cnt FROM WAGEWEEKS WHERE ISTRANSFERED=0";
        $stmt = $db->query($sql);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        //$weekid = $result1;
        return $result->cnt;
        
//        $sql="SELECT COUNT(1) FROM WAGES
//            WHERE EMP_ID=".$EmpID." AND
//                WAEEKID= ".$weekid."";
//        $stmt=$db->query($sql);
//        $result=$stmt->fetch(PDO::FETCH_ASSOC);
//        return $result['COUNT(1)'];
    }
}
?>
