<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class PartnerModel extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='PartnerModel';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='partner';
	const SQL_INSERT='INSERT INTO `partner` (`id`,`company`,`phone1`,`phone2`,`email`,`address1`,`address2`,`address3`,`city`,`state`,`zipcode`,`country`,`custstatus`,`shippingheader`,`ordconfmail`,`shipnotfmail`,`rmanotfmail`,`invrecvmail`,`servnotfmail`,`salerepmail`,`mailnotfstatus`,`notf2req`,`edistatus`,`ediurl`,`edipage`,`ediokrepstr`,`ediuserid`,`edipassword`,`advrplcreqtype`,`timestamp`,`fax`,`partnertypeid`,`contactname`,`contactlname`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `partner` (`company`,`phone1`,`phone2`,`email`,`address1`,`address2`,`address3`,`city`,`state`,`zipcode`,`country`,`custstatus`,`shippingheader`,`ordconfmail`,`shipnotfmail`,`rmanotfmail`,`invrecvmail`,`servnotfmail`,`salerepmail`,`mailnotfstatus`,`notf2req`,`edistatus`,`ediurl`,`edipage`,`ediokrepstr`,`ediuserid`,`edipassword`,`advrplcreqtype`,`timestamp`,`fax`,`partnertypeid`,`contactname`,`contactlname`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `partner` SET `id`=?,`company`=?,`phone1`=?,`phone2`=?,`email`=?,`address1`=?,`address2`=?,`address3`=?,`city`=?,`state`=?,`zipcode`=?,`country`=?,`custstatus`=?,`shippingheader`=?,`ordconfmail`=?,`shipnotfmail`=?,`rmanotfmail`=?,`invrecvmail`=?,`servnotfmail`=?,`salerepmail`=?,`mailnotfstatus`=?,`notf2req`=?,`edistatus`=?,`ediurl`=?,`edipage`=?,`ediokrepstr`=?,`ediuserid`=?,`edipassword`=?,`advrplcreqtype`=?,`timestamp`=?,`fax`=?,`partnertypeid`=?,`contactname`=?,`contactlname`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `partner` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `partner` WHERE `id`=?';
	const FIELD_ID=169953281;
	const FIELD_COMPANY=-592125609;
	const FIELD_PHONE1=346671209;
	const FIELD_PHONE2=346671210;
	const FIELD_EMAIL=-691577098;
	const FIELD_ADDRESS1=-1794975453;
	const FIELD_ADDRESS2=-1794975452;
	const FIELD_ADDRESS3=-1794975451;
	const FIELD_CITY=116175569;
	const FIELD_STATE=-678438933;
	const FIELD_ZIPCODE=-1823755928;
	const FIELD_COUNTRY=-584778640;
	const FIELD_CUSTSTATUS=-1195884309;
	const FIELD_SHIPPINGHEADER=-731621471;
	const FIELD_ORDCONFMAIL=144861334;
	const FIELD_SHIPNOTFMAIL=-1963543092;
	const FIELD_RMANOTFMAIL=-973209718;
	const FIELD_INVRECVMAIL=440384360;
	const FIELD_SERVNOTFMAIL=-596102746;
	const FIELD_SALEREPMAIL=622756231;
	const FIELD_MAILNOTFSTATUS=-1895097214;
	const FIELD_NOTF2REQ=1004791813;
	const FIELD_EDISTATUS=1734952566;
	const FIELD_EDIURL=27884907;
	const FIELD_EDIPAGE=864266771;
	const FIELD_EDIOKREPSTR=-759069996;
	const FIELD_EDIUSERID=1791404202;
	const FIELD_EDIPASSWORD=740401183;
	const FIELD_ADVRPLCREQTYPE=1311197782;
	const FIELD_TIMESTAMP=-629080208;
	const FIELD_FAX=973581559;
	const FIELD_PARTNERTYPEID=2141648375;
	const FIELD_CONTACTNAME=-350800251;
	const FIELD_CONTACTLNAME=2008623165;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_COMPANY=>'company',
		self::FIELD_PHONE1=>'phone1',
		self::FIELD_PHONE2=>'phone2',
		self::FIELD_EMAIL=>'email',
		self::FIELD_ADDRESS1=>'address1',
		self::FIELD_ADDRESS2=>'address2',
		self::FIELD_ADDRESS3=>'address3',
		self::FIELD_CITY=>'city',
		self::FIELD_STATE=>'state',
		self::FIELD_ZIPCODE=>'zipcode',
		self::FIELD_COUNTRY=>'country',
		self::FIELD_CUSTSTATUS=>'custstatus',
		self::FIELD_SHIPPINGHEADER=>'shippingheader',
		self::FIELD_ORDCONFMAIL=>'ordconfmail',
		self::FIELD_SHIPNOTFMAIL=>'shipnotfmail',
		self::FIELD_RMANOTFMAIL=>'rmanotfmail',
		self::FIELD_INVRECVMAIL=>'invrecvmail',
		self::FIELD_SERVNOTFMAIL=>'servnotfmail',
		self::FIELD_SALEREPMAIL=>'salerepmail',
		self::FIELD_MAILNOTFSTATUS=>'mailnotfstatus',
		self::FIELD_NOTF2REQ=>'notf2req',
		self::FIELD_EDISTATUS=>'edistatus',
		self::FIELD_EDIURL=>'ediurl',
		self::FIELD_EDIPAGE=>'edipage',
		self::FIELD_EDIOKREPSTR=>'ediokrepstr',
		self::FIELD_EDIUSERID=>'ediuserid',
		self::FIELD_EDIPASSWORD=>'edipassword',
		self::FIELD_ADVRPLCREQTYPE=>'advrplcreqtype',
		self::FIELD_TIMESTAMP=>'timestamp',
		self::FIELD_FAX=>'fax',
		self::FIELD_PARTNERTYPEID=>'partnertypeid',
		self::FIELD_CONTACTNAME=>'contactname',
		self::FIELD_CONTACTLNAME=>'contactlname');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_COMPANY=>'company',
		self::FIELD_PHONE1=>'phone1',
		self::FIELD_PHONE2=>'phone2',
		self::FIELD_EMAIL=>'email',
		self::FIELD_ADDRESS1=>'address1',
		self::FIELD_ADDRESS2=>'address2',
		self::FIELD_ADDRESS3=>'address3',
		self::FIELD_CITY=>'city',
		self::FIELD_STATE=>'state',
		self::FIELD_ZIPCODE=>'zipcode',
		self::FIELD_COUNTRY=>'country',
		self::FIELD_CUSTSTATUS=>'custstatus',
		self::FIELD_SHIPPINGHEADER=>'shippingheader',
		self::FIELD_ORDCONFMAIL=>'ordconfmail',
		self::FIELD_SHIPNOTFMAIL=>'shipnotfmail',
		self::FIELD_RMANOTFMAIL=>'rmanotfmail',
		self::FIELD_INVRECVMAIL=>'invrecvmail',
		self::FIELD_SERVNOTFMAIL=>'servnotfmail',
		self::FIELD_SALEREPMAIL=>'salerepmail',
		self::FIELD_MAILNOTFSTATUS=>'mailnotfstatus',
		self::FIELD_NOTF2REQ=>'notf2req',
		self::FIELD_EDISTATUS=>'edistatus',
		self::FIELD_EDIURL=>'ediurl',
		self::FIELD_EDIPAGE=>'edipage',
		self::FIELD_EDIOKREPSTR=>'ediokrepstr',
		self::FIELD_EDIUSERID=>'ediuserid',
		self::FIELD_EDIPASSWORD=>'edipassword',
		self::FIELD_ADVRPLCREQTYPE=>'advrplcreqtype',
		self::FIELD_TIMESTAMP=>'timestamp',
		self::FIELD_FAX=>'fax',
		self::FIELD_PARTNERTYPEID=>'partnertypeid',
		self::FIELD_CONTACTNAME=>'contactname',
		self::FIELD_CONTACTLNAME=>'contactlname');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_COMPANY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PHONE1=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PHONE2=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ADDRESS1=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ADDRESS2=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ADDRESS3=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CITY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_STATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ZIPCODE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_COUNTRY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CUSTSTATUS=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_SHIPPINGHEADER=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ORDCONFMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPNOTFMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_RMANOTFMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_INVRECVMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SERVNOTFMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SALEREPMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MAILNOTFSTATUS=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NOTF2REQ=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_EDISTATUS=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_EDIURL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EDIPAGE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EDIOKREPSTR=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EDIUSERID=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EDIPASSWORD=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ADVRPLCREQTYPE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TIMESTAMP=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FAX=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PARTNERTYPEID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_CONTACTNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CONTACTLNAME=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_COMPANY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,false),
		self::FIELD_PHONE1=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,20,0,true),
		self::FIELD_PHONE2=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,20,0,true),
		self::FIELD_EMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,125,0,true),
		self::FIELD_ADDRESS1=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_ADDRESS2=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_ADDRESS3=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_CITY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_STATE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,5,0,true),
		self::FIELD_ZIPCODE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,10,0,true),
		self::FIELD_COUNTRY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,5,0,true),
		self::FIELD_CUSTSTATUS=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_SHIPPINGHEADER=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_ORDCONFMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_SHIPNOTFMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_RMANOTFMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_INVRECVMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_SERVNOTFMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_SALEREPMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_MAILNOTFSTATUS=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NOTF2REQ=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_EDISTATUS=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_EDIURL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_EDIPAGE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_EDIOKREPSTR=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_EDIUSERID=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_EDIPASSWORD=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_ADVRPLCREQTYPE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_TIMESTAMP=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_FAX=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_PARTNERTYPEID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_CONTACTNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_CONTACTLNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_COMPANY=>'',
		self::FIELD_PHONE1=>null,
		self::FIELD_PHONE2=>null,
		self::FIELD_EMAIL=>null,
		self::FIELD_ADDRESS1=>null,
		self::FIELD_ADDRESS2=>null,
		self::FIELD_ADDRESS3=>null,
		self::FIELD_CITY=>null,
		self::FIELD_STATE=>null,
		self::FIELD_ZIPCODE=>null,
		self::FIELD_COUNTRY=>null,
		self::FIELD_CUSTSTATUS=>1,
		self::FIELD_SHIPPINGHEADER=>null,
		self::FIELD_ORDCONFMAIL=>null,
		self::FIELD_SHIPNOTFMAIL=>null,
		self::FIELD_RMANOTFMAIL=>null,
		self::FIELD_INVRECVMAIL=>null,
		self::FIELD_SERVNOTFMAIL=>null,
		self::FIELD_SALEREPMAIL=>null,
		self::FIELD_MAILNOTFSTATUS=>0,
		self::FIELD_NOTF2REQ=>0,
		self::FIELD_EDISTATUS=>0,
		self::FIELD_EDIURL=>null,
		self::FIELD_EDIPAGE=>null,
		self::FIELD_EDIOKREPSTR=>null,
		self::FIELD_EDIUSERID=>null,
		self::FIELD_EDIPASSWORD=>null,
		self::FIELD_ADVRPLCREQTYPE=>null,
		self::FIELD_TIMESTAMP=>null,
		self::FIELD_FAX=>null,
		self::FIELD_PARTNERTYPEID=>null,
		self::FIELD_CONTACTNAME=>null,
		self::FIELD_CONTACTLNAME=>null);
	private $id;
	private $company;
	private $phone1;
	private $phone2;
	private $email;
	private $address1;
	private $address2;
	private $address3;
	private $city;
	private $state;
	private $zipcode;
	private $country;
	private $custstatus;
	private $shippingheader;
	private $ordconfmail;
	private $shipnotfmail;
	private $rmanotfmail;
	private $invrecvmail;
	private $servnotfmail;
	private $salerepmail;
	private $mailnotfstatus;
	private $notf2req;
	private $edistatus;
	private $ediurl;
	private $edipage;
	private $ediokrepstr;
	private $ediuserid;
	private $edipassword;
	private $advrplcreqtype;
	private $timestamp;
	private $fax;
	private $partnertypeid;
	private $contactname;
	private $contactlname;

	/**
	 * set value for id 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return PartnerModel
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
	 * set value for company 
	 *
	 * type:VARCHAR,size:100,default:null,unique
	 *
	 * @param mixed $company
	 * @return PartnerModel
	 */
	public function &setCompany($company) {
		$this->notifyChanged(self::FIELD_COMPANY,$this->company,$company);
		$this->company=$company;
		return $this;
	}

	/**
	 * get value for company 
	 *
	 * type:VARCHAR,size:100,default:null,unique
	 *
	 * @return mixed
	 */
	public function getCompany() {
		return $this->company;
	}

	/**
	 * set value for phone1 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @param mixed $phone1
	 * @return PartnerModel
	 */
	public function &setPhone1($phone1) {
		$this->notifyChanged(self::FIELD_PHONE1,$this->phone1,$phone1);
		$this->phone1=$phone1;
		return $this;
	}

	/**
	 * get value for phone1 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPhone1() {
		return $this->phone1;
	}

	/**
	 * set value for phone2 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @param mixed $phone2
	 * @return PartnerModel
	 */
	public function &setPhone2($phone2) {
		$this->notifyChanged(self::FIELD_PHONE2,$this->phone2,$phone2);
		$this->phone2=$phone2;
		return $this;
	}

	/**
	 * get value for phone2 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPhone2() {
		return $this->phone2;
	}

	/**
	 * set value for email 
	 *
	 * type:VARCHAR,size:125,default:null,nullable
	 *
	 * @param mixed $email
	 * @return PartnerModel
	 */
	public function &setEmail($email) {
		$this->notifyChanged(self::FIELD_EMAIL,$this->email,$email);
		$this->email=$email;
		return $this;
	}

	/**
	 * get value for email 
	 *
	 * type:VARCHAR,size:125,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * set value for address1 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $address1
	 * @return PartnerModel
	 */
	public function &setAddress1($address1) {
		$this->notifyChanged(self::FIELD_ADDRESS1,$this->address1,$address1);
		$this->address1=$address1;
		return $this;
	}

	/**
	 * get value for address1 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAddress1() {
		return $this->address1;
	}

	/**
	 * set value for address2 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $address2
	 * @return PartnerModel
	 */
	public function &setAddress2($address2) {
		$this->notifyChanged(self::FIELD_ADDRESS2,$this->address2,$address2);
		$this->address2=$address2;
		return $this;
	}

	/**
	 * get value for address2 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAddress2() {
		return $this->address2;
	}

	/**
	 * set value for address3 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $address3
	 * @return PartnerModel
	 */
	public function &setAddress3($address3) {
		$this->notifyChanged(self::FIELD_ADDRESS3,$this->address3,$address3);
		$this->address3=$address3;
		return $this;
	}

	/**
	 * get value for address3 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAddress3() {
		return $this->address3;
	}

	/**
	 * set value for city 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $city
	 * @return PartnerModel
	 */
	public function &setCity($city) {
		$this->notifyChanged(self::FIELD_CITY,$this->city,$city);
		$this->city=$city;
		return $this;
	}

	/**
	 * get value for city 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * set value for state 
	 *
	 * type:VARCHAR,size:5,default:null,nullable
	 *
	 * @param mixed $state
	 * @return PartnerModel
	 */
	public function &setState($state) {
		$this->notifyChanged(self::FIELD_STATE,$this->state,$state);
		$this->state=$state;
		return $this;
	}

	/**
	 * get value for state 
	 *
	 * type:VARCHAR,size:5,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * set value for zipcode 
	 *
	 * type:VARCHAR,size:10,default:null,nullable
	 *
	 * @param mixed $zipcode
	 * @return PartnerModel
	 */
	public function &setZipcode($zipcode) {
		$this->notifyChanged(self::FIELD_ZIPCODE,$this->zipcode,$zipcode);
		$this->zipcode=$zipcode;
		return $this;
	}

	/**
	 * get value for zipcode 
	 *
	 * type:VARCHAR,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getZipcode() {
		return $this->zipcode;
	}

	/**
	 * set value for country 
	 *
	 * type:VARCHAR,size:5,default:null,nullable
	 *
	 * @param mixed $country
	 * @return PartnerModel
	 */
	public function &setCountry($country) {
		$this->notifyChanged(self::FIELD_COUNTRY,$this->country,$country);
		$this->country=$country;
		return $this;
	}

	/**
	 * get value for country 
	 *
	 * type:VARCHAR,size:5,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * set value for custstatus 
	 *
	 * type:INT UNSIGNED,size:10,default:1
	 *
	 * @param mixed $custstatus
	 * @return PartnerModel
	 */
	public function &setCuststatus($custstatus) {
		$this->notifyChanged(self::FIELD_CUSTSTATUS,$this->custstatus,$custstatus);
		$this->custstatus=$custstatus;
		return $this;
	}

	/**
	 * get value for custstatus 
	 *
	 * type:INT UNSIGNED,size:10,default:1
	 *
	 * @return mixed
	 */
	public function getCuststatus() {
		return $this->custstatus;
	}

	/**
	 * set value for shippingheader 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $shippingheader
	 * @return PartnerModel
	 */
	public function &setShippingheader($shippingheader) {
		$this->notifyChanged(self::FIELD_SHIPPINGHEADER,$this->shippingheader,$shippingheader);
		$this->shippingheader=$shippingheader;
		return $this;
	}

	/**
	 * get value for shippingheader 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShippingheader() {
		return $this->shippingheader;
	}

	/**
	 * set value for ordconfmail 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $ordconfmail
	 * @return PartnerModel
	 */
	public function &setOrdconfmail($ordconfmail) {
		$this->notifyChanged(self::FIELD_ORDCONFMAIL,$this->ordconfmail,$ordconfmail);
		$this->ordconfmail=$ordconfmail;
		return $this;
	}

	/**
	 * get value for ordconfmail 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getOrdconfmail() {
		return $this->ordconfmail;
	}

	/**
	 * set value for shipnotfmail 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $shipnotfmail
	 * @return PartnerModel
	 */
	public function &setShipnotfmail($shipnotfmail) {
		$this->notifyChanged(self::FIELD_SHIPNOTFMAIL,$this->shipnotfmail,$shipnotfmail);
		$this->shipnotfmail=$shipnotfmail;
		return $this;
	}

	/**
	 * get value for shipnotfmail 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShipnotfmail() {
		return $this->shipnotfmail;
	}

	/**
	 * set value for rmanotfmail 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $rmanotfmail
	 * @return PartnerModel
	 */
	public function &setRmanotfmail($rmanotfmail) {
		$this->notifyChanged(self::FIELD_RMANOTFMAIL,$this->rmanotfmail,$rmanotfmail);
		$this->rmanotfmail=$rmanotfmail;
		return $this;
	}

	/**
	 * get value for rmanotfmail 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getRmanotfmail() {
		return $this->rmanotfmail;
	}

	/**
	 * set value for invrecvmail 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $invrecvmail
	 * @return PartnerModel
	 */
	public function &setInvrecvmail($invrecvmail) {
		$this->notifyChanged(self::FIELD_INVRECVMAIL,$this->invrecvmail,$invrecvmail);
		$this->invrecvmail=$invrecvmail;
		return $this;
	}

	/**
	 * get value for invrecvmail 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getInvrecvmail() {
		return $this->invrecvmail;
	}

	/**
	 * set value for servnotfmail 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $servnotfmail
	 * @return PartnerModel
	 */
	public function &setServnotfmail($servnotfmail) {
		$this->notifyChanged(self::FIELD_SERVNOTFMAIL,$this->servnotfmail,$servnotfmail);
		$this->servnotfmail=$servnotfmail;
		return $this;
	}

	/**
	 * get value for servnotfmail 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getServnotfmail() {
		return $this->servnotfmail;
	}

	/**
	 * set value for salerepmail 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $salerepmail
	 * @return PartnerModel
	 */
	public function &setSalerepmail($salerepmail) {
		$this->notifyChanged(self::FIELD_SALEREPMAIL,$this->salerepmail,$salerepmail);
		$this->salerepmail=$salerepmail;
		return $this;
	}

	/**
	 * get value for salerepmail 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getSalerepmail() {
		return $this->salerepmail;
	}

	/**
	 * set value for mailnotfstatus 
	 *
	 * type:INT UNSIGNED,size:10,default:0
	 *
	 * @param mixed $mailnotfstatus
	 * @return PartnerModel
	 */
	public function &setMailnotfstatus($mailnotfstatus) {
		$this->notifyChanged(self::FIELD_MAILNOTFSTATUS,$this->mailnotfstatus,$mailnotfstatus);
		$this->mailnotfstatus=$mailnotfstatus;
		return $this;
	}

	/**
	 * get value for mailnotfstatus 
	 *
	 * type:INT UNSIGNED,size:10,default:0
	 *
	 * @return mixed
	 */
	public function getMailnotfstatus() {
		return $this->mailnotfstatus;
	}

	/**
	 * set value for notf2req 
	 *
	 * type:INT UNSIGNED,size:10,default:0
	 *
	 * @param mixed $notf2req
	 * @return PartnerModel
	 */
	public function &setNotf2req($notf2req) {
		$this->notifyChanged(self::FIELD_NOTF2REQ,$this->notf2req,$notf2req);
		$this->notf2req=$notf2req;
		return $this;
	}

	/**
	 * get value for notf2req 
	 *
	 * type:INT UNSIGNED,size:10,default:0
	 *
	 * @return mixed
	 */
	public function getNotf2req() {
		return $this->notf2req;
	}

	/**
	 * set value for edistatus 
	 *
	 * type:INT UNSIGNED,size:10,default:0
	 *
	 * @param mixed $edistatus
	 * @return PartnerModel
	 */
	public function &setEdistatus($edistatus) {
		$this->notifyChanged(self::FIELD_EDISTATUS,$this->edistatus,$edistatus);
		$this->edistatus=$edistatus;
		return $this;
	}

	/**
	 * get value for edistatus 
	 *
	 * type:INT UNSIGNED,size:10,default:0
	 *
	 * @return mixed
	 */
	public function getEdistatus() {
		return $this->edistatus;
	}

	/**
	 * set value for ediurl 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $ediurl
	 * @return PartnerModel
	 */
	public function &setEdiurl($ediurl) {
		$this->notifyChanged(self::FIELD_EDIURL,$this->ediurl,$ediurl);
		$this->ediurl=$ediurl;
		return $this;
	}

	/**
	 * get value for ediurl 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getEdiurl() {
		return $this->ediurl;
	}

	/**
	 * set value for edipage 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $edipage
	 * @return PartnerModel
	 */
	public function &setEdipage($edipage) {
		$this->notifyChanged(self::FIELD_EDIPAGE,$this->edipage,$edipage);
		$this->edipage=$edipage;
		return $this;
	}

	/**
	 * get value for edipage 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getEdipage() {
		return $this->edipage;
	}

	/**
	 * set value for ediokrepstr 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $ediokrepstr
	 * @return PartnerModel
	 */
	public function &setEdiokrepstr($ediokrepstr) {
		$this->notifyChanged(self::FIELD_EDIOKREPSTR,$this->ediokrepstr,$ediokrepstr);
		$this->ediokrepstr=$ediokrepstr;
		return $this;
	}

	/**
	 * get value for ediokrepstr 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getEdiokrepstr() {
		return $this->ediokrepstr;
	}

	/**
	 * set value for ediuserid 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $ediuserid
	 * @return PartnerModel
	 */
	public function &setEdiuserid($ediuserid) {
		$this->notifyChanged(self::FIELD_EDIUSERID,$this->ediuserid,$ediuserid);
		$this->ediuserid=$ediuserid;
		return $this;
	}

	/**
	 * get value for ediuserid 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getEdiuserid() {
		return $this->ediuserid;
	}

	/**
	 * set value for edipassword 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $edipassword
	 * @return PartnerModel
	 */
	public function &setEdipassword($edipassword) {
		$this->notifyChanged(self::FIELD_EDIPASSWORD,$this->edipassword,$edipassword);
		$this->edipassword=$edipassword;
		return $this;
	}

	/**
	 * get value for edipassword 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getEdipassword() {
		return $this->edipassword;
	}

	/**
	 * set value for advrplcreqtype 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $advrplcreqtype
	 * @return PartnerModel
	 */
	public function &setAdvrplcreqtype($advrplcreqtype) {
		$this->notifyChanged(self::FIELD_ADVRPLCREQTYPE,$this->advrplcreqtype,$advrplcreqtype);
		$this->advrplcreqtype=$advrplcreqtype;
		return $this;
	}

	/**
	 * get value for advrplcreqtype 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getAdvrplcreqtype() {
		return $this->advrplcreqtype;
	}

	/**
	 * set value for timestamp 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $timestamp
	 * @return PartnerModel
	 */
	public function &setTimestamp($timestamp) {
		$this->notifyChanged(self::FIELD_TIMESTAMP,$this->timestamp,$timestamp);
		$this->timestamp=$timestamp;
		return $this;
	}

	/**
	 * get value for timestamp 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTimestamp() {
		return $this->timestamp;
	}

	/**
	 * set value for fax 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $fax
	 * @return PartnerModel
	 */
	public function &setFax($fax) {
		$this->notifyChanged(self::FIELD_FAX,$this->fax,$fax);
		$this->fax=$fax;
		return $this;
	}

	/**
	 * get value for fax 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getFax() {
		return $this->fax;
	}

	/**
	 * set value for partnertypeid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $partnertypeid
	 * @return PartnerModel
	 */
	public function &setPartnertypeid($partnertypeid) {
		$this->notifyChanged(self::FIELD_PARTNERTYPEID,$this->partnertypeid,$partnertypeid);
		$this->partnertypeid=$partnertypeid;
		return $this;
	}

	/**
	 * get value for partnertypeid 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getPartnertypeid() {
		return $this->partnertypeid;
	}

	/**
	 * set value for contactname 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @param mixed $contactname
	 * @return PartnerModel
	 */
	public function &setContactname($contactname) {
		$this->notifyChanged(self::FIELD_CONTACTNAME,$this->contactname,$contactname);
		$this->contactname=$contactname;
		return $this;
	}

	/**
	 * get value for contactname 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getContactname() {
		return $this->contactname;
	}

	/**
	 * set value for contactlname 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @param mixed $contactlname
	 * @return PartnerModel
	 */
	public function &setContactlname($contactlname) {
		$this->notifyChanged(self::FIELD_CONTACTLNAME,$this->contactlname,$contactlname);
		$this->contactlname=$contactlname;
		return $this;
	}

	/**
	 * get value for contactlname 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getContactlname() {
		return $this->contactlname;
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
			self::FIELD_COMPANY=>$this->getCompany(),
			self::FIELD_PHONE1=>$this->getPhone1(),
			self::FIELD_PHONE2=>$this->getPhone2(),
			self::FIELD_EMAIL=>$this->getEmail(),
			self::FIELD_ADDRESS1=>$this->getAddress1(),
			self::FIELD_ADDRESS2=>$this->getAddress2(),
			self::FIELD_ADDRESS3=>$this->getAddress3(),
			self::FIELD_CITY=>$this->getCity(),
			self::FIELD_STATE=>$this->getState(),
			self::FIELD_ZIPCODE=>$this->getZipcode(),
			self::FIELD_COUNTRY=>$this->getCountry(),
			self::FIELD_CUSTSTATUS=>$this->getCuststatus(),
			self::FIELD_SHIPPINGHEADER=>$this->getShippingheader(),
			self::FIELD_ORDCONFMAIL=>$this->getOrdconfmail(),
			self::FIELD_SHIPNOTFMAIL=>$this->getShipnotfmail(),
			self::FIELD_RMANOTFMAIL=>$this->getRmanotfmail(),
			self::FIELD_INVRECVMAIL=>$this->getInvrecvmail(),
			self::FIELD_SERVNOTFMAIL=>$this->getServnotfmail(),
			self::FIELD_SALEREPMAIL=>$this->getSalerepmail(),
			self::FIELD_MAILNOTFSTATUS=>$this->getMailnotfstatus(),
			self::FIELD_NOTF2REQ=>$this->getNotf2req(),
			self::FIELD_EDISTATUS=>$this->getEdistatus(),
			self::FIELD_EDIURL=>$this->getEdiurl(),
			self::FIELD_EDIPAGE=>$this->getEdipage(),
			self::FIELD_EDIOKREPSTR=>$this->getEdiokrepstr(),
			self::FIELD_EDIUSERID=>$this->getEdiuserid(),
			self::FIELD_EDIPASSWORD=>$this->getEdipassword(),
			self::FIELD_ADVRPLCREQTYPE=>$this->getAdvrplcreqtype(),
			self::FIELD_TIMESTAMP=>$this->getTimestamp(),
			self::FIELD_FAX=>$this->getFax(),
			self::FIELD_PARTNERTYPEID=>$this->getPartnertypeid(),
			self::FIELD_CONTACTNAME=>$this->getContactname(),
			self::FIELD_CONTACTLNAME=>$this->getContactlname());
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
	 * Match by attributes of passed example instance and return matched rows as an array of PartnerModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param PartnerModel $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PartnerModel[]
	 */
	public static function findByExample(PDO $db,PartnerModel $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of PartnerModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PartnerModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `partner`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of PartnerModel instances
	 *
	 * @param PDOStatement $stmt
	 * @return PartnerModel[]
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
	 * returns the result as an array of PartnerModel instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return PartnerModel[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new PartnerModel();
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
	 * Execute select query and return matched rows as an array of PartnerModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return PartnerModel[]
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
		$sql='DELETE FROM `partner`'
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
		$this->setCompany($result['company']);
		$this->setPhone1($result['phone1']);
		$this->setPhone2($result['phone2']);
		$this->setEmail($result['email']);
		$this->setAddress1($result['address1']);
		$this->setAddress2($result['address2']);
		$this->setAddress3($result['address3']);
		$this->setCity($result['city']);
		$this->setState($result['state']);
		$this->setZipcode($result['zipcode']);
		$this->setCountry($result['country']);
		$this->setCuststatus($result['custstatus']);
		$this->setShippingheader($result['shippingheader']);
		$this->setOrdconfmail($result['ordconfmail']);
		$this->setShipnotfmail($result['shipnotfmail']);
		$this->setRmanotfmail($result['rmanotfmail']);
		$this->setInvrecvmail($result['invrecvmail']);
		$this->setServnotfmail($result['servnotfmail']);
		$this->setSalerepmail($result['salerepmail']);
		$this->setMailnotfstatus($result['mailnotfstatus']);
		$this->setNotf2req($result['notf2req']);
		$this->setEdistatus($result['edistatus']);
		$this->setEdiurl($result['ediurl']);
		$this->setEdipage($result['edipage']);
		$this->setEdiokrepstr($result['ediokrepstr']);
		$this->setEdiuserid($result['ediuserid']);
		$this->setEdipassword($result['edipassword']);
		$this->setAdvrplcreqtype($result['advrplcreqtype']);
		$this->setTimestamp($result['timestamp']);
		$this->setFax($result['fax']);
		$this->setPartnertypeid($result['partnertypeid']);
		$this->setContactname($result['contactname']);
		$this->setContactlname($result['contactlname']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return PartnerModel
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
		$o=new PartnerModel();
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
		$stmt->bindValue(2,$this->getCompany());
		$stmt->bindValue(3,$this->getPhone1());
		$stmt->bindValue(4,$this->getPhone2());
		$stmt->bindValue(5,$this->getEmail());
		$stmt->bindValue(6,$this->getAddress1());
		$stmt->bindValue(7,$this->getAddress2());
		$stmt->bindValue(8,$this->getAddress3());
		$stmt->bindValue(9,$this->getCity());
		$stmt->bindValue(10,$this->getState());
		$stmt->bindValue(11,$this->getZipcode());
		$stmt->bindValue(12,$this->getCountry());
		$stmt->bindValue(13,$this->getCuststatus());
		$stmt->bindValue(14,$this->getShippingheader());
		$stmt->bindValue(15,$this->getOrdconfmail());
		$stmt->bindValue(16,$this->getShipnotfmail());
		$stmt->bindValue(17,$this->getRmanotfmail());
		$stmt->bindValue(18,$this->getInvrecvmail());
		$stmt->bindValue(19,$this->getServnotfmail());
		$stmt->bindValue(20,$this->getSalerepmail());
		$stmt->bindValue(21,$this->getMailnotfstatus());
		$stmt->bindValue(22,$this->getNotf2req());
		$stmt->bindValue(23,$this->getEdistatus());
		$stmt->bindValue(24,$this->getEdiurl());
		$stmt->bindValue(25,$this->getEdipage());
		$stmt->bindValue(26,$this->getEdiokrepstr());
		$stmt->bindValue(27,$this->getEdiuserid());
		$stmt->bindValue(28,$this->getEdipassword());
		$stmt->bindValue(29,$this->getAdvrplcreqtype());
		$stmt->bindValue(30,$this->getTimestamp());
		$stmt->bindValue(31,$this->getFax());
		$stmt->bindValue(32,$this->getPartnertypeid());
		$stmt->bindValue(33,$this->getContactname());
		$stmt->bindValue(34,$this->getContactlname());
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
			$stmt->bindValue(1,$this->getCompany());
			$stmt->bindValue(2,$this->getPhone1());
			$stmt->bindValue(3,$this->getPhone2());
			$stmt->bindValue(4,$this->getEmail());
			$stmt->bindValue(5,$this->getAddress1());
			$stmt->bindValue(6,$this->getAddress2());
			$stmt->bindValue(7,$this->getAddress3());
			$stmt->bindValue(8,$this->getCity());
			$stmt->bindValue(9,$this->getState());
			$stmt->bindValue(10,$this->getZipcode());
			$stmt->bindValue(11,$this->getCountry());
			$stmt->bindValue(12,$this->getCuststatus());
			$stmt->bindValue(13,$this->getShippingheader());
			$stmt->bindValue(14,$this->getOrdconfmail());
			$stmt->bindValue(15,$this->getShipnotfmail());
			$stmt->bindValue(16,$this->getRmanotfmail());
			$stmt->bindValue(17,$this->getInvrecvmail());
			$stmt->bindValue(18,$this->getServnotfmail());
			$stmt->bindValue(19,$this->getSalerepmail());
			$stmt->bindValue(20,$this->getMailnotfstatus());
			$stmt->bindValue(21,$this->getNotf2req());
			$stmt->bindValue(22,$this->getEdistatus());
			$stmt->bindValue(23,$this->getEdiurl());
			$stmt->bindValue(24,$this->getEdipage());
			$stmt->bindValue(25,$this->getEdiokrepstr());
			$stmt->bindValue(26,$this->getEdiuserid());
			$stmt->bindValue(27,$this->getEdipassword());
			$stmt->bindValue(28,$this->getAdvrplcreqtype());
			$stmt->bindValue(29,$this->getTimestamp());
			$stmt->bindValue(30,$this->getFax());
			$stmt->bindValue(31,$this->getPartnertypeid());
			$stmt->bindValue(32,$this->getContactname());
			$stmt->bindValue(33,$this->getContactlname());
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
		$stmt->bindValue(35,$this->getId());
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
	 * Fetch InvorderModel's which this PartnerModel references.
	 * `partner`.`id` -> `invorder`.`partnerid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return InvorderModel[]
	 */
	public function fetchInvorderModelCollection(PDO $db, $sort=null) {
		$filter=array(InvorderModel::FIELD_PARTNERID=>$this->getId());
		return InvorderModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch ItemcatalogModel's which this PartnerModel references.
	 * `partner`.`id` -> `itemcatalog`.`partnerid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ItemcatalogModel[]
	 */
	public function fetchItemcatalogModelCollection(PDO $db, $sort=null) {
		$filter=array(ItemcatalogModel::FIELD_PARTNERID=>$this->getId());
		return ItemcatalogModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch LocationModel's which this PartnerModel references.
	 * `partner`.`id` -> `location`.`partnerid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return LocationModel[]
	 */
	public function fetchLocationModelCollection(PDO $db, $sort=null) {
		$filter=array(LocationModel::FIELD_PARTNERID=>$this->getId());
		return LocationModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch OrdercommitmasterModel's which this PartnerModel references.
	 * `partner`.`id` -> `ordercommitmaster`.`partnerid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return OrdercommitmasterModel[]
	 */
	public function fetchOrdercommitmasterModelCollection(PDO $db, $sort=null) {
		$filter=array(OrdercommitmasterModel::FIELD_PARTNERID=>$this->getId());
		return OrdercommitmasterModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfBomModel's which this PartnerModel references.
	 * `partner`.`id` -> `pmf_bom`.`partnerid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfBomModel[]
	 */
	public function fetchPmfBomModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfBomModel::FIELD_PARTNERID=>$this->getId());
		return PmfBomModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfInpinvModel's which this PartnerModel references.
	 * `partner`.`id` -> `pmf_inpinv`.`partnerid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfInpinvModel[]
	 */
	public function fetchPmfInpinvModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfInpinvModel::FIELD_PARTNERID=>$this->getId());
		return PmfInpinvModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfInvModel's which this PartnerModel references.
	 * `partner`.`id` -> `pmf_inv`.`partnerid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfInvModel[]
	 */
	public function fetchPmfInvModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfInvModel::FIELD_PARTNERID=>$this->getId());
		return PmfInvModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfInvhisModel's which this PartnerModel references.
	 * `partner`.`id` -> `pmf_invhis`.`partnerid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfInvhisModel[]
	 */
	public function fetchPmfInvhisModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfInvhisModel::FIELD_PARTNERID=>$this->getId());
		return PmfInvhisModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PmfOutinvModel's which this PartnerModel references.
	 * `partner`.`id` -> `pmf_outinv`.`partnerid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PmfOutinvModel[]
	 */
	public function fetchPmfOutinvModelCollection(PDO $db, $sort=null) {
		$filter=array(PmfOutinvModel::FIELD_PARTNERID=>$this->getId());
		return PmfOutinvModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch ProclineExtinfo1Model's which this PartnerModel references.
	 * `partner`.`id` -> `procline_extinfo1`.`freftable`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ProclineExtinfo1Model[]
	 */
	public function fetchProclineExtinfo1ModelCollection(PDO $db, $sort=null) {
		$filter=array(ProclineExtinfo1Model::FIELD_FREFTABLE=>$this->getId());
		return ProclineExtinfo1Model::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch ProdSchModel's which this PartnerModel references.
	 * `partner`.`id` -> `prod_sch`.`custid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ProdSchModel[]
	 */
	public function fetchProdSchModelCollection(PDO $db, $sort=null) {
		$filter=array(ProdSchModel::FIELD_CUSTID=>$this->getId());
		return ProdSchModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch RecvtypeModel's which this PartnerModel references.
	 * `partner`.`id` -> `recvtype`.`partnerid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return RecvtypeModel[]
	 */
	public function fetchRecvtypeModelCollection(PDO $db, $sort=null) {
		$filter=array(RecvtypeModel::FIELD_PARTNERID=>$this->getId());
		return RecvtypeModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch RequesttypeModel's which this PartnerModel references.
	 * `partner`.`id` -> `requesttype`.`partnerid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return RequesttypeModel[]
	 */
	public function fetchRequesttypeModelCollection(PDO $db, $sort=null) {
		$filter=array(RequesttypeModel::FIELD_PARTNERID=>$this->getId());
		return RequesttypeModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch ShipmethModel's which this PartnerModel references.
	 * `partner`.`id` -> `shipmeth`.`partnerid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ShipmethModel[]
	 */
	public function fetchShipmethModelCollection(PDO $db, $sort=null) {
		$filter=array(ShipmethModel::FIELD_PARTNERID=>$this->getId());
		return ShipmethModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch UsermasterModel's which this PartnerModel references.
	 * `partner`.`id` -> `usermaster`.`partnerid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return UsermasterModel[]
	 */
	public function fetchUsermasterModelCollection(PDO $db, $sort=null) {
		$filter=array(UsermasterModel::FIELD_PARTNERID=>$this->getId());
		return UsermasterModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch RequesttypeModel which references this PartnerModel. Will return null in case reference is invalid.
	 * `partner`.`advrplcreqtype` -> `requesttype`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return RequesttypeModel
	 */
	public function fetchRequesttypeModel(PDO $db, $sort=null) {
		$filter=array(RequesttypeModel::FIELD_ID=>$this->getAdvrplcreqtype());
		$result=RequesttypeModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch PartnertypeModel which references this PartnerModel. Will return null in case reference is invalid.
	 * `partner`.`partnertypeid` -> `partnertype`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PartnertypeModel
	 */
	public function fetchPartnertypeModel(PDO $db, $sort=null) {
		$filter=array(PartnertypeModel::FIELD_ID=>$this->getPartnertypeid());
		$result=PartnertypeModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'PartnerModel');
	}

	/**
	 * get single PartnerModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return PartnerModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new PartnerModel();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of PartnerModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return PartnerModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('PartnerModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>