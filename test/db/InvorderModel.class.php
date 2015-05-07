<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class InvorderModel extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='InvorderModel';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='invorder';
	const SQL_INSERT='INSERT INTO `invorder` (`id`,`ordercode`,`ordertypeid`,`createddate`,`partnerid`,`requestid`,`recvtypeid`,`shipmethodid`,`requestdate`,`estrecvdate`,`createby`,`description`,`status`,`invoiceno`,`pono`,`shiptransno`,`shipfromname`,`shipfromaddr1`,`shipfromaddr2`,`shipfromaddr3`,`shipfromcity`,`shipfromcountry`,`shipfromstate`,`shipfromzipcode`,`shiptoname`,`shiptoaddr1`,`shiptoaddr2`,`shiptoaddr3`,`shiptocity`,`shiptocountry`,`shiptostate`,`shiptozipcode`,`carrierid`,`commitid`,`city`,`internalmemo`,`internalpono`,`shipment`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `invorder` (`ordercode`,`ordertypeid`,`createddate`,`partnerid`,`requestid`,`recvtypeid`,`shipmethodid`,`requestdate`,`estrecvdate`,`createby`,`description`,`status`,`invoiceno`,`pono`,`shiptransno`,`shipfromname`,`shipfromaddr1`,`shipfromaddr2`,`shipfromaddr3`,`shipfromcity`,`shipfromcountry`,`shipfromstate`,`shipfromzipcode`,`shiptoname`,`shiptoaddr1`,`shiptoaddr2`,`shiptoaddr3`,`shiptocity`,`shiptocountry`,`shiptostate`,`shiptozipcode`,`carrierid`,`commitid`,`city`,`internalmemo`,`internalpono`,`shipment`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `invorder` SET `id`=?,`ordercode`=?,`ordertypeid`=?,`createddate`=?,`partnerid`=?,`requestid`=?,`recvtypeid`=?,`shipmethodid`=?,`requestdate`=?,`estrecvdate`=?,`createby`=?,`description`=?,`status`=?,`invoiceno`=?,`pono`=?,`shiptransno`=?,`shipfromname`=?,`shipfromaddr1`=?,`shipfromaddr2`=?,`shipfromaddr3`=?,`shipfromcity`=?,`shipfromcountry`=?,`shipfromstate`=?,`shipfromzipcode`=?,`shiptoname`=?,`shiptoaddr1`=?,`shiptoaddr2`=?,`shiptoaddr3`=?,`shiptocity`=?,`shiptocountry`=?,`shiptostate`=?,`shiptozipcode`=?,`carrierid`=?,`commitid`=?,`city`=?,`internalmemo`=?,`internalpono`=?,`shipment`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `invorder` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `invorder` WHERE `id`=?';
	const FIELD_ID=-1434952020;
	const FIELD_ORDERCODE=485808010;
	const FIELD_ORDERTYPEID=-793646030;
	const FIELD_CREATEDDATE=431987749;
	const FIELD_PARTNERID=-918695630;
	const FIELD_REQUESTID=1570869561;
	const FIELD_RECVTYPEID=-149832756;
	const FIELD_SHIPMETHODID=-1913956279;
	const FIELD_REQUESTDATE=2071979084;
	const FIELD_ESTRECVDATE=-1310757975;
	const FIELD_CREATEBY=740327204;
	const FIELD_DESCRIPTION=-803117685;
	const FIELD_STATUS=-156176125;
	const FIELD_INVOICENO=-862506243;
	const FIELD_PONO=-304166575;
	const FIELD_SHIPTRANSNO=1517896252;
	const FIELD_SHIPFROMNAME=1580325826;
	const FIELD_SHIPFROMADDR1=1733535753;
	const FIELD_SHIPFROMADDR2=1733535754;
	const FIELD_SHIPFROMADDR3=1733535755;
	const FIELD_SHIPFROMCITY=1580006050;
	const FIELD_SHIPFROMCOUNTRY=1586124543;
	const FIELD_SHIPFROMSTATE=1750633018;
	const FIELD_SHIPFROMZIPCODE=347147255;
	const FIELD_SHIPTONAME=-646168237;
	const FIELD_SHIPTOADDR1=1431696536;
	const FIELD_SHIPTOADDR2=1431696537;
	const FIELD_SHIPTOADDR3=1431696538;
	const FIELD_SHIPTOCITY=-646488013;
	const FIELD_SHIPTOCOUNTRY=-718554162;
	const FIELD_SHIPTOSTATE=1448793801;
	const FIELD_SHIPTOZIPCODE=-1957531450;
	const FIELD_CARRIERID=1041500002;
	const FIELD_COMMITID=-1682381469;
	const FIELD_CITY=-304559428;
	const FIELD_INTERNALMEMO=-1579711032;
	const FIELD_INTERNALPONO=-1579612018;
	const FIELD_SHIPMENT=-1596419477;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_ORDERCODE=>'ordercode',
		self::FIELD_ORDERTYPEID=>'ordertypeid',
		self::FIELD_CREATEDDATE=>'createddate',
		self::FIELD_PARTNERID=>'partnerid',
		self::FIELD_REQUESTID=>'requestid',
		self::FIELD_RECVTYPEID=>'recvtypeid',
		self::FIELD_SHIPMETHODID=>'shipmethodid',
		self::FIELD_REQUESTDATE=>'requestdate',
		self::FIELD_ESTRECVDATE=>'estrecvdate',
		self::FIELD_CREATEBY=>'createby',
		self::FIELD_DESCRIPTION=>'description',
		self::FIELD_STATUS=>'status',
		self::FIELD_INVOICENO=>'invoiceno',
		self::FIELD_PONO=>'pono',
		self::FIELD_SHIPTRANSNO=>'shiptransno',
		self::FIELD_SHIPFROMNAME=>'shipfromname',
		self::FIELD_SHIPFROMADDR1=>'shipfromaddr1',
		self::FIELD_SHIPFROMADDR2=>'shipfromaddr2',
		self::FIELD_SHIPFROMADDR3=>'shipfromaddr3',
		self::FIELD_SHIPFROMCITY=>'shipfromcity',
		self::FIELD_SHIPFROMCOUNTRY=>'shipfromcountry',
		self::FIELD_SHIPFROMSTATE=>'shipfromstate',
		self::FIELD_SHIPFROMZIPCODE=>'shipfromzipcode',
		self::FIELD_SHIPTONAME=>'shiptoname',
		self::FIELD_SHIPTOADDR1=>'shiptoaddr1',
		self::FIELD_SHIPTOADDR2=>'shiptoaddr2',
		self::FIELD_SHIPTOADDR3=>'shiptoaddr3',
		self::FIELD_SHIPTOCITY=>'shiptocity',
		self::FIELD_SHIPTOCOUNTRY=>'shiptocountry',
		self::FIELD_SHIPTOSTATE=>'shiptostate',
		self::FIELD_SHIPTOZIPCODE=>'shiptozipcode',
		self::FIELD_CARRIERID=>'carrierid',
		self::FIELD_COMMITID=>'commitid',
		self::FIELD_CITY=>'city',
		self::FIELD_INTERNALMEMO=>'internalmemo',
		self::FIELD_INTERNALPONO=>'internalpono',
		self::FIELD_SHIPMENT=>'shipment');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_ORDERCODE=>'ordercode',
		self::FIELD_ORDERTYPEID=>'ordertypeid',
		self::FIELD_CREATEDDATE=>'createddate',
		self::FIELD_PARTNERID=>'partnerid',
		self::FIELD_REQUESTID=>'requestid',
		self::FIELD_RECVTYPEID=>'recvtypeid',
		self::FIELD_SHIPMETHODID=>'shipmethodid',
		self::FIELD_REQUESTDATE=>'requestdate',
		self::FIELD_ESTRECVDATE=>'estrecvdate',
		self::FIELD_CREATEBY=>'createby',
		self::FIELD_DESCRIPTION=>'description',
		self::FIELD_STATUS=>'status',
		self::FIELD_INVOICENO=>'invoiceno',
		self::FIELD_PONO=>'pono',
		self::FIELD_SHIPTRANSNO=>'shiptransno',
		self::FIELD_SHIPFROMNAME=>'shipfromname',
		self::FIELD_SHIPFROMADDR1=>'shipfromaddr1',
		self::FIELD_SHIPFROMADDR2=>'shipfromaddr2',
		self::FIELD_SHIPFROMADDR3=>'shipfromaddr3',
		self::FIELD_SHIPFROMCITY=>'shipfromcity',
		self::FIELD_SHIPFROMCOUNTRY=>'shipfromcountry',
		self::FIELD_SHIPFROMSTATE=>'shipfromstate',
		self::FIELD_SHIPFROMZIPCODE=>'shipfromzipcode',
		self::FIELD_SHIPTONAME=>'shiptoname',
		self::FIELD_SHIPTOADDR1=>'shiptoaddr1',
		self::FIELD_SHIPTOADDR2=>'shiptoaddr2',
		self::FIELD_SHIPTOADDR3=>'shiptoaddr3',
		self::FIELD_SHIPTOCITY=>'shiptocity',
		self::FIELD_SHIPTOCOUNTRY=>'shiptocountry',
		self::FIELD_SHIPTOSTATE=>'shiptostate',
		self::FIELD_SHIPTOZIPCODE=>'shiptozipcode',
		self::FIELD_CARRIERID=>'carrierid',
		self::FIELD_COMMITID=>'commitid',
		self::FIELD_CITY=>'city',
		self::FIELD_INTERNALMEMO=>'internalmemo',
		self::FIELD_INTERNALPONO=>'internalpono',
		self::FIELD_SHIPMENT=>'shipment');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ORDERCODE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ORDERTYPEID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_CREATEDDATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PARTNERID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_REQUESTID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_RECVTYPEID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_SHIPMETHODID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_REQUESTDATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ESTRECVDATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CREATEBY=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_DESCRIPTION=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_STATUS=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_INVOICENO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PONO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPTRANSNO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPFROMNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPFROMADDR1=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPFROMADDR2=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPFROMADDR3=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPFROMCITY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPFROMCOUNTRY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPFROMSTATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPFROMZIPCODE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPTONAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPTOADDR1=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPTOADDR2=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPTOADDR3=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPTOCITY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPTOCOUNTRY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPTOSTATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPTOZIPCODE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CARRIERID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_COMMITID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_CITY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_INTERNALMEMO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_INTERNALPONO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPMENT=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_ORDERCODE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,20,0,false),
		self::FIELD_ORDERTYPEID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_CREATEDDATE=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,false),
		self::FIELD_PARTNERID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_REQUESTID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_RECVTYPEID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_SHIPMETHODID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_REQUESTDATE=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_ESTRECVDATE=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_CREATEBY=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_DESCRIPTION=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,250,0,true),
		self::FIELD_STATUS=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_INVOICENO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_PONO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_SHIPTRANSNO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_SHIPFROMNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_SHIPFROMADDR1=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_SHIPFROMADDR2=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_SHIPFROMADDR3=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_SHIPFROMCITY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_SHIPFROMCOUNTRY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,15,0,true),
		self::FIELD_SHIPFROMSTATE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_SHIPFROMZIPCODE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,10,0,true),
		self::FIELD_SHIPTONAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_SHIPTOADDR1=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_SHIPTOADDR2=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_SHIPTOADDR3=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_SHIPTOCITY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_SHIPTOCOUNTRY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,15,0,true),
		self::FIELD_SHIPTOSTATE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_SHIPTOZIPCODE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,10,0,true),
		self::FIELD_CARRIERID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_COMMITID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_CITY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_INTERNALMEMO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,250,0,true),
		self::FIELD_INTERNALPONO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_SHIPMENT=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_ORDERCODE=>'',
		self::FIELD_ORDERTYPEID=>0,
		self::FIELD_CREATEDDATE=>'',
		self::FIELD_PARTNERID=>null,
		self::FIELD_REQUESTID=>null,
		self::FIELD_RECVTYPEID=>null,
		self::FIELD_SHIPMETHODID=>null,
		self::FIELD_REQUESTDATE=>null,
		self::FIELD_ESTRECVDATE=>null,
		self::FIELD_CREATEBY=>0,
		self::FIELD_DESCRIPTION=>null,
		self::FIELD_STATUS=>0,
		self::FIELD_INVOICENO=>null,
		self::FIELD_PONO=>null,
		self::FIELD_SHIPTRANSNO=>null,
		self::FIELD_SHIPFROMNAME=>null,
		self::FIELD_SHIPFROMADDR1=>null,
		self::FIELD_SHIPFROMADDR2=>null,
		self::FIELD_SHIPFROMADDR3=>null,
		self::FIELD_SHIPFROMCITY=>null,
		self::FIELD_SHIPFROMCOUNTRY=>null,
		self::FIELD_SHIPFROMSTATE=>null,
		self::FIELD_SHIPFROMZIPCODE=>null,
		self::FIELD_SHIPTONAME=>null,
		self::FIELD_SHIPTOADDR1=>null,
		self::FIELD_SHIPTOADDR2=>null,
		self::FIELD_SHIPTOADDR3=>null,
		self::FIELD_SHIPTOCITY=>null,
		self::FIELD_SHIPTOCOUNTRY=>null,
		self::FIELD_SHIPTOSTATE=>null,
		self::FIELD_SHIPTOZIPCODE=>null,
		self::FIELD_CARRIERID=>null,
		self::FIELD_COMMITID=>null,
		self::FIELD_CITY=>null,
		self::FIELD_INTERNALMEMO=>null,
		self::FIELD_INTERNALPONO=>null,
		self::FIELD_SHIPMENT=>null);
	private $id;
	private $ordercode;
	private $ordertypeid;
	private $createddate;
	private $partnerid;
	private $requestid;
	private $recvtypeid;
	private $shipmethodid;
	private $requestdate;
	private $estrecvdate;
	private $createby;
	private $description;
	private $status;
	private $invoiceno;
	private $pono;
	private $shiptransno;
	private $shipfromname;
	private $shipfromaddr1;
	private $shipfromaddr2;
	private $shipfromaddr3;
	private $shipfromcity;
	private $shipfromcountry;
	private $shipfromstate;
	private $shipfromzipcode;
	private $shiptoname;
	private $shiptoaddr1;
	private $shiptoaddr2;
	private $shiptoaddr3;
	private $shiptocity;
	private $shiptocountry;
	private $shiptostate;
	private $shiptozipcode;
	private $carrierid;
	private $commitid;
	private $city;
	private $internalmemo;
	private $internalpono;
	private $shipment;

	/**
	 * set value for id 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return InvorderModel
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
	 * set value for ordercode 
	 *
	 * type:VARCHAR,size:20,default:null
	 *
	 * @param mixed $ordercode
	 * @return InvorderModel
	 */
	public function &setOrdercode($ordercode) {
		$this->notifyChanged(self::FIELD_ORDERCODE,$this->ordercode,$ordercode);
		$this->ordercode=$ordercode;
		return $this;
	}

	/**
	 * get value for ordercode 
	 *
	 * type:VARCHAR,size:20,default:null
	 *
	 * @return mixed
	 */
	public function getOrdercode() {
		return $this->ordercode;
	}

	/**
	 * set value for ordertypeid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $ordertypeid
	 * @return InvorderModel
	 */
	public function &setOrdertypeid($ordertypeid) {
		$this->notifyChanged(self::FIELD_ORDERTYPEID,$this->ordertypeid,$ordertypeid);
		$this->ordertypeid=$ordertypeid;
		return $this;
	}

	/**
	 * get value for ordertypeid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getOrdertypeid() {
		return $this->ordertypeid;
	}

	/**
	 * set value for createddate 
	 *
	 * type:DATETIME,size:19,default:null
	 *
	 * @param mixed $createddate
	 * @return InvorderModel
	 */
	public function &setCreateddate($createddate) {
		$this->notifyChanged(self::FIELD_CREATEDDATE,$this->createddate,$createddate);
		$this->createddate=$createddate;
		return $this;
	}

	/**
	 * get value for createddate 
	 *
	 * type:DATETIME,size:19,default:null
	 *
	 * @return mixed
	 */
	public function getCreateddate() {
		return $this->createddate;
	}

	/**
	 * set value for partnerid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $partnerid
	 * @return InvorderModel
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
	 * set value for requestid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $requestid
	 * @return InvorderModel
	 */
	public function &setRequestid($requestid) {
		$this->notifyChanged(self::FIELD_REQUESTID,$this->requestid,$requestid);
		$this->requestid=$requestid;
		return $this;
	}

	/**
	 * get value for requestid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getRequestid() {
		return $this->requestid;
	}

	/**
	 * set value for recvtypeid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $recvtypeid
	 * @return InvorderModel
	 */
	public function &setRecvtypeid($recvtypeid) {
		$this->notifyChanged(self::FIELD_RECVTYPEID,$this->recvtypeid,$recvtypeid);
		$this->recvtypeid=$recvtypeid;
		return $this;
	}

	/**
	 * get value for recvtypeid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getRecvtypeid() {
		return $this->recvtypeid;
	}

	/**
	 * set value for shipmethodid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $shipmethodid
	 * @return InvorderModel
	 */
	public function &setShipmethodid($shipmethodid) {
		$this->notifyChanged(self::FIELD_SHIPMETHODID,$this->shipmethodid,$shipmethodid);
		$this->shipmethodid=$shipmethodid;
		return $this;
	}

	/**
	 * get value for shipmethodid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getShipmethodid() {
		return $this->shipmethodid;
	}

	/**
	 * set value for requestdate 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $requestdate
	 * @return InvorderModel
	 */
	public function &setRequestdate($requestdate) {
		$this->notifyChanged(self::FIELD_REQUESTDATE,$this->requestdate,$requestdate);
		$this->requestdate=$requestdate;
		return $this;
	}

	/**
	 * get value for requestdate 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getRequestdate() {
		return $this->requestdate;
	}

	/**
	 * set value for estrecvdate 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $estrecvdate
	 * @return InvorderModel
	 */
	public function &setEstrecvdate($estrecvdate) {
		$this->notifyChanged(self::FIELD_ESTRECVDATE,$this->estrecvdate,$estrecvdate);
		$this->estrecvdate=$estrecvdate;
		return $this;
	}

	/**
	 * get value for estrecvdate 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getEstrecvdate() {
		return $this->estrecvdate;
	}

	/**
	 * set value for createby 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $createby
	 * @return InvorderModel
	 */
	public function &setCreateby($createby) {
		$this->notifyChanged(self::FIELD_CREATEBY,$this->createby,$createby);
		$this->createby=$createby;
		return $this;
	}

	/**
	 * get value for createby 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getCreateby() {
		return $this->createby;
	}

	/**
	 * set value for description 
	 *
	 * type:VARCHAR,size:250,default:null,nullable
	 *
	 * @param mixed $description
	 * @return InvorderModel
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
	 * set value for status 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $status
	 * @return InvorderModel
	 */
	public function &setStatus($status) {
		$this->notifyChanged(self::FIELD_STATUS,$this->status,$status);
		$this->status=$status;
		return $this;
	}

	/**
	 * get value for status 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * set value for invoiceno 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $invoiceno
	 * @return InvorderModel
	 */
	public function &setInvoiceno($invoiceno) {
		$this->notifyChanged(self::FIELD_INVOICENO,$this->invoiceno,$invoiceno);
		$this->invoiceno=$invoiceno;
		return $this;
	}

	/**
	 * get value for invoiceno 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getInvoiceno() {
		return $this->invoiceno;
	}

	/**
	 * set value for pono 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $pono
	 * @return InvorderModel
	 */
	public function &setPono($pono) {
		$this->notifyChanged(self::FIELD_PONO,$this->pono,$pono);
		$this->pono=$pono;
		return $this;
	}

	/**
	 * get value for pono 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPono() {
		return $this->pono;
	}

	/**
	 * set value for shiptransno 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $shiptransno
	 * @return InvorderModel
	 */
	public function &setShiptransno($shiptransno) {
		$this->notifyChanged(self::FIELD_SHIPTRANSNO,$this->shiptransno,$shiptransno);
		$this->shiptransno=$shiptransno;
		return $this;
	}

	/**
	 * get value for shiptransno 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShiptransno() {
		return $this->shiptransno;
	}

	/**
	 * set value for shipfromname 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $shipfromname
	 * @return InvorderModel
	 */
	public function &setShipfromname($shipfromname) {
		$this->notifyChanged(self::FIELD_SHIPFROMNAME,$this->shipfromname,$shipfromname);
		$this->shipfromname=$shipfromname;
		return $this;
	}

	/**
	 * get value for shipfromname 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShipfromname() {
		return $this->shipfromname;
	}

	/**
	 * set value for shipfromaddr1 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $shipfromaddr1
	 * @return InvorderModel
	 */
	public function &setShipfromaddr1($shipfromaddr1) {
		$this->notifyChanged(self::FIELD_SHIPFROMADDR1,$this->shipfromaddr1,$shipfromaddr1);
		$this->shipfromaddr1=$shipfromaddr1;
		return $this;
	}

	/**
	 * get value for shipfromaddr1 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShipfromaddr1() {
		return $this->shipfromaddr1;
	}

	/**
	 * set value for shipfromaddr2 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $shipfromaddr2
	 * @return InvorderModel
	 */
	public function &setShipfromaddr2($shipfromaddr2) {
		$this->notifyChanged(self::FIELD_SHIPFROMADDR2,$this->shipfromaddr2,$shipfromaddr2);
		$this->shipfromaddr2=$shipfromaddr2;
		return $this;
	}

	/**
	 * get value for shipfromaddr2 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShipfromaddr2() {
		return $this->shipfromaddr2;
	}

	/**
	 * set value for shipfromaddr3 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $shipfromaddr3
	 * @return InvorderModel
	 */
	public function &setShipfromaddr3($shipfromaddr3) {
		$this->notifyChanged(self::FIELD_SHIPFROMADDR3,$this->shipfromaddr3,$shipfromaddr3);
		$this->shipfromaddr3=$shipfromaddr3;
		return $this;
	}

	/**
	 * get value for shipfromaddr3 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShipfromaddr3() {
		return $this->shipfromaddr3;
	}

	/**
	 * set value for shipfromcity 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $shipfromcity
	 * @return InvorderModel
	 */
	public function &setShipfromcity($shipfromcity) {
		$this->notifyChanged(self::FIELD_SHIPFROMCITY,$this->shipfromcity,$shipfromcity);
		$this->shipfromcity=$shipfromcity;
		return $this;
	}

	/**
	 * get value for shipfromcity 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShipfromcity() {
		return $this->shipfromcity;
	}

	/**
	 * set value for shipfromcountry 
	 *
	 * type:VARCHAR,size:15,default:null,nullable
	 *
	 * @param mixed $shipfromcountry
	 * @return InvorderModel
	 */
	public function &setShipfromcountry($shipfromcountry) {
		$this->notifyChanged(self::FIELD_SHIPFROMCOUNTRY,$this->shipfromcountry,$shipfromcountry);
		$this->shipfromcountry=$shipfromcountry;
		return $this;
	}

	/**
	 * get value for shipfromcountry 
	 *
	 * type:VARCHAR,size:15,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShipfromcountry() {
		return $this->shipfromcountry;
	}

	/**
	 * set value for shipfromstate 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $shipfromstate
	 * @return InvorderModel
	 */
	public function &setShipfromstate($shipfromstate) {
		$this->notifyChanged(self::FIELD_SHIPFROMSTATE,$this->shipfromstate,$shipfromstate);
		$this->shipfromstate=$shipfromstate;
		return $this;
	}

	/**
	 * get value for shipfromstate 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShipfromstate() {
		return $this->shipfromstate;
	}

	/**
	 * set value for shipfromzipcode 
	 *
	 * type:VARCHAR,size:10,default:null,nullable
	 *
	 * @param mixed $shipfromzipcode
	 * @return InvorderModel
	 */
	public function &setShipfromzipcode($shipfromzipcode) {
		$this->notifyChanged(self::FIELD_SHIPFROMZIPCODE,$this->shipfromzipcode,$shipfromzipcode);
		$this->shipfromzipcode=$shipfromzipcode;
		return $this;
	}

	/**
	 * get value for shipfromzipcode 
	 *
	 * type:VARCHAR,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShipfromzipcode() {
		return $this->shipfromzipcode;
	}

	/**
	 * set value for shiptoname 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $shiptoname
	 * @return InvorderModel
	 */
	public function &setShiptoname($shiptoname) {
		$this->notifyChanged(self::FIELD_SHIPTONAME,$this->shiptoname,$shiptoname);
		$this->shiptoname=$shiptoname;
		return $this;
	}

	/**
	 * get value for shiptoname 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShiptoname() {
		return $this->shiptoname;
	}

	/**
	 * set value for shiptoaddr1 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $shiptoaddr1
	 * @return InvorderModel
	 */
	public function &setShiptoaddr1($shiptoaddr1) {
		$this->notifyChanged(self::FIELD_SHIPTOADDR1,$this->shiptoaddr1,$shiptoaddr1);
		$this->shiptoaddr1=$shiptoaddr1;
		return $this;
	}

	/**
	 * get value for shiptoaddr1 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShiptoaddr1() {
		return $this->shiptoaddr1;
	}

	/**
	 * set value for shiptoaddr2 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $shiptoaddr2
	 * @return InvorderModel
	 */
	public function &setShiptoaddr2($shiptoaddr2) {
		$this->notifyChanged(self::FIELD_SHIPTOADDR2,$this->shiptoaddr2,$shiptoaddr2);
		$this->shiptoaddr2=$shiptoaddr2;
		return $this;
	}

	/**
	 * get value for shiptoaddr2 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShiptoaddr2() {
		return $this->shiptoaddr2;
	}

	/**
	 * set value for shiptoaddr3 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $shiptoaddr3
	 * @return InvorderModel
	 */
	public function &setShiptoaddr3($shiptoaddr3) {
		$this->notifyChanged(self::FIELD_SHIPTOADDR3,$this->shiptoaddr3,$shiptoaddr3);
		$this->shiptoaddr3=$shiptoaddr3;
		return $this;
	}

	/**
	 * get value for shiptoaddr3 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShiptoaddr3() {
		return $this->shiptoaddr3;
	}

	/**
	 * set value for shiptocity 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $shiptocity
	 * @return InvorderModel
	 */
	public function &setShiptocity($shiptocity) {
		$this->notifyChanged(self::FIELD_SHIPTOCITY,$this->shiptocity,$shiptocity);
		$this->shiptocity=$shiptocity;
		return $this;
	}

	/**
	 * get value for shiptocity 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShiptocity() {
		return $this->shiptocity;
	}

	/**
	 * set value for shiptocountry 
	 *
	 * type:VARCHAR,size:15,default:null,nullable
	 *
	 * @param mixed $shiptocountry
	 * @return InvorderModel
	 */
	public function &setShiptocountry($shiptocountry) {
		$this->notifyChanged(self::FIELD_SHIPTOCOUNTRY,$this->shiptocountry,$shiptocountry);
		$this->shiptocountry=$shiptocountry;
		return $this;
	}

	/**
	 * get value for shiptocountry 
	 *
	 * type:VARCHAR,size:15,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShiptocountry() {
		return $this->shiptocountry;
	}

	/**
	 * set value for shiptostate 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $shiptostate
	 * @return InvorderModel
	 */
	public function &setShiptostate($shiptostate) {
		$this->notifyChanged(self::FIELD_SHIPTOSTATE,$this->shiptostate,$shiptostate);
		$this->shiptostate=$shiptostate;
		return $this;
	}

	/**
	 * get value for shiptostate 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShiptostate() {
		return $this->shiptostate;
	}

	/**
	 * set value for shiptozipcode 
	 *
	 * type:VARCHAR,size:10,default:null,nullable
	 *
	 * @param mixed $shiptozipcode
	 * @return InvorderModel
	 */
	public function &setShiptozipcode($shiptozipcode) {
		$this->notifyChanged(self::FIELD_SHIPTOZIPCODE,$this->shiptozipcode,$shiptozipcode);
		$this->shiptozipcode=$shiptozipcode;
		return $this;
	}

	/**
	 * get value for shiptozipcode 
	 *
	 * type:VARCHAR,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShiptozipcode() {
		return $this->shiptozipcode;
	}

	/**
	 * set value for carrierid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $carrierid
	 * @return InvorderModel
	 */
	public function &setCarrierid($carrierid) {
		$this->notifyChanged(self::FIELD_CARRIERID,$this->carrierid,$carrierid);
		$this->carrierid=$carrierid;
		return $this;
	}

	/**
	 * get value for carrierid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getCarrierid() {
		return $this->carrierid;
	}

	/**
	 * set value for commitid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $commitid
	 * @return InvorderModel
	 */
	public function &setCommitid($commitid) {
		$this->notifyChanged(self::FIELD_COMMITID,$this->commitid,$commitid);
		$this->commitid=$commitid;
		return $this;
	}

	/**
	 * get value for commitid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getCommitid() {
		return $this->commitid;
	}

	/**
	 * set value for city 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $city
	 * @return InvorderModel
	 */
	public function &setCity($city) {
		$this->notifyChanged(self::FIELD_CITY,$this->city,$city);
		$this->city=$city;
		return $this;
	}

	/**
	 * get value for city 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * set value for internalmemo 
	 *
	 * type:VARCHAR,size:250,default:null,nullable
	 *
	 * @param mixed $internalmemo
	 * @return InvorderModel
	 */
	public function &setInternalmemo($internalmemo) {
		$this->notifyChanged(self::FIELD_INTERNALMEMO,$this->internalmemo,$internalmemo);
		$this->internalmemo=$internalmemo;
		return $this;
	}

	/**
	 * get value for internalmemo 
	 *
	 * type:VARCHAR,size:250,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getInternalmemo() {
		return $this->internalmemo;
	}

	/**
	 * set value for internalpono 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $internalpono
	 * @return InvorderModel
	 */
	public function &setInternalpono($internalpono) {
		$this->notifyChanged(self::FIELD_INTERNALPONO,$this->internalpono,$internalpono);
		$this->internalpono=$internalpono;
		return $this;
	}

	/**
	 * get value for internalpono 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getInternalpono() {
		return $this->internalpono;
	}

	/**
	 * set value for shipment 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $shipment
	 * @return InvorderModel
	 */
	public function &setShipment($shipment) {
		$this->notifyChanged(self::FIELD_SHIPMENT,$this->shipment,$shipment);
		$this->shipment=$shipment;
		return $this;
	}

	/**
	 * get value for shipment 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShipment() {
		return $this->shipment;
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
			self::FIELD_ORDERCODE=>$this->getOrdercode(),
			self::FIELD_ORDERTYPEID=>$this->getOrdertypeid(),
			self::FIELD_CREATEDDATE=>$this->getCreateddate(),
			self::FIELD_PARTNERID=>$this->getPartnerid(),
			self::FIELD_REQUESTID=>$this->getRequestid(),
			self::FIELD_RECVTYPEID=>$this->getRecvtypeid(),
			self::FIELD_SHIPMETHODID=>$this->getShipmethodid(),
			self::FIELD_REQUESTDATE=>$this->getRequestdate(),
			self::FIELD_ESTRECVDATE=>$this->getEstrecvdate(),
			self::FIELD_CREATEBY=>$this->getCreateby(),
			self::FIELD_DESCRIPTION=>$this->getDescription(),
			self::FIELD_STATUS=>$this->getStatus(),
			self::FIELD_INVOICENO=>$this->getInvoiceno(),
			self::FIELD_PONO=>$this->getPono(),
			self::FIELD_SHIPTRANSNO=>$this->getShiptransno(),
			self::FIELD_SHIPFROMNAME=>$this->getShipfromname(),
			self::FIELD_SHIPFROMADDR1=>$this->getShipfromaddr1(),
			self::FIELD_SHIPFROMADDR2=>$this->getShipfromaddr2(),
			self::FIELD_SHIPFROMADDR3=>$this->getShipfromaddr3(),
			self::FIELD_SHIPFROMCITY=>$this->getShipfromcity(),
			self::FIELD_SHIPFROMCOUNTRY=>$this->getShipfromcountry(),
			self::FIELD_SHIPFROMSTATE=>$this->getShipfromstate(),
			self::FIELD_SHIPFROMZIPCODE=>$this->getShipfromzipcode(),
			self::FIELD_SHIPTONAME=>$this->getShiptoname(),
			self::FIELD_SHIPTOADDR1=>$this->getShiptoaddr1(),
			self::FIELD_SHIPTOADDR2=>$this->getShiptoaddr2(),
			self::FIELD_SHIPTOADDR3=>$this->getShiptoaddr3(),
			self::FIELD_SHIPTOCITY=>$this->getShiptocity(),
			self::FIELD_SHIPTOCOUNTRY=>$this->getShiptocountry(),
			self::FIELD_SHIPTOSTATE=>$this->getShiptostate(),
			self::FIELD_SHIPTOZIPCODE=>$this->getShiptozipcode(),
			self::FIELD_CARRIERID=>$this->getCarrierid(),
			self::FIELD_COMMITID=>$this->getCommitid(),
			self::FIELD_CITY=>$this->getCity(),
			self::FIELD_INTERNALMEMO=>$this->getInternalmemo(),
			self::FIELD_INTERNALPONO=>$this->getInternalpono(),
			self::FIELD_SHIPMENT=>$this->getShipment());
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
	 * Match by attributes of passed example instance and return matched rows as an array of InvorderModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param InvorderModel $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return InvorderModel[]
	 */
	public static function findByExample(PDO $db,InvorderModel $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of InvorderModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return InvorderModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `invorder`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of InvorderModel instances
	 *
	 * @param PDOStatement $stmt
	 * @return InvorderModel[]
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
	 * returns the result as an array of InvorderModel instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return InvorderModel[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new InvorderModel();
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
	 * Execute select query and return matched rows as an array of InvorderModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return InvorderModel[]
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
		$sql='DELETE FROM `invorder`'
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
		$this->setOrdercode($result['ordercode']);
		$this->setOrdertypeid($result['ordertypeid']);
		$this->setCreateddate($result['createddate']);
		$this->setPartnerid($result['partnerid']);
		$this->setRequestid($result['requestid']);
		$this->setRecvtypeid($result['recvtypeid']);
		$this->setShipmethodid($result['shipmethodid']);
		$this->setRequestdate($result['requestdate']);
		$this->setEstrecvdate($result['estrecvdate']);
		$this->setCreateby($result['createby']);
		$this->setDescription($result['description']);
		$this->setStatus($result['status']);
		$this->setInvoiceno($result['invoiceno']);
		$this->setPono($result['pono']);
		$this->setShiptransno($result['shiptransno']);
		$this->setShipfromname($result['shipfromname']);
		$this->setShipfromaddr1($result['shipfromaddr1']);
		$this->setShipfromaddr2($result['shipfromaddr2']);
		$this->setShipfromaddr3($result['shipfromaddr3']);
		$this->setShipfromcity($result['shipfromcity']);
		$this->setShipfromcountry($result['shipfromcountry']);
		$this->setShipfromstate($result['shipfromstate']);
		$this->setShipfromzipcode($result['shipfromzipcode']);
		$this->setShiptoname($result['shiptoname']);
		$this->setShiptoaddr1($result['shiptoaddr1']);
		$this->setShiptoaddr2($result['shiptoaddr2']);
		$this->setShiptoaddr3($result['shiptoaddr3']);
		$this->setShiptocity($result['shiptocity']);
		$this->setShiptocountry($result['shiptocountry']);
		$this->setShiptostate($result['shiptostate']);
		$this->setShiptozipcode($result['shiptozipcode']);
		$this->setCarrierid($result['carrierid']);
		$this->setCommitid($result['commitid']);
		$this->setCity($result['city']);
		$this->setInternalmemo($result['internalmemo']);
		$this->setInternalpono($result['internalpono']);
		$this->setShipment($result['shipment']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return InvorderModel
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
		$o=new InvorderModel();
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
		$stmt->bindValue(2,$this->getOrdercode());
		$stmt->bindValue(3,$this->getOrdertypeid());
		$stmt->bindValue(4,$this->getCreateddate());
		$stmt->bindValue(5,$this->getPartnerid());
		$stmt->bindValue(6,$this->getRequestid());
		$stmt->bindValue(7,$this->getRecvtypeid());
		$stmt->bindValue(8,$this->getShipmethodid());
		$stmt->bindValue(9,$this->getRequestdate());
		$stmt->bindValue(10,$this->getEstrecvdate());
		$stmt->bindValue(11,$this->getCreateby());
		$stmt->bindValue(12,$this->getDescription());
		$stmt->bindValue(13,$this->getStatus());
		$stmt->bindValue(14,$this->getInvoiceno());
		$stmt->bindValue(15,$this->getPono());
		$stmt->bindValue(16,$this->getShiptransno());
		$stmt->bindValue(17,$this->getShipfromname());
		$stmt->bindValue(18,$this->getShipfromaddr1());
		$stmt->bindValue(19,$this->getShipfromaddr2());
		$stmt->bindValue(20,$this->getShipfromaddr3());
		$stmt->bindValue(21,$this->getShipfromcity());
		$stmt->bindValue(22,$this->getShipfromcountry());
		$stmt->bindValue(23,$this->getShipfromstate());
		$stmt->bindValue(24,$this->getShipfromzipcode());
		$stmt->bindValue(25,$this->getShiptoname());
		$stmt->bindValue(26,$this->getShiptoaddr1());
		$stmt->bindValue(27,$this->getShiptoaddr2());
		$stmt->bindValue(28,$this->getShiptoaddr3());
		$stmt->bindValue(29,$this->getShiptocity());
		$stmt->bindValue(30,$this->getShiptocountry());
		$stmt->bindValue(31,$this->getShiptostate());
		$stmt->bindValue(32,$this->getShiptozipcode());
		$stmt->bindValue(33,$this->getCarrierid());
		$stmt->bindValue(34,$this->getCommitid());
		$stmt->bindValue(35,$this->getCity());
		$stmt->bindValue(36,$this->getInternalmemo());
		$stmt->bindValue(37,$this->getInternalpono());
		$stmt->bindValue(38,$this->getShipment());
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
			$stmt->bindValue(1,$this->getOrdercode());
			$stmt->bindValue(2,$this->getOrdertypeid());
			$stmt->bindValue(3,$this->getCreateddate());
			$stmt->bindValue(4,$this->getPartnerid());
			$stmt->bindValue(5,$this->getRequestid());
			$stmt->bindValue(6,$this->getRecvtypeid());
			$stmt->bindValue(7,$this->getShipmethodid());
			$stmt->bindValue(8,$this->getRequestdate());
			$stmt->bindValue(9,$this->getEstrecvdate());
			$stmt->bindValue(10,$this->getCreateby());
			$stmt->bindValue(11,$this->getDescription());
			$stmt->bindValue(12,$this->getStatus());
			$stmt->bindValue(13,$this->getInvoiceno());
			$stmt->bindValue(14,$this->getPono());
			$stmt->bindValue(15,$this->getShiptransno());
			$stmt->bindValue(16,$this->getShipfromname());
			$stmt->bindValue(17,$this->getShipfromaddr1());
			$stmt->bindValue(18,$this->getShipfromaddr2());
			$stmt->bindValue(19,$this->getShipfromaddr3());
			$stmt->bindValue(20,$this->getShipfromcity());
			$stmt->bindValue(21,$this->getShipfromcountry());
			$stmt->bindValue(22,$this->getShipfromstate());
			$stmt->bindValue(23,$this->getShipfromzipcode());
			$stmt->bindValue(24,$this->getShiptoname());
			$stmt->bindValue(25,$this->getShiptoaddr1());
			$stmt->bindValue(26,$this->getShiptoaddr2());
			$stmt->bindValue(27,$this->getShiptoaddr3());
			$stmt->bindValue(28,$this->getShiptocity());
			$stmt->bindValue(29,$this->getShiptocountry());
			$stmt->bindValue(30,$this->getShiptostate());
			$stmt->bindValue(31,$this->getShiptozipcode());
			$stmt->bindValue(32,$this->getCarrierid());
			$stmt->bindValue(33,$this->getCommitid());
			$stmt->bindValue(34,$this->getCity());
			$stmt->bindValue(35,$this->getInternalmemo());
			$stmt->bindValue(36,$this->getInternalpono());
			$stmt->bindValue(37,$this->getShipment());
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
		$stmt->bindValue(39,$this->getId());
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
	 * Fetch InvorderHisModel's which this InvorderModel references.
	 * `invorder`.`id` -> `invorder_his`.`invordid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return InvorderHisModel[]
	 */
	public function fetchInvorderHisModelCollection(PDO $db, $sort=null) {
		$filter=array(InvorderHisModel::FIELD_INVORDID=>$this->getId());
		return InvorderHisModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch OrderdetailModel's which this InvorderModel references.
	 * `invorder`.`id` -> `orderdetail`.`orderid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return OrderdetailModel[]
	 */
	public function fetchOrderdetailModelCollection(PDO $db, $sort=null) {
		$filter=array(OrderdetailModel::FIELD_ORDERID=>$this->getId());
		return OrderdetailModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch CarriermasterModel which references this InvorderModel. Will return null in case reference is invalid.
	 * `invorder`.`carrierid` -> `carriermaster`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return CarriermasterModel
	 */
	public function fetchCarriermasterModel(PDO $db, $sort=null) {
		$filter=array(CarriermasterModel::FIELD_ID=>$this->getCarrierid());
		$result=CarriermasterModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch OrdercommitmasterModel which references this InvorderModel. Will return null in case reference is invalid.
	 * `invorder`.`commitid` -> `ordercommitmaster`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return OrdercommitmasterModel
	 */
	public function fetchOrdercommitmasterModel(PDO $db, $sort=null) {
		$filter=array(OrdercommitmasterModel::FIELD_ID=>$this->getCommitid());
		$result=OrdercommitmasterModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch RecvtypeModel which references this InvorderModel. Will return null in case reference is invalid.
	 * `invorder`.`recvtypeid` -> `recvtype`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return RecvtypeModel
	 */
	public function fetchRecvtypeModel(PDO $db, $sort=null) {
		$filter=array(RecvtypeModel::FIELD_ID=>$this->getRecvtypeid());
		$result=RecvtypeModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch InvordertypeModel which references this InvorderModel. Will return null in case reference is invalid.
	 * `invorder`.`ordertypeid` -> `invordertype`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return InvordertypeModel
	 */
	public function fetchInvordertypeModel(PDO $db, $sort=null) {
		$filter=array(InvordertypeModel::FIELD_ID=>$this->getOrdertypeid());
		$result=InvordertypeModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch PartnerModel which references this InvorderModel. Will return null in case reference is invalid.
	 * `invorder`.`partnerid` -> `partner`.`id`
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
	 * Fetch RequesttypeModel which references this InvorderModel. Will return null in case reference is invalid.
	 * `invorder`.`requestid` -> `requesttype`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return RequesttypeModel
	 */
	public function fetchRequesttypeModel(PDO $db, $sort=null) {
		$filter=array(RequesttypeModel::FIELD_ID=>$this->getRequestid());
		$result=RequesttypeModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch ShipmethModel which references this InvorderModel. Will return null in case reference is invalid.
	 * `invorder`.`shipmethodid` -> `shipmeth`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ShipmethModel
	 */
	public function fetchShipmethModel(PDO $db, $sort=null) {
		$filter=array(ShipmethModel::FIELD_ID=>$this->getShipmethodid());
		$result=ShipmethModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch UsersModel which references this InvorderModel. Will return null in case reference is invalid.
	 * `invorder`.`createby` -> `users`.`id`
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
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'InvorderModel');
	}

	/**
	 * get single InvorderModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return InvorderModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new InvorderModel();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of InvorderModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return InvorderModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('InvorderModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>