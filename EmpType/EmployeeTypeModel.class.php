<?php

/**
 *
 *
 * @version 1.2.6.3 - generated: 9/8/09 9:10 PM
 */
class EmployeeTypeModel {
    const SQL_IDENTIFIER_QUOTE='`';
    const SQL_TABLE_NAME='employee_type';
    const SQL_INSERT='INSERT INTO `employee_type` (`ID`,`Emp_Type`,`Emp_DA`,`Emp_Rate_Wholes`,`Emp_Rate_Pieces`,`Emp_Rate_Day`,`CalbyDays`,`Description`) VALUES (?,?,?,?,?,?,?,?)';
    const SQL_UPDATE='UPDATE `employee_type` SET `ID`=?,`Emp_Type`=?,`Emp_DA`=?,`Emp_Rate_Wholes`=?,`Emp_Rate_Pieces`=?,`Emp_Rate_Day`=?,`CalbyDays`=?,`Description`=? WHERE `ID`=?';
    const SQL_SELECT_PK='SELECT * FROM `employee_type` WHERE `ID`=?';
    const SQL_DELETE_PK='DELETE FROM `employee_type` WHERE `ID`=?';
    const FIELD_ID=0;
    const FIELD_EMP_TYPE=1;
    const FIELD_EMP_DA=2;
    const FIELD_EMP_RATE_WHOLES=3;
    const FIELD_EMP_RATE_PIECES=4;
    const FIELD_EMP_RATE_DAY=5;
    const FIELD_CALBYDAYS=6;
    const FIELD_DESCRIPTION=7;
    private static $PRIMARY_KEYS=array(self::FIELD_ID);
    private static $FIELD_NAMES=array(
    self::FIELD_ID=>'ID',
    self::FIELD_EMP_TYPE=>'Emp_Type',
    self::FIELD_EMP_DA=>'Emp_DA',
    self::FIELD_EMP_RATE_WHOLES=>'Emp_Rate_Wholes',
    self::FIELD_EMP_RATE_PIECES=>'Emp_Rate_Pieces',
    self::FIELD_EMP_RATE_DAY=>'Emp_Rate_Day',
    self::FIELD_CALBYDAYS=>'CalbyDays',
    self::FIELD_DESCRIPTION=>'Description');
    private static $DEFAULT_VALUES=array(
    'ID'=>null,
    'Emp_Type'=>'',
    'Emp_DA'=>'',
    'Emp_Rate_Wholes'=>'',
    'Emp_Rate_Pieces'=>'',
    'Emp_Rate_Day'=>'',
    'CalbyDays'=>'',
    'Description'=>'');
    private $id;
    private $eMpType;
    private $eMpDa;
    private $eMpRateWholes;
    private $eMpRatePieces;
    private $eMpRateDay;
    private $calByDays;
    private $description;

    /**
     * store for old instance after object has been modified
     *
     * @var EmployeeTypeModel
     */
    private $oldInstance=null;

    /**
     * get old instance if this has been modified, otherwise return null
     *
     * @return EmployeeTypeModel
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
     * @return EmployeeTypeModel
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
     * set value for Emp_Type
     *
     * type:VARCHAR,size:40,default:null
     *
     * @param mixed $eMpType
     * @return EmployeeTypeModel
     */
    public function &setEMpType($eMpType) {
        $this->notifyChanged(self::FIELD_EMP_TYPE);
        $this->eMpType=$eMpType;
        return $this;
    }

    /**
     * get value for Emp_Type
     *
     * type:VARCHAR,size:40,default:null
     *
     * @return mixed
     */
    public function getEMpType() {
        return $this->eMpType;
    }

    /**
     * set value for Emp_DA
     *
     * type:FLOAT,size:12,default:null
     *
     * @param mixed $eMpDa
     * @return EmployeeTypeModel
     */
    public function &setEMpDa($eMpDa) {
        $this->notifyChanged(self::FIELD_EMP_DA);
        $this->eMpDa=$eMpDa;
        return $this;
    }

    /**
     * get value for Emp_DA
     *
     * type:FLOAT,size:12,default:null
     *
     * @return mixed
     */
    public function getEMpDa() {
        return $this->eMpDa;
    }

    /**
     * set value for Emp_Rate_Wholes
     *
     * type:FLOAT,size:12,default:null
     *
     * @param mixed $eMpRateWholes
     * @return EmployeeTypeModel
     */
    public function &setEMpRateWholes($eMpRateWholes) {
        $this->notifyChanged(self::FIELD_EMP_RATE_WHOLES);
        $this->eMpRateWholes=$eMpRateWholes;
        return $this;
    }

    /**
     * get value for Emp_Rate_Wholes
     *
     * type:FLOAT,size:12,default:null
     *
     * @return mixed
     */
    public function getEMpRateWholes() {
        return $this->eMpRateWholes;
    }

    /**
     * set value for Emp_Rate_Pieces
     *
     * type:FLOAT,size:12,default:null
     *
     * @param mixed $eMpRatePieces
     * @return EmployeeTypeModel
     */
    public function &setEMpRatePieces($eMpRatePieces) {
        $this->notifyChanged(self::FIELD_EMP_RATE_PIECES);
        $this->eMpRatePieces=$eMpRatePieces;
        return $this;
    }

    /**
     * get value for Emp_Rate_Pieces
     *
     * type:FLOAT,size:12,default:null
     *
     * @return mixed
     */
    public function getEMpRatePieces() {
        return $this->eMpRatePieces;
    }

