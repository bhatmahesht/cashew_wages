<?php

/**
 * 
 *
 * @version 1.2.6.3 - generated: 9/6/09 1:01 PM
 */
class WagesModel {
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='wages';
	const SQL_INSERT='INSERT INTO `wages` (`ID`,`Emp_ID`,`WeekID`,`NoOfKgsWhole`,`NoOfKgsPieces`,`PreDays`,`OtherDed`,`Description`) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `wages` SET `ID`=?,`Emp_ID`=?,`WeekID`=?,`NoOfKgsWhole`=?,`NoOfKgsPieces`=?,`PreDays`=?,`OtherDed`=?,`Description`=? WHERE `ID`=?';
	const SQL_SELECT_PK='SELECT * FROM `wages` WHERE `ID`=?';
	const SQL_DELETE_PK='DELETE FROM `wages` WHERE `ID`=?';
	const FIELD_ID=0;
	const FIELD_EMP_ID=1;
	const FIELD_WEEKID=2;
	const FIELD_NOOFKGSWHOLE=3;
	const FIELD_NOOFKGSPIECES=4;
	const FIELD_PREDAYS=5;
	const FIELD_OTHERDED=6;
	const FIELD_DESCRIPTION=7;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'ID',
		self::FIELD_EMP_ID=>'Emp_ID',
		self::FIELD_WEEKID=>'WeekID',
		self::FIELD_NOOFKGSWHOLE=>'NoOfKgsWhole',
		self::FIELD_NOOFKGSPIECES=>'NoOfKgsPieces',
		self::FIELD_PREDAYS=>'PreDays',
		self::FIELD_OTHERDED=>'OtherDed',
		self::FIELD_DESCRIPTION=>'Description');
	private static $DEFAULT_VALUES=array(
		'ID'=>null,
		'Emp_ID'=>0,
		'WeekID'=>0,
		'NoOfKgsWhole'=>'0',
		'NoOfKgsPieces'=>'0',
		'PreDays'=>0,
		'OtherDed'=>'0',
		'Description'=>'');
	private $id;
	private $eMpId;
	private $weekId;
	private $noOfKgSWhole;
	private $noOfKgSPieces;
	private $pReDays;
	private $otHerded;
	private $description;

	/**
	 * store for old instance after object has been modified
	 *
	 * @var WagesModel
	 */
	private $oldInstance=null;

	/**
	 * get old instance if this has been modified, otherwise return null
	 *
	 * @return WagesModel
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
	 * @return WagesModel
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
	 * set value for Emp_ID 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $eMpId
	 * @return WagesModel
	 */
	public function &setEMpId($eMpId) {
		$this->notifyChanged(self::FIELD_EMP_ID);
		$this->eMpId=$eMpId;
		return $this;
	}

	/**
	 * get value for Emp_ID 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getEMpId() {
		return $this->eMpId;
	}

	/**
	 * set value for WeekID 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $weekId
	 * @return WagesModel
	 */
	public function &setWeekId($weekId) {
		$this->notifyChanged(self::FIELD_WEEKID);
		$this->weekId=$weekId;
		return $this;
	}

	/**
	 * get value for WeekID 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getWeekId() {
		return $this->weekId;
	}

	/**
	 * set value for NoOfKgsWhole 
	 *
	 * type:FLOAT,size:12,default:0,nullable
	 *
	 * @param mixed $noOfKgSWhole
	 * @return WagesModel
	 */
	public function &setNoOfKgSWhole($noOfKgSWhole) {
		$this->notifyChanged(self::FIELD_NOOFKGSWHOLE);
		$this->noOfKgSWhole=$noOfKgSWhole;
		return $this;
	}

	/**
	 * get value for NoOfKgsWhole 
	 *
	 * type:FLOAT,size:12,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getNoOfKgSWhole() {
		return $this->noOfKgSWhole;
	}

	/**
	 * set value for NoOfKgsPieces 
	 *
	 * type:FLOAT,size:12,default:0,nullable
	 *
	 * @param mixed $noOfKgSPieces
	 * @return WagesModel
	 */
	public function &setNoOfKgSPieces($noOfKgSPieces) {
		$this->notifyChanged(self::FIELD_NOOFKGSPIECES);
		$this->noOfKgSPieces=$noOfKgSPieces;
		return $this;
	}

	/**
	 * get value for NoOfKgsPieces 
	 *
	 * type:FLOAT,size:12,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getNoOfKgSPieces() {
		return $this->noOfKgSPieces;
	}

	/**
	 * set value for PreDays 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @param mixed $pReDays
	 * @return WagesModel
	 */
	public function &setPReDays($pReDays) {
		$this->notifyChanged(self::FIELD_PREDAYS);
		$this->pReDays=$pReDays;
		return $this;
	}

	/**
	 * get value for PreDays 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getPReDays() {
		return $this->pReDays;
	}

	/**
	 * set value for OtherDed 
	 *
	 * type:FLOAT,size:12,default:0,nullable
	 *
	 * @param mixed $otHerded
	 * @return WagesModel
	 */
	public function &setOtHerded($otHerded) {
		$this->notifyChanged(self::FIELD_OTHERDED);
		$this->otHerded=$otHerded;
		return $this;
	}

	/**
	 * get value for OtherDed 
	 *
	 * type:FLOAT,size:12,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getOtHerded() {
		return $this->otHerded;
	}

	/**
	 * set value for Description 
	 *
	 * type:VARCHAR,size:100,default:null
	 *
	 * @param mixed $description
	 * @return WagesModel
	 */
	public function &setDescription($description) {
		$this->notifyChanged(self::FIELD_DESCRIPTION);
		$this->description=$description;
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
		return $this->description;
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
			self::FIELD_EMP_ID=>$this->getEMpId(),
			self::FIELD_WEEKID=>$this->getWeekId(),
			self::FIELD_NOOFKGSWHOLE=>$this->getNoOfKgSWhole(),
			self::FIELD_NOOFKGSPIECES=>$this->getNoOfKgSPieces(),
			self::FIELD_PREDAYS=>$this->getPReDays(),
			self::FIELD_OTHERDED=>$this->getOtHerded(),
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
	 * Match by attributes of passed example instance and return matched rows as an array of WagesModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param WagesModel $example an example instance
	 * @return WagesModel[]
	 */
	public static function findByExample(PDO $db,WagesModel $example, $and=true) {
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
	 * Will return matched rows as an array of WagesModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter
	 * @param boolean $and
	 * @return WagesModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true) {
		if ($filter instanceof DFC) {
			$filter=array($filter);
		}
		$sql='SELECT * FROM `wages`'
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
			$o=new WagesModel();
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
	 * Execute select query and return matched rows as an array of WagesModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return WagesModel[]
	 */
	public static function findBySql(PDO $db, $sql) {
		$stmt=$db->query($sql);
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new WagesModel();
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
		$sql='DELETE FROM `wages`'
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
		$this->setEMpId($result['Emp_ID']);
		$this->setWeekId($result['WeekID']);
		$this->setNoOfKgSWhole($result['NoOfKgsWhole']);
		$this->setNoOfKgSPieces($result['NoOfKgsPieces']);
		$this->setPReDays($result['PreDays']);
		$this->setOtHerded($result['OtherDed']);
		$this->setDescription($result['Description']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return WagesModel
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
		$o=new WagesModel();
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
		$stmt->bindValue(2,$this->getEMpId());
		$stmt->bindValue(3,$this->getWeekId());
		$stmt->bindValue(4,$this->getNoOfKgSWhole());
		$stmt->bindValue(5,$this->getNoOfKgSPieces());
		$stmt->bindValue(6,$this->getPReDays());
		$stmt->bindValue(7,$this->getOtHerded());
		$stmt->bindValue(8,$this->getDescription());
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
		$stmt->bindValue(9,$this->getId());
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
		$root=$doc->createElement('WagesModel');
		foreach ($this->toHash() as $fieldName=>$value) {
			$fElem=$doc->createElement($fieldName);
			$fElem->appendChild($doc->createTextNode($value));
			$root->appendChild($fElem);
		}
		$doc->appendChild($root);
		return $doc;
	}

	/**
	 * get single WagesModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return WagesModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		if ('WagesModel'!=$node->nodeName) {
			return new InvalidArgumentException('expected: WagesModel, got: ' . $node->nodeName, 0);
		}
		$result=array();
		foreach (self::$FIELD_NAMES as $fieldName) {
			$n=$node->getElementsByTagName($fieldName)->item(0);
			if (!is_null($n)) {
				$result[$fieldName]=$n->nodeValue;
			}
		}
		$o=new WagesModel();
		$o->assignByHash($result);
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of WagesModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return WagesModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('WagesModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>