<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class LocationModel extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='LocationModel';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='location';
	const SQL_INSERT='INSERT INTO `location` (`id`,`locid`,`description`,`loctypeid`,`partnerid`) VALUES (?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `location` (`locid`,`description`,`loctypeid`,`partnerid`) VALUES (?,?,?,?)';
	const SQL_UPDATE='UPDATE `location` SET `id`=?,`locid`=?,`description`=?,`loctypeid`=?,`partnerid`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `location` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `location` WHERE `id`=?';
	const FIELD_ID=552272372;
	const FIELD_LOCID=-1270279966;
	const FIELD_DESCRIPTION=-241306813;
	const FIELD_LOCTYPEID=1775468060;
	const FIELD_PARTNERID=628255978;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_LOCID=>'locid',
		self::FIELD_DESCRIPTION=>'description',
		self::FIELD_LOCTYPEID=>'loctypeid',
		self::FIELD_PARTNERID=>'partnerid');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_LOCID=>'locid',
		self::FIELD_DESCRIPTION=>'description',
		self::FIELD_LOCTYPEID=>'loctypeid',
		self::FIELD_PARTNERID=>'partnerid');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_LOCID=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DESCRIPTION=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LOCTYPEID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_PARTNERID=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_LOCID=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,false),
		self::FIELD_DESCRIPTION=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_LOCTYPEID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_PARTNERID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_LOCID=>'',
		self::FIELD_DESCRIPTION=>null,
		self::FIELD_LOCTYPEID=>0,
		self::FIELD_PARTNERID=>0);
	private $id;
	private $locid;
	private $description;
	private $loctypeid;
	private $partnerid;

	/**
	 * set value for id 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return LocationModel
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
	 * set value for locid 
	 *
	 * type:VARCHAR,size:25,default:null,unique
	 *
	 * @param mixed $locid
	 * @return LocationModel
	 */
	public function &setLocid($locid) {
		$this->notifyChanged(self::FIELD_LOCID,$this->locid,$locid);
		$this->locid=$locid;
		return $this;
	}

	/**
	 * get value for locid 
	 *
	 * type:VARCHAR,size:25,default:null,unique
	 *
	 * @return mixed
	 */
	public function getLocid() {
		return $this->locid;
	}

	/**
	 * set value for description 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $description
	 * @return LocationModel
	 */
	public function &setDescription($description) {
		$this->notifyChanged(self::FIELD_DESCRIPTION,$this->description,$description);
		$this->description=$description;
		return $this;
	}

	/**
	 * get value for description 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * set value for loctypeid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $loctypeid
	 * @return LocationModel
	 */
	public function &setLoctypeid($loctypeid) {
		$this->notifyChanged(self::FIELD_LOCTYPEID,$this->loctypeid,$loctypeid);
		$this->loctypeid=$loctypeid;
		return $this;
	}

	/**
	 * get value for loctypeid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getLoctypeid() {
		return $this->loctypeid;
	}

	/**
	 * set value for partnerid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $partnerid
	 * @return LocationModel
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
			self::FIELD_LOCID=>$this->getLocid(),
			self::FIELD_DESCRIPTION=>$this->getDescription(),
			self::FIELD_LOCTYPEID=>$this->getLoctypeid(),
			self::FIELD_PARTNERID=>$this->getPartnerid());
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
	 * Match by attributes of passed example instance and return matched rows as an array of LocationModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param LocationModel $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return LocationModel[]
	 */
	public static function findByExample(PDO $db,LocationModel $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of LocationModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return LocationModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `location`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of LocationModel instances
	 *
	 * @param PDOStatement $stmt
	 * @return LocationModel[]
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
	 * returns the result as an array of LocationModel instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return LocationModel[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new LocationModel();
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
	 * Execute select query and return matched rows as an array of LocationModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return LocationModel[]
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
		$sql='DELETE FROM `location`'
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
		$this->setLocid($result['locid']);
		$this->setDescription($result['description']);
		$this->setLoctypeid($result['loctypeid']);
		$this->setPartnerid($result['partnerid']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return LocationModel
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
		$o=new LocationModel();
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
		$stmt->bindValue(2,$this->getLocid());
		$stmt->bindValue(3,$this->getDescription());
		$stmt->bindValue(4,$this->getLoctypeid());
		$stmt->bindValue(5,$this->getPartnerid());
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
			$stmt->bindValue(1,$this->getLocid());
			$stmt->bindValue(2,$this->getDescription());
			$stmt->bindValue(3,$this->getLoctypeid());
			$stmt->bindValue(4,$this->getPartnerid());
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
	 * Fetch LocationmasterModel's which this LocationModel references.
	 * `location`.`id` -> `locationmaster`.`locid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return LocationmasterModel[]
	 */
	public function fetchLocationmasterModelCollection(PDO $db, $sort=null) {
		$filter=array(LocationmasterModel::FIELD_LOCID=>$this->getId());
		return LocationmasterModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfInpinvModel's which this LocationModel references.
	 * `location`.`id` -> `pmf_inpinv`.`locid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfInpinvModel[]
	 */
	public function fetchPmfInpinvModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfInpinvModel::FIELD_LOCID=>$this->getId());
		return PmfInpinvModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfInvModel's which this LocationModel references.
	 * `location`.`id` -> `pmf_inv`.`locid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfInvModel[]
	 */
	public function fetchPmfInvModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfInvModel::FIELD_LOCID=>$this->getId());
		return PmfInvModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfInvhisModel's which this LocationModel references.
	 * `location`.`id` -> `pmf_invhis`.`locid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfInvhisModel[]
	 */
	public function fetchPmfInvhisModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfInvhisModel::FIELD_LOCID=>$this->getId());
		return PmfInvhisModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfOutinvModel's which this LocationModel references.
	 * `location`.`id` -> `pmf_outinv`.`locid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfOutinvModel[]
	 */
	public function fetchPmfOutinvModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfOutinvModel::FIELD_LOCID=>$this->getId());
		return PmfOutinvModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfProclocationModel's which this LocationModel references.
	 * `location`.`id` -> `pmf_proclocation`.`locid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfProclocationModel[]
	 */
	public function fetchPmfProclocationModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfProclocationModel::FIELD_LOCID=>$this->getId());
		return PmfProclocationModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch RecvtypeModel's which this LocationModel references.
	 * `location`.`id` -> `recvtype`.`locid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return RecvtypeModel[]
	 */
	public function fetchRecvtypeModelCollection(PDO $db, $sort=null) {
		$filter=array(RecvtypeModel::FIELD_LOCID=>$this->getId());
		return RecvtypeModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch RequesttypeModel's which this LocationModel references.
	 * `location`.`id` -> `requesttype`.`locid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return RequesttypeModel[]
	 */
	public function fetchRequesttypeModelCollection(PDO $db, $sort=null) {
		$filter=array(RequesttypeModel::FIELD_LOCID=>$this->getId());
		return RequesttypeModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch LocationtypeModel which references this LocationModel. Will return null in case reference is invalid.
	 * `location`.`loctypeid` -> `locationtype`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return LocationtypeModel
	 */
	public function fetchLocationtypeModel(PDO $db, $sort=null) {
		$filter=array(LocationtypeModel::FIELD_ID=>$this->getLoctypeid());
		$result=LocationtypeModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch PartnerModel which references this LocationModel. Will return null in case reference is invalid.
	 * `location`.`partnerid` -> `partner`.`id`
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
		return self::hashToDomDocument($this->toHash(), 'LocationModel');
	}

	/**
	 * get single LocationModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return LocationModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new LocationModel();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of LocationModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return LocationModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('LocationModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>