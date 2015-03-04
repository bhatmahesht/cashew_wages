<?php

/**
 * 
 *
 * @version 1.2.6.3 - generated: 9/15/10 12:06 PM
 */
class WagesarchiveModel {
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='wagesarchive';
	const SQL_INSERT='INSERT INTO `wagesarchive` (`WagesID`,`Name`,`PF_ID`,`Type`,`StartDate`,`EndDate`,`WorkDays`,`NationalHolidays`,`DAperDay`,`RateperDay`,`RateperWholes`,`RateperPieces`,`PreDays`,`NoOfKgWholes`,`NoOfKgPieces`,`OtherDed`,`Basic`,`Gross`,`Pf`,`Description`,`EmpID`,`WeekID`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `wagesarchive` SET `WagesID`=?,`Name`=?,`PF_ID`=?,`Type`=?,`StartDate`=?,`EndDate`=?,`WorkDays`=?,`NationalHolidays`=?,`DAperDay`=?,`RateperDay`=?,`RateperWholes`=?,`RateperPieces`=?,`PreDays`=?,`NoOfKgWholes`=?,`NoOfKgPieces`=?,`OtherDed`=?,`Basic`=?,`Gross`=?,`Pf`=?,`Description`=?,`EmpID`=?,`WeekID`=? WHERE `WagesID`=?';
	const SQL_SELECT_PK='SELECT * FROM `wagesarchive` WHERE `WagesID`=?';
	const SQL_DELETE_PK='DELETE FROM `wagesarchive` WHERE `WagesID`=?';
	const FIELD_WAGESID=0;
	const FIELD_NAME=1;
	const FIELD_PF_ID=2;
	const FIELD_TYPE=3;
	const FIELD_STARTDATE=4;
	const FIELD_ENDDATE=5;
	const FIELD_WORKDAYS=6;
	const FIELD_NATIONALHOLIDAYS=7;
	const FIELD_DAPERDAY=8;
	const FIELD_RATEPERDAY=9;
	const FIELD_RATEPERWHOLES=10;
	const FIELD_RATEPERPIECES=11;
	const FIELD_PREDAYS=12;
	const FIELD_NOOFKGWHOLES=13;
	const FIELD_NOOFKGPIECES=14;
	const FIELD_OTHERDED=15;
	const FIELD_BASIC=16;
	const FIELD_GROSS=17;
	const FIELD_PF=18;
	const FIELD_DESCRIPTION=19;
	const FIELD_EMPID=20;
	const FIELD_WEEKID=21;
	private static $PRIMARY_KEYS=array(self::FIELD_WAGESID);
	private static $FIELD_NAMES=array(
		self::FIELD_WAGESID=>'WagesID',
		self::FIELD_NAME=>'Name',
		self::FIELD_PF_ID=>'PF_ID',
		self::FIELD_TYPE=>'Type',
		self::FIELD_STARTDATE=>'StartDate',
		self::FIELD_ENDDATE=>'EndDate',
		self::FIELD_WORKDAYS=>'WorkDays',
		self::FIELD_NATIONALHOLIDAYS=>'NationalHolidays',
		self::FIELD_DAPERDAY=>'DAperDay',
		self::FIELD_RATEPERDAY=>'RateperDay',
		self::FIELD_RATEPERWHOLES=>'RateperWholes',
		self::FIELD_RATEPERPIECES=>'RateperPieces',
		self::FIELD_PREDAYS=>'PreDays',
		self::FIELD_NOOFKGWHOLES=>'NoOfKgWholes',
		self::FIELD_NOOFKGPIECES=>'NoOfKgPieces',
		self::FIELD_OTHERDED=>'OtherDed',
		self::FIELD_BASIC=>'Basic',
		self::FIELD_GROSS=>'Gross',
		self::FIELD_PF=>'Pf',
		self::FIELD_DESCRIPTION=>'Description',
		self::FIELD_EMPID=>'EmpID',
		self::FIELD_WEEKID=>'WeekID');
	private static $DEFAULT_VALUES=array(
		'WagesID'=>0,
		'Name'=>'',
		'PF_ID'=>'',
		'Type'=>'',
		'StartDate'=>'',
		'EndDate'=>'',
		'WorkDays'=>0,
		'NationalHolidays'=>0,
		'DAperDay'=>'',
		'RateperDay'=>'',
		'RateperWholes'=>'',
		'RateperPieces'=>'',
		'PreDays'=>0,
		'NoOfKgWholes'=>null,
		'NoOfKgPieces'=>null,
		'OtherDed'=>null,
		'Basic'=>'',
		'Gross'=>'',
		'Pf'=>'',
		'Description'=>null,
		'EmpID'=>0,
		'WeekID'=>0);
	private $WagesID;
	private $Name;
	private $pfId;
	private $Type;
	private $StartDate;
	private $EndDate;
	private $WorkDays;
	private $NationalHolidays;
	private $DAperDay;
	private $RateperDay;
	private $RateperWholes;
	private $RateperPieces;
	private $PreDays;
	private $NoOfKgWholes;
	private $NoOfKgPieces;
	private $OtherDed;
	private $Basic;
	private $Gross;
	private $Pf;
	private $Description;
	private $EmpID;
	private $WeekID;

