<?php

/**
 * 
 *
 * @version 1.2.6.3 - generated: 9/21/10 1:00 PM
 */
class SalariesModel {
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='salaries';
	const SQL_INSERT='INSERT INTO `salaries` (`ID`,`NAME`,`DESIGNATION`,`BASIC`,`DA`,`PROFTAX`,`Description`) VALUES (?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `salaries` SET `ID`=?,`NAME`=?,`DESIGNATION`=?,`BASIC`=?,`DA`=?,`PROFTAX`=?,`Description`=? WHERE `ID`=?';
	const SQL_SELECT_PK='SELECT * FROM `salaries` WHERE `ID`=?';
	const SQL_DELETE_PK='DELETE FROM `salaries` WHERE `ID`=?';
	const FIELD_ID=0;
	const FIELD_NAME=1;
	const FIELD_DESIGNATION=2;
	const FIELD_BASIC=3;
	const FIELD_DA=4;
	const FIELD_PROFTAX=5;
	const FIELD_DESCRIPTION=6;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'ID',
		self::FIELD_NAME=>'NAME',
		self::FIELD_DESIGNATION=>'DESIGNATION',
		self::FIELD_BASIC=>'BASIC',
		self::FIELD_DA=>'DA',
		self::FIELD_PROFTAX=>'PROFTAX',
		self::FIELD_DESCRIPTION=>'Description');
	private static $DEFAULT_VALUES=array(
		'ID'=>null,
		'NAME'=>null,
		'DESIGNATION'=>null,
		'BASIC'=>0,
		'DA'=>0,
		'PROFTAX'=>0,
		'Description'=>null);
	private $id;
	private $name;
	private $designation;
	private $basic;
	private $da;
	private $proftax;
	private $Description;

	/**
	 * store for old instance after object has been modified
	 *
	 * @var SalariesModel
	 */
	private $oldInstance=null;

	/**
	 * get old instance if this has been modified, otherwise return null
	 *
	 * @return SalariesModel
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
	 * @return SalariesModel
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
	 * set value for NAME 
	 *
	 * type:VARCHAR,size:40,default:null,nullable
	 *
	 * @param mixed $name
	 * @return SalariesModel
	 */
	public function &setName($name) {
		$this->notifyChanged(self::FIELD_NAME);
		$this->name=$name;
		return $this;
	}

	/**
	 * get value for NAME 
	 *
	 * type:VARCHAR,size:40,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * set value for DESIGNATION 
	 *
	 * type:VARCHAR,size:40,default:null,nullable
	 *
	 * @param mixed $designation
	 * @return SalariesModel
	 */
	public function &setDesignation($designation) {
		$this->notifyChanged(self::FIELD_DESIGNATION);
		$this->designation=$designation;
		return $this;
	}

	/**
	 * get value for DESIGNATION 
	 *
	 * type:VARCHAR,size:40,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDesignation() {
		return $this->designation;
	}

	/**
	 * set value for BASIC 
	 *
	 * type:DECIMAL,size:10,default:0
	 *
	 * @param mixed $basic
	 * @return SalariesModel
	 */
	public function &setBasic($basic) {
		$this->notifyChanged(self::FIELD_BASIC);
		$this->basic=$basic;
		return $this;
	}

	/**
	 * get value for BASIC 
	 *
	 * type:DECIMAL,size:10,default:0
	 *
	 * @return mixed
	 */
	public function getBasic() {
		return $this->basic;
	}

	/**
	 * set value for DA 
	 *
	 * type:DECIMAL,size:10,default:0
	 *
	 * @param mixed $da
	 * @return SalariesModel
	 */
	public function &setDa($da) {
		$this->notifyChanged(self::FIELD_DA);
		$this->da=$da;
		return $this;
	}

	/**
	 * get value for DA 
	 *
	 * type:DECIMAL,size:10,default:0
	 *
	 * @return mixed
	 */
	public function getDa() {
		return $this->da;
	}

	/**
	 * set value for PROFTAX 
	 *
	 * type:DECIMAL,size:10,default:0
	 *
	 * @param mixed $proftax
	 * @return SalariesModel
	 */
	public function &setProftax($proftax) {
		$this->notifyChanged(self::FIELD_PROFTAX);
		$this->proftax=$proftax;
		return $this;
	}

	/**
	 * get value for PROFTAX 
	 *
	 * type:DECIMAL,size:10,default:0
	 *
	 * @return mixed
	 */
	public function getProftax() {
		return $this->proftax;
	}

	/**
	 * set value for Description 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $Description
	 * @return SalariesModel
	 */
	public function &setDescription($Description) {
		$this->notifyChanged(self::FIELD_DESCRIPTION);
		$this->Description=$Description;
		return $this;
	}

	/**
	 * get value for Description 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
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
			self::FIELD_NAME=>$this->getName(),
			self::FIELD_DESIGNATION=>$this->getDesignation(),
			self::FIELD_BASIC=>$this->getBasic(),
			self::FIELD_DA=>$this->getDa(),
			self::FIELD_PROFTAX=>$this->getProftax(),
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
	 * Match by attributes of passed example instance and return matched rows as an array of SalariesModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param SalariesModel $example an example instance
	 * @return SalariesModel[]
	 */
	public static function findByExample(PDO $db,SalariesModel $example, $and=true) {
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
	 * Will return matched rows as an array of SalariesModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter
	 * @param boolean $and
	 * @return SalariesModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true) {
		if ($filter instanceof DFC) {
			$filter=array($filter);
		}
		$sql='SELECT * FROM `salaries`'
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
			$o=new SalariesModel();
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
	 * Execute select query and return matched rows as an array of SalariesModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return SalariesModel[]
	 */
	public static function findBySql(PDO $db, $sql) {
		$stmt=$db->query($sql);
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new SalariesModel();
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
		$sql='DELETE FROM `salaries`'
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
		$this->setName($result['NAME']);
		$this->setDesignation($result['DESIGNATION']);
		$this->setBasic($result['BASIC']);
		$this->setDa($result['DA']);
		$this->setProftax($result['PROFTAX']);
		$this->setDescription($result['Description']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return SalariesModel
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
		$o=new SalariesModel();
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
		$stmt->bindValue(2,$this->getName());
		$stmt->bindValue(3,$this->getDesignation());
		$stmt->bindValue(4,$this->getBasic());
		$stmt->bindValue(5,$this->getDa());
		$stmt->bindValue(6,$this->getProftax());
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
		$root=$doc->createElement('SalariesModel');
		foreach ($this->toHash() as $fieldName=>$value) {
			$fElem=$doc->createElement($fieldName);
			$fElem->appendChild($doc->createTextNode($value));
			$root->appendChild($fElem);
		}
		$doc->appendChild($root);
		return $doc;
	}

	/**
	 * get single SalariesModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return SalariesModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		if ('SalariesModel'!=$node->nodeName) {
			return new InvalidArgumentException('expected: SalariesModel, got: ' . $node->nodeName, 0);
		}
		$result=array();
		foreach (self::$FIELD_NAMES as $fieldName) {
			$n=$node->getElementsByTagName($fieldName)->item(0);
			if (!is_null($n)) {
				$result[$fieldName]=$n->nodeValue;
			}
		}
		$o=new SalariesModel();
		$o->assignByHash($result);
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of SalariesModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return SalariesModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('SalariesModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>