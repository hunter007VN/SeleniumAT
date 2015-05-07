<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class PmfJobhisModel extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='PmfJobhisModel';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='pmf_jobhis';
	const SQL_INSERT='INSERT INTO `pmf_jobhis` (`id`,`jobid`,`procid`,`resultid`,`starttime`,`endtime`,`userid`,`extrowid`,`bomstatus`,`reqorderid`) VALUES (?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `pmf_jobhis` (`jobid`,`procid`,`resultid`,`starttime`,`endtime`,`userid`,`extrowid`,`bomstatus`,`reqorderid`) VALUES (?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `pmf_jobhis` SET `id`=?,`jobid`=?,`procid`=?,`resultid`=?,`starttime`=?,`endtime`=?,`userid`=?,`extrowid`=?,`bomstatus`=?,`reqorderid`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `pmf_jobhis` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `pmf_jobhis` WHERE `id`=?';
	const FIELD_ID=15086654;
	const FIELD_JOBID=-1523708011;
	const FIELD_PROCID=184619156;
	const FIELD_RESULTID=1994605275;
	const FIELD_STARTTIME=1394422188;
	const FIELD_ENDTIME=131452133;
	const FIELD_USERID=328404937;
	const FIELD_EXTROWID=521558999;
	const FIELD_BOMSTATUS=-274523857;
	const FIELD_REQORDERID=1196443310;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_JOBID=>'jobid',
		self::FIELD_PROCID=>'procid',
		self::FIELD_RESULTID=>'resultid',
		self::FIELD_STARTTIME=>'starttime',
		self::FIELD_ENDTIME=>'endtime',
		self::FIELD_USERID=>'userid',
		self::FIELD_EXTROWID=>'extrowid',
		self::FIELD_BOMSTATUS=>'bomstatus',
		self::FIELD_REQORDERID=>'reqorderid');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_JOBID=>'jobid',
		self::FIELD_PROCID=>'procid',
		self::FIELD_RESULTID=>'resultid',
		self::FIELD_STARTTIME=>'starttime',
		self::FIELD_ENDTIME=>'endtime',
		self::FIELD_USERID=>'userid',
		self::FIELD_EXTROWID=>'extrowid',
		self::FIELD_BOMSTATUS=>'bomstatus',
		self::FIELD_REQORDERID=>'reqorderid');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_JOBID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_PROCID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_RESULTID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_STARTTIME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ENDTIME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_USERID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_EXTROWID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_BOMSTATUS=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_REQORDERID=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_JOBID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_PROCID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_RESULTID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_STARTTIME=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,false),
		self::FIELD_ENDTIME=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_USERID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_EXTROWID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_BOMSTATUS=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_REQORDERID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_JOBID=>0,
		self::FIELD_PROCID=>0,
		self::FIELD_RESULTID=>null,
		self::FIELD_STARTTIME=>'',
		self::FIELD_ENDTIME=>null,
		self::FIELD_USERID=>0,
		self::FIELD_EXTROWID=>null,
		self::FIELD_BOMSTATUS=>null,
		self::FIELD_REQORDERID=>null);
	private $id;
	private $jobid;
	private $procid;
	private $resultid;
	private $starttime;
	private $endtime;
	private $userid;
	private $extrowid;
	private $bomstatus;
	private $reqorderid;

	/**
	 * set value for id 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return PmfJobhisModel
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
	 * set value for jobid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $jobid
	 * @return PmfJobhisModel
	 */
	public function &setJobid($jobid) {
		$this->notifyChanged(self::FIELD_JOBID,$this->jobid,$jobid);
		$this->jobid=$jobid;
		return $this;
	}

	/**
	 * get value for jobid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getJobid() {
		return $this->jobid;
	}

	/**
	 * set value for procid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $procid
	 * @return PmfJobhisModel
	 */
	public function &setProcid($procid) {
		$this->notifyChanged(self::FIELD_PROCID,$this->procid,$procid);
		$this->procid=$procid;
		return $this;
	}

	/**
	 * get value for procid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getProcid() {
		return $this->procid;
	}

	/**
	 * set value for resultid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $resultid
	 * @return PmfJobhisModel
	 */
	public function &setResultid($resultid) {
		$this->notifyChanged(self::FIELD_RESULTID,$this->resultid,$resultid);
		$this->resultid=$resultid;
		return $this;
	}

	/**
	 * get value for resultid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getResultid() {
		return $this->resultid;
	}

	/**
	 * set value for starttime 
	 *
	 * type:DATETIME,size:19,default:null,index
	 *
	 * @param mixed $starttime
	 * @return PmfJobhisModel
	 */
	public function &setStarttime($starttime) {
		$this->notifyChanged(self::FIELD_STARTTIME,$this->starttime,$starttime);
		$this->starttime=$starttime;
		return $this;
	}

	/**
	 * get value for starttime 
	 *
	 * type:DATETIME,size:19,default:null,index
	 *
	 * @return mixed
	 */
	public function getStarttime() {
		return $this->starttime;
	}

	/**
	 * set value for endtime 
	 *
	 * type:DATETIME,size:19,default:null,index,nullable
	 *
	 * @param mixed $endtime
	 * @return PmfJobhisModel
	 */
	public function &setEndtime($endtime) {
		$this->notifyChanged(self::FIELD_ENDTIME,$this->endtime,$endtime);
		$this->endtime=$endtime;
		return $this;
	}

	/**
	 * get value for endtime 
	 *
	 * type:DATETIME,size:19,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getEndtime() {
		return $this->endtime;
	}

	/**
	 * set value for userid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $userid
	 * @return PmfJobhisModel
	 */
	public function &setUserid($userid) {
		$this->notifyChanged(self::FIELD_USERID,$this->userid,$userid);
		$this->userid=$userid;
		return $this;
	}

	/**
	 * get value for userid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getUserid() {
		return $this->userid;
	}

	/**
	 * set value for extrowid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $extrowid
	 * @return PmfJobhisModel
	 */
	public function &setExtrowid($extrowid) {
		$this->notifyChanged(self::FIELD_EXTROWID,$this->extrowid,$extrowid);
		$this->extrowid=$extrowid;
		return $this;
	}

	/**
	 * get value for extrowid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getExtrowid() {
		return $this->extrowid;
	}

	/**
	 * set value for bomstatus 
	 *
	 * type:INT UNSIGNED,size:10,default:null,nullable
	 *
	 * @param mixed $bomstatus
	 * @return PmfJobhisModel
	 */
	public function &setBomstatus($bomstatus) {
		$this->notifyChanged(self::FIELD_BOMSTATUS,$this->bomstatus,$bomstatus);
		$this->bomstatus=$bomstatus;
		return $this;
	}

	/**
	 * get value for bomstatus 
	 *
	 * type:INT UNSIGNED,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getBomstatus() {
		return $this->bomstatus;
	}

	/**
	 * set value for reqorderid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $reqorderid
	 * @return PmfJobhisModel
	 */
	public function &setReqorderid($reqorderid) {
		$this->notifyChanged(self::FIELD_REQORDERID,$this->reqorderid,$reqorderid);
		$this->reqorderid=$reqorderid;
		return $this;
	}

	/**
	 * get value for reqorderid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getReqorderid() {
		return $this->reqorderid;
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
			self::FIELD_JOBID=>$this->getJobid(),
			self::FIELD_PROCID=>$this->getProcid(),
			self::FIELD_RESULTID=>$this->getResultid(),
			self::FIELD_STARTTIME=>$this->getStarttime(),
			self::FIELD_ENDTIME=>$this->getEndtime(),
			self::FIELD_USERID=>$this->getUserid(),
			self::FIELD_EXTROWID=>$this->getExtrowid(),
			self::FIELD_BOMSTATUS=>$this->getBomstatus(),
			self::FIELD_REQORDERID=>$this->getReqorderid());
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
	 * Match by attributes of passed example instance and return matched rows as an array of PmfJobhisModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param PmfJobhisModel $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PmfJobhisModel[]
	 */
	public static function findByExample(PDO $db,PmfJobhisModel $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of PmfJobhisModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PmfJobhisModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `pmf_jobhis`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of PmfJobhisModel instances
	 *
	 * @param PDOStatement $stmt
	 * @return PmfJobhisModel[]
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
	 * returns the result as an array of PmfJobhisModel instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return PmfJobhisModel[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new PmfJobhisModel();
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
	 * Execute select query and return matched rows as an array of PmfJobhisModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return PmfJobhisModel[]
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
		$sql='DELETE FROM `pmf_jobhis`'
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
		$this->setJobid($result['jobid']);
		$this->setProcid($result['procid']);
		$this->setResultid($result['resultid']);
		$this->setStarttime($result['starttime']);
		$this->setEndtime($result['endtime']);
		$this->setUserid($result['userid']);
		$this->setExtrowid($result['extrowid']);
		$this->setBomstatus($result['bomstatus']);
		$this->setReqorderid($result['reqorderid']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return PmfJobhisModel
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
		$o=new PmfJobhisModel();
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
		$stmt->bindValue(2,$this->getJobid());
		$stmt->bindValue(3,$this->getProcid());
		$stmt->bindValue(4,$this->getResultid());
		$stmt->bindValue(5,$this->getStarttime());
		$stmt->bindValue(6,$this->getEndtime());
		$stmt->bindValue(7,$this->getUserid());
		$stmt->bindValue(8,$this->getExtrowid());
		$stmt->bindValue(9,$this->getBomstatus());
		$stmt->bindValue(10,$this->getReqorderid());
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
			$stmt->bindValue(1,$this->getJobid());
			$stmt->bindValue(2,$this->getProcid());
			$stmt->bindValue(3,$this->getResultid());
			$stmt->bindValue(4,$this->getStarttime());
			$stmt->bindValue(5,$this->getEndtime());
			$stmt->bindValue(6,$this->getUserid());
			$stmt->bindValue(7,$this->getExtrowid());
			$stmt->bindValue(8,$this->getBomstatus());
			$stmt->bindValue(9,$this->getReqorderid());
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
		$stmt->bindValue(11,$this->getId());
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
	 * Fetch PmfJobModel which references this PmfJobhisModel. Will return null in case reference is invalid.
	 * `pmf_jobhis`.`jobid` -> `pmf_job`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfJobModel
	 */
	public function fetchPmfJobModel(PDO $db, $sort=null) {
		$filter=array(PmfJobModel::FIELD_ID=>$this->getJobid());
		$result=PmfJobModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch PmfProcessModel which references this PmfJobhisModel. Will return null in case reference is invalid.
	 * `pmf_jobhis`.`procid` -> `pmf_process`.`id`
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
	 * Fetch PmfProcresultModel which references this PmfJobhisModel. Will return null in case reference is invalid.
	 * `pmf_jobhis`.`resultid` -> `pmf_procresult`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfProcresultModel
	 */
	public function fetchPmfProcresultModel(PDO $db, $sort=null) {
		$filter=array(PmfProcresultModel::FIELD_ID=>$this->getResultid());
		$result=PmfProcresultModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch PmfProcExtrowModel which references this PmfJobhisModel. Will return null in case reference is invalid.
	 * `pmf_jobhis`.`extrowid` -> `pmf_proc_extrow`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfProcExtrowModel
	 */
	public function fetchPmfProcExtrowModel(PDO $db, $sort=null) {
		$filter=array(PmfProcExtrowModel::FIELD_ID=>$this->getExtrowid());
		$result=PmfProcExtrowModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch UsersModel which references this PmfJobhisModel. Will return null in case reference is invalid.
	 * `pmf_jobhis`.`userid` -> `users`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return UsersModel
	 */
	public function fetchUsersModel(PDO $db, $sort=null) {
		$filter=array(UsersModel::FIELD_ID=>$this->getUserid());
		$result=UsersModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'PmfJobhisModel');
	}

	/**
	 * get single PmfJobhisModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return PmfJobhisModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new PmfJobhisModel();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of PmfJobhisModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return PmfJobhisModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('PmfJobhisModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>