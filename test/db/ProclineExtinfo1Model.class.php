<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class ProclineExtinfo1Model extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='ProclineExtinfo1Model';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='procline_extinfo1';
	const SQL_INSERT='INSERT INTO `procline_extinfo1` (`id`,`proclineid`,`fint`,`fdate`,`fvarchar`,`freftable`) VALUES (?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `procline_extinfo1` (`proclineid`,`fint`,`fdate`,`fvarchar`,`freftable`) VALUES (?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `procline_extinfo1` SET `id`=?,`proclineid`=?,`fint`=?,`fdate`=?,`fvarchar`=?,`freftable`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `procline_extinfo1` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `procline_extinfo1` WHERE `id`=?';
	const FIELD_ID=-632934830;
	const FIELD_PROCLINEID=97899804;
	const FIELD_FINT=1634903360;
	const FIELD_FDATE=-857764739;
	const FIELD_FVARCHAR=179465166;
	const FIELD_FREFTABLE=1814135914;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_PROCLINEID=>'proclineid',
		self::FIELD_FINT=>'fint',
		self::FIELD_FDATE=>'fdate',
		self::FIELD_FVARCHAR=>'fvarchar',
		self::FIELD_FREFTABLE=>'freftable');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_PROCLINEID=>'proclineid',
		self::FIELD_FINT=>'fint',
		self::FIELD_FDATE=>'fdate',
		self::FIELD_FVARCHAR=>'fvarchar',
		self::FIELD_FREFTABLE=>'freftable');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_PROCLINEID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_FINT=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_FDATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FVARCHAR=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FREFTABLE=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_PROCLINEID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_FINT=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_FDATE=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_FVARCHAR=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_FREFTABLE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_PROCLINEID=>0,
		self::FIELD_FINT=>0,
		self::FIELD_FDATE=>null,
		self::FIELD_FVARCHAR=>null,
		self::FIELD_FREFTABLE=>0);
	private $id;
	private $proclineid;
	private $fint;
	private $fdate;
	private $fvarchar;
	private $freftable;

	/**
	 * set value for id 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return ProclineExtinfo1Model
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
	 * set value for proclineid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $proclineid
	 * @return ProclineExtinfo1Model
	 */
	public function &setProclineid($proclineid) {
		$this->notifyChanged(self::FIELD_PROCLINEID,$this->proclineid,$proclineid);
		$this->proclineid=$proclineid;
		return $this;
	}

	/**
	 * get value for proclineid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getProclineid() {
		return $this->proclineid;
	}

	/**
	 * set value for fint 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $fint
	 * @return ProclineExtinfo1Model
	 */
	public function &setFint($fint) {
		$this->notifyChanged(self::FIELD_FINT,$this->fint,$fint);
		$this->fint=$fint;
		return $this;
	}

	/**
	 * get value for fint 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getFint() {
		return $this->fint;
	}

	/**
	 * set value for fdate 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $fdate
	 * @return ProclineExtinfo1Model
	 */
	public function &setFdate($fdate) {
		$this->notifyChanged(self::FIELD_FDATE,$this->fdate,$fdate);
		$this->fdate=$fdate;
		return $this;
	}

	/**
	 * get value for fdate 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getFdate() {
		return $this->fdate;
	}

	/**
	 * set value for fvarchar 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $fvarchar
	 * @return ProclineExtinfo1Model
	 */
	public function &setFvarchar($fvarchar) {
		$this->notifyChanged(self::FIELD_FVARCHAR,$this->fvarchar,$fvarchar);
		$this->fvarchar=$fvarchar;
		return $this;
	}

	/**
	 * get value for fvarchar 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getFvarchar() {
		return $this->fvarchar;
	}

	/**
	 * set value for freftable 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $freftable
	 * @return ProclineExtinfo1Model
	 */
	public function &setFreftable($freftable) {
		$this->notifyChanged(self::FIELD_FREFTABLE,$this->freftable,$freftable);
		$this->freftable=$freftable;
		return $this;
	}

	/**
	 * get value for freftable 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getFreftable() {
		return $this->freftable;
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
			self::FIELD_PROCLINEID=>$this->getProclineid(),
			self::FIELD_FINT=>$this->getFint(),
			self::FIELD_FDATE=>$this->getFdate(),
			self::FIELD_FVARCHAR=>$this->getFvarchar(),
			self::FIELD_FREFTABLE=>$this->getFreftable());
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
	 * Match by attributes of passed example instance and return matched rows as an array of ProclineExtinfo1Model instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param ProclineExtinfo1Model $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return ProclineExtinfo1Model[]
	 */
	public static function findByExample(PDO $db,ProclineExtinfo1Model $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of ProclineExtinfo1Model instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return ProclineExtinfo1Model[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `procline_extinfo1`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of ProclineExtinfo1Model instances
	 *
	 * @param PDOStatement $stmt
	 * @return ProclineExtinfo1Model[]
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
	 * returns the result as an array of ProclineExtinfo1Model instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return ProclineExtinfo1Model[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new ProclineExtinfo1Model();
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
	 * Execute select query and return matched rows as an array of ProclineExtinfo1Model instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return ProclineExtinfo1Model[]
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
		$sql='DELETE FROM `procline_extinfo1`'
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
		$this->setProclineid($result['proclineid']);
		$this->setFint($result['fint']);
		$this->setFdate($result['fdate']);
		$this->setFvarchar($result['fvarchar']);
		$this->setFreftable($result['freftable']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return ProclineExtinfo1Model
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
		$o=new ProclineExtinfo1Model();
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
		$stmt->bindValue(2,$this->getProclineid());
		$stmt->bindValue(3,$this->getFint());
		$stmt->bindValue(4,$this->getFdate());
		$stmt->bindValue(5,$this->getFvarchar());
		$stmt->bindValue(6,$this->getFreftable());
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
			$stmt->bindValue(1,$this->getProclineid());
			$stmt->bindValue(2,$this->getFint());
			$stmt->bindValue(3,$this->getFdate());
			$stmt->bindValue(4,$this->getFvarchar());
			$stmt->bindValue(5,$this->getFreftable());
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
		$stmt->bindValue(7,$this->getId());
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
	 * Fetch PartnerModel which references this ProclineExtinfo1Model. Will return null in case reference is invalid.
	 * `procline_extinfo1`.`freftable` -> `partner`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PartnerModel
	 */
	public function fetchPartnerModel(PDO $db, $sort=null) {
		$filter=array(PartnerModel::FIELD_ID=>$this->getFreftable());
		$result=PartnerModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch PmfProclineModel which references this ProclineExtinfo1Model. Will return null in case reference is invalid.
	 * `procline_extinfo1`.`proclineid` -> `pmf_procline`.`id`
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
		return self::hashToDomDocument($this->toHash(), 'ProclineExtinfo1Model');
	}

	/**
	 * get single ProclineExtinfo1Model instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return ProclineExtinfo1Model
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new ProclineExtinfo1Model();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of ProclineExtinfo1Model from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return ProclineExtinfo1Model[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('ProclineExtinfo1Model') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>