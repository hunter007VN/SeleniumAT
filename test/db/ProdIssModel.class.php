<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class ProdIssModel extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='ProdIssModel';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='prod_iss';
	const SQL_INSERT='INSERT INTO `prod_iss` (`id`,`logby`,`lognotes`,`logchgdt`,`logtype`,`logstatus`,`rstyle`) VALUES (?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `prod_iss` (`logby`,`lognotes`,`logchgdt`,`logtype`,`logstatus`,`rstyle`) VALUES (?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `prod_iss` SET `id`=?,`logby`=?,`lognotes`=?,`logchgdt`=?,`logtype`=?,`logstatus`=?,`rstyle`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `prod_iss` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `prod_iss` WHERE `id`=?';
	const FIELD_ID=629842568;
	const FIELD_LOGBY=-1068972530;
	const FIELD_LOGNOTES=1432757674;
	const FIELD_LOGCHGDT=1422377883;
	const FIELD_LOGTYPE=-784877775;
	const FIELD_LOGSTATUS=1613026857;
	const FIELD_RSTYLE=1397468012;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_LOGBY=>'logby',
		self::FIELD_LOGNOTES=>'lognotes',
		self::FIELD_LOGCHGDT=>'logchgdt',
		self::FIELD_LOGTYPE=>'logtype',
		self::FIELD_LOGSTATUS=>'logstatus',
		self::FIELD_RSTYLE=>'rstyle');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_LOGBY=>'logby',
		self::FIELD_LOGNOTES=>'lognotes',
		self::FIELD_LOGCHGDT=>'logchgdt',
		self::FIELD_LOGTYPE=>'logtype',
		self::FIELD_LOGSTATUS=>'logstatus',
		self::FIELD_RSTYLE=>'rstyle');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_LOGBY=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_LOGNOTES=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LOGCHGDT=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LOGTYPE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LOGSTATUS=>Db2PhpEntity::PHP_TYPE_BOOL,
		self::FIELD_RSTYLE=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_LOGBY=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_LOGNOTES=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,true),
		self::FIELD_LOGCHGDT=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_LOGTYPE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,10,0,false),
		self::FIELD_LOGSTATUS=>array(Db2PhpEntity::JDBC_TYPE_BIT,0,0,true),
		self::FIELD_RSTYLE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,20,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_LOGBY=>0,
		self::FIELD_LOGNOTES=>null,
		self::FIELD_LOGCHGDT=>null,
		self::FIELD_LOGTYPE=>'',
		self::FIELD_LOGSTATUS=>null,
		self::FIELD_RSTYLE=>null);
	private $id;
	private $logby;
	private $lognotes;
	private $logchgdt;
	private $logtype;
	private $logstatus;
	private $rstyle;

	/**
	 * set value for id 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return ProdIssModel
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
	 * set value for logby Foreign key to user
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $logby
	 * @return ProdIssModel
	 */
	public function &setLogby($logby) {
		$this->notifyChanged(self::FIELD_LOGBY,$this->logby,$logby);
		$this->logby=$logby;
		return $this;
	}

	/**
	 * get value for logby Foreign key to user
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getLogby() {
		return $this->logby;
	}

	/**
	 * set value for lognotes Notes: Record nature of the issue
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @param mixed $lognotes
	 * @return ProdIssModel
	 */
	public function &setLognotes($lognotes) {
		$this->notifyChanged(self::FIELD_LOGNOTES,$this->lognotes,$lognotes);
		$this->lognotes=$lognotes;
		return $this;
	}

	/**
	 * get value for lognotes Notes: Record nature of the issue
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getLognotes() {
		return $this->lognotes;
	}

	/**
	 * set value for logchgdt Record date time when create
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $logchgdt
	 * @return ProdIssModel
	 */
	public function &setLogchgdt($logchgdt) {
		$this->notifyChanged(self::FIELD_LOGCHGDT,$this->logchgdt,$logchgdt);
		$this->logchgdt=$logchgdt;
		return $this;
	}

	/**
	 * get value for logchgdt Record date time when create
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getLogchgdt() {
		return $this->logchgdt;
	}

	/**
	 * set value for logtype Issue Type
	 *
	 * type:VARCHAR,size:10,default:null
	 *
	 * @param mixed $logtype
	 * @return ProdIssModel
	 */
	public function &setLogtype($logtype) {
		$this->notifyChanged(self::FIELD_LOGTYPE,$this->logtype,$logtype);
		$this->logtype=$logtype;
		return $this;
	}

	/**
	 * get value for logtype Issue Type
	 *
	 * type:VARCHAR,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getLogtype() {
		return $this->logtype;
	}

	/**
	 * set value for logstatus Check box: New (default) - Resolved 
	 *
	 * type:BIT,size:0,default:null,nullable
	 *
	 * @param mixed $logstatus
	 * @return ProdIssModel
	 */
	public function &setLogstatus($logstatus) {
		$this->notifyChanged(self::FIELD_LOGSTATUS,$this->logstatus,$logstatus);
		$this->logstatus=$logstatus;
		return $this;
	}

	/**
	 * get value for logstatus Check box: New (default) - Resolved 
	 *
	 * type:BIT,size:0,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getLogstatus() {
		return $this->logstatus;
	}

	/**
	 * set value for rstyle 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @param mixed $rstyle
	 * @return ProdIssModel
	 */
	public function &setRstyle($rstyle) {
		$this->notifyChanged(self::FIELD_RSTYLE,$this->rstyle,$rstyle);
		$this->rstyle=$rstyle;
		return $this;
	}

	/**
	 * get value for rstyle 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getRstyle() {
		return $this->rstyle;
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
			self::FIELD_LOGBY=>$this->getLogby(),
			self::FIELD_LOGNOTES=>$this->getLognotes(),
			self::FIELD_LOGCHGDT=>$this->getLogchgdt(),
			self::FIELD_LOGTYPE=>$this->getLogtype(),
			self::FIELD_LOGSTATUS=>$this->getLogstatus(),
			self::FIELD_RSTYLE=>$this->getRstyle());
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
	 * Match by attributes of passed example instance and return matched rows as an array of ProdIssModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param ProdIssModel $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return ProdIssModel[]
	 */
	public static function findByExample(PDO $db,ProdIssModel $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of ProdIssModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return ProdIssModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `prod_iss`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of ProdIssModel instances
	 *
	 * @param PDOStatement $stmt
	 * @return ProdIssModel[]
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
	 * returns the result as an array of ProdIssModel instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return ProdIssModel[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new ProdIssModel();
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
	 * Execute select query and return matched rows as an array of ProdIssModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return ProdIssModel[]
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
		$sql='DELETE FROM `prod_iss`'
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
		$this->setLogby($result['logby']);
		$this->setLognotes($result['lognotes']);
		$this->setLogchgdt($result['logchgdt']);
		$this->setLogtype($result['logtype']);
		$this->setLogstatus($result['logstatus']);
		$this->setRstyle($result['rstyle']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return ProdIssModel
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
		$o=new ProdIssModel();
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
		$stmt->bindValue(2,$this->getLogby());
		$stmt->bindValue(3,$this->getLognotes());
		$stmt->bindValue(4,$this->getLogchgdt());
		$stmt->bindValue(5,$this->getLogtype());
		$stmt->bindValue(6,$this->getLogstatus());
		$stmt->bindValue(7,$this->getRstyle());
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
			$stmt->bindValue(1,$this->getLogby());
			$stmt->bindValue(2,$this->getLognotes());
			$stmt->bindValue(3,$this->getLogchgdt());
			$stmt->bindValue(4,$this->getLogtype());
			$stmt->bindValue(5,$this->getLogstatus());
			$stmt->bindValue(6,$this->getRstyle());
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
	 * Fetch ProdSchModel's which this ProdIssModel references.
	 * `prod_iss`.`id` -> `prod_sch`.`prodissid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ProdSchModel[]
	 */
	public function fetchProdSchModelCollection(PDO $db, $sort=null) {
		$filter=array(ProdSchModel::FIELD_PRODISSID=>$this->getId());
		return ProdSchModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch UsersModel which references this ProdIssModel. Will return null in case reference is invalid.
	 * `prod_iss`.`logby` -> `users`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return UsersModel
	 */
	public function fetchUsersModel(PDO $db, $sort=null) {
		$filter=array(UsersModel::FIELD_ID=>$this->getLogby());
		$result=UsersModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'ProdIssModel');
	}

	/**
	 * get single ProdIssModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return ProdIssModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new ProdIssModel();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of ProdIssModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return ProdIssModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('ProdIssModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>