<?php


abstract class BaseRhvalniv extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $codniv;


	
	protected $codvalins;


	
	protected $porvalins;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCodniv()
	{

		return $this->codniv; 		
	}
	
	public function getCodvalins()
	{

		return $this->codvalins; 		
	}
	
	public function getPorvalins()
	{

		return number_format($this->porvalins,2,',','.');
		
	}
	
	public function getId()
	{

		return $this->id; 		
	}
	
	public function setCodniv($v)
	{

		if ($this->codniv !== $v) {
			$this->codniv = $v;
			$this->modifiedColumns[] = RhvalnivPeer::CODNIV;
		}

	} 
	
	public function setCodvalins($v)
	{

		if ($this->codvalins !== $v) {
			$this->codvalins = $v;
			$this->modifiedColumns[] = RhvalnivPeer::CODVALINS;
		}

	} 
	
	public function setPorvalins($v)
	{

		if ($this->porvalins !== $v) {
			$this->porvalins = $v;
			$this->modifiedColumns[] = RhvalnivPeer::PORVALINS;
		}

	} 
	
	public function setId($v)
	{

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = RhvalnivPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->codniv = $rs->getString($startcol + 0);

			$this->codvalins = $rs->getString($startcol + 1);

			$this->porvalins = $rs->getFloat($startcol + 2);

			$this->id = $rs->getInt($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Rhvalniv object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(RhvalnivPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			RhvalnivPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(RhvalnivPeer::DATABASE_NAME);
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
					$pk = RhvalnivPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += RhvalnivPeer::doUpdate($this, $con);
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


			if (($retval = RhvalnivPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RhvalnivPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCodniv();
				break;
			case 1:
				return $this->getCodvalins();
				break;
			case 2:
				return $this->getPorvalins();
				break;
			case 3:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RhvalnivPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCodniv(),
			$keys[1] => $this->getCodvalins(),
			$keys[2] => $this->getPorvalins(),
			$keys[3] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RhvalnivPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCodniv($value);
				break;
			case 1:
				$this->setCodvalins($value);
				break;
			case 2:
				$this->setPorvalins($value);
				break;
			case 3:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RhvalnivPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCodniv($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCodvalins($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPorvalins($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setId($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(RhvalnivPeer::DATABASE_NAME);

		if ($this->isColumnModified(RhvalnivPeer::CODNIV)) $criteria->add(RhvalnivPeer::CODNIV, $this->codniv);
		if ($this->isColumnModified(RhvalnivPeer::CODVALINS)) $criteria->add(RhvalnivPeer::CODVALINS, $this->codvalins);
		if ($this->isColumnModified(RhvalnivPeer::PORVALINS)) $criteria->add(RhvalnivPeer::PORVALINS, $this->porvalins);
		if ($this->isColumnModified(RhvalnivPeer::ID)) $criteria->add(RhvalnivPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(RhvalnivPeer::DATABASE_NAME);

		$criteria->add(RhvalnivPeer::ID, $this->id);

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

		$copyObj->setCodniv($this->codniv);

		$copyObj->setCodvalins($this->codvalins);

		$copyObj->setPorvalins($this->porvalins);


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
			self::$peer = new RhvalnivPeer();
		}
		return self::$peer;
	}

} 