	/**
	 * store for old instance after object has been modified
	 *
	 * @var WagesarchiveModel
	 */
	private $oldInstance=null;

	/**
	 * get old instance if this has been modified, otherwise return null
	 *
	 * @return WagesarchiveModel
	 */
	public function getOldInstance() {
		return $this->oldInstance;
	}

	/**
	 * called when the field with the passed id has changed
	 *
	 * @param int $fieldId
	 */
	protected function notifyChanged($fieldId) {
		if (is_null($this->getOldInstance())) {
			$this->oldInstance=clone $this;
			$this->oldInstance->notifyPristine();
		}
	}

	/**
	 * return true if this instance has been modified since the last notifyPristine() call
	 *
	 * @return bool
	 */
	public function isChanged() {
		return !is_null($this->getOldInstance());
	}

	/**
	 * return array with the field ids of values which have been changed since the last notifyPristine call
	 *
	 * @return array
	 */
	public function getFieldsChanged() {
		$changed=array();
		if (!$this->isChanged()) {
			return $changed;
		}
		$old=$this->getOldInstance()->toArray();
		$new=$this->toArray();
		foreach ($old as $fieldId=>$value) {
			if ($new[$fieldId]!==$value) {
				$changed[]=$fieldId;
			}
		}
		return $changed;
	}

	/**
	 * set this instance into pristine state
	 */
	public function notifyPristine() {
		$this->oldInstance=null;
	}

	/**
	 * set value for WagesID 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @param mixed $WagesID
	 * @return WagesarchiveModel
	 */
	public function &setWagesID($WagesID) {
		$this->notifyChanged(self::FIELD_WAGESID);
		$this->WagesID=$WagesID;
		return $this;
	}

	/**
	 * get value for WagesID 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @return mixed
	 */
	public function getWagesID() {
		return $this->WagesID;
	}

	/**
	 * set value for Name 
	 *
	 * type:VARCHAR,size:20,default:null
	 *
	 * @param mixed $Name
	 * @return WagesarchiveModel
	 */
	public function &setName($Name) {
		$this->notifyChanged(self::FIELD_NAME);
		$this->Name=$Name;
		return $this;
	}

	/**
	 * get value for Name 
	 *
	 * type:VARCHAR,size:20,default:null
	 *
	 * @return mixed
	 */
	public function getName() {
		return $this->Name;
	}

	/**
	 * set value for PF_ID 
	 *
	 * type:VARCHAR,size:20,default:null
	 *
	 * @param mixed $pfId
	 * @return WagesarchiveModel
	 */
	public function &setPfId($pfId) {
		$this->notifyChanged(self::FIELD_PF_ID);
		$this->pfId=$pfId;
		return $this;
	}

	/**
	 * get value for PF_ID 
	 *
	 * type:VARCHAR,size:20,default:null
	 *
	 * @return mixed
	 */
	public function getPfId() {
		return $this->pfId;
	}

	/**
	 * set value for Type 
	 *
	 * type:VARCHAR,size:20,default:null
	 *
	 * @param mixed $Type
	 * @return WagesarchiveModel
	 */
	public function &setType($Type) {
		$this->notifyChanged(self::FIELD_TYPE);
		$this->Type=$Type;
		return $this;
	}

	/**
	 * get value for Type 
	 *
	 * type:VARCHAR,size:20,default:null
	 *
	 * @return mixed
	 */
	public function getType() {
		return $this->Type;
	}

