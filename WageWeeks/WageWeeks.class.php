<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WageWeeks
 *
 * @author Vinayak
 */
 include("WageWeeksModel.class.php");
class WageWeeks extends WageWeeksModel{
    //put your code here

    static function getAll(PDO $db)
    {
        $sql="select wageweeks.*
                from wageweeks
                where `IsTransfered`=false";
        $result=WageWeeksModel::findBySql($db, $sql);
        return $result;
    }



    function SetById(PDO $db,$Id)
    {
        //$tmp=new WageWeeksModel();
        $tmp=$this->findById($db, $Id);
        //print $tmp->getStartDate();
        //print $tmp->getId();
        $result=$tmp->toHash();
        $this->assignByHash($result);
        //print $this->getStartDate();
    }
    static function getMaxDate(PDO $db)
    {
        $sql="SELECT MAX(EndDate) from WAGEWEEKS";
        $stmt=$db->query($sql);
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result['MAX(EndDate)'];
    }
    static function getUnfinished($db)
    {
        $sql="Select * From WAGEWEEKS WHERE isTransfered=0";
        $result=WageWeeksModel::findBySql($db, $sql);
        return $result;
    }
    static function IsDescrete(PDO $db, $StartDate,$EndDate)
    {
        $sql="select count(1) as cnt from wageweeks
        where ('".$StartDate."' between wageweeks.`StartDate` and Wageweeks.`EndDate`)
       or ('".$EndDate."' between wageweeks.`StartDate` and wageweeks.`EndDate`)";
        $stmt=$db->query($sql);
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result['cnt'];
    }
    static function IsValidWorkDays(PDO $db,$StartDate,$EndDate,$WorkDays){
        $sql="SELECT ".$EndDate."-".$StartDate."FROM DUAL";
        $stmt=$db->query($sql);
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        if($Workdays>($result+1)){
            return FALSE;
        }
        else
            return TRUE;
    }
    static function MaxWorkDays(PDO $db,$StartDate,$EndDate){
        $sql="SELECT DATEDIFF('".$EndDate."','".$StartDate."') as MaxWorkDays FROM DUAL";
        $stmt=$db->query($sql);
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result['MaxWorkDays']+1;
    }
    static function IsDescreteToModify(PDO $db, $StartDate,$EndDate,$ID)
    {
        $sql="select count(1) as cnt from wageweeks
        where (ID!=".$ID.") And (('".$StartDate."' between wageweeks.`StartDate` and Wageweeks.`EndDate`)
       or ('".$EndDate."' between wageweeks.`StartDate` and wageweeks.`EndDate`))";
        $stmt=$db->query($sql);
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result['cnt'];
    }
    static function NoOfEmployeesForWeek(PDO $db,$WeekID){
        $sql="SELECT COUNT(EMP_ID) FROM WAGES
                WHERE
                WEEKID=".$WeekID;
        $stmt=$db->query($sql);
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result['COUNT(EMP_ID)'];
    }
}
?>
