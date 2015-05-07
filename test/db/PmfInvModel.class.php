<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class PmfInvModel extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='PmfInvModel';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='pmf_inv';
	const SQL_INSERT='INSERT INTO `pmf_inv` (`id`,`itemid`,`itemmasterid`,`ssn`,`locid`,`partnerid`,`qty`,`invaction`,`dtm`,`usrid`,`refid`,`jobid`,`caseid`,`bounce`,`palletid`,`coo`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `pmf_inv` (`itemid`,`itemmasterid`,`ssn`,`locid`,`partnerid`,`qty`,`invaction`,`dtm`,`usrid`,`refid`,`jobid`,`caseid`,`bounce`,`palletid`,`coo`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `pmf_inv` SET `id`=?,`itemid`=?,`itemmasterid`=?,`ssn`=?,`locid`=?,`partnerid`=?,`qty`=?,`invaction`=?,`dtm`=?,`usrid`=?,`refid`=?,`jobid`=?,`caseid`=?,`bounce`=?,`palletid`=?,`coo`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `pmf_inv` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `pmf_inv` WHERE `id`=?';
	const FIELD_ID=-1075974354;
	const FIELD_ITEMID=-1259884543;
	const FIELD_ITEMMASTERID=1961592163;
	const FIELD_SSN=1004543579;
	const FIELD_LOCID=-1007853208;
	const FIELD_PARTNERID=835652208;
	const FIELD_QTY=1004541699;
	const FIELD_INVACTION=486002676;
	const FIELD_DTM=1004529194;
	const FIELD_USRID=-999407940;
	const FIELD_REFID=-1002607109;
	const FIELD_JOBID=-1009701211;
	const FIELD_CASEID=-1448796962;
	const FIELD_BOUNCE=-1464428773;
	const FIELD_PALLETID=263181454;
	const FIELD_COO=1004528080;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_ITEMID=>'itemid',
		self::FIELD_ITEMMASTERID=>'itemmasterid',
		self::FIELD_SSN=>'ssn',
		self::FIELD_LOCID=>'locid',
		self::FIELD_PARTNERID=>'partnerid',
		self::FIELD_QTY=>'qty',
		self::FIELD_INVACTION=>'invaction',
		self::FIELD_DTM=>'dtm',
		self::FIELD_USRID=>'usrid',
		self::FIELD_REFID=>'refid',
		self::FIELD_JOBID=>'jobid',
		self::FIELD_CASEID=>'caseid',
		self::FIELD_BOUNCE=>'bounce',
		self::FIELD_PALLETID=>'palletid',
		self::FIELD_COO=>'coo');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_ITEMID=>'itemid',
		self::FIELD_ITEMMASTERID=>'itemmasterid',
		self::FIELD_SSN=>'ssn',
		self::FIELD_LOCID=>'locid',
		self::FIELD_PARTNERID=>'partnerid',
		self::FIELD_QTY=>'qty',
		self::FIELD_INVACTION=>'invaction',
		self::FIELD_DTM=>'dtm',
		self::FIELD_USRID=>'usrid',
		self::FIELD_REFID=>'refid',
		self::FIELD_JOBID=>'jobid',
		self::FIELD_CASEID=>'caseid',
		self::FIELD_BOUNCE=>'bounce',
		self::FIELD_PALLETID=>'palletid',
		self::FIELD_COO=>'coo');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ITEMID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ITEMMASTERID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_SSN=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LOCID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_PARTNERID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_QTY=>Db2PhpEntity::PHP_TYPE_FLOAT,
		self::FIELD_INVACTION=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_DTM=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_USRID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_REFID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_JOBID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_CASEID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_BOUNCE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_PALLETID=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_COO=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_ITEMID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_ITEMMASTERID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_SSN=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_LOCID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_PARTNERID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_QTY=>array(Db2PhpEntity::JDBC_TYPE_DOUBLE,22,0,false),
		self::FIELD_INVACTION=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_DTM=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_USRID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_REFID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_JOBID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_CASEID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_BOUNCE=>array(Db2PhpEntity::JDBC_TYPE_SMALLINT,5,0,true),
		self::FIELD_PALLETID=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_COO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,5,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_ITEMID=>null,
		self::FIELD_ITEMMASTERID=>0,
		self::FIELD_SSN=>null,
		self::FIELD_LOCID=>null,
		self::FIELD_PARTNERID=>null,
		self::FIELD_QTY=>0,
		self::FIELD_INVACTION=>null,
		self::FIELD_DTM=>null,
		self::FIELD_USRID=>null,
		self::FIELD_REFID=>null,
		self::FIELD_JOBID=>null,
		self::FIELD_CASEID=>null,
		self::FIELD_BOUNCE=>null,
		self::FIELD_PALLETID=>null,
		self::FIELD_COO=>null);
	private $id;
	private $itemid;
	private $itemmasterid;
	private $ssn;
	private $locid;
	private $partnerid;
	private $qty;
	private $invaction;
	private $dtm;
	private $usrid;
	private $refid;
	private $jobid;
	private $caseid;
	private $bounce;
	private $palletid;
	private $coo;

	/**
	 * set value for id 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return PmfInvModel
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
	 * set value for itemid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $itemid
	 * @return PmfInvModel
	 */
	public function &setItemid($itemid) {
		$this->notifyChanged(self::FIELD_ITEMID,$this->itemid,$itemid);
		$this->itemid=$itemid;
		return $this;
	}

	/**
	 * get value for itemid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getItemid() {
		return $this->itemid;
	}

	/**
	 * set value for itemmasterid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $itemmasterid
	 * @return PmfInvModel
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
	 * set value for ssn 
	 *
	 * type:VARCHAR,size:50,default:null,index,nullable
	 *
	 * @param mixed $ssn
	 * @return PmfInvModel
	 */
	public function &setSsn($ssn) {
		$this->notifyChanged(self::FIELD_SSN,$this->ssn,$ssn);
		$this->ssn=$ssn;
		return $this;
	}

	/**
	 * get value for ssn 
	 *
	 * type:VARCHAR,size:50,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getSsn() {
		return $this->ssn;
	}

	/**
	 * set value for locid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $locid
	 * @return PmfInvModel
	 */
	public function &setLocid($locid) {
		$this->notifyChanged(self::FIELD_LOCID,$this->locid,$locid);
		$this->locid=$locid;
		return $this;
	}

	/**
	 * get value for locid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getLocid() {
		return $this->locid;
	}

	/**
	 * set value for partnerid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $partnerid
	 * @return PmfInvModel
	 */
	public function &setPartnerid($partnerid) {
		$this->notifyChanged(self::FIELD_PARTNERID,$this->partnerid,$partnerid);
		$this->partnerid=$partnerid;
		return $this;
	}

	/**
	 * get value for partnerid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getPartnerid() {
		return $this->partnerid;
	}

	/**
	 * set value for qty 
	 *
	 * type:DOUBLE,size:22,default:null
	 *
	 * @param mixed $qty
	 * @return PmfInvModel
	 */
	public function &setQty($qty) {
		$this->notifyChanged(self::FIELD_QTY,$this->qty,$qty);
		$this->qty=$qty;
		return $this;
	}

	/**
	 * get value for qty 
	 *
	 * type:DOUBLE,size:22,default:null
	 *
	 * @return mixed
	 */
	public function getQty() {
		return $this->qty;
	}

	/**
	 * set value for invaction 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $invaction
	 * @return PmfInvModel
	 */
	public function &setInvaction($invaction) {
		$this->notifyChanged(self::FIELD_INVACTION,$this->invaction,$invaction);
		$this->invaction=$invaction;
		return $this;
	}

	/**
	 * get value for invaction 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getInvaction() {
		return $this->invaction;
	}

	/**
	 * set value for dtm 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $dtm
	 * @return PmfInvModel
	 */
	public function &setDtm($dtm) {
		$this->notifyChanged(self::FIELD_DTM,$this->dtm,$dtm);
		$this->dtm=$dtm;
		return $this;
	}

	/**
	 * get value for dtm 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDtm() {
		return $this->dtm;
	}

	/**
	 * set value for usrid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $usrid
	 * @return PmfInvModel
	 */
	public function &setUsrid($usrid) {
		$this->notifyChanged(self::FIELD_USRID,$this->usrid,$usrid);
		$this->usrid=$usrid;
		return $this;
	}

	/**
	 * get value for usrid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getUsrid() {
		return $this->usrid;
	}

	/**
	 * set value for refid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $refid
	 * @return PmfInvModel
	 */
	public function &setRefid($refid) {
		$this->notifyChanged(self::FIELD_REFID,$this->refid,$refid);
		$this->refid=$refid;
		return $this;
	}

	/**
	 * get value for refid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getRefid() {
		return $this->refid;
	}

	/**
	 * set value for jobid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $jobid
	 * @return PmfInvModel
	 */
	public function &setJobid($jobid) {
		$this->notifyChanged(self::FIELD_JOBID,$this->jobid,$jobid);
		$this->jobid=$jobid;
		return $this;
	}

	/**
	 * get value for jobid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getJobid() {
		return $this->jobid;
	}

	/**
	 * set value for caseid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $caseid
	 * @return PmfInvModel
	 */
	public function &setCaseid($caseid) {
		$this->notifyChanged(self::FIELD_CASEID,$this->caseid,$caseid);
		$this->caseid=$caseid;
		return $this;
	}

	/**
	 * get value for caseid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getCaseid() {
		return $this->caseid;
	}

	/**
	 * set value for bounce 
	 *
	 * type:SMALLINT,size:5,default:null,nullable
	 *
	 * @param mixed $bounce
	 * @return PmfInvModel
	 */
	public function &setBounce($bounce) {
		$this->notifyChanged(self::FIELD_BOUNCE,$this->bounce,$bounce);
		$this->bounce=$bounce;
		return $this;
	}

	/**
	 * get value for bounce 
	 *
	 * type:SMALLINT,size:5,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getBounce() {
		return $this->bounce;
	}

	/**
	 * set value for palletid 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $palletid
	 * @return PmfInvModel
	 */
	public function &setPalletid($palletid) {
		$this->notifyChanged(self::FIELD_PALLETID,$this->palletid,$palletid);
		$this->palletid=$palletid;
		return $this;
	}

	/**
	 * get value for palletid 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPalletid() {
		return $this->palletid;
	}

	/**
	 * set value for coo 
	 *
	 * type:VARCHAR,size:5,default:null,nullable
	 *
	 * @param mixed $coo
	 * @return PmfInvModel
	 */
	public function &setCoo($coo) {
		$this->notifyChanged(self::FIELD_COO,$this->coo,$coo);
		$this->coo=$coo;
		return $this;
	}

	/**
	 * get value for coo 
	 *
	 * type:VARCHAR,size:5,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCoo() {
		return $this->coo;
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
			self::FIELD_ITEMID=>$this->getItemid(),
			self::FIELD_ITEMMASTERID=>$this->getItemmasterid(),
			self::FIELD_SSN=>$this->getSsn(),
			self::FIELD_LOCID=>$this->getLocid(),
			self::FIELD_PARTNERID=>$this->getPartnerid(),
			self::FIELD_QTY=>$this->getQty(),
			self::FIELD_INVACTION=>$this->getInvaction(),
			self::FIELD_DTM=>$this->getDtm(),
			self::FIELD_USRID=>$this->getUsrid(),
			self::FIELD_REFID=>$this->getRefid(),
			self::FIELD_JOBID=>$this->getJobid(),
			self::FIELD_CASEID=>$this->getCaseid(),
			self::FIELD_BOUNCE=>$this->getBounce(),
			self::FIELD_PALLETID=>$this->getPalletid(),
			self::FIELD_COO=>$this->getCoo());
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
	 * Match by attributes of passed example instance and return matched rows as an array of PmfInvModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param PmfInvModel $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PmfInvModel[]
	 */
	public static function findByExample(PDO $db,PmfInvModel $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of PmfInvModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PmfInvModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `pmf_inv`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of PmfInvModel instances
	 *
	 * @param PDOStatement $stmt
	 * @return PmfInvModel[]
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
	 * returns the result as an array of PmfInvModel instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return PmfInvModel[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new PmfInvModel();
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
	 * Execute select query and return matched rows as an array of PmfInvModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return PmfInvModel[]
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
		$sql='DELETE FROM `pmf_inv`'
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
		$this->setItemid($result['itemid']);
		$this->setItemmasterid($result['itemmasterid']);
		$this->setSsn($result['ssn']);
		$this->setLocid($result['locid']);
		$this->setPartnerid($result['partnerid']);
		$this->setQty($result['qty']);
		$this->setInvaction($result['invaction']);
		$this->setDtm($result['dtm']);
		$this->setUsrid($result['usrid']);
		$this->setRefid($result['refid']);
		$this->setJobid($result['jobid']);
		$this->setCaseid($result['caseid']);
		$this->setBounce($result['bounce']);
		$this->setPalletid($result['palletid']);
		$this->setCoo($result['coo']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return PmfInvModel
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
		$o=new PmfInvModel();
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
		$stmt->bindValue(2,$this->getItemid());
		$stmt->bindValue(3,$this->getItemmasterid());
		$stmt->bindValue(4,$this->getSsn());
		$stmt->bindValue(5,$this->getLocid());
		$stmt->bindValue(6,$this->getPartnerid());
		$stmt->bindValue(7,$this->getQty());
		$stmt->bindValue(8,$this->getInvaction());
		$stmt->bindValue(9,$this->getDtm());
		$stmt->bindValue(10,$this->getUsrid());
		$stmt->bindValue(11,$this->getRefid());
		$stmt->bindValue(12,$this->getJobid());
		$stmt->bindValue(13,$this->getCaseid());
		$stmt->bindValue(14,$this->getBounce());
		$stmt->bindValue(15,$this->getPalletid());
		$stmt->bindValue(16,$this->getCoo());
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
			$stmt->bindValue(1,$this->getItemid());
			$stmt->bindValue(2,$this->getItemmasterid());
			$stmt->bindValue(3,$this->getSsn());
			$stmt->bindValue(4,$this->getLocid());
			$stmt->bindValue(5,$this->getPartnerid());
			$stmt->bindValue(6,$this->getQty());
			$stmt->bindValue(7,$this->getInvaction());
			$stmt->bindValue(8,$this->getDtm());
			$stmt->bindValue(9,$this->getUsrid());
			$stmt->bindValue(10,$this->getRefid());
			$stmt->bindValue(11,$this->getJobid());
			$stmt->bindValue(12,$this->getCaseid());
			$stmt->bindValue(13,$this->getBounce());
			$stmt->bindValue(14,$this->getPalletid());
			$stmt->bindValue(15,$this->getCoo());
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
		$stmt->bindValue(17,$this->getId());
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
	 * Fetch PmfInpinvModel which references this PmfInvModel. Will return null in case reference is invalid.
	 * `pmf_inv`.`itemid` -> `pmf_inpinv`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfInpinvModel
	 */
	public function fetchPmfInpinvModel(PDO $db, $sort=null) {
		$filter=array(PmfInpinvModel::FIELD_ID=>$this->getItemid());
		$result=PmfInpinvModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch CasepartModel which references this PmfInvModel. Will return null in case reference is invalid.
	 * `pmf_inv`.`caseid` -> `casepart`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return CasepartModel
	 */
	public function fetchCasepartModel(PDO $db, $sort=null) {
		$filter=array(CasepartModel::FIELD_ID=>$this->getCaseid());
		$result=CasepartModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch PmfInvactionModel which references this PmfInvModel. Will return null in case reference is invalid.
	 * `pmf_inv`.`invaction` -> `pmf_invaction`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfInvactionModel
	 */
	public function fetchPmfInvactionModel(PDO $db, $sort=null) {
		$filter=array(PmfInvactionModel::FIELD_ID=>$this->getInvaction());
		$result=PmfInvactionModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch ItemmasterModel which references this PmfInvModel. Will return null in case reference is invalid.
	 * `pmf_inv`.`itemmasterid` -> `itemmaster`.`id`
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
	 * Fetch PmfJobModel which references this PmfInvModel. Will return null in case reference is invalid.
	 * `pmf_inv`.`jobid` -> `pmf_job`.`id`
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
	 * Fetch LocationModel which references this PmfInvModel. Will return null in case reference is invalid.
	 * `pmf_inv`.`locid` -> `location`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return LocationModel
	 */
	public function fetchLocationModel(PDO $db, $sort=null) {
		$filter=array(LocationModel::FIELD_ID=>$this->getLocid());
		$result=LocationModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch OrderdetailModel which references this PmfInvModel. Will return null in case reference is invalid.
	 * `pmf_inv`.`refid` -> `orderdetail`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return OrderdetailModel
	 */
	public function fetchOrderdetailModel(PDO $db, $sort=null) {
		$filter=array(OrderdetailModel::FIELD_ID=>$this->getRefid());
		$result=OrderdetailModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch PartnerModel which references this PmfInvModel. Will return null in case reference is invalid.
	 * `pmf_inv`.`partnerid` -> `partner`.`id`
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
	 * Fetch UsersModel which references this PmfInvModel. Will return null in case reference is invalid.
	 * `pmf_inv`.`usrid` -> `users`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return UsersModel
	 */
	public function fetchUsersModel(PDO $db, $sort=null) {
		$filter=array(UsersModel::FIELD_ID=>$this->getUsrid());
		$result=UsersModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'PmfInvModel');
	}

	/**
	 * get single PmfInvModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return PmfInvModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new PmfInvModel();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of PmfInvModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return PmfInvModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('PmfInvModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>