<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Wages
 *
 * @author Vinayak
 */
include("WagesModel.class.php");
include("../Employees/Employees.class.php");
include("../WageWeeks/WageWeeks.class.php");
class Wages extends WagesModel {
//put your code here
    public $WageWeeksObj;
    public $EmployeesObj;

    function Wages() {
        $this->EmployeesObj=new Employees();
        $this->WageWeeksObj=new WageWeeks();
    }

    function dailyreport() {
        $this->EmployeesObj->EmployeeTypeObj->getID();

    }
    function GetAllforWeek(PDO $db,$WeekID) {
        $sql="SELECT * FROM WAGES WHERE WEEKID=".$WeekID;
        $result=$this->findBySql($db, $sql);

        return $result;
    }
    static function GetAllForWeekOrdered(PDO $db, $WeekID){
        $sql="SELECT * FROM WAGES WHERE WEEKID=".$WeekID." ORDER BY EMP_ID";
        $result=self::findBySql($db, $sql);
        return $result;
    }

    function GetRangeforWeek(PDO $db,$WeekID,$start,$end) {
        $sql="SELECT * FROM WAGES WHERE WEEKID=".$WeekID;
        $sql=$sql." LIMIT ".$start." , ".($end-$start);
        $result=$this->findBySql($db, $sql);
        return $result;
    }
    function GetTotalRecords(PDO $db,$WeekID) {
        $sql="SELECT COUNT(1) FROM WAGES WHERE WEEKID=".$WeekID;
        $stmt=$db->query($sql);
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result['COUNT(1)'];
    }
    function getUnfinished(PDO $db,$WeekID)
    {

    }

    function SetByObj(WagesModel $wmObj) {
        $result=$wmObj->toHash();
        $this->assignByHash($result);


    }
    function SetById(PDO $db,$Id) {
        $tmp=$this->findById($db, $Id);
        $this->SetByObj($tmp);
        $this->EmployeesObj->SetById($db, $this->getEMpId());
        $this->WageWeeksObj->SetById($db, $this->getWeekId());
    }
    function getEmpDAforWeek() {
        $EmpDA=$this->getPReDays()*$this->EmployeesObj->EmployeeTypeObj->getEmpDA();
        
        return $EmpDA;
    }
    function getEmpBasic() {
        $EmpBasic=0;
        $EmpDAforWeek=0;
        $EmpTypeObj=new EmployeeType();
        $EmpTypeObj=$this->EmployeesObj->EmployeeTypeObj;

        if($EmpTypeObj->getCalByDays()==1) {
            $EmpWage=$this->getPReDays()*$EmpTypeObj->getEMpRateDay();
            $EmpBasic=$EmpWage;
        }
        else {
            $EmpWage=$this->getNoOfKgSWhole()*$EmpTypeObj->getEMpRateWholes();
            if($EmpTypeObj->getEMpType()=="Peeler") {
                $EmpWage=$EmpWage+$this->getNoOfKgSPieces()*$EmpTypeObj->getEMpRatePieces();
            }
            $EmpBasic=$EmpWage;
        }
        
        return $EmpBasic;
    }

    function getEmpPF() {
        $EmpGross=$this->getEmpGross();
        $EmpPf=$EmpGross*0.12;
        $EmpPf=round($EmpPf,0);
        return $EmpPf;
    }
    function getEmpGross() {
        $EmpGross=$this->getEmpBasic()+$this->getEmpDAforWeek();
        if($this->WageWeeksObj->getNationalHolidays()!=0) {
            if($this->getPReDays()!=0){

            $dailywage=$EmpGross/($this->getPReDays());
            }
            $EmpGross=$EmpGross+$dailywage*$this->WageWeeksObj->getNationalHolidays();
        }
        $EmpGross=round($EmpGross,0);
        return $EmpGross;
    }
    function getEmpTotalDeduction() {
        $TotalDeduct=$this->getEmpPF()+$this->getOtHerded();
        return $TotalDeduct;
    }
    function getEmpNetPay() {
        $netpay=$this->getEmpGross()-$this->getEmpTotalDeduction();
        $netpay=round($netpay,0);
        return $netpay;
    }
    /*Function getweekwagestatus
     *Find out the total employees..n
     * Find out total records for the week
     * if both are not matching display unfinished
     *
     *
     */

    function getWeekWageStatus(PDO $db,$WeekID) {
        $sql="SELECT COUNT(1) FROM WAGES WHERE WEEKID=".$WeekID;
        $stmt=$db->query($sql);
        $weekfinished=$stmt->fetch(PDO::FETCH_ASSOC);

        $sql="SELECT COUNT(1) FROM EMPLOYEES";
        $stmtemp=$db->query($sql);
        $emptotal=$stmtemp->fetch(PDO::FETCH_ASSOC);

        if($weekfinished['COUNT(1)']<$emptotal['COUNT(1)']) {
            $status=0;
        }
        else {
            $status=1;
        }

        return $status;


    }
    function NextUnfinishedEmployee(PDO $db,$WeekID,$EmpId) {
        $this->EmployeesObj->SetById($db, $EmpID);
        $this->WageWeeksObj->SetById($db, $WeekID);

        $sql="SELECT ID FROM EMPLOYEES";
        $stmt=$db->query($sql);
        $emps=$stmt->fetch(PDO::FETCH_ASSOC);
    }

    function isExists(PDO $db,$EmpID,$WeekID) {

        $sql="SELECT COUNT(1) FROM WAGES WHERE EMP_ID=".$EmpID." AND WEEKID=".$WeekID;
        $stmt=$db->query($sql);
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result['COUNT(1)'];
    }
    static function  isExistsEmployee(PDO $db,$EmpID){
        $sql="SELECT COUNT(EMP_ID) FROM WAGES
                WHERE EMP_ID=".$EmpID;
        $stmt=$db->query($sql);
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result['COUNT(EMP_ID)'];
    }
    
}

?>
