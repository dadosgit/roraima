<?php


abstract class BaseNpvacdiadis extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $rangodesde;


	
	protected $rangohasta;


	
	protected $diadis;


	
	protected $codnom;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getRangodesde()
	{

		return number_format($this->rangodesde,2,',','.');
		
	}
	
	public function getRangohasta()
	{

		return number_format($this->rangohasta,2,',','.');
		
	}
	
	public function getDiadis()
	{

		return number_format($this->diadis,2,',','.');
		
	}
	
	public function getCodnom()
	{

		return $this->codnom; 		
	}
	
	public function getId()
	{

		return $this->id; 		
	}
	
	public function setRangodesde($v)
	{

		if ($this->rangodesde !== $v) {
			$this->rangodesde = $v;
			$this->modifiedColumns[] = NpvacdiadisPeer::RANGODESDE;
		}

	} 
	
	public function setRangohasta($v)
	{

		if ($this->rangohasta !== $v) {
			$this->rangohasta = $v;
			$this->modifiedColumns[] = NpvacdiadisPeer::RANGOHASTA;
		}

	} 
	
	public function setDiadis($v)
	{

		if ($this->diadis !== $v) {
			$this->diadis = $v;
			$this->modifiedColumns[] = NpvacdiadisPeer::DIADIS;
		}

	} 
	
	public function setCodnom($v)
	{

		if ($this->codnom !== $v) {
			$this->codnom = $v;
			$this->modifiedColumns[] = NpvacdiadisPeer::CODNOM;
		}

	} 
	
	public function setId($v)
	{

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NpvacdiadisPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->rangodesde = $rs->getFloat($startcol + 0);

			$this->rangohasta = $rs->getFloat($startcol + 1);

			$this->diadis = $rs->getFloat($startcol + 2);

			$this->codnom = $rs->getString($startcol + 3);

			$this->id = $rs->getInt($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Npvacdiadis object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NpvacdiadisPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			NpvacdiadisPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(NpvacdiadisPeer::DATABASE_NAME);
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
					$pk = NpvacdiadisPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += NpvacdiadisPeer::doUpdate($this, $con);
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


			if (($retval = NpvacdiadisPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NpvacdiadisPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getRangodesde();
				break;
			case 1:
				return $this->getRangohasta();
				break;
			case 2:
				return $this->getDiadis();
				break;
			case 3:
				return $this->getCodnom();
				break;
			case 4:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NpvacdiadisPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getRangodesde(),
			$keys[1] => $this->getRangohasta(),
			$keys[2] => $this->getDiadis(),
			$keys[3] => $this->getCodnom(),
			$keys[4] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NpvacdiadisPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setRangodesde($value);
				break;
			case 1:
				$this->setRangohasta($value);
				break;
			case 2:
				$this->setDiadis($value);
				break;
			case 3:
				$this->setCodnom($value);
				break;
			case 4:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NpvacdiadisPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setRangodesde($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setRangohasta($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDiadis($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCodnom($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setId($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(NpvacdiadisPeer::DATABASE_NAME);

		if ($this->isColumnModified(NpvacdiadisPeer::RANGODESDE)) $criteria->add(NpvacdiadisPeer::RANGODESDE, $this->rangodesde);
		if ($this->isColumnModified(NpvacdiadisPeer::RANGOHASTA)) $criteria->add(NpvacdiadisPeer::RANGOHASTA, $this->rangohasta);
		if ($this->isColumnModified(NpvacdiadisPeer::DIADIS)) $criteria->add(NpvacdiadisPeer::DIADIS, $this->diadis);
		if ($this->isColumnModified(NpvacdiadisPeer::CODNOM)) $criteria->add(NpvacdiadisPeer::CODNOM, $this->codnom);
		if ($this->isColumnModified(NpvacdiadisPeer::ID)) $criteria->add(NpvacdiadisPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(NpvacdiadisPeer::DATABASE_NAME);

		$criteria->add(NpvacdiadisPeer::ID, $this->id);

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

		$copyObj->setRangodesde($this->rangodesde);

		$copyObj->setRangohasta($this->rangohasta);

		$copyObj->setDiadis($this->diadis);

		$copyObj->setCodnom($this->codnom);


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
			self::$peer = new NpvacdiadisPeer();
		}
		return self::$peer;
	}

} 