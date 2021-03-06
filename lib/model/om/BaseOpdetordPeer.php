<?php


abstract class BaseOpdetordPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'opdetord';

	
	const CLASS_DEFAULT = 'lib.model.Opdetord';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const NUMORD = 'opdetord.NUMORD';

	
	const REFCOM = 'opdetord.REFCOM';

	
	const CODPRE = 'opdetord.CODPRE';

	
	const MONCAU = 'opdetord.MONCAU';

	
	const MONDES = 'opdetord.MONDES';

	
	const MONRET = 'opdetord.MONRET';

	
	const REFSAL = 'opdetord.REFSAL';

	
	const REFFON = 'opdetord.REFFON';

	
	const ID = 'opdetord.ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Numord', 'Refcom', 'Codpre', 'Moncau', 'Mondes', 'Monret', 'Refsal', 'Reffon', 'Id', ),
		BasePeer::TYPE_COLNAME => array (OpdetordPeer::NUMORD, OpdetordPeer::REFCOM, OpdetordPeer::CODPRE, OpdetordPeer::MONCAU, OpdetordPeer::MONDES, OpdetordPeer::MONRET, OpdetordPeer::REFSAL, OpdetordPeer::REFFON, OpdetordPeer::ID, ),
		BasePeer::TYPE_FIELDNAME => array ('numord', 'refcom', 'codpre', 'moncau', 'mondes', 'monret', 'refsal', 'reffon', 'id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Numord' => 0, 'Refcom' => 1, 'Codpre' => 2, 'Moncau' => 3, 'Mondes' => 4, 'Monret' => 5, 'Refsal' => 6, 'Reffon' => 7, 'Id' => 8, ),
		BasePeer::TYPE_COLNAME => array (OpdetordPeer::NUMORD => 0, OpdetordPeer::REFCOM => 1, OpdetordPeer::CODPRE => 2, OpdetordPeer::MONCAU => 3, OpdetordPeer::MONDES => 4, OpdetordPeer::MONRET => 5, OpdetordPeer::REFSAL => 6, OpdetordPeer::REFFON => 7, OpdetordPeer::ID => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('numord' => 0, 'refcom' => 1, 'codpre' => 2, 'moncau' => 3, 'mondes' => 4, 'monret' => 5, 'refsal' => 6, 'reffon' => 7, 'id' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/OpdetordMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.OpdetordMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = OpdetordPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(OpdetordPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(OpdetordPeer::NUMORD);

		$criteria->addSelectColumn(OpdetordPeer::REFCOM);

		$criteria->addSelectColumn(OpdetordPeer::CODPRE);

		$criteria->addSelectColumn(OpdetordPeer::MONCAU);

		$criteria->addSelectColumn(OpdetordPeer::MONDES);

		$criteria->addSelectColumn(OpdetordPeer::MONRET);

		$criteria->addSelectColumn(OpdetordPeer::REFSAL);

		$criteria->addSelectColumn(OpdetordPeer::REFFON);

		$criteria->addSelectColumn(OpdetordPeer::ID);

	}

	const COUNT = 'COUNT(opdetord.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT opdetord.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(OpdetordPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(OpdetordPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = OpdetordPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = OpdetordPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return OpdetordPeer::populateObjects(OpdetordPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			OpdetordPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = OpdetordPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}
	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return OpdetordPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(OpdetordPeer::ID); 

				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(OpdetordPeer::ID);
			$selectCriteria->add(OpdetordPeer::ID, $criteria->remove(OpdetordPeer::ID), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(OpdetordPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(OpdetordPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Opdetord) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(OpdetordPeer::ID, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(Opdetord $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(OpdetordPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(OpdetordPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(OpdetordPeer::DATABASE_NAME, OpdetordPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = OpdetordPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(OpdetordPeer::DATABASE_NAME);

		$criteria->add(OpdetordPeer::ID, $pk);


		$v = OpdetordPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(OpdetordPeer::ID, $pks, Criteria::IN);
			$objs = OpdetordPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseOpdetordPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/OpdetordMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.OpdetordMapBuilder');
}
