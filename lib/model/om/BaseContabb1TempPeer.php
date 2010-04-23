<?php


abstract class BaseContabb1TempPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'contabb1_temp';

	
	const CLASS_DEFAULT = 'lib.model.Contabb1Temp';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CODCTA = 'contabb1_temp.CODCTA';

	
	const FECINI = 'contabb1_temp.FECINI';

	
	const FECCIE = 'contabb1_temp.FECCIE';

	
	const PEREJE = 'contabb1_temp.PEREJE';

	
	const TOTDEB = 'contabb1_temp.TOTDEB';

	
	const TOTCRE = 'contabb1_temp.TOTCRE';

	
	const SALACT = 'contabb1_temp.SALACT';

	
	const SALPRGPER = 'contabb1_temp.SALPRGPER';

	
	const SALPRGPERFOR = 'contabb1_temp.SALPRGPERFOR';

	
	const ID = 'contabb1_temp.ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Codcta', 'Fecini', 'Feccie', 'Pereje', 'Totdeb', 'Totcre', 'Salact', 'Salprgper', 'Salprgperfor', 'Id', ),
		BasePeer::TYPE_COLNAME => array (Contabb1TempPeer::CODCTA, Contabb1TempPeer::FECINI, Contabb1TempPeer::FECCIE, Contabb1TempPeer::PEREJE, Contabb1TempPeer::TOTDEB, Contabb1TempPeer::TOTCRE, Contabb1TempPeer::SALACT, Contabb1TempPeer::SALPRGPER, Contabb1TempPeer::SALPRGPERFOR, Contabb1TempPeer::ID, ),
		BasePeer::TYPE_FIELDNAME => array ('codcta', 'fecini', 'feccie', 'pereje', 'totdeb', 'totcre', 'salact', 'salprgper', 'salprgperfor', 'id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Codcta' => 0, 'Fecini' => 1, 'Feccie' => 2, 'Pereje' => 3, 'Totdeb' => 4, 'Totcre' => 5, 'Salact' => 6, 'Salprgper' => 7, 'Salprgperfor' => 8, 'Id' => 9, ),
		BasePeer::TYPE_COLNAME => array (Contabb1TempPeer::CODCTA => 0, Contabb1TempPeer::FECINI => 1, Contabb1TempPeer::FECCIE => 2, Contabb1TempPeer::PEREJE => 3, Contabb1TempPeer::TOTDEB => 4, Contabb1TempPeer::TOTCRE => 5, Contabb1TempPeer::SALACT => 6, Contabb1TempPeer::SALPRGPER => 7, Contabb1TempPeer::SALPRGPERFOR => 8, Contabb1TempPeer::ID => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('codcta' => 0, 'fecini' => 1, 'feccie' => 2, 'pereje' => 3, 'totdeb' => 4, 'totcre' => 5, 'salact' => 6, 'salprgper' => 7, 'salprgperfor' => 8, 'id' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/Contabb1TempMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.Contabb1TempMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = Contabb1TempPeer::getTableMap();
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
		return str_replace(Contabb1TempPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(Contabb1TempPeer::CODCTA);

		$criteria->addSelectColumn(Contabb1TempPeer::FECINI);

		$criteria->addSelectColumn(Contabb1TempPeer::FECCIE);

		$criteria->addSelectColumn(Contabb1TempPeer::PEREJE);

		$criteria->addSelectColumn(Contabb1TempPeer::TOTDEB);

		$criteria->addSelectColumn(Contabb1TempPeer::TOTCRE);

		$criteria->addSelectColumn(Contabb1TempPeer::SALACT);

		$criteria->addSelectColumn(Contabb1TempPeer::SALPRGPER);

		$criteria->addSelectColumn(Contabb1TempPeer::SALPRGPERFOR);

		$criteria->addSelectColumn(Contabb1TempPeer::ID);

	}

	const COUNT = 'COUNT(contabb1_temp.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT contabb1_temp.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(Contabb1TempPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(Contabb1TempPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = Contabb1TempPeer::doSelectRS($criteria, $con);
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
		$objects = Contabb1TempPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return Contabb1TempPeer::populateObjects(Contabb1TempPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			Contabb1TempPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = Contabb1TempPeer::getOMClass();
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
		return Contabb1TempPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}


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
			$comparison = $criteria->getComparison(Contabb1TempPeer::ID);
			$selectCriteria->add(Contabb1TempPeer::ID, $criteria->remove(Contabb1TempPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(Contabb1TempPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(Contabb1TempPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Contabb1Temp) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Contabb1TempPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Contabb1Temp $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Contabb1TempPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Contabb1TempPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(Contabb1TempPeer::DATABASE_NAME, Contabb1TempPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = Contabb1TempPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(Contabb1TempPeer::DATABASE_NAME);

		$criteria->add(Contabb1TempPeer::ID, $pk);


		$v = Contabb1TempPeer::doSelect($criteria, $con);

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
			$criteria->add(Contabb1TempPeer::ID, $pks, Criteria::IN);
			$objs = Contabb1TempPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseContabb1TempPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/Contabb1TempMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.Contabb1TempMapBuilder');
}