	/**
	 * set value for StartDate 
	 *
	 * type:DATE,size:10,default:null
	 *
	 * @param mixed $StartDate
	 * @return WagesarchiveModel
	 */
	public function &setStartDate($StartDate) {
		$this->notifyChanged(self::FIELD_STARTDATE);
		$this->StartDate=$StartDate;
		return $this;
	}

	/**
	 * get value for StartDate 
	 *
	 * type:DATE,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getStartDate() {
		return $this->StartDate;
	}

	/**
	 * set value for EndDate 
	 *
	 * type:DATE,size:10,default:null
	 *
	 * @param mixed $EndDate
	 * @return WagesarchiveModel
	 */
	public function &setEndDate($EndDate) {
		$this->notifyChanged(self::FIELD_ENDDATE);
		$this->EndDate=$EndDate;
		return $this;
	}

	/**
	 * get value for EndDate 
	 *
	 * type:DATE,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getEndDate() {
		return $this->EndDate;
	}

	/**
	 * set value for WorkDays 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $WorkDays
	 * @return WagesarchiveModel
	 */
	public function &setWorkDays($WorkDays) {
		$this->notifyChanged(self::FIELD_WORKDAYS);
		$this->WorkDays=$WorkDays;
		return $this;
	}

	/**
	 * get value for WorkDays 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getWorkDays() {
		return $this->WorkDays;
	}

	/**
	 * set value for NationalHolidays 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $NationalHolidays
	 * @return WagesarchiveModel
	 */
	public function &setNationalHolidays($NationalHolidays) {
		$this->notifyChanged(self::FIELD_NATIONALHOLIDAYS);
		$this->NationalHolidays=$NationalHolidays;
		return $this;
	}

	/**
	 * get value for NationalHolidays 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getNationalHolidays() {
		return $this->NationalHolidays;
	}

	/**
	 * set value for DAperDay 
	 *
	 * type:FLOAT,size:12,default:null
	 *
	 * @param mixed $DAperDay
	 * @return WagesarchiveModel
	 */
	public function &setDAperDay($DAperDay) {
		$this->notifyChanged(self::FIELD_DAPERDAY);
		$this->DAperDay=$DAperDay;
		return $this;
	}

	/**
	 * get value for DAperDay 
	 *
	 * type:FLOAT,size:12,default:null
	 *
	 * @return mixed
	 */
	public function getDAperDay() {
		return $this->DAperDay;
	}

	/**
	 * set value for RateperDay 
	 *
	 * type:FLOAT,size:12,default:null
	 *
	 * @param mixed $RateperDay
	 * @return WagesarchiveModel
	 */
	public function &setRateperDay($RateperDay) {
		$this->notifyChanged(self::FIELD_RATEPERDAY);
		$this->RateperDay=$RateperDay;
		return $this;
	}

	/**
	 * get value for RateperDay 
	 *
	 * type:FLOAT,size:12,default:null
	 *
	 * @return mixed
	 */
	public function getRateperDay() {
		return $this->RateperDay;
	}

	/**
	 * set value for RateperWholes 
	 *
	 * type:FLOAT,size:12,default:null
	 *
	 * @param mixed $RateperWholes
	 * @return WagesarchiveModel
	 */
	public function &setRateperWholes($RateperWholes) {
		$this->notifyChanged(self::FIELD_RATEPERWHOLES);
		$this->RateperWholes=$RateperWholes;
		return $this;
	}

	/**
	 * get value for RateperWholes 
	 *
	 * type:FLOAT,size:12,default:null
	 *
	 * @return mixed
	 */
	public function getRateperWholes() {
		return $this->RateperWholes;
	}

	/**
	 * set value for RateperPieces 
	 *
	 * type:FLOAT,size:12,default:null
	 *
	 * @param mixed $RateperPieces
	 * @return WagesarchiveModel
	 */
	public function &setRateperPieces($RateperPieces) {
		$this->notifyChanged(self::FIELD_RATEPERPIECES);
		$this->RateperPieces=$RateperPieces;
		return $this;
	}

	/**
	 * get value for RateperPieces 
	 *
	 * type:FLOAT,size:12,default:null
	 *
	 * @return mixed
	 */
	public function getRateperPieces() {
		return $this->RateperPieces;
	}

	/**
	 * set value for PreDays 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $PreDays
	 * @return WagesarchiveModel
	 */
	public function &setPreDays($PreDays) {
		$this->notifyChanged(self::FIELD_PREDAYS);
		$this->PreDays=$PreDays;
		return $this;
	}

