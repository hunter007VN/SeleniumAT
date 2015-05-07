<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class PmfProcExtinfoModel extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='PmfProcExtinfoModel';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='pmf_proc_extinfo';
	const SQL_INSERT='INSERT INTO `pmf_proc_extinfo` (`id`,`procid`,`fieldname`,`ismultival`,`reftable`,`reffldname`,`reffldval`,`valtype`,`length`,`isrequired`,`ordnum`,`proclineid`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `pmf_proc_extinfo` (`procid`,`fieldname`,`ismultival`,`reftable`,`reffldname`,`reffldval`,`valtype`,`length`,`isrequired`,`ordnum`,`proclineid`) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `pmf_proc_extinfo` SET `id`=?,`procid`=?,`fieldname`=?,`ismultival`=?,`reftable`=?,`reffldname`=?,`reffldval`=?,`valtype`=?,`length`=?,`isrequired`=?,`ordnum`=?,`proclineid`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `pmf_proc_extinfo` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `pmf_proc_extinfo` WHERE `id`=?';
	const FIELD_ID=1990533997;
	const FIELD_PROCID=-1673080765;
	const FIELD_FIELDNAME=-1590978573;
	const FIELD_ISMULTIVAL=1425056452;
	const FIELD_REFTABLE=-1217038355;
	const FIELD_REFFLDNAME=-566077368;
	const FIELD_REFFLDVAL=535936452;
	const FIELD_VALTYPE=215214793;
	const FIELD_LENGTH=-1799628744;
	const FIELD_ISREQUIRED=378082075;
	const FIELD_ORDNUM=-1702026665;
	const FIELD_PROCLINEID=-2052620489;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_PROCID=>'procid',
		self::FIELD_FIELDNAME=>'fieldname',
		self::FIELD_ISMULTIVAL=>'ismultival',
		self::FIELD_REFTABLE=>'reftable',
		self::FIELD_REFFLDNAME=>'reffldname',
		self::FIELD_REFFLDVAL=>'reffldval',
		self::FIELD_VALTYPE=>'valtype',
		self::FIELD_LENGTH=>'length',
		self::FIELD_ISREQUIRED=>'isrequired',
		self::FIELD_ORDNUM=>'ordnum',
		self::FIELD_PROCLINEID=>'proclineid');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_PROCID=>'procid',
		self::FIELD_FIELDNAME=>'fieldname',
		self::FIELD_ISMULTIVAL=>'ismultival',
		self::FIELD_REFTABLE=>'reftable',
		self::FIELD_REFFLDNAME=>'reffldname',
		self::FIELD_REFFLDVAL=>'reffldval',
		self::FIELD_VALTYPE=>'valtype',
		self::FIELD_LENGTH=>'length',
		self::FIELD_ISREQUIRED=>'isrequired',
		self::FIELD_ORDNUM=>'ordnum',
		self::FIELD_PROCLINEID=>'proclineid');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_PROCID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_FIELDNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ISMULTIVAL=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_REFTABLE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_REFFLDNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_REFFLDVAL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_VALTYPE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LENGTH=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ISREQUIRED=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ORDNUM=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_PROCLINEID=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_PROCID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_FIELDNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,30,0,false),
		self::FIELD_ISMULTIVAL=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_REFTABLE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,30,0,true),
		self::FIELD_REFFLDNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,30,0,true),
		self::FIELD_REFFLDVAL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,30,0,true),
		self::FIELD_VALTYPE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,20,0,false),
		self::FIELD_LENGTH=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,10,0,true),
		self::FIELD_ISREQUIRED=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_ORDNUM=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_PROCLINEID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_PROCID=>null,
		self::FIELD_FIELDNAME=>'',
		self::FIELD_ISMULTIVAL=>0,
		self::FIELD_REFTABLE=>null,
		self::FIELD_REFFLDNAME=>null,
		self::FIELD_REFFLDVAL=>null,
		self::FIELD_VALTYPE=>'',
		self::FIELD_LENGTH=>null,
		self::FIELD_ISREQUIRED=>0,
		self::FIELD_ORDNUM=>0,
		self::FIELD_PROCLINEID=>null);
	private $id;
	private $procid;
	private $fieldname;
	private $ismultival;
	private $reftable;
	private $reffldname;
	private $reffldval;
	private $valtype;
	private $length;
	private $isrequired;
	private $ordnum;
	private $proclineid;

	/**
	 * set value for id 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return PmfProcExtinfoModel
	 */
	public function &setId($id) {
		$this->notifyChanged(self::FIELD_ID,$this->id,$id);
		$this->id=$id;
		return $this;
	}

	/**
	 * get value for id 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * set value for procid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $procid
	 * @return PmfProcExtinfoModel
	 */
	public function &setProcid($procid) {
		$this->notifyChanged(self::FIELD_PROCID,$this->procid,$procid);
		$this->procid=$procid;
		return $this;
	}

	/**
	 * get value for procid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getProcid() {
		return $this->procid;
	}

	/**
	 * set value for fieldname 
	 *
	 * type:VARCHAR,size:30,default:null
	 *
	 * @param mixed $fieldname
	 * @return PmfProcExtinfoModel
	 */
	public function &setFieldname($fieldname) {
		$this->notifyChanged(self::FIELD_FIELDNAME,$this->fieldname,$fieldname);
		$this->fieldname=$fieldname;
		return $this;
	}

	/**
	 * get value for fieldname 
	 *
	 * type:VARCHAR,size:30,default:null
	 *
	 * @return mixed
	 */
	public function getFieldname() {
		return $this->fieldname;
	}

	/**
	 * set value for ismultival 
	 *
	 * type:INT UNSIGNED,size:10,default:null
	 *
	 * @param mixed $ismultival
	 * @return PmfProcExtinfoModel
	 */
	public function &setIsmultival($ismultival) {
		$this->notifyChanged(self::FIELD_ISMULTIVAL,$this->ismultival,$ismultival);
		$this->ismultival=$ismultival;
		return $this;
	}

	/**
	 * get value for ismultival 
	 *
	 * type:INT UNSIGNED,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getIsmultival() {
		return $this->ismultival;
	}

	/**
	 * set value for reftable 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @param mixed $reftable
	 * @return PmfProcExtinfoModel
	 */
	public function &setReftable($reftable) {
		$this->notifyChanged(self::FIELD_REFTABLE,$this->reftable,$reftable);
		$this->reftable=$reftable;
		return $this;
	}

	/**
	 * get value for reftable 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getReftable() {
		return $this->reftable;
	}

	/**
	 * set value for reffldname 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @param mixed $reffldname
	 * @return PmfProcExtinfoModel
	 */
	public function &setReffldname($reffldname) {
		$this->notifyChanged(self::FIELD_REFFLDNAME,$this->reffldname,$reffldname);
		$this->reffldname=$reffldname;
		return $this;
	}

	/**
	 * get value for reffldname 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getReffldname() {
		return $this->reffldname;
	}

	/**
	 * set value for reffldval 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @param mixed $reffldval
	 * @return PmfProcExtinfoModel
	 */
	public function &setReffldval($reffldval) {
		$this->notifyChanged(self::FIELD_REFFLDVAL,$this->reffldval,$reffldval);
		$this->reffldval=$reffldval;
		return $this;
	}

	/**
	 * get value for reffldval 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getReffldval() {
		return $this->reffldval;
	}

	/**
	 * set value for valtype 
	 *
	 * type:VARCHAR,size:20,default:null
	 *
	 * @param mixed $valtype
	 * @return PmfProcExtinfoModel
	 */
	public function &setValtype($valtype) {
		$this->notifyChanged(self::FIELD_VALTYPE,$this->valtype,$valtype);
		$this->valtype=$valtype;
		return $this;
	}

	/**
	 * get value for valtype 
	 *
	 * type:VARCHAR,size:20,default:null
	 *
	 * @return mixed
	 */
	public function getValtype() {
		return $this->valtype;
	}

	/**
	 * set value for length 
	 *
	 * type:VARCHAR,size:10,default:null,nullable
	 *
	 * @param mixed $length
	 * @return PmfProcExtinfoModel
	 */
	public function &setLength($length) {
		$this->notifyChanged(self::FIELD_LENGTH,$this->length,$length);
		$this->length=$length;
		return $this;
	}

	/**
	 * get value for length 
	 *
	 * type:VARCHAR,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getLength() {
		return $this->length;
	}

	/**
	 * set value for isrequired 
	 *
	 * type:INT UNSIGNED,size:10,default:null
	 *
	 * @param mixed $isrequired
	 * @return PmfProcExtinfoModel
	 */
	public function &setIsrequired($isrequired) {
		$this->notifyChanged(self::FIELD_ISREQUIRED,$this->isrequired,$isrequired);
		$this->isrequired=$isrequired;
		return $this;
	}

	/**
	 * get value for isrequired 
	 *
	 * type:INT UNSIGNED,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getIsrequired() {
		return $this->isrequired;
	}

	/**
	 * set value for ordnum 
	 *
	 * type:INT UNSIGNED,size:10,default:0,nullable
	 *
	 * @param mixed $ordnum
	 * @return PmfProcExtinfoModel
	 */
	public function &setOrdnum($ordnum) {
		$this->notifyChanged(self::FIELD_ORDNUM,$this->ordnum,$ordnum);
		$this->ordnum=$ordnum;
		return $this;
	}

	/**
	 * get value for ordnum 
	 *
	 * type:INT UNSIGNED,size:10,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getOrdnum() {
		return $this->ordnum;
	}

	/**
	 * set value for proclineid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $proclineid
	 * @return PmfProcExtinfoModel
	 */
	public function &setProclineid($proclineid) {
		$this->notifyChanged(self::FIELD_PROCLINEID,$this->proclineid,$proclineid);
		$this->proclineid=$proclineid;
		return $this;
	}

	/**
	 * get value for proclineid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getProclineid() {
		return $this->proclineid;
	}

	/**
	 * Get table name
	 *
	 * @return string
	 */
	public static function getTableName() {
		return self::SQL_TABLE_NAME;
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
	 * Get array with field id as index and property name as value
	 *
	 * @return array
	 */
	public static function getPropertyNames() {
		return self::$PROPERTY_NAMES;
	}

	/**
	 * get the field name for the passed field id.
	 *
	 * @param int $fieldId
	 * @param bool $fullyQualifiedName true if field name should be qualified by table name
	 * @return string field name for the passed field id, null if the field doesn't exist
	 */
	public static function getFieldNameByFieldId($fieldId, $fullyQualifiedName=true) {
		if (!array_key_exists($fieldId, self::$FIELD_NAMES)) {
			return null;
		}
		$fieldName=self::SQL_IDENTIFIER_QUOTE . self::$FIELD_NAMES[$fieldId] . self::SQL_IDENTIFIER_QUOTE;
		if ($fullyQualifiedName) {
			return self::SQL_IDENTIFIER_QUOTE . self::SQL_TABLE_NAME . self::SQL_IDENTIFIER_QUOTE . '.' . $fieldName;
		}
		return $fieldName;
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
	 * Get array with field ids of autoincrement fields
	 *
	 * @return array
	 */
	public static function getAutoincrementFields() {
		return self::$AUTOINCREMENT_FIELDS;
	}

	/**
	 * Get array with field id as index and property type as value
	 *
	 * @return array
	 */
	public static function getPropertyTypes() {
		return self::$PROPERTY_TYPES;
	}

	/**
	 * Get array with field id as index and field type as value
	 *
	 * @return array
	 */
	public static function getFieldTypes() {
		return self::$FIELD_TYPES;
	}

	/**
	 * Assign default values according to table
	 * 
	 */
	public function assignDefaultValues() {
		$this->assignByArray(self::$DEFAULT_VALUES);
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
			self::FIELD_PROCID=>$this->getProcid(),
			self::FIELD_FIELDNAME=>$this->getFieldname(),
			self::FIELD_ISMULTIVAL=>$this->getIsmultival(),
			self::FIELD_REFTABLE=>$this->getReftable(),
			self::FIELD_REFFLDNAME=>$this->getReffldname(),
			self::FIELD_REFFLDVAL=>$this->getReffldval(),
			self::FIELD_VALTYPE=>$this->getValtype(),
			self::FIELD_LENGTH=>$this->getLength(),
			self::FIELD_ISREQUIRED=>$this->getIsrequired(),
			self::FIELD_ORDNUM=>$this->getOrdnum(),
			self::FIELD_PROCLINEID=>$this->getProclineid());
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
	 * cached statements
	 *
	 * @var array<string,array<string,PDOStatement>>
	 */
	private static $stmts=array();
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
			if (in_array($statement, array(self::SQL_INSERT, self::SQL_INSERT_AUTOINCREMENT, self::SQL_UPDATE, self::SQL_SELECT_PK, self::SQL_DELETE_PK))) {
				$dbInstanceId=spl_object_hash($db);
				if (empty(self::$stmts[$statement][$dbInstanceId])) {
					self::$stmts[$statement][$dbInstanceId]=$db->prepare($statement);
				}
				return self::$stmts[$statement][$dbInstanceId];
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
	 * check if this instance exists in the database
	 *
	 * @param PDO $db
	 * @return bool
	 */
	public function existsInDatabase(PDO $db) {
		$filter=array();
		foreach ($this->getPrimaryKeyValues() as $fieldId=>$value) {
			$filter[]=new DFC($fieldId, $value, DFC::EXACT_NULLSAFE);
		}
		return 0!=count(self::findByFilter($db, $filter, true));
	}
	
	/**
	 * Update to database if exists, otherwise insert
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateInsertToDatabase(PDO $db) {
		if ($this->existsInDatabase($db)) {
			return $this->updateToDatabase($db);
		} else {
			return $this->insertIntoDatabase($db);
		}
	}

	/**
	 * Query by Example.
	 *
	 * Match by attributes of passed example instance and return matched rows as an array of PmfProcExtinfoModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param PmfProcExtinfoModel $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PmfProcExtinfoModel[]
	 */
	public static function findByExample(PDO $db,PmfProcExtinfoModel $example, $and=true, $sort=null) {
		$exampleValues=$example->toArray();
		$filter=array();
		foreach ($exampleValues as $fieldId=>$value) {
			if (null!==$value) {
				$filter[$fieldId]=$value;
			}
		}
		return self::findByFilter($db, $filter, $and, $sort);
	}

	/**
	 * Query by filter.
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * Will return matched rows as an array of PmfProcExtinfoModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PmfProcExtinfoModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `pmf_proc_extinfo`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of PmfProcExtinfoModel instances
	 *
	 * @param PDOStatement $stmt
	 * @return PmfProcExtinfoModel[]
	 */
	public static function fromStatement(PDOStatement $stmt) {
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * returns the result as an array of PmfProcExtinfoModel instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return PmfProcExtinfoModel[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new PmfProcExtinfoModel();
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
	 * @param bool $fullyQualifiedNames true if field names should be qualified by table name
	 * @param bool $prependWhere true if WHERE should be prepended to conditions
	 * @return string
	 */
	public static function buildSqlWhere($filter, $and, $fullyQualifiedNames=true, $prependWhere=false) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		return $filter->buildSqlWhere(new self::$CLASS_NAME, $fullyQualifiedNames, $prependWhere);
	}

	/**
	 * get sql ORDER BY part from DSCs
	 *
	 * @param array $sort array of DSC instances
	 * @return string
	 */
	protected static function buildSqlOrderBy($sort) {
		return DSC::buildSqlOrderBy(new self::$CLASS_NAME, $sort);
	}

	/**
	 * bind values from filter to statement
	 *
	 * @param PDOStatement $stmt
	 * @param DFCInterface $filter
	 */
	public static function bindValuesForFilter(PDOStatement &$stmt, DFCInterface $filter) {
		$filter->bindValuesForFilter(new self::$CLASS_NAME, $stmt);
	}

	/**
	 * Execute select query and return matched rows as an array of PmfProcExtinfoModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return PmfProcExtinfoModel[]
	 */
	public static function findBySql(PDO $db, $sql) {
		$stmt=$db->query($sql);
		return self::fromExecutedStatement($stmt);
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
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		if (0==count($filter)) {
			throw new InvalidArgumentException('refusing to delete without filter'); // just comment out this line if you are brave
		}
		$sql='DELETE FROM `pmf_proc_extinfo`'
		. self::buildSqlWhere($filter, $and, false, true);
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
		$this->setId($result['id']);
		$this->setProcid($result['procid']);
		$this->setFieldname($result['fieldname']);
		$this->setIsmultival($result['ismultival']);
		$this->setReftable($result['reftable']);
		$this->setReffldname($result['reffldname']);
		$this->setReffldval($result['reffldval']);
		$this->setValtype($result['valtype']);
		$this->setLength($result['length']);
		$this->setIsrequired($result['isrequired']);
		$this->setOrdnum($result['ordnum']);
		$this->setProclineid($result['proclineid']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return PmfProcExtinfoModel
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
		$o=new PmfProcExtinfoModel();
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
		$stmt->bindValue(2,$this->getProcid());
		$stmt->bindValue(3,$this->getFieldname());
		$stmt->bindValue(4,$this->getIsmultival());
		$stmt->bindValue(5,$this->getReftable());
		$stmt->bindValue(6,$this->getReffldname());
		$stmt->bindValue(7,$this->getReffldval());
		$stmt->bindValue(8,$this->getValtype());
		$stmt->bindValue(9,$this->getLength());
		$stmt->bindValue(10,$this->getIsrequired());
		$stmt->bindValue(11,$this->getOrdnum());
		$stmt->bindValue(12,$this->getProclineid());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getProcid());
			$stmt->bindValue(2,$this->getFieldname());
			$stmt->bindValue(3,$this->getIsmultival());
			$stmt->bindValue(4,$this->getReftable());
			$stmt->bindValue(5,$this->getReffldname());
			$stmt->bindValue(6,$this->getReffldval());
			$stmt->bindValue(7,$this->getValtype());
			$stmt->bindValue(8,$this->getLength());
			$stmt->bindValue(9,$this->getIsrequired());
			$stmt->bindValue(10,$this->getOrdnum());
			$stmt->bindValue(11,$this->getProclineid());
		} else {
			$stmt=self::prepareStatement($db,self::SQL_INSERT);
			$this->bindValues($stmt);
		}
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$lastInsertId=$db->lastInsertId();
		if (false!==$lastInsertId) {
			$this->setId($lastInsertId);
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
		$stmt->bindValue(13,$this->getId());
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
	 * Fetch PmfProcExtinfoOptModel's which this PmfProcExtinfoModel references.
	 * `pmf_proc_extinfo`.`id` -> `pmf_proc_extinfo_opt`.`extinfoid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfProcExtinfoOptModel[]
	 */
	public function fetchPmfProcExtinfoOptModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfProcExtinfoOptModel::FIELD_EXTINFOID=>$this->getId());
		return PmfProcExtinfoOptModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfProcessModel which references this PmfProcExtinfoModel. Will return null in case reference is invalid.
	 * `pmf_proc_extinfo`.`procid` -> `pmf_process`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfProcessModel
	 */
	public function fetchPmfProcessModel(PDO $db, $sort=null) {
		$filter=array(PmfProcessModel::FIELD_ID=>$this->getProcid());
		$result=PmfProcessModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch PmfProclineModel which references this PmfProcExtinfoModel. Will return null in case reference is invalid.
	 * `pmf_proc_extinfo`.`proclineid` -> `pmf_procline`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfProclineModel
	 */
	public function fetchPmfProclineModel(PDO $db, $sort=null) {
		$filter=array(PmfProclineModel::FIELD_ID=>$this->getProclineid());
		$result=PmfProclineModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'PmfProcExtinfoModel');
	}

	/**
	 * get single PmfProcExtinfoModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return PmfProcExtinfoModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new PmfProcExtinfoModel();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of PmfProcExtinfoModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return PmfProcExtinfoModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('PmfProcExtinfoModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>