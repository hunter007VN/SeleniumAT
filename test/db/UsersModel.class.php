<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class UsersModel extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='UsersModel';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='users';
	const SQL_INSERT='INSERT INTO `users` (`id`,`accountname`,`fullname`,`email`,`hashedpassword`,`roleid`,`isdisable`,`tag`,`potraitid`,`comuserid`) VALUES (?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `users` (`accountname`,`fullname`,`email`,`hashedpassword`,`roleid`,`isdisable`,`tag`,`potraitid`,`comuserid`) VALUES (?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `users` SET `id`=?,`accountname`=?,`fullname`=?,`email`=?,`hashedpassword`=?,`roleid`=?,`isdisable`=?,`tag`=?,`potraitid`=?,`comuserid`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `users` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `users` WHERE `id`=?';
	const FIELD_ID=-265613631;
	const FIELD_ACCOUNTNAME=-185491630;
	const FIELD_FULLNAME=1725065920;
	const FIELD_EMAIL=-1569251274;
	const FIELD_HASHEDPASSWORD=-614746002;
	const FIELD_ROLEID=-1027799369;
	const FIELD_ISDISABLE=-1266955752;
	const FIELD_TAG=355922612;
	const FIELD_POTRAITID=2140909668;
	const FIELD_COMUSERID=-1947154815;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_ACCOUNTNAME=>'accountname',
		self::FIELD_FULLNAME=>'fullname',
		self::FIELD_EMAIL=>'email',
		self::FIELD_HASHEDPASSWORD=>'hashedpassword',
		self::FIELD_ROLEID=>'roleid',
		self::FIELD_ISDISABLE=>'isdisable',
		self::FIELD_TAG=>'tag',
		self::FIELD_POTRAITID=>'potraitid',
		self::FIELD_COMUSERID=>'comuserid');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_ACCOUNTNAME=>'accountname',
		self::FIELD_FULLNAME=>'fullname',
		self::FIELD_EMAIL=>'email',
		self::FIELD_HASHEDPASSWORD=>'hashedpassword',
		self::FIELD_ROLEID=>'roleid',
		self::FIELD_ISDISABLE=>'isdisable',
		self::FIELD_TAG=>'tag',
		self::FIELD_POTRAITID=>'potraitid',
		self::FIELD_COMUSERID=>'comuserid');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ACCOUNTNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FULLNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_HASHEDPASSWORD=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ROLEID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ISDISABLE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TAG=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_POTRAITID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_COMUSERID=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_ACCOUNTNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,true),
		self::FIELD_FULLNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_EMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_HASHEDPASSWORD=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,250,0,true),
		self::FIELD_ROLEID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_ISDISABLE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_TAG=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,250,0,true),
		self::FIELD_POTRAITID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_COMUSERID=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,20,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_ACCOUNTNAME=>null,
		self::FIELD_FULLNAME=>null,
		self::FIELD_EMAIL=>null,
		self::FIELD_HASHEDPASSWORD=>null,
		self::FIELD_ROLEID=>0,
		self::FIELD_ISDISABLE=>0,
		self::FIELD_TAG=>null,
		self::FIELD_POTRAITID=>null,
		self::FIELD_COMUSERID=>null);
	private $id;
	private $accountname;
	private $fullname;
	private $email;
	private $hashedpassword;
	private $roleid;
	private $isdisable;
	private $tag;
	private $potraitid;
	private $comuserid;

	/**
	 * set value for id 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return UsersModel
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
	 * set value for accountname 
	 *
	 * type:VARCHAR,size:25,default:null,unique,nullable
	 *
	 * @param mixed $accountname
	 * @return UsersModel
	 */
	public function &setAccountname($accountname) {
		$this->notifyChanged(self::FIELD_ACCOUNTNAME,$this->accountname,$accountname);
		$this->accountname=$accountname;
		return $this;
	}

	/**
	 * get value for accountname 
	 *
	 * type:VARCHAR,size:25,default:null,unique,nullable
	 *
	 * @return mixed
	 */
	public function getAccountname() {
		return $this->accountname;
	}

	/**
	 * set value for fullname 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $fullname
	 * @return UsersModel
	 */
	public function &setFullname($fullname) {
		$this->notifyChanged(self::FIELD_FULLNAME,$this->fullname,$fullname);
		$this->fullname=$fullname;
		return $this;
	}

	/**
	 * get value for fullname 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getFullname() {
		return $this->fullname;
	}

	/**
	 * set value for email 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $email
	 * @return UsersModel
	 */
	public function &setEmail($email) {
		$this->notifyChanged(self::FIELD_EMAIL,$this->email,$email);
		$this->email=$email;
		return $this;
	}

	/**
	 * get value for email 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * set value for hashedpassword 
	 *
	 * type:VARCHAR,size:250,default:null,nullable
	 *
	 * @param mixed $hashedpassword
	 * @return UsersModel
	 */
	public function &setHashedpassword($hashedpassword) {
		$this->notifyChanged(self::FIELD_HASHEDPASSWORD,$this->hashedpassword,$hashedpassword);
		$this->hashedpassword=$hashedpassword;
		return $this;
	}

	/**
	 * get value for hashedpassword 
	 *
	 * type:VARCHAR,size:250,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getHashedpassword() {
		return $this->hashedpassword;
	}

	/**
	 * set value for roleid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $roleid
	 * @return UsersModel
	 */
	public function &setRoleid($roleid) {
		$this->notifyChanged(self::FIELD_ROLEID,$this->roleid,$roleid);
		$this->roleid=$roleid;
		return $this;
	}

	/**
	 * get value for roleid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getRoleid() {
		return $this->roleid;
	}

	/**
	 * set value for isdisable 
	 *
	 * type:INT UNSIGNED,size:10,default:0
	 *
	 * @param mixed $isdisable
	 * @return UsersModel
	 */
	public function &setIsdisable($isdisable) {
		$this->notifyChanged(self::FIELD_ISDISABLE,$this->isdisable,$isdisable);
		$this->isdisable=$isdisable;
		return $this;
	}

	/**
	 * get value for isdisable 
	 *
	 * type:INT UNSIGNED,size:10,default:0
	 *
	 * @return mixed
	 */
	public function getIsdisable() {
		return $this->isdisable;
	}

	/**
	 * set value for tag 
	 *
	 * type:VARCHAR,size:250,default:null,nullable
	 *
	 * @param mixed $tag
	 * @return UsersModel
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
	 * set value for potraitid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $potraitid
	 * @return UsersModel
	 */
	public function &setPotraitid($potraitid) {
		$this->notifyChanged(self::FIELD_POTRAITID,$this->potraitid,$potraitid);
		$this->potraitid=$potraitid;
		return $this;
	}

	/**
	 * get value for potraitid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getPotraitid() {
		return $this->potraitid;
	}

	/**
	 * set value for comuserid 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @param mixed $comuserid
	 * @return UsersModel
	 */
	public function &setComuserid($comuserid) {
		$this->notifyChanged(self::FIELD_COMUSERID,$this->comuserid,$comuserid);
		$this->comuserid=$comuserid;
		return $this;
	}

	/**
	 * get value for comuserid 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getComuserid() {
		return $this->comuserid;
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
			self::FIELD_ACCOUNTNAME=>$this->getAccountname(),
			self::FIELD_FULLNAME=>$this->getFullname(),
			self::FIELD_EMAIL=>$this->getEmail(),
			self::FIELD_HASHEDPASSWORD=>$this->getHashedpassword(),
			self::FIELD_ROLEID=>$this->getRoleid(),
			self::FIELD_ISDISABLE=>$this->getIsdisable(),
			self::FIELD_TAG=>$this->getTag(),
			self::FIELD_POTRAITID=>$this->getPotraitid(),
			self::FIELD_COMUSERID=>$this->getComuserid());
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
	 * Match by attributes of passed example instance and return matched rows as an array of UsersModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param UsersModel $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return UsersModel[]
	 */
	public static function findByExample(PDO $db,UsersModel $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of UsersModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return UsersModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `users`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of UsersModel instances
	 *
	 * @param PDOStatement $stmt
	 * @return UsersModel[]
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
	 * returns the result as an array of UsersModel instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return UsersModel[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new UsersModel();
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
	 * Execute select query and return matched rows as an array of UsersModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return UsersModel[]
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
		$sql='DELETE FROM `users`'
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
		$this->setAccountname($result['accountname']);
		$this->setFullname($result['fullname']);
		$this->setEmail($result['email']);
		$this->setHashedpassword($result['hashedpassword']);
		$this->setRoleid($result['roleid']);
		$this->setIsdisable($result['isdisable']);
		$this->setTag($result['tag']);
		$this->setPotraitid($result['potraitid']);
		$this->setComuserid($result['comuserid']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return UsersModel
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
		$o=new UsersModel();
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
		$stmt->bindValue(2,$this->getAccountname());
		$stmt->bindValue(3,$this->getFullname());
		$stmt->bindValue(4,$this->getEmail());
		$stmt->bindValue(5,$this->getHashedpassword());
		$stmt->bindValue(6,$this->getRoleid());
		$stmt->bindValue(7,$this->getIsdisable());
		$stmt->bindValue(8,$this->getTag());
		$stmt->bindValue(9,$this->getPotraitid());
		$stmt->bindValue(10,$this->getComuserid());
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
			$stmt->bindValue(1,$this->getAccountname());
			$stmt->bindValue(2,$this->getFullname());
			$stmt->bindValue(3,$this->getEmail());
			$stmt->bindValue(4,$this->getHashedpassword());
			$stmt->bindValue(5,$this->getRoleid());
			$stmt->bindValue(6,$this->getIsdisable());
			$stmt->bindValue(7,$this->getTag());
			$stmt->bindValue(8,$this->getPotraitid());
			$stmt->bindValue(9,$this->getComuserid());
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
	 * Fetch InvorderModel's which this UsersModel references.
	 * `users`.`id` -> `invorder`.`createby`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return InvorderModel[]
	 */
	public function fetchInvorderModelCollection(PDO $db, $sort=null) {
		$filter=array(InvorderModel::FIELD_CREATEBY=>$this->getId());
		return InvorderModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch LocationmasterModel's which this UsersModel references.
	 * `users`.`id` -> `locationmaster`.`userid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return LocationmasterModel[]
	 */
	public function fetchLocationmasterModelCollection(PDO $db, $sort=null) {
		$filter=array(LocationmasterModel::FIELD_USERID=>$this->getId());
		return LocationmasterModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch OrderdetailModel's which this UsersModel references.
	 * `users`.`id` -> `orderdetail`.`requestby`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return OrderdetailModel[]
	 */
	public function fetchOrderdetailModelCollection(PDO $db, $sort=null) {
		$filter=array(OrderdetailModel::FIELD_REQUESTBY=>$this->getId());
		return OrderdetailModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfBomModel's which this UsersModel references.
	 * `users`.`id` -> `pmf_bom`.`createby`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfBomModel[]
	 */
	public function fetchPmfBomModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfBomModel::FIELD_CREATEBY=>$this->getId());
		return PmfBomModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfInpinvModel's which this UsersModel references.
	 * `users`.`id` -> `pmf_inpinv`.`usrid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfInpinvModel[]
	 */
	public function fetchPmfInpinvModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfInpinvModel::FIELD_USRID=>$this->getId());
		return PmfInpinvModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfInvModel's which this UsersModel references.
	 * `users`.`id` -> `pmf_inv`.`usrid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfInvModel[]
	 */
	public function fetchPmfInvModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfInvModel::FIELD_USRID=>$this->getId());
		return PmfInvModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfInvhisModel's which this UsersModel references.
	 * `users`.`id` -> `pmf_invhis`.`usrid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfInvhisModel[]
	 */
	public function fetchPmfInvhisModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfInvhisModel::FIELD_USRID=>$this->getId());
		return PmfInvhisModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfJobModel's which this UsersModel references.
	 * `users`.`id` -> `pmf_job`.`userid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfJobModel[]
	 */
	public function fetchPmfJobModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfJobModel::FIELD_USERID=>$this->getId());
		return PmfJobModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfJobhisModel's which this UsersModel references.
	 * `users`.`id` -> `pmf_jobhis`.`userid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfJobhisModel[]
	 */
	public function fetchPmfJobhisModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfJobhisModel::FIELD_USERID=>$this->getId());
		return PmfJobhisModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfOutinvModel's which this UsersModel references.
	 * `users`.`id` -> `pmf_outinv`.`usrid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfOutinvModel[]
	 */
	public function fetchPmfOutinvModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfOutinvModel::FIELD_USRID=>$this->getId());
		return PmfOutinvModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch ProdIssModel's which this UsersModel references.
	 * `users`.`id` -> `prod_iss`.`logby`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ProdIssModel[]
	 */
	public function fetchProdIssModelCollection(PDO $db, $sort=null) {
		$filter=array(ProdIssModel::FIELD_LOGBY=>$this->getId());
		return ProdIssModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch ProdSchModel's which this UsersModel references.
	 * `users`.`id` -> `prod_sch`.`recchgby`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ProdSchModel[]
	 */
	public function fetchProdSchModelCollection(PDO $db, $sort=null) {
		$filter=array(ProdSchModel::FIELD_RECCHGBY=>$this->getId());
		return ProdSchModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch UsermasterModel's which this UsersModel references.
	 * `users`.`id` -> `usermaster`.`userid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return UsermasterModel[]
	 */
	public function fetchUsermasterModelCollection(PDO $db, $sort=null) {
		$filter=array(UsermasterModel::FIELD_USERID=>$this->getId());
		return UsermasterModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch UserroleModel which references this UsersModel. Will return null in case reference is invalid.
	 * `users`.`roleid` -> `userrole`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return UserroleModel
	 */
	public function fetchUserroleModel(PDO $db, $sort=null) {
		$filter=array(UserroleModel::FIELD_ID=>$this->getRoleid());
		$result=UserroleModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch DocumentsModel which references this UsersModel. Will return null in case reference is invalid.
	 * `users`.`potraitid` -> `documents`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return DocumentsModel
	 */
	public function fetchDocumentsModel(PDO $db, $sort=null) {
		$filter=array(DocumentsModel::FIELD_ID=>$this->getPotraitid());
		$result=DocumentsModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'UsersModel');
	}

	/**
	 * get single UsersModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return UsersModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new UsersModel();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of UsersModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return UsersModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('UsersModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>