	/**
	 * get value for PreDays 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getPreDays() {
		return $this->PreDays;
	}

	/**
	 * set value for NoOfKgWholes 
	 *
	 * type:FLOAT,size:12,default:null,nullable
	 *
	 * @param mixed $NoOfKgWholes
	 * @return WagesarchiveModel
	 */
	public function &setNoOfKgWholes($NoOfKgWholes) {
		$this->notifyChanged(self::FIELD_NOOFKGWHOLES);
		$this->NoOfKgWholes=$NoOfKgWholes;
		return $this;
	}

	/**
	 * get value for NoOfKgWholes 
	 *
	 * type:FLOAT,size:12,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getNoOfKgWholes() {
		return $this->NoOfKgWholes;
	}

	/**
	 * set value for NoOfKgPieces 
	 *
	 * type:FLOAT,size:12,default:null,nullable
	 *
	 * @param mixed $NoOfKgPieces
	 * @return WagesarchiveModel
	 */
	public function &setNoOfKgPieces($NoOfKgPieces) {
		$this->notifyChanged(self::FIELD_NOOFKGPIECES);
		$this->NoOfKgPieces=$NoOfKgPieces;
		return $this;
	}

	/**
	 * get value for NoOfKgPieces 
	 *
	 * type:FLOAT,size:12,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getNoOfKgPieces() {
		return $this->NoOfKgPieces;
	}

	/**
	 * set value for OtherDed 
	 *
	 * type:FLOAT,size:12,default:null,nullable
	 *
	 * @param mixed $OtherDed
	 * @return WagesarchiveModel
	 */
	public function &setOtherDed($OtherDed) {
		$this->notifyChanged(self::FIELD_OTHERDED);
		$this->OtherDed=$OtherDed;
		return $this;
	}

	/**
	 * get value for OtherDed 
	 *
	 * type:FLOAT,size:12,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getOtherDed() {
		return $this->OtherDed;
	}

	/**
	 * set value for Basic 
	 *
	 * type:FLOAT,size:12,default:null
	 *
	 * @param mixed $Basic
	 * @return WagesarchiveModel
	 */
	public function &setBasic($Basic) {
		$this->notifyChanged(self::FIELD_BASIC);
		$this->Basic=$Basic;
		return $this;
	}

	/**
	 * get value for Basic 
	 *
	 * type:FLOAT,size:12,default:null
	 *
	 * @return mixed
	 */
	public function getBasic() {
		return $this->Basic;
	}

	/**
	 * set value for Gross 
	 *
	 * type:FLOAT,size:12,default:null
	 *
	 * @param mixed $Gross
	 * @return WagesarchiveModel
	 */
	public function &setGross($Gross) {
		$this->notifyChanged(self::FIELD_GROSS);
		$this->Gross=$Gross;
		return $this;
	}

	/**
	 * get value for Gross 
	 *
	 * type:FLOAT,size:12,default:null
	 *
	 * @return mixed
	 */
	public function getGross() {
		return $this->Gross;
	}

	/**
	 * set value for Pf 
	 *
	 * type:FLOAT,size:12,default:null
	 *
	 * @param mixed $Pf
	 * @return WagesarchiveModel
	 */
	public function &setPf($Pf) {
		$this->notifyChanged(self::FIELD_PF);
		$this->Pf=$Pf;
		return $this;
	}

	/**
	 * get value for Pf 
	 *
	 * type:FLOAT,size:12,default:null
	 *
	 * @return mixed
	 */
	public function getPf() {
		return $this->Pf;
	}

	/**
	 * set value for Description 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @param mixed $Description
	 * @return WagesarchiveModel
	 */
	public function &setDescription($Description) {
		$this->notifyChanged(self::FIELD_DESCRIPTION);
		$this->Description=$Description;
		return $this;
	}

	/**
	 * get value for Description 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDescription() {
		return $this->Description;
	}

	/**
	 * set value for EmpID 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $EmpID
	 * @return WagesarchiveModel
	 */
	public function &setEmpID($EmpID) {
		$this->notifyChanged(self::FIELD_EMPID);
		$this->EmpID=$EmpID;
		return $this;
	}

