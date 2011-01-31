<?php


abstract class BaseForpereje extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $fecini;


	
	protected $feccie;


	
	protected $pereje;


	
	protected $fecdes;


	
	protected $fechas;


	
	protected $cerrado;


	
	protected $estper;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

  
  public function getFecini($format = 'Y-m-d')
  {

    if ($this->fecini === null || $this->fecini === '') {
      return null;
    } elseif (!is_int($this->fecini)) {
            $ts = adodb_strtotime($this->fecini);
      if ($ts === -1 || $ts === false) {         throw new PropelException("Unable to parse value of [fecini] as date/time value: " . var_export($this->fecini, true));
      }
    } else {
      $ts = $this->fecini;
    }
    if ($format === null) {
      return $ts;
    } elseif (strpos($format, '%') !== false) {
      return adodb_strftime($format, $ts);
    } else {
      return @adodb_date($format, $ts);
    }
  }

  
  public function getFeccie($format = 'Y-m-d')
  {

    if ($this->feccie === null || $this->feccie === '') {
      return null;
    } elseif (!is_int($this->feccie)) {
            $ts = adodb_strtotime($this->feccie);
      if ($ts === -1 || $ts === false) {         throw new PropelException("Unable to parse value of [feccie] as date/time value: " . var_export($this->feccie, true));
      }
    } else {
      $ts = $this->feccie;
    }
    if ($format === null) {
      return $ts;
    } elseif (strpos($format, '%') !== false) {
      return adodb_strftime($format, $ts);
    } else {
      return @adodb_date($format, $ts);
    }
  }

  
  public function getPereje()
  {

    return trim($this->pereje);

  }
  
  public function getFecdes($format = 'Y-m-d')
  {

    if ($this->fecdes === null || $this->fecdes === '') {
      return null;
    } elseif (!is_int($this->fecdes)) {
            $ts = adodb_strtotime($this->fecdes);
      if ($ts === -1 || $ts === false) {         throw new PropelException("Unable to parse value of [fecdes] as date/time value: " . var_export($this->fecdes, true));
      }
    } else {
      $ts = $this->fecdes;
    }
    if ($format === null) {
      return $ts;
    } elseif (strpos($format, '%') !== false) {
      return adodb_strftime($format, $ts);
    } else {
      return @adodb_date($format, $ts);
    }
  }

  
  public function getFechas($format = 'Y-m-d')
  {

    if ($this->fechas === null || $this->fechas === '') {
      return null;
    } elseif (!is_int($this->fechas)) {
            $ts = adodb_strtotime($this->fechas);
      if ($ts === -1 || $ts === false) {         throw new PropelException("Unable to parse value of [fechas] as date/time value: " . var_export($this->fechas, true));
      }
    } else {
      $ts = $this->fechas;
    }
    if ($format === null) {
      return $ts;
    } elseif (strpos($format, '%') !== false) {
      return adodb_strftime($format, $ts);
    } else {
      return @adodb_date($format, $ts);
    }
  }

  
  public function getCerrado()
  {

    return trim($this->cerrado);

  }
  
  public function getEstper()
  {

    return trim($this->estper);

  }
  
  public function getId()
  {

    return $this->id;

  }
	
	public function setFecini($v)
	{

		if (is_array($v)){
        	$value_array = $v;
        	$v = (isset($value_array['hour']) ? ' '.$value_array['hour'].':'.$value_array['minute'].(isset($value_array['second']) ? ':'.$value_array['second'] : '') : '');
		}

    if ($v !== null && !is_int($v)) {
      $ts = adodb_strtotime($v);
      if ($ts === -1 || $ts === false) {         throw new PropelException("Unable to parse date/time value for [fecini] from input: " . var_export($v, true));
      }
    } else {
      $ts = $v;
    }
    if ($this->fecini !== $ts) {
      $this->fecini = $ts;
      $this->modifiedColumns[] = ForperejePeer::FECINI;
    }

	} 
	
	public function setFeccie($v)
	{

		if (is_array($v)){
        	$value_array = $v;
        	$v = (isset($value_array['hour']) ? ' '.$value_array['hour'].':'.$value_array['minute'].(isset($value_array['second']) ? ':'.$value_array['second'] : '') : '');
		}

    if ($v !== null && !is_int($v)) {
      $ts = adodb_strtotime($v);
      if ($ts === -1 || $ts === false) {         throw new PropelException("Unable to parse date/time value for [feccie] from input: " . var_export($v, true));
      }
    } else {
      $ts = $v;
    }
    if ($this->feccie !== $ts) {
      $this->feccie = $ts;
      $this->modifiedColumns[] = ForperejePeer::FECCIE;
    }

	} 
	
	public function setPereje($v)
	{

    if ($this->pereje !== $v) {
        $this->pereje = $v;
        $this->modifiedColumns[] = ForperejePeer::PEREJE;
      }
  
	} 
	
	public function setFecdes($v)
	{

		if (is_array($v)){
        	$value_array = $v;
        	$v = (isset($value_array['hour']) ? ' '.$value_array['hour'].':'.$value_array['minute'].(isset($value_array['second']) ? ':'.$value_array['second'] : '') : '');
		}

    if ($v !== null && !is_int($v)) {
      $ts = adodb_strtotime($v);
      if ($ts === -1 || $ts === false) {         throw new PropelException("Unable to parse date/time value for [fecdes] from input: " . var_export($v, true));
      }
    } else {
      $ts = $v;
    }
    if ($this->fecdes !== $ts) {
      $this->fecdes = $ts;
      $this->modifiedColumns[] = ForperejePeer::FECDES;
    }

	} 
	
	public function setFechas($v)
	{

		if (is_array($v)){
        	$value_array = $v;
        	$v = (isset($value_array['hour']) ? ' '.$value_array['hour'].':'.$value_array['minute'].(isset($value_array['second']) ? ':'.$value_array['second'] : '') : '');
		}

    if ($v !== null && !is_int($v)) {
      $ts = adodb_strtotime($v);
      if ($ts === -1 || $ts === false) {         throw new PropelException("Unable to parse date/time value for [fechas] from input: " . var_export($v, true));
      }
    } else {
      $ts = $v;
    }
    if ($this->fechas !== $ts) {
      $this->fechas = $ts;
      $this->modifiedColumns[] = ForperejePeer::FECHAS;
    }

	} 
	
	public function setCerrado($v)
	{

    if ($this->cerrado !== $v) {
        $this->cerrado = $v;
        $this->modifiedColumns[] = ForperejePeer::CERRADO;
      }
  
	} 
	
	public function setEstper($v)
	{

    if ($this->estper !== $v) {
        $this->estper = $v;
        $this->modifiedColumns[] = ForperejePeer::ESTPER;
      }
  
	} 
	
	public function setId($v)
	{

    if ($this->id !== $v) {
        $this->id = $v;
        $this->modifiedColumns[] = ForperejePeer::ID;
      }
  
	} 
  
  public function hydrate(ResultSet $rs, $startcol = 1)
  {
    try {

      $this->fecini = $rs->getDate($startcol + 0, null);

      $this->feccie = $rs->getDate($startcol + 1, null);

      $this->pereje = $rs->getString($startcol + 2);

      $this->fecdes = $rs->getDate($startcol + 3, null);

      $this->fechas = $rs->getDate($startcol + 4, null);

      $this->cerrado = $rs->getString($startcol + 5);

      $this->estper = $rs->getString($startcol + 6);

      $this->id = $rs->getInt($startcol + 7);

      $this->resetModified();

      $this->setNew(false);

      $this->afterHydrate();

            return $startcol + 8; 
    } catch (Exception $e) {
      throw new PropelException("Error populating Forpereje object", $e);
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
			$con = Propel::getConnection(ForperejePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ForperejePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ForperejePeer::DATABASE_NAME);
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
					$pk = ForperejePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ForperejePeer::doUpdate($this, $con);
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


			if (($retval = ForperejePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ForperejePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getFecini();
				break;
			case 1:
				return $this->getFeccie();
				break;
			case 2:
				return $this->getPereje();
				break;
			case 3:
				return $this->getFecdes();
				break;
			case 4:
				return $this->getFechas();
				break;
			case 5:
				return $this->getCerrado();
				break;
			case 6:
				return $this->getEstper();
				break;
			case 7:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ForperejePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getFecini(),
			$keys[1] => $this->getFeccie(),
			$keys[2] => $this->getPereje(),
			$keys[3] => $this->getFecdes(),
			$keys[4] => $this->getFechas(),
			$keys[5] => $this->getCerrado(),
			$keys[6] => $this->getEstper(),
			$keys[7] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ForperejePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setFecini($value);
				break;
			case 1:
				$this->setFeccie($value);
				break;
			case 2:
				$this->setPereje($value);
				break;
			case 3:
				$this->setFecdes($value);
				break;
			case 4:
				$this->setFechas($value);
				break;
			case 5:
				$this->setCerrado($value);
				break;
			case 6:
				$this->setEstper($value);
				break;
			case 7:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ForperejePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setFecini($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setFeccie($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPereje($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFecdes($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFechas($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCerrado($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setEstper($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setId($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ForperejePeer::DATABASE_NAME);

		if ($this->isColumnModified(ForperejePeer::FECINI)) $criteria->add(ForperejePeer::FECINI, $this->fecini);
		if ($this->isColumnModified(ForperejePeer::FECCIE)) $criteria->add(ForperejePeer::FECCIE, $this->feccie);
		if ($this->isColumnModified(ForperejePeer::PEREJE)) $criteria->add(ForperejePeer::PEREJE, $this->pereje);
		if ($this->isColumnModified(ForperejePeer::FECDES)) $criteria->add(ForperejePeer::FECDES, $this->fecdes);
		if ($this->isColumnModified(ForperejePeer::FECHAS)) $criteria->add(ForperejePeer::FECHAS, $this->fechas);
		if ($this->isColumnModified(ForperejePeer::CERRADO)) $criteria->add(ForperejePeer::CERRADO, $this->cerrado);
		if ($this->isColumnModified(ForperejePeer::ESTPER)) $criteria->add(ForperejePeer::ESTPER, $this->estper);
		if ($this->isColumnModified(ForperejePeer::ID)) $criteria->add(ForperejePeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ForperejePeer::DATABASE_NAME);

		$criteria->add(ForperejePeer::ID, $this->id);

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

		$copyObj->setFecini($this->fecini);

		$copyObj->setFeccie($this->feccie);

		$copyObj->setPereje($this->pereje);

		$copyObj->setFecdes($this->fecdes);

		$copyObj->setFechas($this->fechas);

		$copyObj->setCerrado($this->cerrado);

		$copyObj->setEstper($this->estper);


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
			self::$peer = new ForperejePeer();
		}
		return self::$peer;
	}

} 