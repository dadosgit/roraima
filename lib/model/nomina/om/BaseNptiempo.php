<?php


abstract class BaseNptiempo extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $codtie;


	
	protected $destie;


	
	protected $factor;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

  
  public function getCodtie()
  {

    return trim($this->codtie);

  }
  
  public function getDestie()
  {

    return trim($this->destie);

  }
  
  public function getFactor()
  {

    return trim($this->factor);

  }
  
  public function getId()
  {

    return $this->id;

  }
	
	public function setCodtie($v)
	{

    if ($this->codtie !== $v) {
        $this->codtie = $v;
        $this->modifiedColumns[] = NptiempoPeer::CODTIE;
      }
  
	} 
	
	public function setDestie($v)
	{

    if ($this->destie !== $v) {
        $this->destie = $v;
        $this->modifiedColumns[] = NptiempoPeer::DESTIE;
      }
  
	} 
	
	public function setFactor($v)
	{

    if ($this->factor !== $v) {
        $this->factor = $v;
        $this->modifiedColumns[] = NptiempoPeer::FACTOR;
      }
  
	} 
	
	public function setId($v)
	{

    if ($this->id !== $v) {
        $this->id = $v;
        $this->modifiedColumns[] = NptiempoPeer::ID;
      }
  
	} 
  
  public function hydrate(ResultSet $rs, $startcol = 1)
  {
    try {

      $this->codtie = $rs->getString($startcol + 0);

      $this->destie = $rs->getString($startcol + 1);

      $this->factor = $rs->getString($startcol + 2);

      $this->id = $rs->getInt($startcol + 3);

      $this->resetModified();

      $this->setNew(false);

      $this->afterHydrate();

            return $startcol + 4; 
    } catch (Exception $e) {
      throw new PropelException("Error populating Nptiempo object", $e);
    }
  }


  protected function afterHydrate()
  {

  }
    
  
  public function __call($m, $a)
    {
      $prefijo = substr($m,0,3);
    $metodo = strtolower(substr($m,3));
        if($prefijo=='get'){
      if(isset($this->$metodo)) return $this->$metodo;
      else return '';
    }elseif($prefijo=='set'){
      if(isset($this->$metodo)) $this->$metodo = $a[0];
    }else call_user_func_array($m, $a);

    }

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NptiempoPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			NptiempoPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(NptiempoPeer::DATABASE_NAME);
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
					$pk = NptiempoPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += NptiempoPeer::doUpdate($this, $con);
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


			if (($retval = NptiempoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NptiempoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCodtie();
				break;
			case 1:
				return $this->getDestie();
				break;
			case 2:
				return $this->getFactor();
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
		$keys = NptiempoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCodtie(),
			$keys[1] => $this->getDestie(),
			$keys[2] => $this->getFactor(),
			$keys[3] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NptiempoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCodtie($value);
				break;
			case 1:
				$this->setDestie($value);
				break;
			case 2:
				$this->setFactor($value);
				break;
			case 3:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NptiempoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCodtie($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDestie($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFactor($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setId($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(NptiempoPeer::DATABASE_NAME);

		if ($this->isColumnModified(NptiempoPeer::CODTIE)) $criteria->add(NptiempoPeer::CODTIE, $this->codtie);
		if ($this->isColumnModified(NptiempoPeer::DESTIE)) $criteria->add(NptiempoPeer::DESTIE, $this->destie);
		if ($this->isColumnModified(NptiempoPeer::FACTOR)) $criteria->add(NptiempoPeer::FACTOR, $this->factor);
		if ($this->isColumnModified(NptiempoPeer::ID)) $criteria->add(NptiempoPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(NptiempoPeer::DATABASE_NAME);

		$criteria->add(NptiempoPeer::ID, $this->id);

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

		$copyObj->setCodtie($this->codtie);

		$copyObj->setDestie($this->destie);

		$copyObj->setFactor($this->factor);


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
			self::$peer = new NptiempoPeer();
		}
		return self::$peer;
	}

} 