	/**
	 * get value for EmpID 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getEmpID() {
		return $this->EmpID;
	}

	/**
	 * set value for WeekID 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $WeekID
	 * @return WagesarchiveModel
	 */
	public function &setWeekID($WeekID) {
		$this->notifyChanged(self::FIELD_WEEKID);
		$this->WeekID=$WeekID;
		return $this;
	}

	/**
	 * get value for WeekID 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getWeekID() {
		return $this->WeekID;
	}

	/**
	 * Get array with field id as index and field name as value
	 *
	 * @return array
	 */
	public static function getFieldNames() {
		return self::$FIELD_NAMES;
	}

	/**
	 * Get array with field ids of identifiers
	 *
	 * @return array
	 */
	public static function getIdentifierFields() {
		return self::$PRIMARY_KEYS;
	}

	/**
	 * Assign default values according to table
	 * 
	 */
	public function assignDefaultValues() {
		$this->assignByHash(self::$DEFAULT_VALUES);
	}


	/**
	 * return hash with the field name as index and the field value as value.
	 *
	 * @return array
	 */
	public function toHash() {
		$array=$this->toArray();
		$hash=array();
		foreach ($array as $fieldId=>$value) {
			$hash[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		return $hash;
	}

	/**
	 * return array with the field id as index and the field value as value.
	 *
	 * @return array
	 */
	public function toArray() {
		return array(
			self::FIELD_WAGESID=>$this->getWagesID(),
			self::FIELD_NAME=>$this->getName(),
			self::FIELD_PF_ID=>$this->getPfId(),
			self::FIELD_TYPE=>$this->getType(),
			self::FIELD_STARTDATE=>$this->getStartDate(),
			self::FIELD_ENDDATE=>$this->getEndDate(),
			self::FIELD_WORKDAYS=>$this->getWorkDays(),
			self::FIELD_NATIONALHOLIDAYS=>$this->getNationalHolidays(),
			self::FIELD_DAPERDAY=>$this->getDAperDay(),
			self::FIELD_RATEPERDAY=>$this->getRateperDay(),
			self::FIELD_RATEPERWHOLES=>$this->getRateperWholes(),
			self::FIELD_RATEPERPIECES=>$this->getRateperPieces(),
			self::FIELD_PREDAYS=>$this->getPreDays(),
			self::FIELD_NOOFKGWHOLES=>$this->getNoOfKgWholes(),
			self::FIELD_NOOFKGPIECES=>$this->getNoOfKgPieces(),
			self::FIELD_OTHERDED=>$this->getOtherDed(),
			self::FIELD_BASIC=>$this->getBasic(),
			self::FIELD_GROSS=>$this->getGross(),
			self::FIELD_PF=>$this->getPf(),
			self::FIELD_DESCRIPTION=>$this->getDescription(),
			self::FIELD_EMPID=>$this->getEmpID(),
			self::FIELD_WEEKID=>$this->getWeekID());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_WAGESID=>$this->getWagesID());
	}

	/**
	 * cached insert statement
	 *
	 * @var PDOStatement
	 */
	private static $stmtInsert=null;
	/**
	 * cached update statement
	 *
	 * @var PDOStatement
	 */
	private static $stmtUpdate=null;
	/**
	 * cached delete statement
	 *
	 * @var PDOStatement
	 */
	private static $stmtDelete=null;
	/**
	 * cached select statement
	 *
	 * @var PDOStatement
	 */
	private static $stmtSelect=null;
	private static $cacheStatements=true;
	
	/**
	 * prepare passed string as statement or return cached if enabled and available
	 *
	 * @param PDO $db
	 * @param string $statement
	 * @return PDOStatement
	 */
	protected static function prepareStatement(PDO $db, $statement) {
		if(self::isCacheStatements()) {
			if ($statement==self::SQL_INSERT) {
				if (null==self::$stmtInsert) {
					self::$stmtInsert=$db->prepare($statement);
				}
				return self::$stmtInsert;
			} else if($statement==self::SQL_UPDATE) {
				if (null==self::$stmtUpdate) {
					self::$stmtUpdate=$db->prepare($statement);
				}
				return self::$stmtUpdate;
			} else if($statement==self::SQL_SELECT_PK) {
				if (null==self::$stmtSelect) {
					self::$stmtSelect=$db->prepare($statement);
				}
				return self::$stmtSelect;
			} else if($statement==self::SQL_DELETE_PK) {
				if (null==self::$stmtDelete) {
					self::$stmtDelete=$db->prepare($statement);
				}
				return self::$stmtDelete;
			}
		}
		return $db->prepare($statement);
	}

	/**
	 * Enable statement cache
	 *
	 * @param bool $cache
	 */
	public static function setCacheStatements($cache) {
		self::$cacheStatements=true==$cache;
	}

	/**
	 * Check if statement cache is enabled
	 *
	 * @return bool
	 */
	public static function isCacheStatements() {
		return self::$cacheStatements;
	}

	/**
	 * Query by Example.
	 *
	 * Match by attributes of passed example instance and return matched rows as an array of WagesarchiveModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param WagesarchiveModel $example an example instance
	 * @return WagesarchiveModel[]
	 */
	public static function findByExample(PDO $db,WagesarchiveModel $example, $and=true) {
		$exampleValues=$example->toArray();
		$filter=array();
		foreach ($exampleValues as $fieldId=>$value) {
			if (!is_null($value)) {
				$filter[$fieldId]=$value;
			}
		}
		return self::findByFilter($db, $filter, $and);
	}

	/**
	 * Query by filter.
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * Will return matched rows as an array of WagesarchiveModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter
	 * @param boolean $and
	 * @return WagesarchiveModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true) {
		if ($filter instanceof DFC) {
			$filter=array($filter);
		}
		$sql='SELECT * FROM `wagesarchive`'
		. self::getSqlWhere($filter, $and);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new WagesarchiveModel();
			$o->assignByHash($result);
			$o->notifyPristine();
			$resultInstances[]=$o;
		}
		$stmt->closeCursor();
		return $resultInstances;
	}

	/**
	 * Get sql WHERE part from filter.
	 *
	 * @param array $filter
	 * @param bool $and
	 * @return string
	 */
	protected static function getSqlWhere($filter, $and) {
		$sql=null;
		$andString=$and ? ' AND ' : ' OR ';
		$first=true;
		foreach ($filter as $fieldId=>$value) {
			if ($first) {
				$sql.=' WHERE ';
				$first=false;
			} else {
				$sql.=$andString;
			}
			if ($value instanceof DFC) {
				/* @var $value DFC */
				$sql.=self::SQL_IDENTIFIER_QUOTE . self::$FIELD_NAMES[$value->getField()] . self::SQL_IDENTIFIER_QUOTE
				. $value->getSqlOperatorPrepared();

			} else {
				$sql.=self::SQL_IDENTIFIER_QUOTE . self::$FIELD_NAMES[$fieldId] . self::SQL_IDENTIFIER_QUOTE . '=?';
			}
		}
		return $sql;
	}

	/**
	 * bind values from filter to statement
	 *
	 * @param PDOStatement $stmt
	 * @param array $filter
	 */
	protected static function bindValuesForFilter(&$stmt, $filter) {
		$i=0;
		foreach ($filter as $value) {
			$dfc=$value instanceof DFC;
			if ($dfc && 0!=(DFC::IS_NULL&$value->getMode())) {
				continue;
			}
			$stmt->bindValue(++$i, $dfc ? $value->getSqlValue() : $value);
		}
	}

	/**
	 * Execute select query and return matched rows as an array of WagesarchiveModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return WagesarchiveModel[]
	 */
	public static function findBySql(PDO $db, $sql) {
		$stmt=$db->query($sql);
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new WagesarchiveModel();
			$o->assignByHash($result);
			$o->notifyPristine();
			$resultInstances[]=$o;
		}
		$stmt->closeCursor();
		return $resultInstances;
	}

