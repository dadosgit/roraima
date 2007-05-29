<?php


abstract class BaseCarcpart extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $rcpart;


	
	protected $fecrcp;


	
	protected $ordcom;


	
	protected $desrcp;


	
	protected $codpro;


	
	protected $numfac;


	
	protected $monrcp;


	
	protected $starcp;


	
	protected $numcom;


	
	protected $numord;


	
	protected $codalm;


	
	protected $ctrper;


	
	protected $genord;


	
	protected $nroent;


	
	protected $fecfac;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getRcpart()
	{

		return $this->rcpart; 		
	}
	
	public function getFecrcp($format = 'Y-m-d')
	{

		if ($this->fecrcp === null || $this->fecrcp === '') {
			return null;
		} elseif (!is_int($this->fecrcp)) {
						$ts = strtotime($this->fecrcp);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fecrcp] as date/time value: " . var_export($this->fecrcp, true));
			}
		} else {
			$ts = $this->fecrcp;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getOrdcom()
	{

		return $this->ordcom; 		
	}
	
	public function getDesrcp()
	{

		return $this->desrcp; 		
	}
	
	public function getCodpro()
	{

		return $this->codpro; 		
	}
	
	public function getNumfac()
	{

		return $this->numfac; 		
	}
	
	public function getMonrcp()
	{

		return number_format($this->monrcp,2,',','.');
		
	}
	
	public function getStarcp()
	{

		return $this->starcp; 		
	}
	
	public function getNumcom()
	{

		return $this->numcom; 		
	}
	
	public function getNumord()
	{

		return $this->numord; 		
	}
	
	public function getCodalm()
	{

		return $this->codalm; 		
	}
	
	public function getCtrper()
	{

		return $this->ctrper; 		
	}
	
	public function getGenord()
	{

		return $this->genord; 		
	}
	
	public function getNroent()
	{

		return $this->nroent; 		
	}
	
	public function getFecfac($format = 'Y-m-d')
	{

		if ($this->fecfac === null || $this->fecfac === '') {
			return null;
		} elseif (!is_int($this->fecfac)) {
						$ts = strtotime($this->fecfac);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fecfac] as date/time value: " . var_export($this->fecfac, true));
			}
		} else {
			$ts = $this->fecfac;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getId()
	{

		return $this->id; 		
	}
	
	public function setRcpart($v)
	{

		if ($this->rcpart !== $v) {
			$this->rcpart = $v;
			$this->modifiedColumns[] = CarcpartPeer::RCPART;
		}

	} 
	
	public function setFecrcp($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fecrcp] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fecrcp !== $ts) {
			$this->fecrcp = $ts;
			$this->modifiedColumns[] = CarcpartPeer::FECRCP;
		}

	} 
	
	public function setOrdcom($v)
	{

		if ($this->ordcom !== $v) {
			$this->ordcom = $v;
			$this->modifiedColumns[] = CarcpartPeer::ORDCOM;
		}

	} 
	
	public function setDesrcp($v)
	{

		if ($this->desrcp !== $v) {
			$this->desrcp = $v;
			$this->modifiedColumns[] = CarcpartPeer::DESRCP;
		}

	} 
	
	public function setCodpro($v)
	{

		if ($this->codpro !== $v) {
			$this->codpro = $v;
			$this->modifiedColumns[] = CarcpartPeer::CODPRO;
		}

	} 
	
	public function setNumfac($v)
	{

		if ($this->numfac !== $v) {
			$this->numfac = $v;
			$this->modifiedColumns[] = CarcpartPeer::NUMFAC;
		}

	} 
	
	public function setMonrcp($v)
	{

		if ($this->monrcp !== $v) {
			$this->monrcp = $v;
			$this->modifiedColumns[] = CarcpartPeer::MONRCP;
		}

	} 
	
	public function setStarcp($v)
	{

		if ($this->starcp !== $v) {
			$this->starcp = $v;
			$this->modifiedColumns[] = CarcpartPeer::STARCP;
		}

	} 
	
	public function setNumcom($v)
	{

		if ($this->numcom !== $v) {
			$this->numcom = $v;
			$this->modifiedColumns[] = CarcpartPeer::NUMCOM;
		}

	} 
	
	public function setNumord($v)
	{

		if ($this->numord !== $v) {
			$this->numord = $v;
			$this->modifiedColumns[] = CarcpartPeer::NUMORD;
		}

	} 
	
	public function setCodalm($v)
	{

		if ($this->codalm !== $v) {
			$this->codalm = $v;
			$this->modifiedColumns[] = CarcpartPeer::CODALM;
		}

	} 
	
	public function setCtrper($v)
	{

		if ($this->ctrper !== $v) {
			$this->ctrper = $v;
			$this->modifiedColumns[] = CarcpartPeer::CTRPER;
		}

	} 
	
	public function setGenord($v)
	{

		if ($this->genord !== $v) {
			$this->genord = $v;
			$this->modifiedColumns[] = CarcpartPeer::GENORD;
		}

	} 
	
	public function setNroent($v)
	{

		if ($this->nroent !== $v) {
			$this->nroent = $v;
			$this->modifiedColumns[] = CarcpartPeer::NROENT;
		}

	} 
	
	public function setFecfac($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fecfac] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fecfac !== $ts) {
			$this->fecfac = $ts;
			$this->modifiedColumns[] = CarcpartPeer::FECFAC;
		}

	} 
	
	public function setId($v)
	{

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CarcpartPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->rcpart = $rs->getString($startcol + 0);

			$this->fecrcp = $rs->getDate($startcol + 1, null);

			$this->ordcom = $rs->getString($startcol + 2);

			$this->desrcp = $rs->getString($startcol + 3);

			$this->codpro = $rs->getString($startcol + 4);

			$this->numfac = $rs->getString($startcol + 5);

			$this->monrcp = $rs->getFloat($startcol + 6);

			$this->starcp = $rs->getString($startcol + 7);

			$this->numcom = $rs->getString($startcol + 8);

			$this->numord = $rs->getString($startcol + 9);

			$this->codalm = $rs->getString($startcol + 10);

			$this->ctrper = $rs->getString($startcol + 11);

			$this->genord = $rs->getString($startcol + 12);

			$this->nroent = $rs->getString($startcol + 13);

			$this->fecfac = $rs->getDate($startcol + 14, null);

			$this->id = $rs->getInt($startcol + 15);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 16; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Carcpart object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CarcpartPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CarcpartPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CarcpartPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = CarcpartPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += CarcpartPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = CarcpartPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CarcpartPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getRcpart();
				break;
			case 1:
				return $this->getFecrcp();
				break;
			case 2:
				return $this->getOrdcom();
				break;
			case 3:
				return $this->getDesrcp();
				break;
			case 4:
				return $this->getCodpro();
				break;
			case 5:
				return $this->getNumfac();
				break;
			case 6:
				return $this->getMonrcp();
				break;
			case 7:
				return $this->getStarcp();
				break;
			case 8:
				return $this->getNumcom();
				break;
			case 9:
				return $this->getNumord();
				break;
			case 10:
				return $this->getCodalm();
				break;
			case 11:
				return $this->getCtrper();
				break;
			case 12:
				return $this->getGenord();
				break;
			case 13:
				return $this->getNroent();
				break;
			case 14:
				return $this->getFecfac();
				break;
			case 15:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CarcpartPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getRcpart(),
			$keys[1] => $this->getFecrcp(),
			$keys[2] => $this->getOrdcom(),
			$keys[3] => $this->getDesrcp(),
			$keys[4] => $this->getCodpro(),
			$keys[5] => $this->getNumfac(),
			$keys[6] => $this->getMonrcp(),
			$keys[7] => $this->getStarcp(),
			$keys[8] => $this->getNumcom(),
			$keys[9] => $this->getNumord(),
			$keys[10] => $this->getCodalm(),
			$keys[11] => $this->getCtrper(),
			$keys[12] => $this->getGenord(),
			$keys[13] => $this->getNroent(),
			$keys[14] => $this->getFecfac(),
			$keys[15] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CarcpartPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setRcpart($value);
				break;
			case 1:
				$this->setFecrcp($value);
				break;
			case 2:
				$this->setOrdcom($value);
				break;
			case 3:
				$this->setDesrcp($value);
				break;
			case 4:
				$this->setCodpro($value);
				break;
			case 5:
				$this->setNumfac($value);
				break;
			case 6:
				$this->setMonrcp($value);
				break;
			case 7:
				$this->setStarcp($value);
				break;
			case 8:
				$this->setNumcom($value);
				break;
			case 9:
				$this->setNumord($value);
				break;
			case 10:
				$this->setCodalm($value);
				break;
			case 11:
				$this->setCtrper($value);
				break;
			case 12:
				$this->setGenord($value);
				break;
			case 13:
				$this->setNroent($value);
				break;
			case 14:
				$this->setFecfac($value);
				break;
			case 15:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CarcpartPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setRcpart($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setFecrcp($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setOrdcom($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDesrcp($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCodpro($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNumfac($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setMonrcp($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setStarcp($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setNumcom($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setNumord($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCodalm($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCtrper($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setGenord($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setNroent($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setFecfac($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setId($arr[$keys[15]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CarcpartPeer::DATABASE_NAME);

		if ($this->isColumnModified(CarcpartPeer::RCPART)) $criteria->add(CarcpartPeer::RCPART, $this->rcpart);
		if ($this->isColumnModified(CarcpartPeer::FECRCP)) $criteria->add(CarcpartPeer::FECRCP, $this->fecrcp);
		if ($this->isColumnModified(CarcpartPeer::ORDCOM)) $criteria->add(CarcpartPeer::ORDCOM, $this->ordcom);
		if ($this->isColumnModified(CarcpartPeer::DESRCP)) $criteria->add(CarcpartPeer::DESRCP, $this->desrcp);
		if ($this->isColumnModified(CarcpartPeer::CODPRO)) $criteria->add(CarcpartPeer::CODPRO, $this->codpro);
		if ($this->isColumnModified(CarcpartPeer::NUMFAC)) $criteria->add(CarcpartPeer::NUMFAC, $this->numfac);
		if ($this->isColumnModified(CarcpartPeer::MONRCP)) $criteria->add(CarcpartPeer::MONRCP, $this->monrcp);
		if ($this->isColumnModified(CarcpartPeer::STARCP)) $criteria->add(CarcpartPeer::STARCP, $this->starcp);
		if ($this->isColumnModified(CarcpartPeer::NUMCOM)) $criteria->add(CarcpartPeer::NUMCOM, $this->numcom);
		if ($this->isColumnModified(CarcpartPeer::NUMORD)) $criteria->add(CarcpartPeer::NUMORD, $this->numord);
		if ($this->isColumnModified(CarcpartPeer::CODALM)) $criteria->add(CarcpartPeer::CODALM, $this->codalm);
		if ($this->isColumnModified(CarcpartPeer::CTRPER)) $criteria->add(CarcpartPeer::CTRPER, $this->ctrper);
		if ($this->isColumnModified(CarcpartPeer::GENORD)) $criteria->add(CarcpartPeer::GENORD, $this->genord);
		if ($this->isColumnModified(CarcpartPeer::NROENT)) $criteria->add(CarcpartPeer::NROENT, $this->nroent);
		if ($this->isColumnModified(CarcpartPeer::FECFAC)) $criteria->add(CarcpartPeer::FECFAC, $this->fecfac);
		if ($this->isColumnModified(CarcpartPeer::ID)) $criteria->add(CarcpartPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CarcpartPeer::DATABASE_NAME);

		$criteria->add(CarcpartPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setRcpart($this->rcpart);

		$copyObj->setFecrcp($this->fecrcp);

		$copyObj->setOrdcom($this->ordcom);

		$copyObj->setDesrcp($this->desrcp);

		$copyObj->setCodpro($this->codpro);

		$copyObj->setNumfac($this->numfac);

		$copyObj->setMonrcp($this->monrcp);

		$copyObj->setStarcp($this->starcp);

		$copyObj->setNumcom($this->numcom);

		$copyObj->setNumord($this->numord);

		$copyObj->setCodalm($this->codalm);

		$copyObj->setCtrper($this->ctrper);

		$copyObj->setGenord($this->genord);

		$copyObj->setNroent($this->nroent);

		$copyObj->setFecfac($this->fecfac);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CarcpartPeer();
		}
		return self::$peer;
	}

} 