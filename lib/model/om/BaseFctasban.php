<?php


abstract class BaseFctasban extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $tasano;


	
	protected $taspor;


	
	protected $tasmes;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getTasano()
	{

		return $this->tasano; 		
	}
	
	public function getTaspor()
	{

		return number_format($this->taspor,2,',','.');
		
	}
	
	public function getTasmes()
	{

		return number_format($this->tasmes,2,',','.');
		
	}
	
	public function getId()
	{

		return $this->id; 		
	}
	
	public function setTasano($v)
	{

		if ($this->tasano !== $v) {
			$this->tasano = $v;
			$this->modifiedColumns[] = FctasbanPeer::TASANO;
		}

	} 
	
	public function setTaspor($v)
	{

		if ($this->taspor !== $v) {
			$this->taspor = $v;
			$this->modifiedColumns[] = FctasbanPeer::TASPOR;
		}

	} 
	
	public function setTasmes($v)
	{

		if ($this->tasmes !== $v) {
			$this->tasmes = $v;
			$this->modifiedColumns[] = FctasbanPeer::TASMES;
		}

	} 
	
	public function setId($v)
	{

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = FctasbanPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->tasano = $rs->getString($startcol + 0);

			$this->taspor = $rs->getFloat($startcol + 1);

			$this->tasmes = $rs->getFloat($startcol + 2);

			$this->id = $rs->getInt($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Fctasban object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(FctasbanPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			FctasbanPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(FctasbanPeer::DATABASE_NAME);
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
					$pk = FctasbanPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += FctasbanPeer::doUpdate($this, $con);
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


			if (($retval = FctasbanPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FctasbanPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getTasano();
				break;
			case 1:
				return $this->getTaspor();
				break;
			case 2:
				return $this->getTasmes();
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
		$keys = FctasbanPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getTasano(),
			$keys[1] => $this->getTaspor(),
			$keys[2] => $this->getTasmes(),
			$keys[3] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FctasbanPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setTasano($value);
				break;
			case 1:
				$this->setTaspor($value);
				break;
			case 2:
				$this->setTasmes($value);
				break;
			case 3:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FctasbanPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setTasano($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTaspor($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTasmes($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setId($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(FctasbanPeer::DATABASE_NAME);

		if ($this->isColumnModified(FctasbanPeer::TASANO)) $criteria->add(FctasbanPeer::TASANO, $this->tasano);
		if ($this->isColumnModified(FctasbanPeer::TASPOR)) $criteria->add(FctasbanPeer::TASPOR, $this->taspor);
		if ($this->isColumnModified(FctasbanPeer::TASMES)) $criteria->add(FctasbanPeer::TASMES, $this->tasmes);
		if ($this->isColumnModified(FctasbanPeer::ID)) $criteria->add(FctasbanPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(FctasbanPeer::DATABASE_NAME);

		$criteria->add(FctasbanPeer::ID, $this->id);

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

		$copyObj->setTasano($this->tasano);

		$copyObj->setTaspor($this->taspor);

		$copyObj->setTasmes($this->tasmes);


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
			self::$peer = new FctasbanPeer();
		}
		return self::$peer;
	}

} 