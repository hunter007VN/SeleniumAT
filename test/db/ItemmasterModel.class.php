<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class ItemmasterModel extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='ItemmasterModel';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='itemmaster';
	const SQL_INSERT='INSERT INTO `itemmaster` (`id`,`partno`,`itemdesc`,`isserial`,`manfname`,`manfpartno`,`ssnpattern`,`itemmasterstatus`,`tag`,`timestamp`,`typeid`,`minqty`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `itemmaster` (`partno`,`itemdesc`,`isserial`,`manfname`,`manfpartno`,`ssnpattern`,`itemmasterstatus`,`tag`,`timestamp`,`typeid`,`minqty`) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `itemmaster` SET `id`=?,`partno`=?,`itemdesc`=?,`isserial`=?,`manfname`=?,`manfpartno`=?,`ssnpattern`=?,`itemmasterstatus`=?,`tag`=?,`timestamp`=?,`typeid`=?,`minqty`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `itemmaster` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `itemmaster` WHERE `id`=?';
	const FIELD_ID=508831348;
	const FIELD_PARTNO=-30341683;
	const FIELD_ITEMDESC=895396541;
	const FIELD_ISSERIAL=401733175;
	const FIELD_MANFNAME=-154505872;
	const FIELD_MANFPARTNO=1901137561;
	const FIELD_SSNPATTERN=-1874095589;
	const FIELD_ITEMMASTERSTATUS=-16979712;
	const FIELD_TAG=-1406086815;
	const FIELD_TIMESTAMP=-115373667;
	const FIELD_TYPEID=106265262;
	const FIELD_MINQTY=-108962819;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_PARTNO=>'partno',
		self::FIELD_ITEMDESC=>'itemdesc',
		self::FIELD_ISSERIAL=>'isserial',
		self::FIELD_MANFNAME=>'manfname',
		self::FIELD_MANFPARTNO=>'manfpartno',
		self::FIELD_SSNPATTERN=>'ssnpattern',
		self::FIELD_ITEMMASTERSTATUS=>'itemmasterstatus',
		self::FIELD_TAG=>'tag',
		self::FIELD_TIMESTAMP=>'timestamp',
		self::FIELD_TYPEID=>'typeid',
		self::FIELD_MINQTY=>'minqty');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_PARTNO=>'partno',
		self::FIELD_ITEMDESC=>'itemdesc',
		self::FIELD_ISSERIAL=>'isserial',
		self::FIELD_MANFNAME=>'manfname',
		self::FIELD_MANFPARTNO=>'manfpartno',
		self::FIELD_SSNPATTERN=>'ssnpattern',
		self::FIELD_ITEMMASTERSTATUS=>'itemmasterstatus',
		self::FIELD_TAG=>'tag',
		self::FIELD_TIMESTAMP=>'timestamp',
		self::FIELD_TYPEID=>'typeid',
		self::FIELD_MINQTY=>'minqty');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_PARTNO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ITEMDESC=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ISSERIAL=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_MANFNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MANFPARTNO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SSNPATTERN=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ITEMMASTERSTATUS=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TAG=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TIMESTAMP=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TYPEID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_MINQTY=>Db2PhpEntity::PHP_TYPE_FLOAT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_PARTNO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,30,0,false),
		self::FIELD_ITEMDESC=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_ISSERIAL=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_MANFNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,35,0,true),
		self::FIELD_MANFPARTNO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,30,0,true),
		self::FIELD_SSNPATTERN=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_ITEMMASTERSTATUS=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_TAG=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,true),
		self::FIELD_TIMESTAMP=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_TYPEID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_MINQTY=>array(Db2PhpEntity::JDBC_TYPE_DOUBLE,22,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_PARTNO=>'',
		self::FIELD_ITEMDESC=>null,
		self::FIELD_ISSERIAL=>0,
		self::FIELD_MANFNAME=>null,
		self::FIELD_MANFPARTNO=>null,
		self::FIELD_SSNPATTERN=>null,
		self::FIELD_ITEMMASTERSTATUS=>1,
		self::FIELD_TAG=>null,
		self::FIELD_TIMESTAMP=>null,
		self::FIELD_TYPEID=>null,
		self::FIELD_MINQTY=>null);
	private $id;
	private $partno;
	private $itemdesc;
	private $isserial;
	private $manfname;
	private $manfpartno;
	private $ssnpattern;
	private $itemmasterstatus;
	private $tag;
	private $timestamp;
	private $typeid;
	private $minqty;

	/**
	 * set value for id 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return ItemmasterModel
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
	 * set value for partno 
	 *
	 * type:VARCHAR,size:30,default:null,unique
	 *
	 * @param mixed $partno
	 * @return ItemmasterModel
	 */
	public function &setPartno($partno) {
		$this->notifyChanged(self::FIELD_PARTNO,$this->partno,$partno);
		$this->partno=$partno;
		return $this;
	}

	/**
	 * get value for partno 
	 *
	 * type:VARCHAR,size:30,default:null,unique
	 *
	 * @return mixed
	 */
	public function getPartno() {
		return $this->partno;
	}

	/**
	 * set value for itemdesc 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $itemdesc
	 * @return ItemmasterModel
	 */
	public function &setItemdesc($itemdesc) {
		$this->notifyChanged(self::FIELD_ITEMDESC,$this->itemdesc,$itemdesc);
		$this->itemdesc=$itemdesc;
		return $this;
	}

	/**
	 * get value for itemdesc 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getItemdesc() {
		return $this->itemdesc;
	}

	/**
	 * set value for isserial 
	 *
	 * type:INT UNSIGNED,size:10,default:null
	 *
	 * @param mixed $isserial
	 * @return ItemmasterModel
	 */
	public function &setIsserial($isserial) {
		$this->notifyChanged(self::FIELD_ISSERIAL,$this->isserial,$isserial);
		$this->isserial=$isserial;
		return $this;
	}

	/**
	 * get value for isserial 
	 *
	 * type:INT UNSIGNED,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getIsserial() {
		return $this->isserial;
	}

	/**
	 * set value for manfname 
	 *
	 * type:VARCHAR,size:35,default:null,nullable
	 *
	 * @param mixed $manfname
	 * @return ItemmasterModel
	 */
	public function &setManfname($manfname) {
		$this->notifyChanged(self::FIELD_MANFNAME,$this->manfname,$manfname);
		$this->manfname=$manfname;
		return $this;
	}

	/**
	 * get value for manfname 
	 *
	 * type:VARCHAR,size:35,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getManfname() {
		return $this->manfname;
	}

	/**
	 * set value for manfpartno 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @param mixed $manfpartno
	 * @return ItemmasterModel
	 */
	public function &setManfpartno($manfpartno) {
		$this->notifyChanged(self::FIELD_MANFPARTNO,$this->manfpartno,$manfpartno);
		$this->manfpartno=$manfpartno;
		return $this;
	}

	/**
	 * get value for manfpartno 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getManfpartno() {
		return $this->manfpartno;
	}

	/**
	 * set value for ssnpattern 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $ssnpattern
	 * @return ItemmasterModel
	 */
	public function &setSsnpattern($ssnpattern) {
		$this->notifyChanged(self::FIELD_SSNPATTERN,$this->ssnpattern,$ssnpattern);
		$this->ssnpattern=$ssnpattern;
		return $this;
	}

	/**
	 * get value for ssnpattern 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getSsnpattern() {
		return $this->ssnpattern;
	}

	/**
	 * set value for itemmasterstatus 
	 *
	 * type:INT UNSIGNED,size:10,default:1
	 *
	 * @param mixed $itemmasterstatus
	 * @return ItemmasterModel
	 */
	public function &setItemmasterstatus($itemmasterstatus) {
		$this->notifyChanged(self::FIELD_ITEMMASTERSTATUS,$this->itemmasterstatus,$itemmasterstatus);
		$this->itemmasterstatus=$itemmasterstatus;
		return $this;
	}

	/**
	 * get value for itemmasterstatus 
	 *
	 * type:INT UNSIGNED,size:10,default:1
	 *
	 * @return mixed
	 */
	public function getItemmasterstatus() {
		return $this->itemmasterstatus;
	}

	/**
	 * set value for tag 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @param mixed $tag
	 * @return ItemmasterModel
	 */
	public function &setTag($tag) {
		$this->notifyChanged(self::FIELD_TAG,$this->tag,$tag);
		$this->tag=$tag;
		return $this;
	}

	/**
	 * get value for tag 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTag() {
		return $this->tag;
	}

	/**
	 * set value for timestamp 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $timestamp
	 * @return ItemmasterModel
	 */
	public function &setTimestamp($timestamp) {
		$this->notifyChanged(self::FIELD_TIMESTAMP,$this->timestamp,$timestamp);
		$this->timestamp=$timestamp;
		return $this;
	}

	/**
	 * get value for timestamp 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTimestamp() {
		return $this->timestamp;
	}

	/**
	 * set value for typeid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $typeid
	 * @return ItemmasterModel
	 */
	public function &setTypeid($typeid) {
		$this->notifyChanged(self::FIELD_TYPEID,$this->typeid,$typeid);
		$this->typeid=$typeid;
		return $this;
	}

	/**
	 * get value for typeid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getTypeid() {
		return $this->typeid;
	}

	/**
	 * set value for minqty data is > 0 or NULL
	 *
	 * type:DOUBLE,size:22,default:null,nullable
	 *
	 * @param mixed $minqty
	 * @return ItemmasterModel
	 */
	public function &setMinqty($minqty) {
		$this->notifyChanged(self::FIELD_MINQTY,$this->minqty,$minqty);
		$this->minqty=$minqty;
		return $this;
	}

	/**
	 * get value for minqty data is > 0 or NULL
	 *
	 * type:DOUBLE,size:22,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getMinqty() {
		return $this->minqty;
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
			self::FIELD_PARTNO=>$this->getPartno(),
			self::FIELD_ITEMDESC=>$this->getItemdesc(),
			self::FIELD_ISSERIAL=>$this->getIsserial(),
			self::FIELD_MANFNAME=>$this->getManfname(),
			self::FIELD_MANFPARTNO=>$this->getManfpartno(),
			self::FIELD_SSNPATTERN=>$this->getSsnpattern(),
			self::FIELD_ITEMMASTERSTATUS=>$this->getItemmasterstatus(),
			self::FIELD_TAG=>$this->getTag(),
			self::FIELD_TIMESTAMP=>$this->getTimestamp(),
			self::FIELD_TYPEID=>$this->getTypeid(),
			self::FIELD_MINQTY=>$this->getMinqty());
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
	 * Match by attributes of passed example instance and return matched rows as an array of ItemmasterModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param ItemmasterModel $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return ItemmasterModel[]
	 */
	public static function findByExample(PDO $db,ItemmasterModel $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of ItemmasterModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return ItemmasterModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `itemmaster`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of ItemmasterModel instances
	 *
	 * @param PDOStatement $stmt
	 * @return ItemmasterModel[]
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
	 * returns the result as an array of ItemmasterModel instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return ItemmasterModel[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new ItemmasterModel();
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
	 * Execute select query and return matched rows as an array of ItemmasterModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return ItemmasterModel[]
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
		$sql='DELETE FROM `itemmaster`'
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
		$this->setPartno($result['partno']);
		$this->setItemdesc($result['itemdesc']);
		$this->setIsserial($result['isserial']);
		$this->setManfname($result['manfname']);
		$this->setManfpartno($result['manfpartno']);
		$this->setSsnpattern($result['ssnpattern']);
		$this->setItemmasterstatus($result['itemmasterstatus']);
		$this->setTag($result['tag']);
		$this->setTimestamp($result['timestamp']);
		$this->setTypeid($result['typeid']);
		$this->setMinqty($result['minqty']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return ItemmasterModel
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
		$o=new ItemmasterModel();
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
		$stmt->bindValue(2,$this->getPartno());
		$stmt->bindValue(3,$this->getItemdesc());
		$stmt->bindValue(4,$this->getIsserial());
		$stmt->bindValue(5,$this->getManfname());
		$stmt->bindValue(6,$this->getManfpartno());
		$stmt->bindValue(7,$this->getSsnpattern());
		$stmt->bindValue(8,$this->getItemmasterstatus());
		$stmt->bindValue(9,$this->getTag());
		$stmt->bindValue(10,$this->getTimestamp());
		$stmt->bindValue(11,$this->getTypeid());
		$stmt->bindValue(12,$this->getMinqty());
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
			$stmt->bindValue(1,$this->getPartno());
			$stmt->bindValue(2,$this->getItemdesc());
			$stmt->bindValue(3,$this->getIsserial());
			$stmt->bindValue(4,$this->getManfname());
			$stmt->bindValue(5,$this->getManfpartno());
			$stmt->bindValue(6,$this->getSsnpattern());
			$stmt->bindValue(7,$this->getItemmasterstatus());
			$stmt->bindValue(8,$this->getTag());
			$stmt->bindValue(9,$this->getTimestamp());
			$stmt->bindValue(10,$this->getTypeid());
			$stmt->bindValue(11,$this->getMinqty());
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
	 * Fetch CasepartModel's which this ItemmasterModel references.
	 * `itemmaster`.`id` -> `casepart`.`itemmasterid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return CasepartModel[]
	 */
	public function fetchCasepartModelCollection(PDO $db, $sort=null) {
		$filter=array(CasepartModel::FIELD_ITEMMASTERID=>$this->getId());
		return CasepartModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch ItemcatalogModel's which this ItemmasterModel references.
	 * `itemmaster`.`id` -> `itemcatalog`.`itemmasterid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ItemcatalogModel[]
	 */
	public function fetchItemcatalogModelCollection(PDO $db, $sort=null) {
		$filter=array(ItemcatalogModel::FIELD_ITEMMASTERID=>$this->getId());
		return ItemcatalogModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch OrderdetailModel's which this ItemmasterModel references.
	 * `itemmaster`.`id` -> `orderdetail`.`itemmasterid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return OrderdetailModel[]
	 */
	public function fetchOrderdetailModelCollection(PDO $db, $sort=null) {
		$filter=array(OrderdetailModel::FIELD_ITEMMASTERID=>$this->getId());
		return OrderdetailModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfBomModel's which this ItemmasterModel references.
	 * `itemmaster`.`id` -> `pmf_bom`.`itemmasterid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfBomModel[]
	 */
	public function fetchPmfBomModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfBomModel::FIELD_ITEMMASTERID=>$this->getId());
		return PmfBomModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfBomdetailModel's which this ItemmasterModel references.
	 * `itemmaster`.`id` -> `pmf_bomdetail`.`itemmasterid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfBomdetailModel[]
	 */
	public function fetchPmfBomdetailModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfBomdetailModel::FIELD_ITEMMASTERID=>$this->getId());
		return PmfBomdetailModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfInpinvModel's which this ItemmasterModel references.
	 * `itemmaster`.`id` -> `pmf_inpinv`.`itemmasterid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfInpinvModel[]
	 */
	public function fetchPmfInpinvModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfInpinvModel::FIELD_ITEMMASTERID=>$this->getId());
		return PmfInpinvModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfInvModel's which this ItemmasterModel references.
	 * `itemmaster`.`id` -> `pmf_inv`.`itemmasterid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfInvModel[]
	 */
	public function fetchPmfInvModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfInvModel::FIELD_ITEMMASTERID=>$this->getId());
		return PmfInvModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfInvhisModel's which this ItemmasterModel references.
	 * `itemmaster`.`id` -> `pmf_invhis`.`itemmasterid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfInvhisModel[]
	 */
	public function fetchPmfInvhisModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfInvhisModel::FIELD_ITEMMASTERID=>$this->getId());
		return PmfInvhisModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfOutinvModel's which this ItemmasterModel references.
	 * `itemmaster`.`id` -> `pmf_outinv`.`itemmasterid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfOutinvModel[]
	 */
	public function fetchPmfOutinvModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfOutinvModel::FIELD_ITEMMASTERID=>$this->getId());
		return PmfOutinvModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch ItemmastertypeModel which references this ItemmasterModel. Will return null in case reference is invalid.
	 * `itemmaster`.`typeid` -> `itemmastertype`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ItemmastertypeModel
	 */
	public function fetchItemmastertypeModel(PDO $db, $sort=null) {
		$filter=array(ItemmastertypeModel::FIELD_ID=>$this->getTypeid());
		$result=ItemmastertypeModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'ItemmasterModel');
	}

	/**
	 * get single ItemmasterModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return ItemmasterModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new ItemmasterModel();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of ItemmasterModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return ItemmasterModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('ItemmasterModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>