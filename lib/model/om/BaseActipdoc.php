<?php


abstract class BaseActipdoc extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $tipdoc;


	
	protected $nomdoc;


	
	protected $vidutil;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getTipdoc()
	{

		return $this->tipdoc; 		
	}
	
	public function getNomdoc()
	{

		return $this->nomdoc; 		
	}
	
	public function getVidutil()
	{

		return number_format($this->vidutil,2,',','.');
		
	}
	
	public function getId()
	{

		return $this->id; 		
	}
	
	public function setTipdoc($v)
	{

		if ($this->tipdoc !== $v) {
			$this->tipdoc = $v;
			$this->modifiedColumns[] = ActipdocPeer::TIPDOC;
		}

	} 
	
	public function setNomdoc($v)
	{

		if ($this->nomdoc !== $v) {
			$this->nomdoc = $v;
			$this->modifiedColumns[] = ActipdocPeer::NOMDOC;
		}

	} 
	
	public function setVidutil($v)
	{

		if ($this->vidutil !== $v) {
			$this->vidutil = $v;
			$this->modifiedColumns[] = ActipdocPeer::VIDUTIL;
		}

	} 
	
	public function setId($v)
	{

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ActipdocPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->tipdoc = $rs->getString($startcol + 0);

			$this->nomdoc = $rs->getString($startcol + 1);

			$this->vidutil = $rs->getFloat($startcol + 2);

			$this->id = $rs->getInt($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Actipdoc object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ActipdocPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ActipdocPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ActipdocPeer::DATABASE_NAME);
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
					$pk = ActipdocPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += ActipdocPeer::doUpdate($this, $con);
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


			if (($retval = ActipdocPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ActipdocPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getTipdoc();
				break;
			case 1:
				return $this->getNomdoc();
				break;
			case 2:
				return $this->getVidutil();
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
		$keys = ActipdocPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getTipdoc(),
			$keys[1] => $this->getNomdoc(),
			$keys[2] => $this->getVidutil(),
			$keys[3] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ActipdocPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setTipdoc($value);
				break;
			case 1:
				$this->setNomdoc($value);
				break;
			case 2:
				$this->setVidutil($value);
				break;
			case 3:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ActipdocPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setTipdoc($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNomdoc($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setVidutil($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setId($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ActipdocPeer::DATABASE_NAME);

		if ($this->isColumnModified(ActipdocPeer::TIPDOC)) $criteria->add(ActipdocPeer::TIPDOC, $this->tipdoc);
		if ($this->isColumnModified(ActipdocPeer::NOMDOC)) $criteria->add(ActipdocPeer::NOMDOC, $this->nomdoc);
		if ($this->isColumnModified(ActipdocPeer::VIDUTIL)) $criteria->add(ActipdocPeer::VIDUTIL, $this->vidutil);
		if ($this->isColumnModified(ActipdocPeer::ID)) $criteria->add(ActipdocPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ActipdocPeer::DATABASE_NAME);

		$criteria->add(ActipdocPeer::ID, $this->id);

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

		$copyObj->setTipdoc($this->tipdoc);

		$copyObj->setNomdoc($this->nomdoc);

		$copyObj->setVidutil($this->vidutil);


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
			self::$peer = new ActipdocPeer();
		}
		return self::$peer;
	}

} 