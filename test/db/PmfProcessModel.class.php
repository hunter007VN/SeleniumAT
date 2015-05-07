<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class PmfProcessModel extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='PmfProcessModel';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='pmf_process';
	const SQL_INSERT='INSERT INTO `pmf_process` (`id`,`procname`,`comment`,`proclineid`,`viewplugin`,`execplugin`,`usergrp`,`allowreqpart`) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `pmf_process` (`procname`,`comment`,`proclineid`,`viewplugin`,`execplugin`,`usergrp`,`allowreqpart`) VALUES (?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `pmf_process` SET `id`=?,`procname`=?,`comment`=?,`proclineid`=?,`viewplugin`=?,`execplugin`=?,`usergrp`=?,`allowreqpart`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `pmf_process` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `pmf_process` WHERE `id`=?';
	const FIELD_ID=-912161552;
	const FIELD_PROCNAME=437651190;
	const FIELD_COMMENT=-942730326;
	const FIELD_PROCLINEID=-373838406;
	const FIELD_VIEWPLUGIN=-2026230547;
	const FIELD_EXECPLUGIN=-597718567;
	const FIELD_USERGRP=-2040253819;
	const FIELD_ALLOWREQPART=-1003694147;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_PROCNAME=>'procname',
		self::FIELD_COMMENT=>'comment',
		self::FIELD_PROCLINEID=>'proclineid',
		self::FIELD_VIEWPLUGIN=>'viewplugin',
		self::FIELD_EXECPLUGIN=>'execplugin',
		self::FIELD_USERGRP=>'usergrp',
		self::FIELD_ALLOWREQPART=>'allowreqpart');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_PROCNAME=>'procname',
		self::FIELD_COMMENT=>'comment',
		self::FIELD_PROCLINEID=>'proclineid',
		self::FIELD_VIEWPLUGIN=>'viewplugin',
		self::FIELD_EXECPLUGIN=>'execplugin',
		self::FIELD_USERGRP=>'usergrp',
		self::FIELD_ALLOWREQPART=>'allowreqpart');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_PROCNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_COMMENT=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PROCLINEID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_VIEWPLUGIN=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EXECPLUGIN=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_USERGRP=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ALLOWREQPART=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_PROCNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,30,0,false),
		self::FIELD_COMMENT=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_PROCLINEID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_VIEWPLUGIN=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_EXECPLUGIN=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_USERGRP=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,true),
		self::FIELD_ALLOWREQPART=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_PROCNAME=>'',
		self::FIELD_COMMENT=>null,
		self::FIELD_PROCLINEID=>null,
		self::FIELD_VIEWPLUGIN=>null,
		self::FIELD_EXECPLUGIN=>null,
		self::FIELD_USERGRP=>null,
		self::FIELD_ALLOWREQPART=>0);
	private $id;
	private $procname;
	private $comment;
	private $proclineid;
	private $viewplugin;
	private $execplugin;
	private $usergrp;
	private $allowreqpart;

	/**
	 * set value for id 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return PmfProcessModel
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
	 * set value for procname 
	 *
	 * type:VARCHAR,size:30,default:null
	 *
	 * @param mixed $procname
	 * @return PmfProcessModel
	 */
	public function &setProcname($procname) {
		$this->notifyChanged(self::FIELD_PROCNAME,$this->procname,$procname);
		$this->procname=$procname;
		return $this;
	}

	/**
	 * get value for procname 
	 *
	 * type:VARCHAR,size:30,default:null
	 *
	 * @return mixed
	 */
	public function getProcname() {
		return $this->procname;
	}

	/**
	 * set value for comment 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $comment
	 * @return PmfProcessModel
	 */
	public function &setComment($comment) {
		$this->notifyChanged(self::FIELD_COMMENT,$this->comment,$comment);
		$this->comment=$comment;
		return $this;
	}

	/**
	 * get value for comment 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getComment() {
		return $this->comment;
	}

	/**
	 * set value for proclineid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $proclineid
	 * @return PmfProcessModel
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
	 * set value for viewplugin 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $viewplugin
	 * @return PmfProcessModel
	 */
	public function &setViewplugin($viewplugin) {
		$this->notifyChanged(self::FIELD_VIEWPLUGIN,$this->viewplugin,$viewplugin);
		$this->viewplugin=$viewplugin;
		return $this;
	}

	/**
	 * get value for viewplugin 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getViewplugin() {
		return $this->viewplugin;
	}

	/**
	 * set value for execplugin 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $execplugin
	 * @return PmfProcessModel
	 */
	public function &setExecplugin($execplugin) {
		$this->notifyChanged(self::FIELD_EXECPLUGIN,$this->execplugin,$execplugin);
		$this->execplugin=$execplugin;
		return $this;
	}

	/**
	 * get value for execplugin 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getExecplugin() {
		return $this->execplugin;
	}

	/**
	 * set value for usergrp 
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @param mixed $usergrp
	 * @return PmfProcessModel
	 */
	public function &setUsergrp($usergrp) {
		$this->notifyChanged(self::FIELD_USERGRP,$this->usergrp,$usergrp);
		$this->usergrp=$usergrp;
		return $this;
	}

	/**
	 * get value for usergrp 
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getUsergrp() {
		return $this->usergrp;
	}

	/**
	 * set value for allowreqpart 
	 *
	 * type:INT UNSIGNED,size:10,default:0
	 *
	 * @param mixed $allowreqpart
	 * @return PmfProcessModel
	 */
	public function &setAllowreqpart($allowreqpart) {
		$this->notifyChanged(self::FIELD_ALLOWREQPART,$this->allowreqpart,$allowreqpart);
		$this->allowreqpart=$allowreqpart;
		return $this;
	}

	/**
	 * get value for allowreqpart 
	 *
	 * type:INT UNSIGNED,size:10,default:0
	 *
	 * @return mixed
	 */
	public function getAllowreqpart() {
		return $this->allowreqpart;
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
			self::FIELD_PROCNAME=>$this->getProcname(),
			self::FIELD_COMMENT=>$this->getComment(),
			self::FIELD_PROCLINEID=>$this->getProclineid(),
			self::FIELD_VIEWPLUGIN=>$this->getViewplugin(),
			self::FIELD_EXECPLUGIN=>$this->getExecplugin(),
			self::FIELD_USERGRP=>$this->getUsergrp(),
			self::FIELD_ALLOWREQPART=>$this->getAllowreqpart());
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
	 * Match by attributes of passed example instance and return matched rows as an array of PmfProcessModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param PmfProcessModel $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PmfProcessModel[]
	 */
	public static function findByExample(PDO $db,PmfProcessModel $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of PmfProcessModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PmfProcessModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `pmf_process`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of PmfProcessModel instances
	 *
	 * @param PDOStatement $stmt
	 * @return PmfProcessModel[]
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
	 * returns the result as an array of PmfProcessModel instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return PmfProcessModel[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new PmfProcessModel();
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
	 * Execute select query and return matched rows as an array of PmfProcessModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return PmfProcessModel[]
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
		$sql='DELETE FROM `pmf_process`'
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
		$this->setProcname($result['procname']);
		$this->setComment($result['comment']);
		$this->setProclineid($result['proclineid']);
		$this->setViewplugin($result['viewplugin']);
		$this->setExecplugin($result['execplugin']);
		$this->setUsergrp($result['usergrp']);
		$this->setAllowreqpart($result['allowreqpart']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return PmfProcessModel
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
		$o=new PmfProcessModel();
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
		$stmt->bindValue(2,$this->getProcname());
		$stmt->bindValue(3,$this->getComment());
		$stmt->bindValue(4,$this->getProclineid());
		$stmt->bindValue(5,$this->getViewplugin());
		$stmt->bindValue(6,$this->getExecplugin());
		$stmt->bindValue(7,$this->getUsergrp());
		$stmt->bindValue(8,$this->getAllowreqpart());
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
			$stmt->bindValue(1,$this->getProcname());
			$stmt->bindValue(2,$this->getComment());
			$stmt->bindValue(3,$this->getProclineid());
			$stmt->bindValue(4,$this->getViewplugin());
			$stmt->bindValue(5,$this->getExecplugin());
			$stmt->bindValue(6,$this->getUsergrp());
			$stmt->bindValue(7,$this->getAllowreqpart());
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
	 * Fetch PmfJobModel's which this PmfProcessModel references.
	 * `pmf_process`.`id` -> `pmf_job`.`procid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfJobModel[]
	 */
	public function fetchPmfJobModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfJobModel::FIELD_PROCID=>$this->getId());
		return PmfJobModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfJobhisModel's which this PmfProcessModel references.
	 * `pmf_process`.`id` -> `pmf_jobhis`.`procid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfJobhisModel[]
	 */
	public function fetchPmfJobhisModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfJobhisModel::FIELD_PROCID=>$this->getId());
		return PmfJobhisModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfProcExtinfoModel's which this PmfProcessModel references.
	 * `pmf_process`.`id` -> `pmf_proc_extinfo`.`procid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfProcExtinfoModel[]
	 */
	public function fetchPmfProcExtinfoModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfProcExtinfoModel::FIELD_PROCID=>$this->getId());
		return PmfProcExtinfoModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfProclineModel's which this PmfProcessModel references.
	 * `pmf_process`.`id` -> `pmf_procline`.`firstprocid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfProclineModel[]
	 */
	public function fetchPmfProclineModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfProclineModel::FIELD_FIRSTPROCID=>$this->getId());
		return PmfProclineModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfProclocationModel's which this PmfProcessModel references.
	 * `pmf_process`.`id` -> `pmf_proclocation`.`procid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfProclocationModel[]
	 */
	public function fetchPmfProclocationModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfProclocationModel::FIELD_PROCID=>$this->getId());
		return PmfProclocationModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfProcnextModel's which this PmfProcessModel references.
	 * `pmf_process`.`id` -> `pmf_procnext`.`procid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfProcnextModel[]
	 */
	public function fetchPmfProcnextModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfProcnextModel::FIELD_PROCID=>$this->getId());
		return PmfProcnextModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfProcnextModel1's which this PmfProcessModel references.
	 * `pmf_process`.`id` -> `pmf_procnext`.`nextprocid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfProcnextModel1[]
	 */
	public function fetchPmfProcnextModel1Collection(PDO $db, $sort=null) {
		$filter=array(PmfProcnextModel1::FIELD_NEXTPROCID=>$this->getId());
		return PmfProcnextModel1::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfProcresultModel's which this PmfProcessModel references.
	 * `pmf_process`.`id` -> `pmf_procresult`.`procid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfProcresultModel[]
	 */
	public function fetchPmfProcresultModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfProcresultModel::FIELD_PROCID=>$this->getId());
		return PmfProcresultModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfProclineModel which references this PmfProcessModel. Will return null in case reference is invalid.
	 * `pmf_process`.`proclineid` -> `pmf_procline`.`id`
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
		return self::hashToDomDocument($this->toHash(), 'PmfProcessModel');
	}

	/**
	 * get single PmfProcessModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return PmfProcessModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new PmfProcessModel();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of PmfProcessModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return PmfProcessModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('PmfProcessModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>