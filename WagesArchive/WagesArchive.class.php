<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WagesArchive
 *
 * @author Vinayak
 */
include("WagesArchiveModel.class.php");

class WagesArchive extends WagesArchiveModel {

    //put your code here
    /*
     * This funtion Addes the Wages from Wages Object to WagesArchive
     * Object. and finally it stores them into the database using
     * PDO $db object
     */
    function SetWages(PDO $db, Wages $wg) {

        $Emp = new Employees();
        $wk = new WageWeeks();
        $Emp->SetById($db, $wg->getEMpId());
        $wk->SetById($db, $wg->getWeekId());
        $this->SetEmployee($Emp);
        $this->setWageWeeks($wk);

        $this->setWagesId($wg->getId());
        $this->setPReDays($wg->getPReDays());
        $this->setNoOfKgWholes($wg->getNoOfKgSWhole());
        $this->setNoOfKgPieces($wg->getNoOfKgSPieces());
        $this->setBasic($wg->getEmpBasic());
        $this->setOtHerded($wg->getOtHerded());
        $this->setPf($wg->getEmpPF());
        $this->setGross($wg->getEmpGross());
        $this->setDescription($wg->getDescription());
    }

    function SetEmployee(Employees $Emp) {
        $this->setEmPiD($Emp->getId());
        $this->setPfId($Emp->getPfId());
        $this->setName($Emp->getName());
        $EmpType = $Emp->EmployeeTypeObj;
        $this->setType($EmpType->getEmpType());
        $this->setDaPErdaY($EmpType->getEmpDA());
        $this->setRatePErdaY($EmpType->getEMpRateDay());
        $this->setRatePerWholes($EmpType->getEMpRateWholes());
        $this->setRatePerPieces($EmpType->getEMpRatePieces());
    }

    function setWageWeeks(WageWeeks $wk) {
        $this->setWeekId($wk->getId());
        $this->setStartDate($wk->getStartDate());
        $this->setEndDate($wk->getEndDate());
        $this->setWorkDays($wk->getWorkDays());
        $this->setNationalHolidays($wk->getNationalHolidays());
    }

    function isExists(PDO $db, $WagesId) {
        $result = WagesArchive::findById($db, $WagesId);
        if (isset($result)) {
            return true;
        } else {
            return false;
        }
    }

    static function getAlltWeeks(PDO $db) {
        $sql = "Select distinct(StartDate),EndDate,WeekID
                 from wagesarchive
                 order by StartDate desc";

        $result = self::findBySql($db, $sql);
        return $result;
    }

    static function getAllMonths(PDO $db) {
        $sql = "Select StartDate,EndDate
            from wagesarchive
            group by  Month(EndDate),year(EndDate)
            order by StartDate desc";
        $result = self::findBySql($db, $sql);
        return $result;
    }

    static function getAllYears(PDO $db) {
        $sql = "Select StartDate,EndDate
            from wagesarchive
            group by  year(StartDate)
            order by StartDate desc";
        $result = self::findBySql($db, $sql);
        return $result;
    }

    static function getWeekTotalRecords(PDO $db, $StartDate) {
        $sql = "SELECT COUNT(1) FROM WAGESARCHIVE WHERE STARTDATE='" . $StartDate . "'";
        $stmt = $db->query($sql);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['COUNT(1)'];
    }

    static function GetRangeForWeek(PDO $db, $StartDate, $start, $end) {
        $sql = "SELECT * FROM WAGESARCHIVE WHERE StartDate='" . $StartDate . "'";
        $sql = $sql . " LIMIT " . $start . " , " . ($end - $start);
        $result = WagesArchiveModel::findBySql($db, $sql);
        return $result;
    }

    function SetByObj(WagesArchiveModel $wmObj) {
        $result = $wmObj->toHash();
        $this->assignByHash($result);
    }

