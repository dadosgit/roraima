<?php


abstract class BaseNpmotliq extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $codmotliq;


	
	protected $desmotliq;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCodmotliq()
	{

		return $this->codmotliq; 		
	}
	
	public function getDesmotliq()
	{

		return $this->desmotliq; 		
	}
	
	public function getId()
	{

		return $this->id; 		
	}
	
	public function setCodmotliq($v)
	{

		if ($this->codmotliq !== $v) {
			$this->codmotliq = $v;
			$this->modifiedColumns[] = NpmotliqPeer::CODMOTLIQ;
		}

	} 
	
	public function setDesmotliq($v)
	{

		if ($this->desmotliq !== $v) {
			$this->desmotliq = $v;
			$this->modifiedColumns[] = NpmotliqPeer::DESMOTLIQ;
		}

	} 
	
	public function setId($v)
	{

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NpmotliqPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->codmotliq = $rs->getString($startcol + 0);

			$this->desmotliq = $rs->getString($startcol + 1);

			$this->id = $rs->getInt($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 3; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Npmotliq object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NpmotliqPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			NpmotliqPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(NpmotliqPeer::DATABASE_NAME);
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
					$pk = NpmotliqPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += NpmotliqPeer::doUpdate($this, $con);
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


			if (($retval = NpmotliqPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NpmotliqPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCodmotliq();
				break;
			case 1:
				return $this->getDesmotliq();
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
		$keys = NpmotliqPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCodmotliq(),
			$keys[1] => $this->getDesmotliq(),
			$keys[2] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NpmotliqPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCodmotliq($value);
				break;
			case 1:
				$this->setDesmotliq($value);
				break;
			case 2:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NpmotliqPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCodmotliq($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDesmotliq($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setId($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(NpmotliqPeer::DATABASE_NAME);

		if ($this->isColumnModified(NpmotliqPeer::CODMOTLIQ)) $criteria->add(NpmotliqPeer::CODMOTLIQ, $this->codmotliq);
		if ($this->isColumnModified(NpmotliqPeer::DESMOTLIQ)) $criteria->add(NpmotliqPeer::DESMOTLIQ, $this->desmotliq);
		if ($this->isColumnModified(NpmotliqPeer::ID)) $criteria->add(NpmotliqPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(NpmotliqPeer::DATABASE_NAME);

		$criteria->add(NpmotliqPeer::ID, $this->id);

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

		$copyObj->setCodmotliq($this->codmotliq);

		$copyObj->setDesmotliq($this->desmotliq);


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
			self::$peer = new NpmotliqPeer();
		}
		return self::$peer;
	}

} 