    /**
     * set value for Emp_Rate_Day
     *
     * type:FLOAT,size:12,default:null
     *
     * @param mixed $eMpRateDay
     * @return EmployeeTypeModel
     */
    public function &setEMpRateDay($eMpRateDay) {
        $this->notifyChanged(self::FIELD_EMP_RATE_DAY);
        $this->eMpRateDay=$eMpRateDay;
        return $this;
    }

    /**
     * get value for Emp_Rate_Day
     *
     * type:FLOAT,size:12,default:null
     *
     * @return mixed
     */
    public function getEMpRateDay() {
        return $this->eMpRateDay;
    }

    /**
     * set value for CalbyDays
     *
     * type:BIT,size:0,default:null
     *
     * @param mixed $calByDays
     * @return EmployeeTypeModel
     */
    public function &setCalByDays($calByDays) {
        $this->notifyChanged(self::FIELD_CALBYDAYS);
        if($calByDays!=1) {
            $calByDays=0;
        }
        $this->calByDays=$calByDays;
        return $this;
    }

    /**
     * get value for CalbyDays
     *
     * type:BIT,size:0,default:null
     *
     * @return mixed
     */
    public function getCalByDays() {
        return $this->calByDays;
    }

    /**
     * set value for Description
     *
     * type:VARCHAR,size:100,default:null
     *
     * @param mixed $description
     * @return EmployeeTypeModel
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
        self::FIELD_EMP_TYPE=>$this->getEMpType(),
        self::FIELD_EMP_DA=>$this->getEMpDa(),
        self::FIELD_EMP_RATE_WHOLES=>$this->getEMpRateWholes(),
        self::FIELD_EMP_RATE_PIECES=>$this->getEMpRatePieces(),
        self::FIELD_EMP_RATE_DAY=>$this->getEMpRateDay(),
        self::FIELD_CALBYDAYS=>$this->getCalByDays(),
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
     * Match by attributes of passed example instance and return matched rows as an array of EmployeeTypeModel instances
     *
     * @param PDO $db a PDO Database instance
     * @param EmployeeTypeModel $example an example instance
     * @return EmployeeTypeModel[]
     */
    public static function findByExample(PDO $db,EmployeeTypeModel $example, $and=true) {
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
     * Will return matched rows as an array of EmployeeTypeModel instances.
     *
     * @param PDO $db a PDO Database instance
     * @param array $filter
     * @param boolean $and
     * @return EmployeeTypeModel[]
     */
    public static function findByFilter(PDO $db, $filter, $and=true) {
        if ($filter instanceof DFC) {
            $filter=array($filter);
        }
        $sql='SELECT * FROM `employee_type`'
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
            $o=new EmployeeTypeModel();
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
     * Execute select query and return matched rows as an array of EmployeeTypeModel instances.
     *
     * The query should of course be on the table for this entity class and return all fields.
     *
     * @param PDO $db a PDO Database instance
     * @param string $sql
     * @return EmployeeTypeModel[]
     */
    public static function findBySql(PDO $db, $sql) {
        $stmt=$db->query($sql);
        //print $sql;
        $resultInstances=array();
        while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
            $o=new EmployeeTypeModel();
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
        $sql='DELETE FROM `employee_type`'
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
        $this->setEMpType($result['Emp_Type']);
        $this->setEMpDa($result['Emp_DA']);
        $this->setEMpRateWholes($result['Emp_Rate_Wholes']);
        $this->setEMpRatePieces($result['Emp_Rate_Pieces']);
        $this->setEMpRateDay($result['Emp_Rate_Day']);
        $this->setCalByDays($result['CalbyDays']);
        $this->setDescription($result['Description']);
    }

    /**
     * Get element instance by it's primary key(s).
     * Will return null if no row was matched.
     *
     * @param PDO $db
     * @return EmployeeTypeModel
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
        $o=new EmployeeTypeModel();
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
        $stmt->bindValue(2,$this->getEMpType());
        $stmt->bindValue(3,$this->getEMpDa());
        $stmt->bindValue(4,$this->getEMpRateWholes());
        $stmt->bindValue(5,$this->getEMpRatePieces());
        $stmt->bindValue(6,$this->getEMpRateDay());
        $stmt->bindValue(7,$this->getCalByDays());
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
        $root=$doc->createElement('EmployeeTypeModel');
        foreach ($this->toHash() as $fieldName=>$value) {
            $fElem=$doc->createElement($fieldName);
            $fElem->appendChild($doc->createTextNode($value));
            $root->appendChild($fElem);
        }
        $doc->appendChild($root);
        return $doc;
    }

    /**
     * get single EmployeeTypeModel instance from a DOMElement
     *
     * @param DOMElement $node
     * @return EmployeeTypeModel
     */
    public static function fromDOMElement(DOMElement $node) {
        if ('EmployeeTypeModel'!=$node->nodeName) {
            return new InvalidArgumentException('expected: EmployeeTypeModel, got: ' . $node->nodeName, 0);
        }
        $result=array();
        foreach (self::$FIELD_NAMES as $fieldName) {
            $n=$node->getElementsByTagName($fieldName)->item(0);
            if (!is_null($n)) {
                $result[$fieldName]=$n->nodeValue;
            }
        }
        $o=new EmployeeTypeModel();
        $o->assignByHash($result);
        $o->notifyPristine();
        return $o;
    }

    /**
     * get all instances of EmployeeTypeModel from the passed DOMDocument
     *
     * @param DOMDocument $doc
     * @return EmployeeTypeModel[]
     */
    public static function fromDOMDocument(DOMDocument $doc) {
        $instances=array();
        foreach ($doc->getElementsByTagName('EmployeeTypeModel') as $node) {
            $instances[]=self::fromDOMElement($node);
        }
        return $instances;
    }

}
?>