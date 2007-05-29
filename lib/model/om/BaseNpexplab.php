<?php


abstract class BaseNpexplab extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $codemp;


	
	protected $nomemp;


	
	protected $codcar;


	
	protected $descar;


	
	protected $fecini;


	
	protected $fecter;


	
	protected $sueobt;


	
	protected $stacar;


	
	protected $compobt;


	
	protected $durexp;


	
	protected $tiporg;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCodemp()
	{

		return $this->codemp; 		
	}
	
	public function getNomemp()
	{

		return $this->nomemp; 		
	}
	
	public function getCodcar()
	{

		return $this->codcar; 		
	}
	
	public function getDescar()
	{

		return $this->descar; 		
	}
	
	public function getFecini($format = 'Y-m-d')
	{

		if ($this->fecini === null || $this->fecini === '') {
			return null;
		} elseif (!is_int($this->fecini)) {
						$ts = strtotime($this->fecini);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fecini] as date/time value: " . var_export($this->fecini, true));
			}
		} else {
			$ts = $this->fecini;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getFecter($format = 'Y-m-d')
	{

		if ($this->fecter === null || $this->fecter === '') {
			return null;
		} elseif (!is_int($this->fecter)) {
						$ts = strtotime($this->fecter);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fecter] as date/time value: " . var_export($this->fecter, true));
			}
		} else {
			$ts = $this->fecter;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getSueobt()
	{

		return number_format($this->sueobt,2,',','.');
		
	}
	
	public function getStacar()
	{

		return $this->stacar; 		
	}
	
	public function getCompobt()
	{

		return number_format($this->compobt,2,',','.');
		
	}
	
	public function getDurexp()
	{

		return $this->durexp; 		
	}
	
	public function getTiporg()
	{

		return $this->tiporg; 		
	}
	
	public function getId()
	{

		return $this->id; 		
	}
	
	public function setCodemp($v)
	{

		if ($this->codemp !== $v) {
			$this->codemp = $v;
			$this->modifiedColumns[] = NpexplabPeer::CODEMP;
		}

	} 
	
	public function setNomemp($v)
	{

		if ($this->nomemp !== $v) {
			$this->nomemp = $v;
			$this->modifiedColumns[] = NpexplabPeer::NOMEMP;
		}

	} 
	
	public function setCodcar($v)
	{

		if ($this->codcar !== $v) {
			$this->codcar = $v;
			$this->modifiedColumns[] = NpexplabPeer::CODCAR;
		}

	} 
	
	public function setDescar($v)
	{

		if ($this->descar !== $v) {
			$this->descar = $v;
			$this->modifiedColumns[] = NpexplabPeer::DESCAR;
		}

	} 
	
	public function setFecini($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fecini] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fecini !== $ts) {
			$this->fecini = $ts;
			$this->modifiedColumns[] = NpexplabPeer::FECINI;
		}

	} 
	
	public function setFecter($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fecter] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fecter !== $ts) {
			$this->fecter = $ts;
			$this->modifiedColumns[] = NpexplabPeer::FECTER;
		}

	} 
	
	public function setSueobt($v)
	{

		if ($this->sueobt !== $v) {
			$this->sueobt = $v;
			$this->modifiedColumns[] = NpexplabPeer::SUEOBT;
		}

	} 
	
	public function setStacar($v)
	{

		if ($this->stacar !== $v) {
			$this->stacar = $v;
			$this->modifiedColumns[] = NpexplabPeer::STACAR;
		}

	} 
	
	public function setCompobt($v)
	{

		if ($this->compobt !== $v) {
			$this->compobt = $v;
			$this->modifiedColumns[] = NpexplabPeer::COMPOBT;
		}

	} 
	
	public function setDurexp($v)
	{

		if ($this->durexp !== $v) {
			$this->durexp = $v;
			$this->modifiedColumns[] = NpexplabPeer::DUREXP;
		}

	} 
	
	public function setTiporg($v)
	{

		if ($this->tiporg !== $v) {
			$this->tiporg = $v;
			$this->modifiedColumns[] = NpexplabPeer::TIPORG;
		}

	} 
	
	public function setId($v)
	{

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NpexplabPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->codemp = $rs->getString($startcol + 0);

			$this->nomemp = $rs->getString($startcol + 1);

			$this->codcar = $rs->getString($startcol + 2);

			$this->descar = $rs->getString($startcol + 3);

			$this->fecini = $rs->getDate($startcol + 4, null);

			$this->fecter = $rs->getDate($startcol + 5, null);

			$this->sueobt = $rs->getFloat($startcol + 6);

			$this->stacar = $rs->getString($startcol + 7);

			$this->compobt = $rs->getFloat($startcol + 8);

			$this->durexp = $rs->getString($startcol + 9);

			$this->tiporg = $rs->getString($startcol + 10);

			$this->id = $rs->getInt($startcol + 11);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 12; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Npexplab object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NpexplabPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			NpexplabPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(NpexplabPeer::DATABASE_NAME);
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
					$pk = NpexplabPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += NpexplabPeer::doUpdate($this, $con);
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


			if (($retval = NpexplabPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NpexplabPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCodemp();
				break;
			case 1:
				return $this->getNomemp();
				break;
			case 2:
				return $this->getCodcar();
				break;
			case 3:
				return $this->getDescar();
				break;
			case 4:
				return $this->getFecini();
				break;
			case 5:
				return $this->getFecter();
				break;
			case 6:
				return $this->getSueobt();
				break;
			case 7:
				return $this->getStacar();
				break;
			case 8:
				return $this->getCompobt();
				break;
			case 9:
				return $this->getDurexp();
				break;
			case 10:
				return $this->getTiporg();
				break;
			case 11:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NpexplabPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCodemp(),
			$keys[1] => $this->getNomemp(),
			$keys[2] => $this->getCodcar(),
			$keys[3] => $this->getDescar(),
			$keys[4] => $this->getFecini(),
			$keys[5] => $this->getFecter(),
			$keys[6] => $this->getSueobt(),
			$keys[7] => $this->getStacar(),
			$keys[8] => $this->getCompobt(),
			$keys[9] => $this->getDurexp(),
			$keys[10] => $this->getTiporg(),
			$keys[11] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NpexplabPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCodemp($value);
				break;
			case 1:
				$this->setNomemp($value);
				break;
			case 2:
				$this->setCodcar($value);
				break;
			case 3:
				$this->setDescar($value);
				break;
			case 4:
				$this->setFecini($value);
				break;
			case 5:
				$this->setFecter($value);
				break;
			case 6:
				$this->setSueobt($value);
				break;
			case 7:
				$this->setStacar($value);
				break;
			case 8:
				$this->setCompobt($value);
				break;
			case 9:
				$this->setDurexp($value);
				break;
			case 10:
				$this->setTiporg($value);
				break;
			case 11:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NpexplabPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCodemp($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNomemp($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCodcar($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDescar($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFecini($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFecter($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSueobt($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setStacar($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCompobt($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDurexp($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setTiporg($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setId($arr[$keys[11]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(NpexplabPeer::DATABASE_NAME);

		if ($this->isColumnModified(NpexplabPeer::CODEMP)) $criteria->add(NpexplabPeer::CODEMP, $this->codemp);
		if ($this->isColumnModified(NpexplabPeer::NOMEMP)) $criteria->add(NpexplabPeer::NOMEMP, $this->nomemp);
		if ($this->isColumnModified(NpexplabPeer::CODCAR)) $criteria->add(NpexplabPeer::CODCAR, $this->codcar);
		if ($this->isColumnModified(NpexplabPeer::DESCAR)) $criteria->add(NpexplabPeer::DESCAR, $this->descar);
		if ($this->isColumnModified(NpexplabPeer::FECINI)) $criteria->add(NpexplabPeer::FECINI, $this->fecini);
		if ($this->isColumnModified(NpexplabPeer::FECTER)) $criteria->add(NpexplabPeer::FECTER, $this->fecter);
		if ($this->isColumnModified(NpexplabPeer::SUEOBT)) $criteria->add(NpexplabPeer::SUEOBT, $this->sueobt);
		if ($this->isColumnModified(NpexplabPeer::STACAR)) $criteria->add(NpexplabPeer::STACAR, $this->stacar);
		if ($this->isColumnModified(NpexplabPeer::COMPOBT)) $criteria->add(NpexplabPeer::COMPOBT, $this->compobt);
		if ($this->isColumnModified(NpexplabPeer::DUREXP)) $criteria->add(NpexplabPeer::DUREXP, $this->durexp);
		if ($this->isColumnModified(NpexplabPeer::TIPORG)) $criteria->add(NpexplabPeer::TIPORG, $this->tiporg);
		if ($this->isColumnModified(NpexplabPeer::ID)) $criteria->add(NpexplabPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(NpexplabPeer::DATABASE_NAME);

		$criteria->add(NpexplabPeer::ID, $this->id);

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

		$copyObj->setCodemp($this->codemp);

		$copyObj->setNomemp($this->nomemp);

		$copyObj->setCodcar($this->codcar);

		$copyObj->setDescar($this->descar);

		$copyObj->setFecini($this->fecini);

		$copyObj->setFecter($this->fecter);

		$copyObj->setSueobt($this->sueobt);

		$copyObj->setStacar($this->stacar);

		$copyObj->setCompobt($this->compobt);

		$copyObj->setDurexp($this->durexp);

		$copyObj->setTiporg($this->tiporg);


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
			self::$peer = new NpexplabPeer();
		}
		return self::$peer;
	}

} 