<?php

/**
 * 
 *
 * @version 1.2.6.3 - generated: 9/15/10 10:16 AM
 */
class WageweeksModel {
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='wageweeks';
	const SQL_INSERT='INSERT INTO `wageweeks` (`ID`,`StartDate`,`EndDate`,`WorkDays`,`NationalHolidays`,`IsTransfered`,`Description`) VALUES (?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `wageweeks` SET `ID`=?,`StartDate`=?,`EndDate`=?,`WorkDays`=?,`NationalHolidays`=?,`IsTransfered`=?,`Description`=? WHERE `ID`=?';
	const SQL_SELECT_PK='SELECT * FROM `wageweeks` WHERE `ID`=?';
	const SQL_DELETE_PK='DELETE FROM `wageweeks` WHERE `ID`=?';
	const FIELD_ID=0;
	const FIELD_STARTDATE=1;
	const FIELD_ENDDATE=2;
	const FIELD_WORKDAYS=3;
	const FIELD_NATIONALHOLIDAYS=4;
	const FIELD_ISTRANSFERED=5;
	const FIELD_DESCRIPTION=6;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'ID',
		self::FIELD_STARTDATE=>'StartDate',
		self::FIELD_ENDDATE=>'EndDate',
		self::FIELD_WORKDAYS=>'WorkDays',
		self::FIELD_NATIONALHOLIDAYS=>'NationalHolidays',
		self::FIELD_ISTRANSFERED=>'IsTransfered',
		self::FIELD_DESCRIPTION=>'Description');
	private static $DEFAULT_VALUES=array(
		'ID'=>null,
		'StartDate'=>'',
		'EndDate'=>'',
		'WorkDays'=>0,
		'NationalHolidays'=>0,
		'IsTransfered'=>'0',
		'Description'=>'');
	private $id;
	private $StartDate;
	private $EndDate;
	private $WorkDays;
	private $NationalHolidays;
	private $IsTransfered;
	private $Description;

	/**
	 * store for old instance after object has been modified
	 *
	 * @var WageweeksModel
	 */
	private $oldInstance=null;

	/**
	 * get old instance if this has been modified, otherwise return null
	 *
	 * @return WageweeksModel
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
	 * set value for ID 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return WageweeksModel
	 */
	public function &setId($id) {
		$this->notifyChanged(self::FIELD_ID);
		$this->id=$id;
		return $this;
	}

	/**
	 * get value for ID 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * set value for StartDate 
	 *
	 * type:DATE,size:10,default:null
	 *
	 * @param mixed $StartDate
	 * @return WageweeksModel
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
	 * @return WageweeksModel
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
	 * @return WageweeksModel
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
	 * @return WageweeksModel
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
	 * set value for IsTransfered 
	 *
	 * type:BIT,size:0,default:0
	 *
	 * @param mixed $IsTransfered
	 * @return WageweeksModel
	 */
	public function &setIsTransfered($IsTransfered) {
		$this->notifyChanged(self::FIELD_ISTRANSFERED);
		$this->IsTransfered=$IsTransfered;
		return $this;
	}

	/**
	 * get value for IsTransfered 
	 *
	 * type:BIT,size:0,default:0
	 *
	 * @return mixed
	 */
	public function getIsTransfered() {
		return $this->IsTransfered;
	}

	/**
	 * set value for Description 
	 *
	 * type:VARCHAR,size:100,default:null
	 *
	 * @param mixed $Description
	 * @return WageweeksModel
	 */
	public function &setDescription($Description) {
		$this->notifyChanged(self::FIELD_DESCRIPTION);
		$this->Description=$Description;
		return $this;
	}

	/**
	 * get value for Description 
	 *
	 * type:VARCHAR,size:100,default:null
	 *
	 * @return mixed
	 */
	public function getDescription() {
		return $this->Description;
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
			self::FIELD_ID=>$this->getId(),
			self::FIELD_STARTDATE=>$this->getStartDate(),
			self::FIELD_ENDDATE=>$this->getEndDate(),
			self::FIELD_WORKDAYS=>$this->getWorkDays(),
			self::FIELD_NATIONALHOLIDAYS=>$this->getNationalHolidays(),
			self::FIELD_ISTRANSFERED=>$this->getIsTransfered(),
			self::FIELD_DESCRIPTION=>$this->getDescription());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_ID=>$this->getId());
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
	 * Match by attributes of passed example instance and return matched rows as an array of WageweeksModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param WageweeksModel $example an example instance
	 * @return WageweeksModel[]
	 */
	public static function findByExample(PDO $db,WageweeksModel $example, $and=true) {
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
	 * Will return matched rows as an array of WageweeksModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter
	 * @param boolean $and
	 * @return WageweeksModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true) {
		if ($filter instanceof DFC) {
			$filter=array($filter);
		}
		$sql='SELECT * FROM `wageweeks`'
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
			$o=new WageweeksModel();
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
	 * Execute select query and return matched rows as an array of WageweeksModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return WageweeksModel[]
	 */
	public static function findBySql(PDO $db, $sql) {
		$stmt=$db->query($sql);
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new WageweeksModel();
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
		$sql='DELETE FROM `wageweeks`'
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
		$this->setId($result['ID']);
		$this->setStartDate($result['StartDate']);
		$this->setEndDate($result['EndDate']);
		$this->setWorkDays($result['WorkDays']);
		$this->setNationalHolidays($result['NationalHolidays']);
		$this->setIsTransfered($result['IsTransfered']);
		$this->setDescription($result['Description']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return WageweeksModel
	 */
	public static function findById(PDO $db,$id) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$id);
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
		$o=new WageweeksModel();
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
		$stmt->bindValue(1,$this->getId());
		$stmt->bindValue(2,$this->getStartDate());
		$stmt->bindValue(3,$this->getEndDate());
		$stmt->bindValue(4,$this->getWorkDays());
		$stmt->bindValue(5,$this->getNationalHolidays());
		$stmt->bindValue(6,$this->getIsTransfered());
		$stmt->bindValue(7,$this->getDescription());
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
		$this->setId($db->lastInsertId());
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
		$stmt->bindValue(8,$this->getId());
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
		$stmt->bindValue(1,$this->getId());
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
		$root=$doc->createElement('WageweeksModel');
		foreach ($this->toHash() as $fieldName=>$value) {
			$fElem=$doc->createElement($fieldName);
			$fElem->appendChild($doc->createTextNode($value));
			$root->appendChild($fElem);
		}
		$doc->appendChild($root);
		return $doc;
	}

	/**
	 * get single WageweeksModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return WageweeksModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		if ('WageweeksModel'!=$node->nodeName) {
			return new InvalidArgumentException('expected: WageweeksModel, got: ' . $node->nodeName, 0);
		}
		$result=array();
		foreach (self::$FIELD_NAMES as $fieldName) {
			$n=$node->getElementsByTagName($fieldName)->item(0);
			if (!is_null($n)) {
				$result[$fieldName]=$n->nodeValue;
			}
		}
		$o=new WageweeksModel();
		$o->assignByHash($result);
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of WageweeksModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return WageweeksModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('WageweeksModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>