	/**
	 * Delete rows matching the filter
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * @param PDO $db
	 * @param array $filter
	 * @param bool $and
	 * @return mixed
	 */
	public static function deleteByFilter(PDO $db, $filter, $and=true) {
		if ($filter instanceof DFC) {
			$filter=array($filter);
		}
		if (0==count($filter)) {
			throw new InvalidArgumentException('refusing to delete without filter'); // just comment out this line if you are brave
		}
		$sql='DELETE FROM `wagesarchive`'
		. self::getSqlWhere($filter, $and);
		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Assign values from array with the field id as index and the value as value
	 *
	 * @param array $array
	 */
	public function assignByArray($array) {
		$result=array();
		foreach ($array as $fieldId=>$value) {
			$result[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		$this->assignByHash($result);
	}

	/**
	 * Assign values from hash where the indexes match the tables field names
	 *
	 * @param array $result
	 */
	public function assignByHash($result) {
		$this->setWagesID($result['WagesID']);
		$this->setName($result['Name']);
		$this->setPfId($result['PF_ID']);
		$this->setType($result['Type']);
		$this->setStartDate($result['StartDate']);
		$this->setEndDate($result['EndDate']);
		$this->setWorkDays($result['WorkDays']);
		$this->setNationalHolidays($result['NationalHolidays']);
		$this->setDAperDay($result['DAperDay']);
		$this->setRateperDay($result['RateperDay']);
		$this->setRateperWholes($result['RateperWholes']);
		$this->setRateperPieces($result['RateperPieces']);
		$this->setPreDays($result['PreDays']);
		$this->setNoOfKgWholes($result['NoOfKgWholes']);
		$this->setNoOfKgPieces($result['NoOfKgPieces']);
		$this->setOtherDed($result['OtherDed']);
		$this->setBasic($result['Basic']);
		$this->setGross($result['Gross']);
		$this->setPf($result['Pf']);
		$this->setDescription($result['Description']);
		$this->setEmpID($result['EmpID']);
		$this->setWeekID($result['WeekID']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return WagesarchiveModel
	 */
	public static function findById(PDO $db,$WagesID) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$WagesID);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$result=$stmt->fetch(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		if(!$result) {
			return null;
		}
		$o=new WagesarchiveModel();
		$o->assignByHash($result);
		$o->notifyPristine();
		return $o;
	}

	/**
	 * Bind all values to statement
	 *
	 * @param PDOStatement $stmt
	 */
	protected function bindValues(PDOStatement &$stmt) {
		$stmt->bindValue(1,$this->getWagesID());
		$stmt->bindValue(2,$this->getName());
		$stmt->bindValue(3,$this->getPfId());
		$stmt->bindValue(4,$this->getType());
		$stmt->bindValue(5,$this->getStartDate());
		$stmt->bindValue(6,$this->getEndDate());
		$stmt->bindValue(7,$this->getWorkDays());
		$stmt->bindValue(8,$this->getNationalHolidays());
		$stmt->bindValue(9,$this->getDAperDay());
		$stmt->bindValue(10,$this->getRateperDay());
		$stmt->bindValue(11,$this->getRateperWholes());
		$stmt->bindValue(12,$this->getRateperPieces());
		$stmt->bindValue(13,$this->getPreDays());
		$stmt->bindValue(14,$this->getNoOfKgWholes());
		$stmt->bindValue(15,$this->getNoOfKgPieces());
		$stmt->bindValue(16,$this->getOtherDed());
		$stmt->bindValue(17,$this->getBasic());
		$stmt->bindValue(18,$this->getGross());
		$stmt->bindValue(19,$this->getPf());
		$stmt->bindValue(20,$this->getDescription());
		$stmt->bindValue(21,$this->getEmpID());
		$stmt->bindValue(22,$this->getWeekID());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_INSERT);
		$this->bindValues($stmt);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Update this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateToDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_UPDATE);
		$this->bindValues($stmt);
		$stmt->bindValue(23,$this->getWagesID());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Delete this instance from the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function deleteFromDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_DELETE_PK);
		$stmt->bindValue(1,$this->getWagesID());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		$doc=new DOMDocument();
		$root=$doc->createElement('WagesarchiveModel');
		foreach ($this->toHash() as $fieldName=>$value) {
			$fElem=$doc->createElement($fieldName);
			$fElem->appendChild($doc->createTextNode($value));
			$root->appendChild($fElem);
		}
		$doc->appendChild($root);
		return $doc;
	}

	/**
	 * get single WagesarchiveModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return WagesarchiveModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		if ('WagesarchiveModel'!=$node->nodeName) {
			return new InvalidArgumentException('expected: WagesarchiveModel, got: ' . $node->nodeName, 0);
		}
		$result=array();
		foreach (self::$FIELD_NAMES as $fieldName) {
			$n=$node->getElementsByTagName($fieldName)->item(0);
			if (!is_null($n)) {
				$result[$fieldName]=$n->nodeValue;
			}
		}
		$o=new WagesarchiveModel();
		$o->assignByHash($result);
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of WagesarchiveModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return WagesarchiveModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('WagesarchiveModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>