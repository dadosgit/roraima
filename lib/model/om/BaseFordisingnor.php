<?php


abstract class BaseFordisingnor extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $codparing;


	
	protected $ingtot;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCodparing()
	{

		return $this->codparing; 		
	}
	
	public function getIngtot()
	{

		return number_format($this->ingtot,2,',','.');
		
	}
	
	public function getId()
	{

		return $this->id; 		
	}
	
	public function setCodparing($v)
	{

		if ($this->codparing !== $v) {
			$this->codparing = $v;
			$this->modifiedColumns[] = FordisingnorPeer::CODPARING;
		}

	} 
	
	public function setIngtot($v)
	{

		if ($this->ingtot !== $v) {
			$this->ingtot = $v;
			$this->modifiedColumns[] = FordisingnorPeer::INGTOT;
		}

	} 
	
	public function setId($v)
	{

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = FordisingnorPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->codparing = $rs->getString($startcol + 0);

			$this->ingtot = $rs->getFloat($startcol + 1);

			$this->id = $rs->getInt($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 3; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Fordisingnor object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(FordisingnorPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			FordisingnorPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(FordisingnorPeer::DATABASE_NAME);
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
					$pk = FordisingnorPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += FordisingnorPeer::doUpdate($this, $con);
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


			if (($retval = FordisingnorPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FordisingnorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCodparing();
				break;
			case 1:
				return $this->getIngtot();
				break;
			case 2:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FordisingnorPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCodparing(),
			$keys[1] => $this->getIngtot(),
			$keys[2] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FordisingnorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCodparing($value);
				break;
			case 1:
				$this->setIngtot($value);
				break;
			case 2:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FordisingnorPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCodparing($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIngtot($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setId($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(FordisingnorPeer::DATABASE_NAME);

		if ($this->isColumnModified(FordisingnorPeer::CODPARING)) $criteria->add(FordisingnorPeer::CODPARING, $this->codparing);
		if ($this->isColumnModified(FordisingnorPeer::INGTOT)) $criteria->add(FordisingnorPeer::INGTOT, $this->ingtot);
		if ($this->isColumnModified(FordisingnorPeer::ID)) $criteria->add(FordisingnorPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(FordisingnorPeer::DATABASE_NAME);

		$criteria->add(FordisingnorPeer::ID, $this->id);

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

		$copyObj->setCodparing($this->codparing);

		$copyObj->setIngtot($this->ingtot);


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
			self::$peer = new FordisingnorPeer();
		}
		return self::$peer;
	}

} 