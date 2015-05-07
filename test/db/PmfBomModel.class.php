<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class PmfBomModel extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='PmfBomModel';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='pmf_bom';
	const SQL_INSERT='INSERT INTO `pmf_bom` (`bomid`,`bomno`,`revision`,`createdate`,`createby`,`tag`,`partnerid`,`itemmasterid`,`bomstatus`,`description`) VALUES (?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `pmf_bom` (`bomno`,`revision`,`createdate`,`createby`,`tag`,`partnerid`,`itemmasterid`,`bomstatus`,`description`) VALUES (?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `pmf_bom` SET `bomid`=?,`bomno`=?,`revision`=?,`createdate`=?,`createby`=?,`tag`=?,`partnerid`=?,`itemmasterid`=?,`bomstatus`=?,`description`=? WHERE `bomid`=?';
	const SQL_SELECT_PK='SELECT * FROM `pmf_bom` WHERE `bomid`=?';
	const SQL_DELETE_PK='DELETE FROM `pmf_bom` WHERE `bomid`=?';
	const FIELD_BOMID=1095412343;
	const FIELD_BOMNO=1095412509;
	const FIELD_REVISION=-1939098945;
	const FIELD_CREATEDATE=-876116850;
	const FIELD_CREATEBY=142104887;
	const FIELD_TAG=-892697034;
	const FIELD_PARTNERID=2011249023;
	const FIELD_ITEMMASTERID=-1291991052;
	const FIELD_BOMSTATUS=9592654;
	const FIELD_DESCRIPTION=1670114968;
	private static $PRIMARY_KEYS=array(self::FIELD_BOMID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_BOMID);
	private static $FIELD_NAMES=array(
		self::FIELD_BOMID=>'bomid',
		self::FIELD_BOMNO=>'bomno',
		self::FIELD_REVISION=>'revision',
		self::FIELD_CREATEDATE=>'createdate',
		self::FIELD_CREATEBY=>'createby',
		self::FIELD_TAG=>'tag',
		self::FIELD_PARTNERID=>'partnerid',
		self::FIELD_ITEMMASTERID=>'itemmasterid',
		self::FIELD_BOMSTATUS=>'bomstatus',
		self::FIELD_DESCRIPTION=>'description');
	private static $PROPERTY_NAMES=array(
		self::FIELD_BOMID=>'bomid',
		self::FIELD_BOMNO=>'bomno',
		self::FIELD_REVISION=>'revision',
		self::FIELD_CREATEDATE=>'createdate',
		self::FIELD_CREATEBY=>'createby',
		self::FIELD_TAG=>'tag',
		self::FIELD_PARTNERID=>'partnerid',
		self::FIELD_ITEMMASTERID=>'itemmasterid',
		self::FIELD_BOMSTATUS=>'bomstatus',
		self::FIELD_DESCRIPTION=>'description');
	private static $PROPERTY_TYPES=array(
		self::FIELD_BOMID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_BOMNO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_REVISION=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CREATEDATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CREATEBY=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TAG=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PARTNERID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ITEMMASTERID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_BOMSTATUS=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_DESCRIPTION=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_BOMID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_BOMNO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,false),
		self::FIELD_REVISION=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,1,0,true),
		self::FIELD_CREATEDATE=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_CREATEBY=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_TAG=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,250,0,true),
		self::FIELD_PARTNERID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_ITEMMASTERID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_BOMSTATUS=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_DESCRIPTION=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,250,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_BOMID=>null,
		self::FIELD_BOMNO=>'',
		self::FIELD_REVISION=>null,
		self::FIELD_CREATEDATE=>null,
		self::FIELD_CREATEBY=>null,
		self::FIELD_TAG=>null,
		self::FIELD_PARTNERID=>0,
		self::FIELD_ITEMMASTERID=>0,
		self::FIELD_BOMSTATUS=>0,
		self::FIELD_DESCRIPTION=>null);
	private $bomid;
	private $bomno;
	private $revision;
	private $createdate;
	private $createby;
	private $tag;
	private $partnerid;
	private $itemmasterid;
	private $bomstatus;
	private $description;

	/**
	 * set value for bomid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $bomid
	 * @return PmfBomModel
	 */
	public function &setBomid($bomid) {
		$this->notifyChanged(self::FIELD_BOMID,$this->bomid,$bomid);
		$this->bomid=$bomid;
		return $this;
	}

	/**
	 * get value for bomid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getBomid() {
		return $this->bomid;
	}

	/**
	 * set value for bomno 
	 *
	 * type:VARCHAR,size:25,default:null
	 *
	 * @param mixed $bomno
	 * @return PmfBomModel
	 */
	public function &setBomno($bomno) {
		$this->notifyChanged(self::FIELD_BOMNO,$this->bomno,$bomno);
		$this->bomno=$bomno;
		return $this;
	}

	/**
	 * get value for bomno 
	 *
	 * type:VARCHAR,size:25,default:null
	 *
	 * @return mixed
	 */
	public function getBomno() {
		return $this->bomno;
	}

	/**
	 * set value for revision 
	 *
	 * type:VARCHAR,size:1,default:null,nullable
	 *
	 * @param mixed $revision
	 * @return PmfBomModel
	 */
	public function &setRevision($revision) {
		$this->notifyChanged(self::FIELD_REVISION,$this->revision,$revision);
		$this->revision=$revision;
		return $this;
	}

	/**
	 * get value for revision 
	 *
	 * type:VARCHAR,size:1,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getRevision() {
		return $this->revision;
	}

	/**
	 * set value for createdate 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $createdate
	 * @return PmfBomModel
	 */
	public function &setCreatedate($createdate) {
		$this->notifyChanged(self::FIELD_CREATEDATE,$this->createdate,$createdate);
		$this->createdate=$createdate;
		return $this;
	}

	/**
	 * get value for createdate 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCreatedate() {
		return $this->createdate;
	}

	/**
	 * set value for createby 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $createby
	 * @return PmfBomModel
	 */
	public function &setCreateby($createby) {
		$this->notifyChanged(self::FIELD_CREATEBY,$this->createby,$createby);
		$this->createby=$createby;
		return $this;
	}

	/**
	 * get value for createby 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getCreateby() {
		return $this->createby;
	}

	/**
	 * set value for tag 
	 *
	 * type:VARCHAR,size:250,default:null,nullable
	 *
	 * @param mixed $tag
	 * @return PmfBomModel
	 */
	public function &setTag($tag) {
		$this->notifyChanged(self::FIELD_TAG,$this->tag,$tag);
		$this->tag=$tag;
		return $this;
	}

	/**
	 * get value for tag 
	 *
	 * type:VARCHAR,size:250,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTag() {
		return $this->tag;
	}

	/**
	 * set value for partnerid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $partnerid
	 * @return PmfBomModel
	 */
	public function &setPartnerid($partnerid) {
		$this->notifyChanged(self::FIELD_PARTNERID,$this->partnerid,$partnerid);
		$this->partnerid=$partnerid;
		return $this;
	}

	/**
	 * get value for partnerid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getPartnerid() {
		return $this->partnerid;
	}

	/**
	 * set value for itemmasterid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $itemmasterid
	 * @return PmfBomModel
	 */
	public function &setItemmasterid($itemmasterid) {
		$this->notifyChanged(self::FIELD_ITEMMASTERID,$this->itemmasterid,$itemmasterid);
		$this->itemmasterid=$itemmasterid;
		return $this;
	}

	/**
	 * get value for itemmasterid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getItemmasterid() {
		return $this->itemmasterid;
	}

	/**
	 * set value for bomstatus 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $bomstatus
	 * @return PmfBomModel
	 */
	public function &setBomstatus($bomstatus) {
		$this->notifyChanged(self::FIELD_BOMSTATUS,$this->bomstatus,$bomstatus);
		$this->bomstatus=$bomstatus;
		return $this;
	}

	/**
	 * get value for bomstatus 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getBomstatus() {
		return $this->bomstatus;
	}

	/**
	 * set value for description 
	 *
	 * type:VARCHAR,size:250,default:null,nullable
	 *
	 * @param mixed $description
	 * @return PmfBomModel
	 */
	public function &setDescription($description) {
		$this->notifyChanged(self::FIELD_DESCRIPTION,$this->description,$description);
		$this->description=$description;
		return $this;
	}

	/**
	 * get value for description 
	 *
	 * type:VARCHAR,size:250,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDescription() {
		return $this->description;
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
			self::FIELD_BOMID=>$this->getBomid(),
			self::FIELD_BOMNO=>$this->getBomno(),
			self::FIELD_REVISION=>$this->getRevision(),
			self::FIELD_CREATEDATE=>$this->getCreatedate(),
			self::FIELD_CREATEBY=>$this->getCreateby(),
			self::FIELD_TAG=>$this->getTag(),
			self::FIELD_PARTNERID=>$this->getPartnerid(),
			self::FIELD_ITEMMASTERID=>$this->getItemmasterid(),
			self::FIELD_BOMSTATUS=>$this->getBomstatus(),
			self::FIELD_DESCRIPTION=>$this->getDescription());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_BOMID=>$this->getBomid());
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
	 * Match by attributes of passed example instance and return matched rows as an array of PmfBomModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param PmfBomModel $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PmfBomModel[]
	 */
	public static function findByExample(PDO $db,PmfBomModel $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of PmfBomModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PmfBomModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `pmf_bom`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of PmfBomModel instances
	 *
	 * @param PDOStatement $stmt
	 * @return PmfBomModel[]
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
	 * returns the result as an array of PmfBomModel instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return PmfBomModel[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new PmfBomModel();
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
	 * Execute select query and return matched rows as an array of PmfBomModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return PmfBomModel[]
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
		$sql='DELETE FROM `pmf_bom`'
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
		$this->setBomid($result['bomid']);
		$this->setBomno($result['bomno']);
		$this->setRevision($result['revision']);
		$this->setCreatedate($result['createdate']);
		$this->setCreateby($result['createby']);
		$this->setTag($result['tag']);
		$this->setPartnerid($result['partnerid']);
		$this->setItemmasterid($result['itemmasterid']);
		$this->setBomstatus($result['bomstatus']);
		$this->setDescription($result['description']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return PmfBomModel
	 */
	public static function findById(PDO $db,$bomid) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$bomid);
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
		$o=new PmfBomModel();
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
		$stmt->bindValue(1,$this->getBomid());
		$stmt->bindValue(2,$this->getBomno());
		$stmt->bindValue(3,$this->getRevision());
		$stmt->bindValue(4,$this->getCreatedate());
		$stmt->bindValue(5,$this->getCreateby());
		$stmt->bindValue(6,$this->getTag());
		$stmt->bindValue(7,$this->getPartnerid());
		$stmt->bindValue(8,$this->getItemmasterid());
		$stmt->bindValue(9,$this->getBomstatus());
		$stmt->bindValue(10,$this->getDescription());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getBomid()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getBomno());
			$stmt->bindValue(2,$this->getRevision());
			$stmt->bindValue(3,$this->getCreatedate());
			$stmt->bindValue(4,$this->getCreateby());
			$stmt->bindValue(5,$this->getTag());
			$stmt->bindValue(6,$this->getPartnerid());
			$stmt->bindValue(7,$this->getItemmasterid());
			$stmt->bindValue(8,$this->getBomstatus());
			$stmt->bindValue(9,$this->getDescription());
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
			$this->setBomid($lastInsertId);
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
		$stmt->bindValue(11,$this->getBomid());
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
		$stmt->bindValue(1,$this->getBomid());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch PmfBomdetailModel's which this PmfBomModel references.
	 * `pmf_bom`.`bomid` -> `pmf_bomdetail`.`bomid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfBomdetailModel[]
	 */
	public function fetchPmfBomdetailModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfBomdetailModel::FIELD_BOMID=>$this->getBomid());
		return PmfBomdetailModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfBomstatusModel which references this PmfBomModel. Will return null in case reference is invalid.
	 * `pmf_bom`.`bomstatus` -> `pmf_bomstatus`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfBomstatusModel
	 */
	public function fetchPmfBomstatusModel(PDO $db, $sort=null) {
		$filter=array(PmfBomstatusModel::FIELD_ID=>$this->getBomstatus());
		$result=PmfBomstatusModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch UsersModel which references this PmfBomModel. Will return null in case reference is invalid.
	 * `pmf_bom`.`createby` -> `users`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return UsersModel
	 */
	public function fetchUsersModel(PDO $db, $sort=null) {
		$filter=array(UsersModel::FIELD_ID=>$this->getCreateby());
		$result=UsersModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch ItemmasterModel which references this PmfBomModel. Will return null in case reference is invalid.
	 * `pmf_bom`.`itemmasterid` -> `itemmaster`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ItemmasterModel
	 */
	public function fetchItemmasterModel(PDO $db, $sort=null) {
		$filter=array(ItemmasterModel::FIELD_ID=>$this->getItemmasterid());
		$result=ItemmasterModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch PartnerModel which references this PmfBomModel. Will return null in case reference is invalid.
	 * `pmf_bom`.`partnerid` -> `partner`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PartnerModel
	 */
	public function fetchPartnerModel(PDO $db, $sort=null) {
		$filter=array(PartnerModel::FIELD_ID=>$this->getPartnerid());
		$result=PartnerModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'PmfBomModel');
	}

	/**
	 * get single PmfBomModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return PmfBomModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new PmfBomModel();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of PmfBomModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return PmfBomModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('PmfBomModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>