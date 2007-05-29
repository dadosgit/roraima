<?php


abstract class BaseCpdocaju extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $tipaju;


	
	protected $nomext;


	
	protected $nomabr;


	
	protected $refier;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getTipaju()
	{

		return $this->tipaju; 		
	}
	
	public function getNomext()
	{

		return $this->nomext; 		
	}
	
	public function getNomabr()
	{

		return $this->nomabr; 		
	}
	
	public function getRefier()
	{

		return $this->refier; 		
	}
	
	public function getId()
	{

		return $this->id; 		
	}
	
	public function setTipaju($v)
	{

		if ($this->tipaju !== $v) {
			$this->tipaju = $v;
			$this->modifiedColumns[] = CpdocajuPeer::TIPAJU;
		}

	} 
	
	public function setNomext($v)
	{

		if ($this->nomext !== $v) {
			$this->nomext = $v;
			$this->modifiedColumns[] = CpdocajuPeer::NOMEXT;
		}

	} 
	
	public function setNomabr($v)
	{

		if ($this->nomabr !== $v) {
			$this->nomabr = $v;
			$this->modifiedColumns[] = CpdocajuPeer::NOMABR;
		}

	} 
	
	public function setRefier($v)
	{

		if ($this->refier !== $v) {
			$this->refier = $v;
			$this->modifiedColumns[] = CpdocajuPeer::REFIER;
		}

	} 
	
	public function setId($v)
	{

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CpdocajuPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->tipaju = $rs->getString($startcol + 0);

			$this->nomext = $rs->getString($startcol + 1);

			$this->nomabr = $rs->getString($startcol + 2);

			$this->refier = $rs->getString($startcol + 3);

			$this->id = $rs->getInt($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Cpdocaju object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CpdocajuPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CpdocajuPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(CpdocajuPeer::DATABASE_NAME);
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
					$pk = CpdocajuPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += CpdocajuPeer::doUpdate($this, $con);
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


			if (($retval = CpdocajuPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CpdocajuPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getTipaju();
				break;
			case 1:
				return $this->getNomext();
				break;
			case 2:
				return $this->getNomabr();
				break;
			case 3:
				return $this->getRefier();
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
		$keys = CpdocajuPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getTipaju(),
			$keys[1] => $this->getNomext(),
			$keys[2] => $this->getNomabr(),
			$keys[3] => $this->getRefier(),
			$keys[4] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CpdocajuPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setTipaju($value);
				break;
			case 1:
				$this->setNomext($value);
				break;
			case 2:
				$this->setNomabr($value);
				break;
			case 3:
				$this->setRefier($value);
				break;
			case 4:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CpdocajuPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setTipaju($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNomext($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNomabr($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setRefier($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setId($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CpdocajuPeer::DATABASE_NAME);

		if ($this->isColumnModified(CpdocajuPeer::TIPAJU)) $criteria->add(CpdocajuPeer::TIPAJU, $this->tipaju);
		if ($this->isColumnModified(CpdocajuPeer::NOMEXT)) $criteria->add(CpdocajuPeer::NOMEXT, $this->nomext);
		if ($this->isColumnModified(CpdocajuPeer::NOMABR)) $criteria->add(CpdocajuPeer::NOMABR, $this->nomabr);
		if ($this->isColumnModified(CpdocajuPeer::REFIER)) $criteria->add(CpdocajuPeer::REFIER, $this->refier);
		if ($this->isColumnModified(CpdocajuPeer::ID)) $criteria->add(CpdocajuPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CpdocajuPeer::DATABASE_NAME);

		$criteria->add(CpdocajuPeer::ID, $this->id);

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

		$copyObj->setTipaju($this->tipaju);

		$copyObj->setNomext($this->nomext);

		$copyObj->setNomabr($this->nomabr);

		$copyObj->setRefier($this->refier);


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
			self::$peer = new CpdocajuPeer();
		}
		return self::$peer;
	}

} 