    static function getEmployeesMonthly(PDO $db, $EndDate) {
        $sql = "select wagesarchive.`Name` as Name,
                sum(wagesarchive.`Gross`) as sgr,
                sum(wagesarchive.`Pf`) as spf
               from wagesarchive
               where Month(EndDate)=Month('" . $EndDate . "') and
                Year(EndDate)=Year('" . $EndDate . "')
                group by wagesarchive.`EmpID`
                order by wagesarchive.`EmpID`;";
        $stmt = $db->query($sql);
        $result = array();
        while ($tmp = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = $tmp;
        }
        return $result;
    }
static function getEmployeesSummaryMonthly(PDO $db, $EndDate)
{
    $sql = "select wagesarchive.`Name` as Name,
                sum(wagesarchive.`Gross`) as sgr,
                sum(wagesarchive.`Pf`) as spf
               from wagesarchive
               where Month(EndDate)=Month('" . $EndDate . "') and
                Year(EndDate)=Year('" . $EndDate . "')";
        $stmt = $db->query($sql);
        
        return $result;
}

    static function getEmployeesYearly(PDO $db, $StartDate) {
        $sql = "select wagesarchive.`Name` as Name,
                sum(wagesarchive.`Gross`) as sgr,
                sum(wagesarchive.`Pf`) as spf,
		sum(wagesarchive.`PreDays`) as sprdays
               from wagesarchive
               Where Year(StartDate)=Year('" . $StartDate . "')
                group by wagesarchive.`EmpID`
                order by wagesarchive.`EmpID`;";
        $stmt = $db->query($sql);
        $result = array();
        while ($tmp = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = $tmp;
        }
        return $result;
    }

    static function getEmployeesSummary(PDO $db, $Start, $End) {
        $sql = "select wagesarchive.`Name` as Name,
                sum(wagesarchive.`Gross`) as sgr,
                sum(wagesarchive.`Pf`) as spf
               from wagesarchive
               Where StartDate between '" . $Start . "' and '" . $End . "'
                group by wagesarchive.`EmpID`
                order by wagesarchive.`EmpID`;";
        $stmt = $db->query($sql);
        $result = array();
        while ($tmp = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = $tmp;
        }
        return $result;
    }

    static function getEndDateFor(PDO $db, $StartDate) {
        $sql = "select distinct EndDate
              From WagesArchive
              Where StartDate='" . $StartDate . "'";
        $stmt = $db->query($sql);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['EndDate'];
    }

    static function GetTotalGross(PDO $db, $WeekID) {
        $sql = "SELECT SUM(GROSS) as TGROSS FROM WAGESARCHIVE WHERE WeekID=" . $WeekID;
        $stmt = $db->query($sql);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['TGROSS'];
    }

    static function GetTotalNetPay(PDO $db, $StartDate) {
        
    }

    static function GetTotalPF(PDO $db, $WeekID) {
        $sql = "SELECT SUM(Pf) as TPf FROM WAGESARCHIVE WHERE WeekID=" . $WeekID;
        $stmt = $db->query($sql);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['TPf'];
    }

    static function GetTotalOtherDed(PDO $db, $WeekID) {
        $sql = "SELECT SUM(OtherDed) as TOtherDed FROM WAGESARCHIVE WHERE WeekID=" . $WeekID;
        $stmt = $db->query($sql);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['TOtherDed'];
    }

    static function GetTotalByType(PDO $db, $WeekID) {
        $sql = "select `Type`,
                    count(`Type`) as TotalEmployees,
                    sum(`PreDays`) TotalpresentDays,
                    sum(`NoOfKgWholes`) as TotalKgs,
                    Sum(Gross-(`Pf`+`OtherDed`)) as netpay
                from wagesarchive
                Where `WeekID`=" . $WeekID . "
                group by wagesarchive.`Type`";
        $stmt = $db->query($sql);
        $resultinstances=array();
        while($result = $stmt->fetch(PDO::FETCH_ASSOC))
        {
        $resultinstances[]= $result;
        }
        return $resultinstances;
    }

}
?>
