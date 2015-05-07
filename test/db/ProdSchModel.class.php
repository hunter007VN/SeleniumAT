<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class ProdSchModel extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='ProdSchModel';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='prod_sch';
	const SQL_INSERT='INSERT INTO `prod_sch` (`id`,`orderno`,`cust`,`custid`,`prod`,`qty`,`status`,`reldate`,`duedate`,`prodnotes`,`prodarea`,`prodassig`,`prodissid`,`recchgby`,`recchgdt`,`rstyle`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `prod_sch` (`orderno`,`cust`,`custid`,`prod`,`qty`,`status`,`reldate`,`duedate`,`prodnotes`,`prodarea`,`prodassig`,`prodissid`,`recchgby`,`recchgdt`,`rstyle`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `prod_sch` SET `id`=?,`orderno`=?,`cust`=?,`custid`=?,`prod`=?,`qty`=?,`status`=?,`reldate`=?,`duedate`=?,`prodnotes`=?,`prodarea`=?,`prodassig`=?,`prodissid`=?,`recchgby`=?,`recchgdt`=?,`rstyle`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `prod_sch` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `prod_sch` WHERE `id`=?';
	const FIELD_ID=901030041;
	const FIELD_ORDERNO=-1572936495;
	const FIELD_CUST=-1693683119;
	const FIELD_CUSTID=163131180;
	const FIELD_PROD=-1693298859;
	const FIELD_QTY=-2132831496;
	const FIELD_STATUS=619738224;
	const FIELD_RELDATE=724737801;
	const FIELD_DUEDATE=1636189924;
	const FIELD_PRODNOTES=-430617460;
	const FIELD_PRODAREA=539913570;
	const FIELD_PRODASSIG=-442504918;
	const FIELD_PRODISSID=-435116753;
	const FIELD_RECCHGBY=733645543;
	const FIELD_RECCHGDT=733645600;
	const FIELD_RSTYLE=590756093;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_ORDERNO=>'orderno',
		self::FIELD_CUST=>'cust',
		self::FIELD_CUSTID=>'custid',
		self::FIELD_PROD=>'prod',
		self::FIELD_QTY=>'qty',
		self::FIELD_STATUS=>'status',
		self::FIELD_RELDATE=>'reldate',
		self::FIELD_DUEDATE=>'duedate',
		self::FIELD_PRODNOTES=>'prodnotes',
		self::FIELD_PRODAREA=>'prodarea',
		self::FIELD_PRODASSIG=>'prodassig',
		self::FIELD_PRODISSID=>'prodissid',
		self::FIELD_RECCHGBY=>'recchgby',
		self::FIELD_RECCHGDT=>'recchgdt',
		self::FIELD_RSTYLE=>'rstyle');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_ORDERNO=>'orderno',
		self::FIELD_CUST=>'cust',
		self::FIELD_CUSTID=>'custid',
		self::FIELD_PROD=>'prod',
		self::FIELD_QTY=>'qty',
		self::FIELD_STATUS=>'status',
		self::FIELD_RELDATE=>'reldate',
		self::FIELD_DUEDATE=>'duedate',
		self::FIELD_PRODNOTES=>'prodnotes',
		self::FIELD_PRODAREA=>'prodarea',
		self::FIELD_PRODASSIG=>'prodassig',
		self::FIELD_PRODISSID=>'prodissid',
		self::FIELD_RECCHGBY=>'recchgby',
		self::FIELD_RECCHGDT=>'recchgdt',
		self::FIELD_RSTYLE=>'rstyle');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ORDERNO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CUST=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CUSTID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_PROD=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_QTY=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_STATUS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_RELDATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DUEDATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PRODNOTES=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PRODAREA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PRODASSIG=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PRODISSID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_RECCHGBY=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_RECCHGDT=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_RSTYLE=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_ORDERNO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,15,0,false),
		self::FIELD_CUST=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,20,0,true),
		self::FIELD_CUSTID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_PROD=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,false),
		self::FIELD_QTY=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_STATUS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,10,0,false),
		self::FIELD_RELDATE=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_DUEDATE=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_PRODNOTES=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,true),
		self::FIELD_PRODAREA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,10,0,true),
		self::FIELD_PRODASSIG=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,true),
		self::FIELD_PRODISSID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_RECCHGBY=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_RECCHGDT=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_RSTYLE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,20,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_ORDERNO=>'',
		self::FIELD_CUST=>null,
		self::FIELD_CUSTID=>0,
		self::FIELD_PROD=>'',
		self::FIELD_QTY=>null,
		self::FIELD_STATUS=>'',
		self::FIELD_RELDATE=>null,
		self::FIELD_DUEDATE=>null,
		self::FIELD_PRODNOTES=>null,
		self::FIELD_PRODAREA=>null,
		self::FIELD_PRODASSIG=>null,
		self::FIELD_PRODISSID=>null,
		self::FIELD_RECCHGBY=>null,
		self::FIELD_RECCHGDT=>null,
		self::FIELD_RSTYLE=>null);
	private $id;
	private $orderno;
	private $cust;
	private $custid;
	private $prod;
	private $qty;
	private $status;
	private $reldate;
	private $duedate;
	private $prodnotes;
	private $prodarea;
	private $prodassig;
	private $prodissid;
	private $recchgby;
	private $recchgdt;
	private $rstyle;

	/**
	 * set value for id 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return ProdSchModel
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
	 * set value for orderno CCI’s sales order #
	 *
	 * type:VARCHAR,size:15,default:null,index
	 *
	 * @param mixed $orderno
	 * @return ProdSchModel
	 */
	public function &setOrderno($orderno) {
		$this->notifyChanged(self::FIELD_ORDERNO,$this->orderno,$orderno);
		$this->orderno=$orderno;
		return $this;
	}

	/**
	 * get value for orderno CCI’s sales order #
	 *
	 * type:VARCHAR,size:15,default:null,index
	 *
	 * @return mixed
	 */
	public function getOrderno() {
		return $this->orderno;
	}

	/**
	 * set value for cust Customer
	 *
	 * type:VARCHAR,size:20,default:null,index,nullable
	 *
	 * @param mixed $cust
	 * @return ProdSchModel
	 */
	public function &setCust($cust) {
		$this->notifyChanged(self::FIELD_CUST,$this->cust,$cust);
		$this->cust=$cust;
		return $this;
	}

	/**
	 * get value for cust Customer
	 *
	 * type:VARCHAR,size:20,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getCust() {
		return $this->cust;
	}

	/**
	 * set value for custid This is Foreign key to SMPROC3 customer’s ID record.
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $custid
	 * @return ProdSchModel
	 */
	public function &setCustid($custid) {
		$this->notifyChanged(self::FIELD_CUSTID,$this->custid,$custid);
		$this->custid=$custid;
		return $this;
	}

	/**
	 * get value for custid This is Foreign key to SMPROC3 customer’s ID record.
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getCustid() {
		return $this->custid;
	}

	/**
	 * set value for prod Product’s name
	 *
	 * type:VARCHAR,size:25,default:null,index
	 *
	 * @param mixed $prod
	 * @return ProdSchModel
	 */
	public function &setProd($prod) {
		$this->notifyChanged(self::FIELD_PROD,$this->prod,$prod);
		$this->prod=$prod;
		return $this;
	}

	/**
	 * get value for prod Product’s name
	 *
	 * type:VARCHAR,size:25,default:null,index
	 *
	 * @return mixed
	 */
	public function getProd() {
		return $this->prod;
	}

	/**
	 * set value for qty 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $qty
	 * @return ProdSchModel
	 */
	public function &setQty($qty) {
		$this->notifyChanged(self::FIELD_QTY,$this->qty,$qty);
		$this->qty=$qty;
		return $this;
	}

	/**
	 * get value for qty 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getQty() {
		return $this->qty;
	}

	/**
	 * set value for status 
	 *
	 * type:VARCHAR,size:10,default:null
	 *
	 * @param mixed $status
	 * @return ProdSchModel
	 */
	public function &setStatus($status) {
		$this->notifyChanged(self::FIELD_STATUS,$this->status,$status);
		$this->status=$status;
		return $this;
	}

	/**
	 * get value for status 
	 *
	 * type:VARCHAR,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * set value for reldate Date order release to production
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $reldate
	 * @return ProdSchModel
	 */
	public function &setReldate($reldate) {
		$this->notifyChanged(self::FIELD_RELDATE,$this->reldate,$reldate);
		$this->reldate=$reldate;
		return $this;
	}

	/**
	 * get value for reldate Date order release to production
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getReldate() {
		return $this->reldate;
	}

	/**
	 * set value for duedate Date order must be ship
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $duedate
	 * @return ProdSchModel
	 */
	public function &setDuedate($duedate) {
		$this->notifyChanged(self::FIELD_DUEDATE,$this->duedate,$duedate);
		$this->duedate=$duedate;
		return $this;
	}

	/**
	 * get value for duedate Date order must be ship
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDuedate() {
		return $this->duedate;
	}

	/**
	 * set value for prodnotes Notes.
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @param mixed $prodnotes
	 * @return ProdSchModel
	 */
	public function &setProdnotes($prodnotes) {
		$this->notifyChanged(self::FIELD_PRODNOTES,$this->prodnotes,$prodnotes);
		$this->prodnotes=$prodnotes;
		return $this;
	}

	/**
	 * get value for prodnotes Notes.
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getProdnotes() {
		return $this->prodnotes;
	}

	/**
	 * set value for prodarea Production area assign to build
	 *
	 * type:VARCHAR,size:10,default:null,nullable
	 *
	 * @param mixed $prodarea
	 * @return ProdSchModel
	 */
	public function &setProdarea($prodarea) {
		$this->notifyChanged(self::FIELD_PRODAREA,$this->prodarea,$prodarea);
		$this->prodarea=$prodarea;
		return $this;
	}

	/**
	 * get value for prodarea Production area assign to build
	 *
	 * type:VARCHAR,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getProdarea() {
		return $this->prodarea;
	}

	/**
	 * set value for prodassig Production team assign to build
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @param mixed $prodassig
	 * @return ProdSchModel
	 */
	public function &setProdassig($prodassig) {
		$this->notifyChanged(self::FIELD_PRODASSIG,$this->prodassig,$prodassig);
		$this->prodassig=$prodassig;
		return $this;
	}

	/**
	 * get value for prodassig Production team assign to build
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getProdassig() {
		return $this->prodassig;
	}

	/**
	 * set value for prodissid Foreign key point to user table.
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $prodissid
	 * @return ProdSchModel
	 */
	public function &setProdissid($prodissid) {
		$this->notifyChanged(self::FIELD_PRODISSID,$this->prodissid,$prodissid);
		$this->prodissid=$prodissid;
		return $this;
	}

	/**
	 * get value for prodissid Foreign key point to user table.
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getProdissid() {
		return $this->prodissid;
	}

	/**
	 * set value for recchgby Record Date time when create or update made to this row
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $recchgby
	 * @return ProdSchModel
	 */
	public function &setRecchgby($recchgby) {
		$this->notifyChanged(self::FIELD_RECCHGBY,$this->recchgby,$recchgby);
		$this->recchgby=$recchgby;
		return $this;
	}

	/**
	 * get value for recchgby Record Date time when create or update made to this row
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getRecchgby() {
		return $this->recchgby;
	}

	/**
	 * set value for recchgdt 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $recchgdt
	 * @return ProdSchModel
	 */
	public function &setRecchgdt($recchgdt) {
		$this->notifyChanged(self::FIELD_RECCHGDT,$this->recchgdt,$recchgdt);
		$this->recchgdt=$recchgdt;
		return $this;
	}

	/**
	 * get value for recchgdt 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getRecchgdt() {
		return $this->recchgdt;
	}

	/**
	 * set value for rstyle 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @param mixed $rstyle
	 * @return ProdSchModel
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
			self::FIELD_ORDERNO=>$this->getOrderno(),
			self::FIELD_CUST=>$this->getCust(),
			self::FIELD_CUSTID=>$this->getCustid(),
			self::FIELD_PROD=>$this->getProd(),
			self::FIELD_QTY=>$this->getQty(),
			self::FIELD_STATUS=>$this->getStatus(),
			self::FIELD_RELDATE=>$this->getReldate(),
			self::FIELD_DUEDATE=>$this->getDuedate(),
			self::FIELD_PRODNOTES=>$this->getProdnotes(),
			self::FIELD_PRODAREA=>$this->getProdarea(),
			self::FIELD_PRODASSIG=>$this->getProdassig(),
			self::FIELD_PRODISSID=>$this->getProdissid(),
			self::FIELD_RECCHGBY=>$this->getRecchgby(),
			self::FIELD_RECCHGDT=>$this->getRecchgdt(),
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
	 * Match by attributes of passed example instance and return matched rows as an array of ProdSchModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param ProdSchModel $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return ProdSchModel[]
	 */
	public static function findByExample(PDO $db,ProdSchModel $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of ProdSchModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return ProdSchModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `prod_sch`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of ProdSchModel instances
	 *
	 * @param PDOStatement $stmt
	 * @return ProdSchModel[]
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
	 * returns the result as an array of ProdSchModel instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return ProdSchModel[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new ProdSchModel();
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
	 * Execute select query and return matched rows as an array of ProdSchModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return ProdSchModel[]
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
		$sql='DELETE FROM `prod_sch`'
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
		$this->setOrderno($result['orderno']);
		$this->setCust($result['cust']);
		$this->setCustid($result['custid']);
		$this->setProd($result['prod']);
		$this->setQty($result['qty']);
		$this->setStatus($result['status']);
		$this->setReldate($result['reldate']);
		$this->setDuedate($result['duedate']);
		$this->setProdnotes($result['prodnotes']);
		$this->setProdarea($result['prodarea']);
		$this->setProdassig($result['prodassig']);
		$this->setProdissid($result['prodissid']);
		$this->setRecchgby($result['recchgby']);
		$this->setRecchgdt($result['recchgdt']);
		$this->setRstyle($result['rstyle']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return ProdSchModel
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
		$o=new ProdSchModel();
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
		$stmt->bindValue(2,$this->getOrderno());
		$stmt->bindValue(3,$this->getCust());
		$stmt->bindValue(4,$this->getCustid());
		$stmt->bindValue(5,$this->getProd());
		$stmt->bindValue(6,$this->getQty());
		$stmt->bindValue(7,$this->getStatus());
		$stmt->bindValue(8,$this->getReldate());
		$stmt->bindValue(9,$this->getDuedate());
		$stmt->bindValue(10,$this->getProdnotes());
		$stmt->bindValue(11,$this->getProdarea());
		$stmt->bindValue(12,$this->getProdassig());
		$stmt->bindValue(13,$this->getProdissid());
		$stmt->bindValue(14,$this->getRecchgby());
		$stmt->bindValue(15,$this->getRecchgdt());
		$stmt->bindValue(16,$this->getRstyle());
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
			$stmt->bindValue(1,$this->getOrderno());
			$stmt->bindValue(2,$this->getCust());
			$stmt->bindValue(3,$this->getCustid());
			$stmt->bindValue(4,$this->getProd());
			$stmt->bindValue(5,$this->getQty());
			$stmt->bindValue(6,$this->getStatus());
			$stmt->bindValue(7,$this->getReldate());
			$stmt->bindValue(8,$this->getDuedate());
			$stmt->bindValue(9,$this->getProdnotes());
			$stmt->bindValue(10,$this->getProdarea());
			$stmt->bindValue(11,$this->getProdassig());
			$stmt->bindValue(12,$this->getProdissid());
			$stmt->bindValue(13,$this->getRecchgby());
			$stmt->bindValue(14,$this->getRecchgdt());
			$stmt->bindValue(15,$this->getRstyle());
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
	 * Fetch ProdIssModel which references this ProdSchModel. Will return null in case reference is invalid.
	 * `prod_sch`.`prodissid` -> `prod_iss`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ProdIssModel
	 */
	public function fetchProdIssModel(PDO $db, $sort=null) {
		$filter=array(ProdIssModel::FIELD_ID=>$this->getProdissid());
		$result=ProdIssModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch PartnerModel which references this ProdSchModel. Will return null in case reference is invalid.
	 * `prod_sch`.`custid` -> `partner`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PartnerModel
	 */
	public function fetchPartnerModel(PDO $db, $sort=null) {
		$filter=array(PartnerModel::FIELD_ID=>$this->getCustid());
		$result=PartnerModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch UsersModel which references this ProdSchModel. Will return null in case reference is invalid.
	 * `prod_sch`.`recchgby` -> `users`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return UsersModel
	 */
	public function fetchUsersModel(PDO $db, $sort=null) {
		$filter=array(UsersModel::FIELD_ID=>$this->getRecchgby());
		$result=UsersModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'ProdSchModel');
	}

	/**
	 * get single ProdSchModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return ProdSchModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new ProdSchModel();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of ProdSchModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return ProdSchModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('ProdSchModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>