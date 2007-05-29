<?php


abstract class BaseOpbenefi extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $cedrif;


	
	protected $nomben;


	
	protected $dirben;


	
	protected $telben;


	
	protected $codcta;


	
	protected $nitben;


	
	protected $codtipben;


	
	protected $tipper;


	
	protected $nacionalidad;


	
	protected $residente;


	
	protected $constituida;


	
	protected $codord;


	
	protected $codpercon;


	
	protected $codordadi;


	
	protected $codperconadi;


	
	protected $codordcontra;


	
	protected $codpercontra;


	
	protected $temcedrif;


	
	protected $codctasec;


	
	protected $codctacajchi;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCedrif()
	{

		return $this->cedrif; 		
	}
	
	public function getNomben()
	{

		return $this->nomben; 		
	}
	
	public function getDirben()
	{

		return $this->dirben; 		
	}
	
	public function getTelben()
	{

		return $this->telben; 		
	}
	
	public function getCodcta()
	{

		return $this->codcta; 		
	}
	
	public function getNitben()
	{

		return $this->nitben; 		
	}
	
	public function getCodtipben()
	{

		return $this->codtipben; 		
	}
	
	public function getTipper()
	{

		return $this->tipper; 		
	}
	
	public function getNacionalidad()
	{

		return $this->nacionalidad; 		
	}
	
	public function getResidente()
	{

		return $this->residente; 		
	}
	
	public function getConstituida()
	{

		return $this->constituida; 		
	}
	
	public function getCodord()
	{

		return $this->codord; 		
	}
	
	public function getCodpercon()
	{

		return $this->codpercon; 		
	}
	
	public function getCodordadi()
	{

		return $this->codordadi; 		
	}
	
	public function getCodperconadi()
	{

		return $this->codperconadi; 		
	}
	
	public function getCodordcontra()
	{

		return $this->codordcontra; 		
	}
	
	public function getCodpercontra()
	{

		return $this->codpercontra; 		
	}
	
	public function getTemcedrif()
	{

		return $this->temcedrif; 		
	}
	
	public function getCodctasec()
	{

		return $this->codctasec; 		
	}
	
	public function getCodctacajchi()
	{

		return $this->codctacajchi; 		
	}
	
	public function getId()
	{

		return $this->id; 		
	}
	
	public function setCedrif($v)
	{

		if ($this->cedrif !== $v) {
			$this->cedrif = $v;
			$this->modifiedColumns[] = OpbenefiPeer::CEDRIF;
		}

	} 
	
	public function setNomben($v)
	{

		if ($this->nomben !== $v) {
			$this->nomben = $v;
			$this->modifiedColumns[] = OpbenefiPeer::NOMBEN;
		}

	} 
	
	public function setDirben($v)
	{

		if ($this->dirben !== $v) {
			$this->dirben = $v;
			$this->modifiedColumns[] = OpbenefiPeer::DIRBEN;
		}

	} 
	
	public function setTelben($v)
	{

		if ($this->telben !== $v) {
			$this->telben = $v;
			$this->modifiedColumns[] = OpbenefiPeer::TELBEN;
		}

	} 
	
	public function setCodcta($v)
	{

		if ($this->codcta !== $v) {
			$this->codcta = $v;
			$this->modifiedColumns[] = OpbenefiPeer::CODCTA;
		}

	} 
	
	public function setNitben($v)
	{

		if ($this->nitben !== $v) {
			$this->nitben = $v;
			$this->modifiedColumns[] = OpbenefiPeer::NITBEN;
		}

	} 
	
	public function setCodtipben($v)
	{

		if ($this->codtipben !== $v) {
			$this->codtipben = $v;
			$this->modifiedColumns[] = OpbenefiPeer::CODTIPBEN;
		}

	} 
	
	public function setTipper($v)
	{

		if ($this->tipper !== $v) {
			$this->tipper = $v;
			$this->modifiedColumns[] = OpbenefiPeer::TIPPER;
		}

	} 
	
	public function setNacionalidad($v)
	{

		if ($this->nacionalidad !== $v) {
			$this->nacionalidad = $v;
			$this->modifiedColumns[] = OpbenefiPeer::NACIONALIDAD;
		}

	} 
	
	public function setResidente($v)
	{

		if ($this->residente !== $v) {
			$this->residente = $v;
			$this->modifiedColumns[] = OpbenefiPeer::RESIDENTE;
		}

	} 
	
	public function setConstituida($v)
	{

		if ($this->constituida !== $v) {
			$this->constituida = $v;
			$this->modifiedColumns[] = OpbenefiPeer::CONSTITUIDA;
		}

	} 
	
	public function setCodord($v)
	{

		if ($this->codord !== $v) {
			$this->codord = $v;
			$this->modifiedColumns[] = OpbenefiPeer::CODORD;
		}

	} 
	
	public function setCodpercon($v)
	{

		if ($this->codpercon !== $v) {
			$this->codpercon = $v;
			$this->modifiedColumns[] = OpbenefiPeer::CODPERCON;
		}

	} 
	
	public function setCodordadi($v)
	{

		if ($this->codordadi !== $v) {
			$this->codordadi = $v;
			$this->modifiedColumns[] = OpbenefiPeer::CODORDADI;
		}

	} 
	
	public function setCodperconadi($v)
	{

		if ($this->codperconadi !== $v) {
			$this->codperconadi = $v;
			$this->modifiedColumns[] = OpbenefiPeer::CODPERCONADI;
		}

	} 
	
	public function setCodordcontra($v)
	{

		if ($this->codordcontra !== $v) {
			$this->codordcontra = $v;
			$this->modifiedColumns[] = OpbenefiPeer::CODORDCONTRA;
		}

	} 
	
	public function setCodpercontra($v)
	{

		if ($this->codpercontra !== $v) {
			$this->codpercontra = $v;
			$this->modifiedColumns[] = OpbenefiPeer::CODPERCONTRA;
		}

	} 
	
	public function setTemcedrif($v)
	{

		if ($this->temcedrif !== $v) {
			$this->temcedrif = $v;
			$this->modifiedColumns[] = OpbenefiPeer::TEMCEDRIF;
		}

	} 
	
	public function setCodctasec($v)
	{

		if ($this->codctasec !== $v) {
			$this->codctasec = $v;
			$this->modifiedColumns[] = OpbenefiPeer::CODCTASEC;
		}

	} 
	
	public function setCodctacajchi($v)
	{

		if ($this->codctacajchi !== $v) {
			$this->codctacajchi = $v;
			$this->modifiedColumns[] = OpbenefiPeer::CODCTACAJCHI;
		}

	} 
	
	public function setId($v)
	{

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = OpbenefiPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->cedrif = $rs->getString($startcol + 0);

			$this->nomben = $rs->getString($startcol + 1);

			$this->dirben = $rs->getString($startcol + 2);

			$this->telben = $rs->getString($startcol + 3);

			$this->codcta = $rs->getString($startcol + 4);

			$this->nitben = $rs->getString($startcol + 5);

			$this->codtipben = $rs->getString($startcol + 6);

			$this->tipper = $rs->getString($startcol + 7);

			$this->nacionalidad = $rs->getString($startcol + 8);

			$this->residente = $rs->getString($startcol + 9);

			$this->constituida = $rs->getString($startcol + 10);

			$this->codord = $rs->getString($startcol + 11);

			$this->codpercon = $rs->getString($startcol + 12);

			$this->codordadi = $rs->getString($startcol + 13);

			$this->codperconadi = $rs->getString($startcol + 14);

			$this->codordcontra = $rs->getString($startcol + 15);

			$this->codpercontra = $rs->getString($startcol + 16);

			$this->temcedrif = $rs->getString($startcol + 17);

			$this->codctasec = $rs->getString($startcol + 18);

			$this->codctacajchi = $rs->getString($startcol + 19);

			$this->id = $rs->getInt($startcol + 20);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 21; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Opbenefi object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(OpbenefiPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			OpbenefiPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(OpbenefiPeer::DATABASE_NAME);
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
					$pk = OpbenefiPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += OpbenefiPeer::doUpdate($this, $con);
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


			if (($retval = OpbenefiPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = OpbenefiPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCedrif();
				break;
			case 1:
				return $this->getNomben();
				break;
			case 2:
				return $this->getDirben();
				break;
			case 3:
				return $this->getTelben();
				break;
			case 4:
				return $this->getCodcta();
				break;
			case 5:
				return $this->getNitben();
				break;
			case 6:
				return $this->getCodtipben();
				break;
			case 7:
				return $this->getTipper();
				break;
			case 8:
				return $this->getNacionalidad();
				break;
			case 9:
				return $this->getResidente();
				break;
			case 10:
				return $this->getConstituida();
				break;
			case 11:
				return $this->getCodord();
				break;
			case 12:
				return $this->getCodpercon();
				break;
			case 13:
				return $this->getCodordadi();
				break;
			case 14:
				return $this->getCodperconadi();
				break;
			case 15:
				return $this->getCodordcontra();
				break;
			case 16:
				return $this->getCodpercontra();
				break;
			case 17:
				return $this->getTemcedrif();
				break;
			case 18:
				return $this->getCodctasec();
				break;
			case 19:
				return $this->getCodctacajchi();
				break;
			case 20:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = OpbenefiPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCedrif(),
			$keys[1] => $this->getNomben(),
			$keys[2] => $this->getDirben(),
			$keys[3] => $this->getTelben(),
			$keys[4] => $this->getCodcta(),
			$keys[5] => $this->getNitben(),
			$keys[6] => $this->getCodtipben(),
			$keys[7] => $this->getTipper(),
			$keys[8] => $this->getNacionalidad(),
			$keys[9] => $this->getResidente(),
			$keys[10] => $this->getConstituida(),
			$keys[11] => $this->getCodord(),
			$keys[12] => $this->getCodpercon(),
			$keys[13] => $this->getCodordadi(),
			$keys[14] => $this->getCodperconadi(),
			$keys[15] => $this->getCodordcontra(),
			$keys[16] => $this->getCodpercontra(),
			$keys[17] => $this->getTemcedrif(),
			$keys[18] => $this->getCodctasec(),
			$keys[19] => $this->getCodctacajchi(),
			$keys[20] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = OpbenefiPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCedrif($value);
				break;
			case 1:
				$this->setNomben($value);
				break;
			case 2:
				$this->setDirben($value);
				break;
			case 3:
				$this->setTelben($value);
				break;
			case 4:
				$this->setCodcta($value);
				break;
			case 5:
				$this->setNitben($value);
				break;
			case 6:
				$this->setCodtipben($value);
				break;
			case 7:
				$this->setTipper($value);
				break;
			case 8:
				$this->setNacionalidad($value);
				break;
			case 9:
				$this->setResidente($value);
				break;
			case 10:
				$this->setConstituida($value);
				break;
			case 11:
				$this->setCodord($value);
				break;
			case 12:
				$this->setCodpercon($value);
				break;
			case 13:
				$this->setCodordadi($value);
				break;
			case 14:
				$this->setCodperconadi($value);
				break;
			case 15:
				$this->setCodordcontra($value);
				break;
			case 16:
				$this->setCodpercontra($value);
				break;
			case 17:
				$this->setTemcedrif($value);
				break;
			case 18:
				$this->setCodctasec($value);
				break;
			case 19:
				$this->setCodctacajchi($value);
				break;
			case 20:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = OpbenefiPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCedrif($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNomben($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDirben($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTelben($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCodcta($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNitben($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCodtipben($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTipper($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setNacionalidad($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setResidente($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setConstituida($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCodord($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCodpercon($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCodordadi($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setCodperconadi($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCodordcontra($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCodpercontra($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setTemcedrif($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setCodctasec($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setCodctacajchi($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setId($arr[$keys[20]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(OpbenefiPeer::DATABASE_NAME);

		if ($this->isColumnModified(OpbenefiPeer::CEDRIF)) $criteria->add(OpbenefiPeer::CEDRIF, $this->cedrif);
		if ($this->isColumnModified(OpbenefiPeer::NOMBEN)) $criteria->add(OpbenefiPeer::NOMBEN, $this->nomben);
		if ($this->isColumnModified(OpbenefiPeer::DIRBEN)) $criteria->add(OpbenefiPeer::DIRBEN, $this->dirben);
		if ($this->isColumnModified(OpbenefiPeer::TELBEN)) $criteria->add(OpbenefiPeer::TELBEN, $this->telben);
		if ($this->isColumnModified(OpbenefiPeer::CODCTA)) $criteria->add(OpbenefiPeer::CODCTA, $this->codcta);
		if ($this->isColumnModified(OpbenefiPeer::NITBEN)) $criteria->add(OpbenefiPeer::NITBEN, $this->nitben);
		if ($this->isColumnModified(OpbenefiPeer::CODTIPBEN)) $criteria->add(OpbenefiPeer::CODTIPBEN, $this->codtipben);
		if ($this->isColumnModified(OpbenefiPeer::TIPPER)) $criteria->add(OpbenefiPeer::TIPPER, $this->tipper);
		if ($this->isColumnModified(OpbenefiPeer::NACIONALIDAD)) $criteria->add(OpbenefiPeer::NACIONALIDAD, $this->nacionalidad);
		if ($this->isColumnModified(OpbenefiPeer::RESIDENTE)) $criteria->add(OpbenefiPeer::RESIDENTE, $this->residente);
		if ($this->isColumnModified(OpbenefiPeer::CONSTITUIDA)) $criteria->add(OpbenefiPeer::CONSTITUIDA, $this->constituida);
		if ($this->isColumnModified(OpbenefiPeer::CODORD)) $criteria->add(OpbenefiPeer::CODORD, $this->codord);
		if ($this->isColumnModified(OpbenefiPeer::CODPERCON)) $criteria->add(OpbenefiPeer::CODPERCON, $this->codpercon);
		if ($this->isColumnModified(OpbenefiPeer::CODORDADI)) $criteria->add(OpbenefiPeer::CODORDADI, $this->codordadi);
		if ($this->isColumnModified(OpbenefiPeer::CODPERCONADI)) $criteria->add(OpbenefiPeer::CODPERCONADI, $this->codperconadi);
		if ($this->isColumnModified(OpbenefiPeer::CODORDCONTRA)) $criteria->add(OpbenefiPeer::CODORDCONTRA, $this->codordcontra);
		if ($this->isColumnModified(OpbenefiPeer::CODPERCONTRA)) $criteria->add(OpbenefiPeer::CODPERCONTRA, $this->codpercontra);
		if ($this->isColumnModified(OpbenefiPeer::TEMCEDRIF)) $criteria->add(OpbenefiPeer::TEMCEDRIF, $this->temcedrif);
		if ($this->isColumnModified(OpbenefiPeer::CODCTASEC)) $criteria->add(OpbenefiPeer::CODCTASEC, $this->codctasec);
		if ($this->isColumnModified(OpbenefiPeer::CODCTACAJCHI)) $criteria->add(OpbenefiPeer::CODCTACAJCHI, $this->codctacajchi);
		if ($this->isColumnModified(OpbenefiPeer::ID)) $criteria->add(OpbenefiPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(OpbenefiPeer::DATABASE_NAME);

		$criteria->add(OpbenefiPeer::ID, $this->id);

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

		$copyObj->setCedrif($this->cedrif);

		$copyObj->setNomben($this->nomben);

		$copyObj->setDirben($this->dirben);

		$copyObj->setTelben($this->telben);

		$copyObj->setCodcta($this->codcta);

		$copyObj->setNitben($this->nitben);

		$copyObj->setCodtipben($this->codtipben);

		$copyObj->setTipper($this->tipper);

		$copyObj->setNacionalidad($this->nacionalidad);

		$copyObj->setResidente($this->residente);

		$copyObj->setConstituida($this->constituida);

		$copyObj->setCodord($this->codord);

		$copyObj->setCodpercon($this->codpercon);

		$copyObj->setCodordadi($this->codordadi);

		$copyObj->setCodperconadi($this->codperconadi);

		$copyObj->setCodordcontra($this->codordcontra);

		$copyObj->setCodpercontra($this->codpercontra);

		$copyObj->setTemcedrif($this->temcedrif);

		$copyObj->setCodctasec($this->codctasec);

		$copyObj->setCodctacajchi($this->codctacajchi);


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
			self::$peer = new OpbenefiPeer();
		}
		return self::$peer;
	}

} 