<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class PmfProclineModel extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='PmfProclineModel';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='pmf_procline';
	const SQL_INSERT='INSERT INTO `pmf_procline` (`id`,`linename`,`comment`,`firstprocid`,`isdisable`) VALUES (?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `pmf_procline` (`linename`,`comment`,`firstprocid`,`isdisable`) VALUES (?,?,?,?)';
	const SQL_UPDATE='UPDATE `pmf_procline` SET `id`=?,`linename`=?,`comment`=?,`firstprocid`=?,`isdisable`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `pmf_procline` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `pmf_procline` WHERE `id`=?';
	const FIELD_ID=-878972919;
	const FIELD_LINENAME=546998509;
	const FIELD_COMMENT=-1287081935;
	const FIELD_FIRSTPROCID=-122369421;
	const FIELD_ISDISABLE=986736592;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_LINENAME=>'linename',
		self::FIELD_COMMENT=>'comment',
		self::FIELD_FIRSTPROCID=>'firstprocid',
		self::FIELD_ISDISABLE=>'isdisable');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_LINENAME=>'linename',
		self::FIELD_COMMENT=>'comment',
		self::FIELD_FIRSTPROCID=>'firstprocid',
		self::FIELD_ISDISABLE=>'isdisable');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_LINENAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_COMMENT=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FIRSTPROCID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ISDISABLE=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_LINENAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,30,0,false),
		self::FIELD_COMMENT=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_FIRSTPROCID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_ISDISABLE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_LINENAME=>'',
		self::FIELD_COMMENT=>null,
		self::FIELD_FIRSTPROCID=>null,
		self::FIELD_ISDISABLE=>0);
	private $id;
	private $linename;
	private $comment;
	private $firstprocid;
	private $isdisable;

	/**
	 * set value for id 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return PmfProclineModel
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
	 * set value for linename 
	 *
	 * type:VARCHAR,size:30,default:null
	 *
	 * @param mixed $linename
	 * @return PmfProclineModel
	 */
	public function &setLinename($linename) {
		$this->notifyChanged(self::FIELD_LINENAME,$this->linename,$linename);
		$this->linename=$linename;
		return $this;
	}

	/**
	 * get value for linename 
	 *
	 * type:VARCHAR,size:30,default:null
	 *
	 * @return mixed
	 */
	public function getLinename() {
		return $this->linename;
	}

	/**
	 * set value for comment 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $comment
	 * @return PmfProclineModel
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
	 * set value for firstprocid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $firstprocid
	 * @return PmfProclineModel
	 */
	public function &setFirstprocid($firstprocid) {
		$this->notifyChanged(self::FIELD_FIRSTPROCID,$this->firstprocid,$firstprocid);
		$this->firstprocid=$firstprocid;
		return $this;
	}

	/**
	 * get value for firstprocid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getFirstprocid() {
		return $this->firstprocid;
	}

	/**
	 * set value for isdisable 
	 *
	 * type:INT UNSIGNED,size:10,default:null
	 *
	 * @param mixed $isdisable
	 * @return PmfProclineModel
	 */
	public function &setIsdisable($isdisable) {
		$this->notifyChanged(self::FIELD_ISDISABLE,$this->isdisable,$isdisable);
		$this->isdisable=$isdisable;
		return $this;
	}

	/**
	 * get value for isdisable 
	 *
	 * type:INT UNSIGNED,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getIsdisable() {
		return $this->isdisable;
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
			self::FIELD_LINENAME=>$this->getLinename(),
			self::FIELD_COMMENT=>$this->getComment(),
			self::FIELD_FIRSTPROCID=>$this->getFirstprocid(),
			self::FIELD_ISDISABLE=>$this->getIsdisable());
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
	 * Match by attributes of passed example instance and return matched rows as an array of PmfProclineModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param PmfProclineModel $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PmfProclineModel[]
	 */
	public static function findByExample(PDO $db,PmfProclineModel $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of PmfProclineModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PmfProclineModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `pmf_procline`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of PmfProclineModel instances
	 *
	 * @param PDOStatement $stmt
	 * @return PmfProclineModel[]
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
	 * returns the result as an array of PmfProclineModel instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return PmfProclineModel[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new PmfProclineModel();
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
	 * Execute select query and return matched rows as an array of PmfProclineModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return PmfProclineModel[]
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
		$sql='DELETE FROM `pmf_procline`'
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
		$this->setLinename($result['linename']);
		$this->setComment($result['comment']);
		$this->setFirstprocid($result['firstprocid']);
		$this->setIsdisable($result['isdisable']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return PmfProclineModel
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
		$o=new PmfProclineModel();
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
		$stmt->bindValue(2,$this->getLinename());
		$stmt->bindValue(3,$this->getComment());
		$stmt->bindValue(4,$this->getFirstprocid());
		$stmt->bindValue(5,$this->getIsdisable());
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
			$stmt->bindValue(1,$this->getLinename());
			$stmt->bindValue(2,$this->getComment());
			$stmt->bindValue(3,$this->getFirstprocid());
			$stmt->bindValue(4,$this->getIsdisable());
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
		$stmt->bindValue(6,$this->getId());
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
	 * Fetch PmfProcExtinfoModel's which this PmfProclineModel references.
	 * `pmf_procline`.`id` -> `pmf_proc_extinfo`.`proclineid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfProcExtinfoModel[]
	 */
	public function fetchPmfProcExtinfoModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfProcExtinfoModel::FIELD_PROCLINEID=>$this->getId());
		return PmfProcExtinfoModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfProcessModel's which this PmfProclineModel references.
	 * `pmf_procline`.`id` -> `pmf_process`.`proclineid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfProcessModel[]
	 */
	public function fetchPmfProcessModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfProcessModel::FIELD_PROCLINEID=>$this->getId());
		return PmfProcessModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch ProclineExtinfo1Model's which this PmfProclineModel references.
	 * `pmf_procline`.`id` -> `procline_extinfo1`.`proclineid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ProclineExtinfo1Model[]
	 */
	public function fetchProclineExtinfo1ModelCollection(PDO $db, $sort=null) {
		$filter=array(ProclineExtinfo1Model::FIELD_PROCLINEID=>$this->getId());
		return ProclineExtinfo1Model::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfProcessModel which references this PmfProclineModel. Will return null in case reference is invalid.
	 * `pmf_procline`.`firstprocid` -> `pmf_process`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfProcessModel
	 */
	public function fetchPmfProcessModel(PDO $db, $sort=null) {
		$filter=array(PmfProcessModel::FIELD_ID=>$this->getFirstprocid());
		$result=PmfProcessModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'PmfProclineModel');
	}

	/**
	 * get single PmfProclineModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return PmfProclineModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new PmfProclineModel();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of PmfProclineModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return PmfProclineModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('PmfProclineModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>